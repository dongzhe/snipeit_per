<?php

return array(
    'ad'				        => 'Идэвхтэй лавлах',
    'ad_domain'				    => 'Active Directory домэйн',
    'ad_domain_help'			=> 'Энэ нь заримдаа таны имэйл домэйнтой адил боловч үргэлж биш юм.',
    'is_ad'				        => 'Энэ бол Active Directory Server',
	'alert_email'				=> 'Анхааруулга илгээх',
	'alerts_enabled'			=> 'Идэвхжүүлсэн дохиог',
	'alert_interval'			=> 'Exped Alerts (босоо хоногоор)',
	'alert_inv_threshold'		=> 'Бараа материалын Alert босго',
	'asset_ids'					=> 'Хөрөнгийн дугаар',
	'audit_interval'            => 'Аудитын интервал',
    'audit_interval_help'       => 'Хэрэв та хөрөнгөө тогтмол шалгаж байх шаардлагатай бол сар бүрийн интервалыг оруул.',
	'audit_warning_days'        => 'Аудитын анхааруулах босго',
    'audit_warning_days_help'   => 'Хөрөнгө аудит хийхэд бэлэн байх үед танд хэдэн өдөр урьдчилан урьдчилан анхааруулах ёстой вэ?',
	'auto_increment_assets'		=> 'Авто-нэмэгдэл хөрөнгийн ID-г үүсгэх',
	'auto_increment_prefix'		=> 'Угтвар (заавал биш)',
	'auto_incrementing_help'    => 'Үүнийг тохируулахдаа авто-нэмэгдэл хөрөнгийн ID-г идэвхжүүлэх',
	'backups'					=> 'Нөөцлөлтүүд',
	'barcode_settings'			=> 'Бар кодын тохиргоо',
    'confirm_purge'			    => 'Цэвэршүүлэлтийг баталгаажуулна уу',
    'confirm_purge_help'		=> 'Таны устгасан бичлэгийг устгахын тулд доорх хайрцгийн "DELETE" текстийг оруулна уу. Энэ үйлдлийг буцаах боломжгүй.',
	'custom_css'				=> 'CSS тохиргоо',
	'custom_css_help'			=> 'Ямар нэгэн гаалийн CSS дарж өөрчлөхийг хүсч оруулаарай. &lt;style&gt;&lt;/style&gt; хаягуудыг бүү оруулаарай.',
    'custom_forgot_pass_url'	=> 'Custom Password Reset URL',
    'custom_forgot_pass_url_help'	=> 'This replaces the built-in forgotten password URL on the login screen, useful to direct people to internal or hosted LDAP password reset functionality. It will effectively disable local user forgotten password functionality.',
    'dashboard_message'			=> 'Dashboard Message',
    'dashboard_message_help'	=> 'This text will appear on the dashboard for anyone with permission to view the dashboard.',
	'default_currency'  		=> 'Анхдагч валют',
	'default_eula_text'			=> 'Үндсэн EULA',
  'default_language'			=> 'Үндсэн хэл',
	'default_eula_help_text'	=> 'Та мөн EULA-г тусгай активын төрлөөр ангилж болно.',
    'display_asset_name'        => 'Дэлгэцийн нэрийг харуулах',
    'display_checkout_date'     => 'Дэлгэцийн төлбөр хийх хугацаа',
    'display_eol'               => 'EOL харуулах хүснэгтийг харна уу',
    'display_qr'                => 'Талбай кодыг харуулах',
	'display_alt_barcode'		=> '1D бар кодыг харуулах',
	'barcode_type'				=> '2D бар кодны төрөл',
	'alt_barcode_type'			=> '1D бар кодын төрөл',
    'eula_settings'				=> 'EULA тохиргоо',
    'eula_markdown'				=> 'Энэ EULA нь <a href="https://help.github.com/articles/github-flavored-markdown/"> Гитуб амттай markdown</a>.',
    'general_settings'			=> 'Ерөнхий Тохиргоо',
	'generate_backup'			=> 'Нөөц үүсгэх',
    'header_color'              => 'Толгойн өнгө',
    'info'                      => 'Эдгээр тохиргоонууд нь таны суулгах зарим асуудлуудыг өөрчлөх боломжийг олгоно.',
    'laravel'                   => 'Лараэлийн хувилбар',
    'ldap_enabled'              => 'LDAP идэвхжсэн',
    'ldap_integration'          => 'LDAP интеграцчилал',
    'ldap_settings'             => 'LDAP Тохиргоо',
    'ldap_login_test_help'      => 'Enter a valid LDAP username and password from the base DN you specified above to test whether your LDAP login is configured correctly. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_login_sync_help'      => 'This only tests that LDAP can sync correctly. If your LDAP Authentication query is not correct, users may still not be able to login. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_server'               => 'LDAP сервер',
    'ldap_server_help'          => 'Энэ нь ldap: // (unrrypted буюу TLS) эсвэл ldaps-ээр эхлэх ёстой: // (SSL нь)',
	'ldap_server_cert'			=> 'LDAP SSL гэрчилгээ баталгаажуулалт',
	'ldap_server_cert_ignore'	=> 'Хүчингүй SSL гэрчилгээг зөвшөөрөх',
	'ldap_server_cert_help'		=> 'Хэрэв та өөрийгөө гарын үсэг зурсан SSL сертификат ашиглаж байгаа бол энэ сонголтыг сонгож хүчингүй SSL сертификатыг хүлээн авахыг хүсч байна.',
    'ldap_tls'                  => 'TLS ашиглах',
    'ldap_tls_help'             => 'Хэрэв та LDAP сервер дээрээ STARTTLS ажиллуулж байгаа бол үүнийг шалгаж үзэх хэрэгтэй.',
    'ldap_uname'                => 'LDAP холбох хэрэглэгчийн нэр',
    'ldap_pword'                => 'LDAP нууц үгийн холбох',
    'ldap_basedn'               => 'Суурь Bind DN',
    'ldap_filter'               => 'LDAP шүүгч',
    'ldap_pw_sync'              => 'LDAP нууц үгийн синк',
    'ldap_pw_sync_help'         => 'Хэрэв та LDAP нууц үгүүдийг локал нууц үгтэй синхрончлохыг хүсэхгүй байгаа бол энэ хайрцгийг идэвхгүй болгоно уу. Ингэхгүй бол таны LDAP сервер ямар нэг шалтгаанаар хүрэх боломжгүй бол таны хэрэглэгчид нэвтэрч чадахгүй байж болно гэсэн үг юм.',
    'ldap_username_field'       => 'Хэрэглэгчийн талбар',
    'ldap_lname_field'          => 'Сүүлийн нэр',
    'ldap_fname_field'          => 'LDAP анхны нэр',
    'ldap_auth_filter_query'    => 'LDAP Танин шалгах хүсэлт',
    'ldap_version'              => 'LDAP хувилбар',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_emp_num'              => 'LDAP Ажилчдын тоо',
    'ldap_email'                => 'LDAP И-мэйл',
    'load_remote_text'          => 'Алсын Scripts',
    'load_remote_help_text'		=> 'Энэ Snipe-IT суулгах нь гаднах ертөнцөөс скриптүүдийг дуудаж чаддаг.',
    'login_note'                => 'Нэвтрэх Тайлбар',
    'login_note_help'           => 'Нэвтрэх дэлгэц дээр цөөн хэдэн өгүүлбэрийг оруулаад, жишээ нь алдагдсан эсвэл хулгайлсан төхөөрөмжийг олж авсан хүмүүст туслах. Энэ талбар <a href="https://help.github.com/articles/github-flavored-markdown/">Github амт markdown</a>',
    'logo'                    	=> 'Лого',
    'full_multiple_companies_support_help_text' => 'Компаниудын өмч хөрөнгөд компанид хуваарилсан хэрэглэгчдийг (түүний дотор админуудыг) хязгаарлах.',
    'full_multiple_companies_support_text' => 'Олон тооны компаниудын дэмжлэг',
    'optional'					=> 'Нэмэлт',
    'per_page'                  => 'Нэг хуудасны үр дүн',
    'php'                       => 'PHP хувилбар',
    'php_gd_info'               => 'Та php-gd-г QR кодуудыг харуулахын тулд суулгах зааврыг харах хэрэгтэй.',
    'php_gd_warning'            => 'PHP Image Processing болон GD залгаас суулгаагүй байна.',
    'pwd_secure_complexity'     => 'Нууц үгийн нарийн төвөгтэй байдал',
    'pwd_secure_complexity_help' => 'Хүчээр ажиллахад шаардагдах нууц үгийн нарийн түвшний дүрмийг сонгоорой.',
    'pwd_secure_min'            => 'Нууц үгийн хамгийн бага тэмдэгт',
    'pwd_secure_min_help'       => 'Хамгийн бага зөвшөөрөгдөх утга нь 5 байна',
    'pwd_secure_uncommon'       => 'Нийтлэг нууц үгийг урьдчилан сэргийлэх',
    'pwd_secure_uncommon_help'  => 'Энэ нь хэрэглэгчид зөрчсөн гэж мэдээлсэн дээд түвшний 10,000 нууц үгнээс нийтлэг нууц үгийг ашиглах боломжийг хэрэглэгчдэд олгохгүй.',
    'qr_help'                   => 'Эхлээд QR кодыг идэвхжүүлнэ үү',
    'qr_text'                   => 'QR кодын текст',
    'setting'                   => 'Тохируулах',
    'settings'                  => 'Тохиргоо',
    'show_alerts_in_menu'       => 'Show alerts in top menu',
    'show_archived_in_list'     => 'Archived Assets',
    'show_archived_in_list_text'     => 'Show archived assets in the "all assets" listing',
    'site_name'                 => 'Сайтын нэр',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack суваг',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Slack тохиргоо',
    'slack_integration_help'    => 'Slack интеграци нь сонголттой боловч та ашиглахыг хүсэж байгаа бол төгсгөл болон суваг шаардлагатай. Slack интеграцыг тохируулахын тулд та эхлээд нэвтэрч байгаа вэбхook</a> Slack дансанд <a href=":slack_link" target="_new"> эхлүүлэх ёстой.',
    'snipe_version'  			=> 'Snipe-IT хувилбар',
    'system'                    => 'Системийн мэдээлэл',
    'update'                    => 'Тохиргоог шинэчлэнэ',
    'value'                     => 'Утга',
    'brand'                     => 'Брэнд',
    'about_settings_title'      => 'Тохиргооны тухай',
    'about_settings_text'       => 'Эдгээр тохиргоонууд нь таны суулгах зарим асуудлуудыг өөрчлөх боломжийг олгоно.',
    'labels_per_page'           => 'Хуудасны нэг хуудсууд',
    'label_dimensions'          => 'Шошго хэмжээ (инч)',
    'next_auto_tag_base'        => 'Дараагийн автомат авалт',
    'page_padding'             => 'Хуудасны хэмжээ (инч)',
    'purge'                    => 'Устгагдсан бүртгэл',
    'labels_display_bgutter'    => 'Шошгоны доод ус зайлуулах хоолой',
    'labels_display_sgutter'    => 'Шошго талын ус зайлуулах хоолой',
    'labels_fontsize'           => 'Шошго үсгийн хэмжээ',
    'labels_pagewidth'          => 'Шошгоны хуудасны өргөн',
    'labels_pageheight'         => 'Шошго хуудасны өндөр',
    'label_gutters'        => 'Шошгоны зай (инч)',
    'page_dimensions'        => 'Хуудасны хэмжээ (инч)',
    'label_fields'          => 'Харагдах талбаруудыг тэмдэглэнэ үү',
    'inches'        => 'инч',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Сингапурт Snipe-IT руу холбох',
    'show_url_in_emails_help_text'      => 'Хэрэв та өөрийн имэйлийн хөлөгт Snipe-IT суулгалтанд холбохыг хүсэхгүй байгаа бол энэ хайрцгийг арилга. Хэрэглэгчдийн ихэнх нь хэзээ ч нэвтэрч чадахгүй бол ашигтай.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Max зургийн хэмжээ өндөр',
    'thumbnail_max_h_help'   => 'Өгөгдлийн зураг дээр харагдах пиксел дэх хамгийн их өндрийг жагсаалт харуулах боломжтой. Min 25, хамгийн ихдээ 500.',
    'two_factor'        => 'Хоёр хүчин зүйл баталгаажуулалт',
    'two_factor_secret'        => 'Хоёр хүчин зүйлийн код',
    'two_factor_enrollment'        => 'Хоёр хүчин зүйлийн элсэлт',
    'two_factor_enabled_text'        => 'Хоёр хүчин зүйлийг идэвхжүүлэх',
    'two_factor_reset'        => 'Хоёр хүчин зүйлийн нууцыг дахин тохируулна уу',
    'two_factor_reset_help'        => 'Энэ нь хэрэглэгчийг Google Authenticator-т ​​дахин ашиглах боломжтой болно. Энэ нь одоогоор бүртгэгдсэн төхөөрөмжөө алдсан эсвэл хулгайлсан тохиолдолд ашигтай байж болно.',
    'two_factor_reset_success'          => 'Хоёр хүчин зүйл төхөөрөмжийг амжилттай дахин тохируулах',
    'two_factor_reset_error'          => 'Хоёр хүчин зүйлийн төхөөрөмжийн дахин тохируулга амжилтгүй боллоо',
    'two_factor_enabled_warning'        => 'Хэрэв та одоогоор идэвхжээгүй бол хоёр хүчин зүйлийг идэвхжүүлэх нь таныг Google Auth бүртгэлтэй төхөөрөмжтэй таныг баталгаажуулахыг шаардана. Хэрэв та элсээгүй бол та төхөөрөмжөө бүртгүүлэх боломжтой болно.',
    'two_factor_enabled_help'        => 'Энэ нь Google Authenticator ашиглан хоёр хүчин зүйлийг таньж баталгаажуулах болно.',
    'two_factor_optional'        => 'Сонгомол (Зөвшөөрөгдсөн тохиолдолд хэрэглэгчийг идэвхжүүлэх эсвэл идэвхгүй болгох боломжтой)',
    'two_factor_required'        => 'Бүх хэрэглэгчдэд шаардлагатай',
    'two_factor_disabled'        => 'Хөгжлийн бэрхшээлтэй',
    'two_factor_enter_code'	=> 'Хоёр хүчин зүйлийн кодыг оруулна уу',
    'two_factor_config_complete'	=> 'Код илгээх',
    'two_factor_enabled_edit_not_allowed' => 'Таны админ энэ тохиргоог засахыг зөвшөөрөхгүй.',
    'two_factor_enrollment_text'	=> "Хоёр хүчин зүйлийг баталгаажуулах шаардлагатай боловч таны төхөөрөмж одоогоор бүртгэгдээгүй байна. Google Authenticator аппликейшнийг нээж, төхөөрөмжөө бүртгүүлэхийн тулд доорх QR кодыг хайна уу. Та төхөөрөмжөө бүртгүүлснийхээ дараа доорх кодыг оруулна уу",
    'require_accept_signature'      => 'Гарын үсэг зурах шаардлагатай',
    'require_accept_signature_help_text'      => 'Энэ функцийг идэвхжүүлэх нь хэрэглэгчид активыг хүлээн авахдаа биечлэн гарын үсэг зурах шаардлагатай болно.',
    'left'        => 'үлдсэн',
    'right'        => 'баруун',
    'top'        => 'дээд',
    'bottom'        => 'доод',
    'vertical'        => 'босоо',
    'horizontal'        => 'хэвтээ',
    'zerofill_count'        => 'Үүнд үл хөдлөх хөрөнгийн хаягуудын урт',
);
