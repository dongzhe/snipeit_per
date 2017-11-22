<?php

return [
    'ad'                        => 'دایرکتوری فعال',
    'ad_domain'                    => 'دامنه فعال دایرکتوری',
    'ad_domain_help'            => 'این گاهی اوقات دامنه ایمیل شماست اما همیشه اینطور نیست.',
    'is_ad'                        => 'این سرور Active Directory است',
    'alert_email'                => 'ارسال هشدار به',
    'alerts_enabled'            => 'هشدارها فعال شد',
    'alert_interval'            => 'آستانه ی انقضای هشدارها( به روز)',
    'alert_inv_threshold'        => 'فهرست آستانه ی هشدار',
    'asset_ids'                    => 'ID حساب',
    'audit_interval'            => 'فاصله حسابرسی',
    'audit_interval_help'       => 'اگر شما ملزم هستید که به طور منظم از دارایی های خود حسابرسی کنید، فاصله را در ماه وارد کنید.',
    'audit_warning_days'        => 'آستانه هشدار حسابرسی',
    'audit_warning_days_help'   => 'چند روز پیش باید به شما هشدار می دهیم هنگامی که دارایی ها برای حسابرسی مورد نیاز است؟',
    'auto_increment_assets'        => 'تولید شناسه دارایی (افزایش خودکار)',
    'auto_increment_prefix'        => 'پیشوند (اختیاری)',
    'auto_incrementing_help'    => 'فعال کردن شناسه دارایی (افزایش خودکار) اول به این مجموعه',
    'backups'                    => 'پشتیبان گیری',
    'barcode_settings'            => 'تنظیمات بارکد',
    'confirm_purge'                => 'تایید پاکسازی',
    'confirm_purge_help'        => 'متن "حذف" در کادر زیر برای پاکسازی پرونده حذف شده خود را وارد کنید. این دستور قابل بازگشت نیست.',
    'custom_css'                => 'سفارشی CSS',
    'custom_css_help'            => 'هر ابطال CSS سفارشی می خواهید استفاده کنید را وارد کنید.از  برچسب های &lt;style&gt;&lt;/style&gt; استفاده نکنید.',
    'custom_forgot_pass_url'    => 'Custom Password Reset URL',
    'custom_forgot_pass_url_help'    => 'This replaces the built-in forgotten password URL on the login screen, useful to direct people to internal or hosted LDAP password reset functionality. It will effectively disable local user forgotten password functionality.',
    'default_currency'        => 'ارز پیش فرض',
    'default_eula_text'            => 'EULA پیش فرض',
  'default_language'                    => 'زبان پیش فرض',
    'default_eula_help_text'    => 'همچنین می توانید  EULA های سفارشی به دسته های خاص دارایی مرتبط کنید.',
    'display_asset_name'        => 'نمایش نام حساب',
    'display_checkout_date'     => 'نمایش تاریخ پرداخت',
    'display_eol'               => 'نمایش EOL در جدول',
    'display_qr'                => 'نمایش کدهای مربعی',
    'display_alt_barcode'        => 'نمایش بارکد 1D',
    'barcode_type'                => 'نوع بارکد 2D',
    'alt_barcode_type'            => 'نوع بارکد 1D',
    'eula_settings'                => 'EULA تنظیمات',
    'eula_markdown'                => 'این EULA اجازه می دهد تا <a href="https://help.github.com/articles/github-flavored-markdown/">Github با طعم markdown</a>.',
    'general_settings'            => 'تنظیمات عمومی',
    'generate_backup'            => 'تولید پشتیبان گیری',
    'header_color'              => 'رنگ هدر',
    'info'                      => 'این تنظیمات به شما اجازه سفارشی کردن جنبه های خاصی از نصب و راه اندازی خود را می دهد.',
    'laravel'                   => 'نسخه Laravel',
    'ldap_enabled'              => 'LDAP فعال شد.',
    'ldap_integration'          => 'ادغام LDAP',
    'ldap_settings'             => 'تنظیمات LDAP',
    'ldap_login_test_help'      => 'Enter a valid LDAP username and password from the base DN you specified above to test whether your LDAP login is configured correctly. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_login_sync_help'      => 'This only tests that LDAP can sync correctly. If your LDAP Authentication query is not correct, users may still not be able to login. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_server'               => 'سرویس دهنده LDAP',
    'ldap_server_help'          => 'این باید با ldap: // (برای رمزگذاری نشده یا TLS) یا ldaps: ((برای SSL)',
    'ldap_server_cert'            => 'اعتبار گواهی نامه LDAP SSL',
    'ldap_server_cert_ignore'    => 'اجازه می دهد به گواهی های بی اعتبار SSL',
    'ldap_server_cert_help'        => 'اگر از یک امضای SSL شخصی معتبر استفاده می کنید این گزینه را فعال کنید.',
    'ldap_tls'                  => 'از TLS استفاده کنید',
    'ldap_tls_help'             => 'این باید فقط در صورتی که STARTTLS را در سرور LDAP خود اجرا می کنید، بررسی شود.',
    'ldap_uname'                => 'حالت نام کاربری نامرئی LDAP',
    'ldap_pword'                => 'LDAP اتصال رمز عبور',
    'ldap_basedn'               => 'اتصال پایگاه DN',
    'ldap_filter'               => 'LDAP فیلتر',
    'ldap_pw_sync'              => 'همگام سازی رمز عبور LDAP',
    'ldap_pw_sync_help'         => 'اگر نمیخواهید گذرواژههای LDAP را با گذرواژههای محلی همگامسازی کنید، این کادر را بردارید. غیرفعال کردن این به این معنی است که کاربران شما ممکن است قادر به ورود به سیستم اگر سرور LDAP شما به دلایلی غیر قابل دسترس است.',
    'ldap_username_field'       => 'فیلد نام کاربری',
    'ldap_lname_field'          => 'نام خانوادگی',
    'ldap_fname_field'          => 'LDAP نام',
    'ldap_auth_filter_query'    => 'تأیید اعتبار  پرس و جوLDAP',
    'ldap_version'              => 'نسخهٔ LDAP',
    'ldap_active_flag'          => ' پرچم فعالLDAP',
    'ldap_emp_num'              => 'LDAP تعداد کارکنان',
    'ldap_email'                => 'ایمیل LDAP',
    'load_remote_text'          => 'اسکریپت از راه دور',
    'load_remote_help_text'        => 'این برنامه نصب می تواند اسکریپت ها را از دنیای خارج بارگذاری کند.
',
    'login_note'                => 'توجه داشته باشید ورود',
    'login_note_help'           => 'به صورت دلخواه شامل چند جمله در صفحه ورود به سیستم خود، به عنوان مثال برای کمک به افرادی که یک دستگاه گم شده یا دزدیده شده را پیدا کرده اند. این فیلد <a href="https://help.github.com/articles/github-flavored-markdown/"> مارجین طعم Github</a> را می پذیرد',
    'logo'                        => 'لوگو',
    'full_multiple_companies_support_help_text' => 'محدود کردن کاربران (از جمله مدیران) اختصاص داده شده به شرکت ها برای دارایی های شرکت خود را.',
    'full_multiple_companies_support_text' => 'شرکت های متعدد پشتیبانی کامل',
    'optional'                    => 'اختیاری',
    'per_page'                  => 'نتایج در هر صفحه',
    'php'                       => 'نسخه php',
    'php_gd_info'               => 'شما باید  php-gd را نصب کنید تا QR کد ها را ببنید، به دستورالعمل های نصب نگاه کنید.',
    'php_gd_warning'            => 'php پردازش تصویر و تفاضل پلاگین نصب نشده است.',
    'pwd_secure_complexity'     => 'پیچیدگی گذرواژه',
    'pwd_secure_complexity_help' => 'هرکدام از پیچیدگیهای رمز عبور را که میخواهید اجرا کنید، انتخاب کنید.',
    'pwd_secure_min'            => 'رمز عبور حداقل کاراکتر',
    'pwd_secure_min_help'       => 'حداقل مقدار مجاز 5 است',
    'pwd_secure_uncommon'       => 'جلوگیری از کلمه عبور رایج',
    'pwd_secure_uncommon_help'  => 'این امر کاربران را از استفاده از گذرواژههای رایج از 10 هزار کلمه عبور که در نقض گزارش شده است، ممنوع می کند.',
    'qr_help'                   => 'کدهای QR اول به این مجموعه را فعال کنید',
    'qr_text'                   => 'متن QR کد',
    'setting'                   => 'تنظیمات',
    'settings'                  => 'تنظيمات',
    'site_name'                 => 'نام سایت',
    'slack_botname'             => 'پشت گوش فراخ Botname',
    'slack_channel'             => 'اسلک کانال',
    'slack_endpoint'            => 'نقطه پایان اسلک',
    'slack_integration'         => 'تنظیمات اسلک',
    'slack_integration_help'    => 'ادغام اسلاک اختیاری است، با این حال نقطه پایانی و کانال مورد نیاز است اگر شما مایل به استفاده از آن هستید. برای پیکربندی ادغام اسلاک، شما باید اول <a href=":slack_link" target="_new"> ایجاد یک </a> را webhook های دریافتی بر روی حساب اسلاک خود کنید.',
    'snipe_version'            => 'نسخه Snipe_IT',
    'system'                    => 'اطلاعات سیستم',
    'update'                    => 'به‌ روزرسانی تنظیمات',
    'value'                     => 'عنوان آیتم',
    'brand'                     => 'نام تجاری',
    'about_settings_title'      => 'درباره تنظیمات',
    'about_settings_text'       => 'این تنظیمات به شما اجازه سفارشی کردن جنبه های خاصی از نصب و راه اندازی خود را می دهد.',
    'labels_per_page'           => 'برچسب ها در صفحه',
    'label_dimensions'          => 'ابعاد برچسب (اینچ)',
    'next_auto_tag_base'        => 'افزایش خودکار بعدی',
    'page_padding'             => 'صفحه حاشیه (اینچ)',
    'purge'                    => 'پاکسازی حذف رکوردها',
    'labels_display_bgutter'    => 'برچسب قطره قطره پایین',
    'labels_display_sgutter'    => 'برچسب سمت قطره قطره ',
    'labels_fontsize'           => 'اندازه نوع خط برچسب',
    'labels_pagewidth'          => 'عرض صفحه ی برچسب',
    'labels_pageheight'         => 'طول صفحه ی برچسب',
    'label_gutters'        => 'فاصله ی برچسب (اینچ)',
    'page_dimensions'        => 'ابعاد صفحه (اینچ)',
    'label_fields'          => 'فیلدهای قابل مشاهده ی برچسب',
    'inches'        => 'اینچ',
    'width_w'        => 'عرض',
    'height_h'        => 'ارتفاع',
    'show_url_in_emails'                => 'پیوند به Snipe-IT در ایمیل',
    'show_url_in_emails_help_text'      => 'اگر نمیخواهید پیوند به نصب Snipe-IT خود را در زیرپوشهای ایمیل خود پیگیری کنید، این کادر را بردارید. مفید است اگر اکثر کاربران شما هرگز وارد نشده باشند.',
    'text_pt'        => 'بالای صفحه',
    'thumbnail_max_h'   => 'حداکثر ریز عکسها',
    'thumbnail_max_h_help'   => 'حداکثر ارتفاع در پیکسل هایی که کوچک می شوند ممکن است در نمای لیست نمایش داده شود. حداقل 25، حداکثر 500.',
    'two_factor'        => 'دو عامل تایید هویت',
    'two_factor_secret'        => 'کد دو فاکتور',
    'two_factor_enrollment'        => 'ثبت نام دو عامل',
    'two_factor_enabled_text'        => 'فعال کردن دو عامل',
    'two_factor_reset'        => 'تنظیم مجدد دو راز فاکتور',
    'two_factor_reset_help'        => 'این باعث می شود کاربر دوباره دستگاه خود را با Google Authenticator ثبت کند. این می تواند مفید باشد اگر دستگاه ثبت شده فعلی شما گم شده یا دزدیده شود.',
    'two_factor_reset_success'          => 'دستگاه دو عامل با موفقیت تنظیم مجدد',
    'two_factor_reset_error'          => 'تنظیم مجدد دستگاه دو عامل انجام نشد',
    'two_factor_enabled_warning'        => 'فعال کردن دو عامل اگر آن را در حال حاضر فعال نیست، بلافاصله شما را مجبور به تایید با یک دستگاه ثبت نام Google Auth. اگر کسی در حال حاضر ثبت نام نکند، می توانید دستگاه خود را ثبت نام کنید.',
    'two_factor_enabled_help'        => 'با استفاده از Google Authenticator، احراز هویت دو طرفه روشن خواهد شد.',
    'two_factor_optional'        => 'انتخابی (کاربران مجاز می توانند فعال یا غیرفعال شوند)',
    'two_factor_required'        => 'مورد نیاز برای همه کاربران',
    'two_factor_disabled'        => 'معلول',
    'two_factor_enter_code'    => 'کد دو فاکتور را وارد کنید',
    'two_factor_config_complete'    => 'ارسال کد',
    'two_factor_enabled_edit_not_allowed' => 'سرپرست شما اجازه نمی دهد که این تنظیم را ویرایش کنید.',
    'two_factor_enrollment_text'    => 'احراز هویت دو عامل لازم است، اما دستگاه شما هنوز ثبت نشده است. برنامه Google Authenticator خود را باز کنید و کد QR زیر را برای ثبت نام دستگاه خود اسکن کنید. هنگامی که دستگاه خود را ثبت نام کردید، کد زیر را وارد کنید',
    'require_accept_signature'      => 'امضا لازم است',
    'require_accept_signature_help_text'      => 'فعال کردن این ویژگی، کاربران را مجبور به فیزیکی در پذیرش یک دارایی می کند.',
    'left'        => 'چپ',
    'right'        => 'راست',
    'top'        => 'بالا',
    'bottom'        => 'پایین',
    'vertical'        => 'عمودی',
    'horizontal'        => 'افقی',
    'zerofill_count'        => 'طول برچسب دارایی، از جمله zerofill',
];
