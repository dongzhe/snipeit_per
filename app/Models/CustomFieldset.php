<?php

namespace App\Models;

use Gate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class CustomFieldset extends Model
{
    use HasFactory;
    use ValidatingTrait;

    protected $guarded = ['id'];

    /**
     * Validation rules
     * @var array
     */
    public $rules = [
        'name' => 'required|unique:custom_fieldsets',
        ''
    ];

    /**
     * Whether the model should inject it's identifier to the unique
     * validation rules before attempting validation. If this property
     * is not set in the model it will default to true.
     *
     * @var bool
     */
    protected $injectUniqueIdentifier = true;

    /**
     * Establishes the fieldset -> field relationship
     *
     * @author [Brady Wetherington] [<uberbrady@gmail.com>]
     * @since [v3.0]
     * @return \Illuminate\Database\Eloquent\Relations\Relation
     */
    public function fields()
    {
        return $this->belongsToMany(\App\Models\CustomField::class)->withPivot(['required', 'order'])->orderBy('pivot_order');
    }

    /**
     * Establishes the fieldset -> models relationship
     *
     * @author [Brady Wetherington] [<uberbrady@gmail.com>]
     * @since [v3.0]
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function customizables() // TODO - I don't like this name, but I can't think of anything better
    {
        $customizable_class_name = $this->type; //TODO - copypasta from Customizable trait?
        \Log::debug("Customizable Class name is: ".$customizable_class_name);
        return $customizable_class_name::getFieldsetUsers($this->id);
    }

    /**
     * Establishes the fieldset -> admin user relationship
     *
     * @author [Brady Wetherington] [<uberbrady@gmail.com>]
     * @since [v3.0]
     * @return \Illuminate\Database\Eloquent\Relations\Relation
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class); //WARNING - not all CustomFieldsets have a User!!
    }

    /**
     * Determine the validation rules we should apply based on the
     * custom field format
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @since [v3.0]
     * @return array
     */
    public function validation_rules()
    {
        \Log::debug("CALLING validation_rules FOR customfiledsets!");
        $rules = [];
        foreach ($this->fields as $field) {
            $rule = [];

            if (($field->field_encrypted != '1') ||
                  (($field->field_encrypted == '1') && (Gate::allows('admin')))) {
                    $rule[] = ($field->pivot->required == '1') ? 'required' : 'nullable';
            }

            if ($field->is_unique == '1') {
                    $rule[] = 'unique_undeleted';
            }

            \Log::debug("Field Format for".$field->name." is: ".$field->format);
            if($field->format == 'DATE') { //we do a weird mutator thing, it's confusing - but, yes, it's all-caps
                $rule[] = 'date_format:Y-m-d';
            } else {
                array_push($rule, $field->attributes['format']);
            }
            $rules[$field->db_column_name()] = $rule;
        }

        return $rules;
    }
}
