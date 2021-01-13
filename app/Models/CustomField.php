<?php
namespace App\Models;

use App\Http\Traits\UniqueUndeletedTrait;
use EasySlugger\Utf8Slugger;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use Schema;
use Watson\Validating\ValidatingTrait;

class CustomField extends Model
{
    use ValidatingTrait,
        UniqueUndeletedTrait;

    /**
     * Custom field predfined formats
     * 
     * @var array
     */
    const PREDEFINED_FORMATS = [
            'ANY'           => '',
            'CUSTOM REGEX'  => '',
            'ALPHA'         => 'alpha',
            'ALPHA-DASH'    => 'alpha_dash',
            'NUMERIC'       => 'numeric',
            'ALPHA-NUMERIC' => 'alpha_num',
            'EMAIL'         => 'email',
            'DATE'          => 'date',
            'URL'           => 'url',
            'IP'            => 'ip',
            'IPV4'          => 'ipv4',
            'IPV6'          => 'ipv6',
            'MAC'           => 'regex:/^[a-fA-F0-9]{2}:[a-fA-F0-9]{2}:[a-fA-F0-9]{2}:[a-fA-F0-9]{2}:[a-fA-F0-9]{2}:[a-fA-F0-9]{2}$/',
        ];

    public $guarded = [
        "id"
    ];

    /**
     * Validation rules.
     * At least empty array must be provided if using ValidatingTrait.
     *
     * @var array
     */
    protected $rules = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'element',
        'format',
        'field_values',
        'field_encrypted',
        'help_text',
        'show_in_email',
    ];

    /**
     * This is confusing, since it's actually the custom fields table that
     * we're usually modifying, but since we alter the assets table, we have to
     * say that here, otherwise the new fields get added onto the custom fields
     * table instead of the assets table.
     *
     * @author [Brady Wetherington] [<uberbrady@gmail.com>]
     * @since [v3.0]
     */
    public static $table_name = "assets";

    /**
     * Convert the custom field's name property to a db-safe string.
     *
     * We could probably have used str_slug() here but not sure what it would
     * do with previously existing values. - @snipe
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @since [v3.4]
     * @return String
     */
    public static function name_to_db_name($name)
    {
        return "_snipeit_" . preg_replace("/[^a-zA-Z0-9]/", "_", strtolower($name));
    }

    /**
     * Set some boot methods for creating and updating.
     *
     * There is never ever a time when we wouldn't want to be updating those asset
     * column names and the values of the db column name in the custom fields table
     * if they have changed, so we handle that here so that we don't have to remember
     * to do it in the controllers.
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @since [v3.4]
     * @return Boolean
     */
    public static function boot()
    {
        parent::boot();
        self::created(function ($custom_field) {

            // Column already exists on the assets table - nothing to do here.
            // This *shouldn't* happen in the wild.
            if (Schema::hasColumn(CustomField::$table_name, $custom_field->convertUnicodeDbSlug())) {
                return false;
            }

            // Update the column name in the assets table
            Schema::table(CustomField::$table_name, function ($table) use ($custom_field) {
                $table->text($custom_field->convertUnicodeDbSlug())->nullable();
            });

            // Update the db_column property in the custom fields table
            $custom_field->db_column = $custom_field->convertUnicodeDbSlug();
            $custom_field->save();
        });


        self::updating(function ($custom_field) {

            // Column already exists on the assets table - nothing to do here.
            if ($custom_field->isDirty("name")) {

                if (Schema::hasColumn(CustomField::$table_name, $custom_field->convertUnicodeDbSlug())) {
                    return true;
                }

                // This is just a dumb thing we have to include because Laraval/Doctrine doesn't
                // play well with enums or a table that EVER had enums. :(
                $platform = Schema::getConnection()->getDoctrineSchemaManager()->getDatabasePlatform();
                $platform->registerDoctrineTypeMapping('enum', 'string');

                // Rename the field if the name has changed
                Schema::table(CustomField::$table_name, function ($table) use ($custom_field) {
                    $table->renameColumn($custom_field->convertUnicodeDbSlug($custom_field->getOriginal("name")), $custom_field->convertUnicodeDbSlug());
                });

                // Save the updated column name to the custom fields table
                $custom_field->db_column = $custom_field->convertUnicodeDbSlug();
                $custom_field->save();

                return true;
            }
            return true;
        });


        // Drop the assets column if we've deleted it from custom fields
        self::deleting(function ($custom_field) {
            return Schema::table(CustomField::$table_name, function ($table) use ($custom_field) {
                $table->dropColumn($custom_field->convertUnicodeDbSlug());
            });
        });
    }

    /**
     * Establishes the customfield -> fieldset relationship
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @since [v3.0]
     * @return \Illuminate\Database\Eloquent\Relations\Relation
     */
    public function fieldset()
    {
        return $this->belongsToMany('\App\Models\CustomFieldset');
    }

    /**
     * Establishes the customfield -> admin user relationship
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @since [v3.0]
     * @return \Illuminate\Database\Eloquent\Relations\Relation
     */
    public function user()
    {
        return $this->belongsTo('\App\Models\User');
    }

    /**
     * Establishes the customfield -> default values relationship
     *
     * @author Hannah Tinkler
     * @since [v3.0]
     * @return \Illuminate\Database\Eloquent\Relations\Relation
     */
    public function defaultValues()
    {
        return $this->belongsToMany('\App\Models\AssetModel', 'models_custom_fields')->withPivot('default_value');
    }

    /**
     * Returns the default value for a given model using the defaultValues
     * relationship
     *
     * @param  int $modelId
     * @return string
     */
    public function defaultValue($modelId)
    {
        return $this->defaultValues->filter(function ($item) use ($modelId) {
            return $item->pivot->asset_model_id == $modelId;
        })->map(function ($item) {
            return $item->pivot->default_value;
        })->first();
    }

    /**
     * Checks the format of the attribute
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @param $value string
     * @since [v3.0]
     * @return boolean
     */
    public function check_format($value)
    {
        return preg_match('/^'.$this->attributes['format'].'$/', $value)===1;
    }

    /**
     * Gets the DB column name.
     *
     * @todo figure out if this is still needed? I don't know WTF it's for.
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @since [v3.0]
     * @return \Illuminate\Database\Eloquent\Relations\Relation
     */
    public function db_column_name()
    {
        return $this->db_column;
    }

    /**
     * Mutator for the 'format' attribute.
     *
     * This is used by the dropdown to store the laravel-specific
     * validator strings in the database but still return the
     * user-friendly text in the dropdowns, and in the custom fields display.
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @since [v3.4]
     * @return string
     */
    public function getFormatAttribute($value)
    {
        foreach (self::PREDEFINED_FORMATS as $name => $pattern) {
            if ($pattern === $value || $name === $value) {
                return $name;
            }
        }

        return $value;
    }

    /**
     * Format a value string as an array for select boxes and checkboxes.
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @since [v3.4]
     * @return array
     */
    public function setFormatAttribute($value)
    {
        if (isset(self::PREDEFINED_FORMATS[$value])) {
            $this->attributes['format']=self::PREDEFINED_FORMATS[$value];
        } else {
            $this->attributes['format']=$value;
        }
    }

    /**
     * Format a value string as an array for select boxes and checkboxes.
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @since [v3.4]
     * @return array
     */
    public function formatFieldValuesAsArray()
    {
        $arr = preg_split("/\\r\\n|\\r|\\n/", $this->field_values);
        
        if ($this->element != 'radio') {
            $result[''] = 'Select ' . strtolower($this->format);
        }

        for ($x = 0; $x < count($arr); $x++) {
            $arr_parts = explode('|', $arr[$x]);
            if ($arr_parts[0]!='') {
                if (key_exists('1', $arr_parts)) {
                    $result[$arr_parts[0]] = $arr_parts[1];
                } else {
                    $result[$arr_parts[0]] = $arr_parts[0];
                }
            }
        }


        return $result;
    }

    /**
     * Check whether the field is encrypted
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @since [v3.4]
     * @return boolean
     */
    public function isFieldDecryptable($string)
    {
        if (($this->field_encrypted=='1') && ($string!='')) {
            return true;
        }
        return false;
    }


    /**
     * Convert non-UTF-8 or weirdly encoded text into something that
     * won't break the database.
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @since [v3.4]
     * @return string
     */
    public function convertUnicodeDbSlug($original = null)
    {
        $name = $original ? $original : $this->name;
        $id = $this->id ? $this->id : 'xx';

        if (!function_exists('transliterator_transliterate')) {
            $long_slug = '_snipeit_' . str_slug(\Patchwork\Utf8::utf8_encode(trim($name)), '_');
        } else {
            $long_slug =  '_snipeit_' . Utf8Slugger::slugify($name, '_');
        }

        return substr($long_slug, 0, 50) . '_' . $id;
    }

    /**
    * Get validation rules for custom fields to use with Validator
    * @author [V. Cordes] [<volker@fdatek.de>]
    * @param int $id
    * @since [v4.1.10]
    * @return array
    */
    public function validationRules()
    {
        return [
            "name" => "required|unique:custom_fields",
            "element" => [
                "required",
                Rule::in(['text', 'listbox'])
            ],
            'format' => [
                Rule::in(array_merge(array_keys(CustomField::PREDEFINED_FORMATS), CustomField::PREDEFINED_FORMATS))
            ],
            'field_encrypted' => "nullable|boolean"
        ];
    }

    /**
     * Check to see if there is a custom regex format type
     * @see https://github.com/snipe/snipe-it/issues/5896
     * 
     * @author Wes Hulette <jwhulette@gmail.com>    
     * 
     * @since 5.0.0
     * 
     * @return string
     */
    public function getFormatType()
    {
        if(stripos($this->format,'regex') === 0 && ($this->format !== self::PREDEFINED_FORMATS['MAC'])) {
           return 'CUSTOM REGEX';
        } 

        return $this->format;
    }
}
