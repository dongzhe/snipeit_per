<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Watson\Validating\ValidatingTrait;
use Schema;

class Setting extends Model
{
    use Notifiable;
    protected $injectUniqueIdentifier = true;
    use ValidatingTrait;

    protected $rules = [
          'brand'     => 'required|min:1|numeric',
          'qr_text'         => 'max:31|nullable',
          'logo_img'        => 'mimes:jpeg,bmp,png,gif',
          'alert_email'   => 'email_array|nullable',
          'default_currency'   => 'required',
          'locale'   => 'required',
          'slack_endpoint'   => 'url|required_with:slack_channel|nullable',
          'slack_channel'   => 'regex:/(?<!\w)#\w+/|required_with:slack_endpoint|nullable',
          'slack_botname'   => 'string|nullable',
          'labels_per_page' => 'numeric',
          'labels_width' => 'numeric',
          'labels_height' => 'numeric',
          'labels_pmargin_left' => 'numeric|nullable',
          'labels_pmargin_right' => 'numeric|nullable',
          'labels_pmargin_top' => 'numeric|nullable',
          'labels_pmargin_bottom' => 'numeric|nullable',
          'labels_display_bgutter' => 'numeric|nullable',
          'labels_display_sgutter' => 'numeric|nullable',
          'labels_fontsize' => 'numeric|min:5',
          'labels_pagewidth' => 'numeric|nullable',
          'labels_pageheight' => 'numeric|nullable',
          'thumbnail_max_h'     => 'numeric|max:500|min:25',
          'pwd_secure_min' => 'numeric|required|min:5',
          'audit_warning_days' => 'numeric|nullable',
          'audit_interval' => 'numeric|nullable',
          'custom_forgot_pass_url' => 'url|nullable',
    ];

    protected $fillable = ['site_name','email_domain','email_format','username_format'];

    public static function getSettings()
    {
        static $static_cache = null;

        if (! $static_cache) {
            if (Schema::hasTable('settings')) {
                $static_cache = self::first();
            }
        }

        return $static_cache;
    }

    public static function setupCompleted()
    {
        $users_table_exists = Schema::hasTable('users');
        $settings_table_exists = Schema::hasTable('settings');

        if ($users_table_exists && $settings_table_exists) {
            $usercount = User::withTrashed()->count();
            $settingsCount = self::count();

            return ($usercount > 0 && $settingsCount > 0);
        }
    }

    public function lar_ver()
    {
        $app = \App::getFacadeApplication();

        return $app::VERSION;
    }

    public static function getDefaultEula()
    {
        $Parsedown = new \Parsedown();
        if (self::getSettings()->default_eula_text) {
            return $Parsedown->text(e(self::getSettings()->default_eula_text));
        } else {
            return;
        }
    }

    /**
     * Escapes the custom CSS, and then un-escapes the greater-than symbol
     * so it can work with direct descendant characters for bootstrap
     * menu overrides like:.
     * 
     * .skin-blue .sidebar-menu>li.active>a, .skin-blue .sidebar-menu>li:hover>a
     * 
     * Important: Do not remove the e() escaping here, as we output raw in the blade.
     *
     * @return string escaped CSS
     * @author A. Gianotto <snipe@snipe.net>
     */
    public function show_custom_css()
    {
        $custom_css = self::getSettings()->custom_css;
        $custom_css = e($custom_css);
        // Needed for modifying the bootstrap nav :(
        $custom_css = str_ireplace('script', 'SCRIPTS-NOT-ALLOWED-HERE', $custom_css);
        $custom_css = str_replace('&gt;', '>', $custom_css);

        return $custom_css;
    }

    /**
     * Converts bytes into human readable file size.
     *
     * @param string $bytes
     * @return string human readable file size (2,87 Мб)
     * @author Mogilev Arseny
     */
    public static function fileSizeConvert($bytes)
    {
        $bytes = floatval($bytes);
        $arBytes = [
                0 => [
                    'UNIT' => 'TB',
                    'VALUE' => pow(1024, 4),
                ],
                1 => [
                    'UNIT' => 'GB',
                    'VALUE' => pow(1024, 3),
                ],
                2 => [
                    'UNIT' => 'MB',
                    'VALUE' => pow(1024, 2),
                ],
                3 => [
                    'UNIT' => 'KB',
                    'VALUE' => 1024,
                ],
                4 => [
                    'UNIT' => 'B',
                    'VALUE' => 1,
                ],
            ];

        foreach ($arBytes as $arItem) {
            if ($bytes >= $arItem['VALUE']) {
                $result = $bytes / $arItem['VALUE'];
                $result = round($result, 2).$arItem['UNIT'];
                break;
            }
        }

        return $result;
    }

    /**
     * The url for slack notifications.
     * Used by Notifiable trait.
     * @return mixed
     */
    public function routeNotificationForSlack()
    {
        // At this point the endpoint is the same for everything.
        //  In the future this may want to be adapted for individual notifications.
        return $this->slack_endpoint;
    }

    public static function passwordComplexityRulesSaving($action = 'update')
    {
        $security_rules = '';
        $settings = self::getSettings();

        // Check if they have uncommon password enforcement selected in settings
        if ($settings->pwd_secure_uncommon == 1) {
            $security_rules .= '|dumbpwd';
        }

        // Check for any secure password complexity rules that may have been selected
        if ($settings->pwd_secure_complexity != '') {
            $security_rules .= '|'.$settings->pwd_secure_complexity;
        }

        if ($action == 'update') {
            return 'nullable|min:'.$settings->pwd_secure_min.$security_rules;
        }

        return 'required|min:'.$settings->pwd_secure_min.$security_rules;
    }
}
