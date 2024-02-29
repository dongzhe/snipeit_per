<?php

return [
    'ad'				        => 'Directorio Activo',
    'ad_domain'				    => 'Dominio del Directorio Activo',
    'ad_domain_help'			=> 'Esto es a veces el mismo que su correo electrónico de dominio, pero no siempre.',
    'ad_append_domain_label'    => 'Añadir nombre de dominio',
    'ad_append_domain'          => 'Asignar nombre de dominio al campo del nombre de usuario',
    'ad_append_domain_help'     => 'No se requiere que el usuario escriba "username@dominio.empresa", ellos podrán, simplemente digitar su nombre de usuario "username".',
    'admin_cc_email'            => 'CC Email',
    'admin_cc_email_help'       => 'If you would like to send a copy of checkin/checkout emails that are sent to users to an additional email account, enter it here. Otherwise leave this field blank.',
    'admin_settings'            => 'Configuración de Admin',
    'is_ad'				        => 'Este es un servidor de Directorio Activo',
    'alerts'                	=> 'Alertas',
    'alert_title'               => 'Actualizar ajustes de notificación',
    'alert_email'				=> 'Enviar alertas a',
    'alert_email_help'    => 'Direcciones de correo electrónico o listas de distribución a las que desea que se envíen alertas separadas por comas',
    'alerts_enabled'			=> 'Alertas habilitadas',
    'alert_interval'			=> 'Limite de alertas de expiración (en días)',
    'alert_inv_threshold'		=> 'Umbral de alerta del inventario',
    'allow_user_skin'           => 'Permitir Tema del usuario',
    'allow_user_skin_help_text' => 'Al marcar esta casilla se permitirá al usuario sustituir el tema de la interfase con uno diferente.',
    'asset_ids'					=> 'IDs de Recurso',
    'audit_interval'            => 'Intervalo de auditoría',
    'audit_interval_help'       => 'Si se le exige auditoría física regular de sus activos, ingrese el intervalo en meses que utilice. Si actualiza este valor, se actualizarán todas las "próximas fechas de auditoría" de los activos con una próxima fecha de auditoría.',
    'audit_warning_days'        => 'Umbral de advertencia de auditoría',
    'audit_warning_days_help'   => '¿Con cuántos días de antelación debemos advertirle cuándo se deben auditar los activos?',
    'auto_increment_assets'		=> 'Generar etiquetas de activos que incrementan automáticamente',
    'auto_increment_prefix'		=> 'Prefijo (opcional)',
    'auto_incrementing_help'    => 'Primero habilite etiquetas de activos auto-incrementantes para configurar esto',
    'backups'					=> 'Copias de seguridad',
    'backups_help'              => 'Crear, descargar y restaurar copias de seguridad ',
    'backups_restoring'         => 'Restaurando desde la copia de seguridad',
    'backups_upload'            => 'Subir copia de seguridad',
    'backups_path'              => 'Las copias de seguridad en el servidor se almacenan en <code>:path</code>',
    'backups_restore_warning'   => 'Utilice el botón de restauración <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> para restaurar desde una copia de seguridad anterior. (Actualmente esto no funciona con almacenamiento de archivos S3 o Docker.)<br><br>Su <strong>base de datos completa :app_name y cualquier archivo subido será completamente reemplazado</strong> por lo que hay en el archivo de copia de seguridad.  ',
    'backups_logged_out'         => 'Todos los usuarios existentes, incluido usted, cerrarán sesión automáticamente una vez que la restauración haya finalizado.',
    'backups_large'             => 'Las copias de seguridad muy grandes pueden fallar por tiempo de espera excedido en el intento de restauración y pueden necesitar que se ejecuten nuevamente a través de la línea de comandos. ',
    'barcode_settings'			=> 'Configuración de Código de Barras',
    'confirm_purge'			    => 'Confirmar la purga',
    'confirm_purge_help'		=> 'Introduzca el texto "DELETE" en el cuadro de abajo para purgar sus registros borrados. Esta acción no se puede deshacer y borrará PERMANENTAMENTE todos los elementos y usuarios eliminados. (Se recomienda hacer una copia de seguridad previamente, para estar seguro.)',
    'custom_css'				=> 'CSS Personalizado',
    'custom_css_help'			=> 'Ingrese cualquier CSS personalizado que desee utilizar. No incluya tags como: &lt;style&gt;&lt;/style&gt.',
    'custom_forgot_pass_url'	=> 'Reestablecer URL de Contraseña Personalizada',
    'custom_forgot_pass_url_help'	=> 'Esto remplaza la URL incorporada para las contraseñas olvidadas en la pantalla de inicio, útil para dirigir a las personas a una funcionalidad de restablecimiento de contraseña LDAP interna o alojada. Esto efectivamente desactivará la funcionalidad local de olvido de contraseña.',
    'dashboard_message'			=> 'Mensajes del Panel',
    'dashboard_message_help'	=> 'Este texto aparecerá en el panel para cualquiera que tenga permiso de ver el Panel.',
    'default_currency'  		=> 'Moneda Predeterminada',
    'default_eula_text'			=> 'EULA por defecto',
    'default_language'			=> 'Idioma predeterminado',
    'default_eula_help_text'	=> 'También puede asociar EULAs personalizadas para categorías especificas de equipos.',
    'display_asset_name'        => 'Mostrar Nombre Equipo',
    'display_checkout_date'     => 'Mostrar Fecha de Salida',
    'display_eol'               => 'Mostrar EOL',
    'display_qr'                => 'Mostrar Códigos QR',
    'display_alt_barcode'		=> 'Mostrar códigos de barras en 1D',
    'email_logo'                => 'Logo de Email',
    'barcode_type'				=> 'Tipo de códigos de barras 2D',
    'alt_barcode_type'			=> 'Tipo de códigos de barras 1D',
    'email_logo_size'       => 'Los logotipos cuadrados se ven mejor en correo electrónico. ',
    'enabled'                   => 'Habilitado',
    'eula_settings'				=> 'Configuración EULA',
    'eula_markdown'				=> 'Este EULS permite <a href="https://help.github.com/articles/github-flavored-markdown/">makrdown estilo Github</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Los tipos de archivo aceptados son ico, png y gif. Otros formatos de imagen pueden no funcionar en todos los navegadores.',
    'favicon_size'          => 'Los favicons deben ser imágenes cuadradas, de 16x16 píxeles.',
    'footer_text'               => 'Texto Adicional de Pie de Página ',
    'footer_text_help'          => 'Este texto aparecerá en el lado derecho del pie de página. Los enlaces son permitidos usando <a href="https://help.github.com/articles/github-flavored-markdown/">el formato flavored de GitHub</a>. Saltos de línea, cabeceras, imágenes, etc, pueden resultar impredecibles.',
    'general_settings'			=> 'Configuración General',
    'general_settings_keywords' => 'soporte de la empresa, firma, aceptación, formato de correo electrónico, formato de nombre de usuario, imágenes, por página, miniatura, eula, tos, dashboard, privacidad',
    'general_settings_help'     => 'EULA por defecto y más',
    'generate_backup'			=> 'Generar Respaldo',
    'header_color'              => 'Color de encabezado',
    'info'                      => 'Estos parámetros permirten personalizar ciertos aspectos de la aplicación.',
    'label_logo'                => 'Logo de etiqueta',
    'label_logo_size'           => 'Los logos cuadrados se ven mejor - se mostrarán en la parte superior derecha de cada etiqueta de activo. ',
    'laravel'                   => 'Versión de Laravel',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Grupo de permisos por defecto',
    'ldap_default_group_info'   => 'Seleccione un grupo para asignar a los usuarios recién sincronizados. Recuerde que un usuario asume los permisos del grupo que le han asignado.',
    'no_default_group'          => 'Ningún grupo por defecto',
    'ldap_help'                 => 'LDAP/Directorio Activo',
    'ldap_client_tls_key'       => 'Llave TLS del cliente LDAP',
    'ldap_client_tls_cert'      => 'LDAP Certificado TLS de cliente',
    'ldap_enabled'              => 'LDAP activado',
    'ldap_integration'          => 'Integración LDAP',
    'ldap_settings'             => 'Ajustes LDAP',
    'ldap_client_tls_cert_help' => 'El certificado TLS de cliente y la clave para las conexiones LDAP normalmente sólo son útiles en las configuraciones de Google Workspace con "Secure LDAP". Ambas son requeridas.',
     'ldap_client_tls_key'       => 'LDAP Clave TLS de cliente',
    'ldap_location'             => 'Ubicación LDAP',
'ldap_location_help'             => 'El campo Ubicación de Ldap debe utilizarse si <strong>una OU no está siendo utilizada en el DN del enlace base.</strong> Deja este espacio en blanco si se utiliza una búsqueda OU.',
    'ldap_login_test_help'      => 'Introduce un nombre de usuario LDAP válido y una contraseña de la DN base que especificaste anteriormente para probar si tu inicio de sesión LDAP está configurado correctamente. DEBES GUARDAR TUS CONFIGURACIONES LDAP ACTUALIZADAS PRIMERO.',
    'ldap_login_sync_help'      => 'Esto sólo prueba que LDAP puede sincronizarse correctamente. Si tu solicitud de Autenticación LDAP no es correcta, los usuarios aún no podrían iniciar sesión. DEBES GUARDAR TUS CONFIGURACIONES LDAP ACTUALIZADAS PRIMERO.',
    'ldap_manager'              => 'Gestor LDAP',
    'ldap_server'               => 'Servidor LDAP',
    'ldap_server_help'          => 'Esto debería empezar con ldap:// (sin codificar o TLS) o ldaps:// (para SSL)',
    'ldap_server_cert'			=> 'Certificado de validación SSL LDAP',
    'ldap_server_cert_ignore'	=> 'Permitir certificados SSL inválidos',
    'ldap_server_cert_help'		=> 'Selecciona este campo si estás usando un certificado SSL auto firmado y quieres aceptar un certificado SSL inválido.',
    'ldap_tls'                  => 'Usar TLS',
    'ldap_tls_help'             => 'Esto se debe seleccionar si se está ejecutando STARTTLS en el servidor LDAP. ',
    'ldap_uname'                => 'Enlazar usuario LDAP',
    'ldap_dept'                 => 'Departamento de Protocolo Ligero de Acceso a Directorio (LDAP)',
    'ldap_phone'                => 'Número Telefónico LDAP',
    'ldap_jobtitle'             => 'LDAP Titulo Laboral',
    'ldap_country'              => 'LDAP País',
    'ldap_pword'                => 'Enlazar contraseña LDAP',
    'ldap_basedn'               => 'Enlazar base DN',
    'ldap_filter'               => 'Filtro LDAP',
    'ldap_pw_sync'              => 'Sincronización de Contraseña LDAP',
    'ldap_pw_sync_help'         => 'Desmarca esta casilla si no quieres mantener las contraseñas LDAP sincronizadas con las contraseñas locales. Desactivar esto significa que tus usuarios no podrán acceder si tu servidor LDAP no está disponible por algún motivo.',
    'ldap_username_field'       => 'Campo de usuario',
    'ldap_lname_field'          => 'Apellido',
    'ldap_fname_field'          => 'Nombre LDAP',
    'ldap_auth_filter_query'    => 'Consulta de autentificación LDAP',
    'ldap_version'              => 'Versión LDAP',
    'ldap_active_flag'          => 'Flag activo LDAP',
    'ldap_activated_flag_help'  => 'Este valor se utiliza para determinar si un usuario sincronizado puede iniciar sesión en Snipe-IT. <strong>No afecta a la capacidad de comprobar los elementos dentro o fuera de ellos</strong>, y debería ser el <strong>nombre de atributo</strong> dentro de su AD/LDAP, <strong>no el valor</strong>. <br><br>Si este campo está configurado a un nombre de campo que no existe en su AD/LDAP, o el valor en el campo AD/LDAP se establece en <code>0</code> o <code>falso</code>, <strong>el inicio de sesión de usuario será deshabilitado</strong>. Si el valor en el campo AD/LDAP está establecido en <code>1</code> o <code>true</code> o <em>cualquier otro texto</em> significa que el usuario puede iniciar sesión. Cuando el campo está en blanco en tu AD, respetamos el atributo <code>userAccountControl</code>, que generalmente permite a los usuarios no suspendidos iniciar sesión.',
    'ldap_emp_num'              => 'Número de empleado LDAP',
    'ldap_email'                => 'Email LDAP',
    'ldap_test'                 => 'Probar LDAP',
    'ldap_test_sync'            => 'Prueba de sincronización LDAP',
    'license'                   => 'Licencia de Software',
    'load_remote_text'          => 'Scripts remotos',
    'load_remote_help_text'		=> 'Esta instalación de Snipe-IT puede cargar scripts desde fuera.',
    'login'                     => 'Intentos de inicio de sesión',
    'login_attempt'             => 'Intento de inicio de sesión',
    'login_ip'                  => 'Dirección IP',
    'login_success'             => '¿Éxito?',
    'login_user_agent'          => 'Agente de usuario',
    'login_help'                => 'Lista de intentos de inicio de sesión',
    'login_note'                => 'Nota de inicio de sesión',
    'login_note_help'           => 'Opcionalmente incluya algunas oraciones en su pantalla de inicio de sesión, por ejemplo para ayudar a las personas que han encontrado un dispositivo perdido o robado. Este campo acepta <a href="https://help.github.com/articles/github-flavored-markdown/">Github con sabor markdown</a>',
    'login_remote_user_text'    => 'Opciones de inicio de sesión de usuario remoto',
    'login_remote_user_enabled_text' => 'Habilitar inicio de sesión con encabezado de usuario remoto',
    'login_remote_user_enabled_help' => 'Esta opción habilita la Autenticación mediante el encabezado REMOTE_USER de acuerdo con la "Interfaz de puerta de enlace común (rfc3875)"',
    'login_common_disabled_text' => 'Deshabilitar otros mecanismos de autenticación',
    'login_common_disabled_help' => 'Esta opción desactiva otros mecanismos de autenticación. Simplemente habilite esta opción si está seguro de que su inicio de sesión REMOTE_USER ya está funcionando',
    'login_remote_user_custom_logout_url_text' => 'URL de cierre de sesión personalizado',
    'login_remote_user_custom_logout_url_help' => 'Sí se especifica un URL, los usuarios serán redireccionados a este URL una vez que cierren sesión en Snipe-TI. Esto es útil para cerrar sesiones de usuario de su Authentication Provider de forma correcta.',
    'login_remote_user_header_name_text' => 'Cabecera de nombre de usuario personalizado',
    'login_remote_user_header_name_help' => 'Usar la cabecera especificada en lugar de REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Usar en Impresión',
    'logo_print_assets_help'    => 'Usar marca en la lista imprimible de equipos',
    'full_multiple_companies_support_help_text' => 'Usuarios restringidos (incluidos administradores) asignados a compañías de sus bienes de compañía.',
    'full_multiple_companies_support_text' => 'Soporte completo múltiple de compañías',
    'show_in_model_list'   => 'Mostrar en Desplegado de Modelos',
    'optional'					=> 'opcional',
    'per_page'                  => 'Resultados por página',
    'php'                       => 'Versión de PHP',
    'php_info'                  => 'PHP Info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, sistema, información',
    'php_overview_help'         => 'PHP Información del sistema',
    'php_gd_info'               => 'Debes instalar php-gd para mostrar Códigos QR, ver instrucciones de instalación en <a href="http://www.php.net/manual/en/image.installation.php"></a>.',
    'php_gd_warning'            => 'PHP Image Processing y GD plugin NO instalados.',
    'pwd_secure_complexity'     => 'Complejidad de la contraseña',
    'pwd_secure_complexity_help' => 'Seleccione las reglas de complejidad de las contraseñas que desee aplicar.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'La contraseña no puede ser la misma que el nombre, apellido, correo electrónico o nombre de usuario',
    'pwd_secure_complexity_letters' => 'Requiere al menos una letra',
    'pwd_secure_complexity_numbers' => 'Requiere al menos un número',
    'pwd_secure_complexity_symbols' => 'Requiere al menos un símbolo',
    'pwd_secure_complexity_case_diff' => 'Requiere al menos una mayúscula y una minúscula',
    'pwd_secure_min'            => 'Caracteres mínimos de contraseña',
    'pwd_secure_min_help'       => 'El valor mínimo permitido es 8',
    'pwd_secure_uncommon'       => 'Evitar contraseñas comunes',
    'pwd_secure_uncommon_help'  => 'Esto impedirá que los usuarios usen contraseñas comunes de las 10,000 contraseñas principales que se notifican en las infracciones.',
    'qr_help'                   => 'Activa Códigos QR antes para poder ver esto',
    'qr_text'                   => 'Texto Código QR',
    'saml'                      => 'SAML',
    'saml_title'                => 'Actualizar ajustes de SAML',
    'saml_help'                 => 'Configuración SAML',
    'saml_enabled'              => 'SAML activado',
    'saml_integration'          => 'Integración SAML',
    'saml_sp_entityid'          => 'ID de la entidad',
    'saml_sp_acs_url'           => 'URL del Servicio de Consumidor de Afirmaciones (ACS)',
    'saml_sp_sls_url'           => 'URL Servicio individual de cierre de sesión (SLS)',
    'saml_sp_x509cert'          => 'Certificado público',
    'saml_sp_metadata_url'      => 'URL Metadatos',
    'saml_idp_metadata'         => 'Metadatos SAML IdP',
    'saml_idp_metadata_help'    => 'Puede especificar los metadatos IdP usando un archivo URL o XML.',
    'saml_attr_mapping_username' => 'Mapeo de Atributos - Nombre de Usuario',
    'saml_attr_mapping_username_help' => 'NameID se utilizará si el mapeo de atributos no está especificado o no es válido.',
    'saml_forcelogin_label'     => 'Forzar inicio de sesión SAML',
    'saml_forcelogin'           => 'Hacer SAML el inicio de sesión principal',
    'saml_forcelogin_help'      => 'Puedes usar \'/login?nosaml\' para llegar a la página de inicio de sesión normal.',
    'saml_slo_label'            => 'Cerrar sesión única SAML',
    'saml_slo'                  => 'Enviar una solicitud de salida a IdP al cerrar sesión',
    'saml_slo_help'             => 'Esto causará que el usuario sea redirigido primero a la IdP al cerrar sesión. Dejar desmarcado si el IdP no soporta correctamente SAML SLO iniciado por SP.',
    'saml_custom_settings'      => 'Configuración personalizada SAML',
    'saml_custom_settings_help' => 'Puedes especificar ajustes adicionales a la biblioteca onelogin/php-saml. Úsalo bajo tu propio riesgo.',
    'saml_download'             => 'Descargar metadatos',
    'setting'                   => 'Parámetro',
    'settings'                  => 'Configuración',
    'show_alerts_in_menu'       => 'Mostrar alertas en el menú superior',
    'show_archived_in_list'     => 'Activos archivados',
    'show_archived_in_list_text'     => 'Mostrar activos archivados en el listado de "todos los archivos"',
    'show_assigned_assets'      => 'Mostrar activos asignados a activos',
    'show_assigned_assets_help' => 'Mostrar los activos que fueron asignados a otros activos en Ver Usuarios -> Activos, Ver Usuarios -> Información -> Imprimir todo lo asignado en la cuenta -> Ver activos asignados.',
    'show_images_in_email'     => 'Show images in emails',
    'show_images_in_email_help'   => 'Uncheck this box if your Snipe-IT installation is behind a VPN or closed network and users outside the network will not be able to load images served from this installation in their emails.',
    'site_name'                 => 'Nombre del sitio',
    'integrations'               => 'Integraciones',
    'slack'                     => 'Slack',
    'general_webhook'           => 'Webhook general',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Probar para guardar',
    'webhook_title'               => 'Actualizar ajustes de Webhook',
    'webhook_help'                => 'Ajustes de integración',
    'webhook_botname'             => 'Nombre de Bot de :app',
    'webhook_channel'             => 'Canal de :app',
    'webhook_endpoint'            => 'Endopint de :app',
    'webhook_integration'         => 'Configuración de :app',
    'webhook_test'                 =>'Probar integración de :app',
    'webhook_integration_help'    => 'La integración de :app es opcional, sin embargo el Endpoint y el canal son necesarios si desea usarlo. Para configurar la integración de :app, primero debe <a href=":webhook_link" target="_new" rel="noopener">crear un webhook entrante</a> en su cuenta de :app. Haga clic en el botón <strong>Probar integración de :app</strong> para confirmar que su configuración es correcta antes de guardar. ',
    'webhook_integration_help_button'    => 'Una vez que hayas guardado la información de :app, aparecerá un botón de prueba.',
    'webhook_test_help'           => 'Comprueba si tu integración con :app está configurada correctamente. PRIMERO DEBES GUARDAR TU CONFIGURACION ACTUALIZADA DE :app.',
    'snipe_version'  			=> 'Version de Snipe-IT',
    'support_footer'            => 'Enlaces de Soporte de Pie de Página ',
    'support_footer_help'       => 'Especifica quien ve los enlaces de información de Soporte y Manual de Usuarios de Snipe-IT',
    'version_footer'            => 'Versión en pie de página ',
    'version_footer_help'       => 'Especificar quién ve la versión Snipe-IT y el número de compilación.',
    'system'                    => 'Información del Sistema',
    'update'                    => 'Actualizar Parámetros',
    'value'                     => 'Valor',
    'brand'                     => 'Marca',
    'brand_keywords'            => 'pie de página, logotipo, impresión, tema, piel, encabezado, colores, color, css',
    'brand_help'                => 'Logo, Nombre del Sitio',
    'web_brand'                 => 'Tipo de marca web',
    'about_settings_title'      => 'Acerca de Ajustes',
    'about_settings_text'       => 'Estos ajustes te permiten personalizar ciertos aspectos de tu instalación.',
    'labels_per_page'           => 'Etiquetas por pàgina',
    'label_dimensions'          => 'Dimensiones de las etiquetas (pulgadas)',
    'next_auto_tag_base'        => 'Siguiente incremento automático',
    'page_padding'              => 'Margenès de pàgina (pulgadas)',
    'privacy_policy_link'       => 'Enlace a la Política de Privacidad',
    'privacy_policy'            => 'Política de Privacidad',
    'privacy_policy_link_help'  => 'Si se incluye una URL aquí, un enlace a tu Política de Privacidad se incluirá al pie de la aplicación y en cualquier correo electrónico que el sistema envíe, de conformidad con la ley GDPR. ',
    'purge'                     => 'Purgar registros eliminados',
    'purge_deleted'             => 'Purgar eliminados ',
    'labels_display_bgutter'    => 'Borde inferior de la Etiqueta',
    'labels_display_sgutter'    => 'Borde lateral de la Etiqueta',
    'labels_fontsize'           => 'Tamaño de fuente de la etiqueta',
    'labels_pagewidth'          => 'Ancho de la hoja de etiqueta',
    'labels_pageheight'         => 'Altura de la hoja de etiqueta',
    'label_gutters'        => 'Espaciamiento de etiqueta (pulgadas)',
    'page_dimensions'        => 'Dimensiones de la página (pulgadas)',
    'label_fields'          => 'Campos visibles de la etiqueta',
    'inches'        => 'pulgadas',
    'width_w'        => 'an',
    'height_h'        => 'al',
    'show_url_in_emails'                => 'Enlace a Snipe-IT en correos electrónicos',
    'show_url_in_emails_help_text'      => 'Desmarca esta casilla si no deseas volver a vincular tu instalación de Snipe-IT en tus pies de página de correo electrónico. Útil si la mayoría de sus usuarios nunca inician sesión.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Altura máxima de la miniatura',
    'thumbnail_max_h_help'   => 'Altura máxima en píxeles que las miniaturas pueden mostrar en la vista de listado. Mín. 25, máximo 500.',
    'two_factor'        => 'Autenticación en dos pasos',
    'two_factor_secret'        => 'Código de verificación en dos pasos',
    'two_factor_enrollment'        => 'Enrolamiento en verificación en dos pasos',
    'two_factor_enabled_text'        => 'Activar la verificación en dos pasos',
    'two_factor_reset'        => 'Reiniciar Secreto de verificación en dos pasos',
    'two_factor_reset_help'        => 'Esto forzará al usuario a inscribirse otra vez su dispositivo con Google Authenticator. Esto puede ser útil si la pérdida o robo de su dispositivo actualmente inscrito. ',
    'two_factor_reset_success'          => 'Verificación en dos pasos de dispositivo reiniciado exitosamente',
    'two_factor_reset_error'          => 'Falló la Verificación en dos pasos del dispositivo',
    'two_factor_enabled_warning'        => 'Permitiendo dos factores si no está activado inmediatamente obliga a autenticar con un dispositivo de autenticación de Google inscritos. Usted tendrá la posibilidad de inscribirse el dispositivo si uno no está inscrito actualmente.',
    'two_factor_enabled_help'        => 'Esto encenderá la autenticación de dos factores usando Google Authenticator.',
    'two_factor_optional'        => 'Selectiva (los usuarios pueden activar o desactivar si está permitido)',
    'two_factor_required'        => 'Requerido para todos los usuarios',
    'two_factor_disabled'        => 'Desactivado',
    'two_factor_enter_code'	=> 'Ingrese código de verificación en dos pasos',
    'two_factor_config_complete'	=> 'Enviar código',
    'two_factor_enabled_edit_not_allowed' => 'El administrador no permite modificar esta configuración.',
    'two_factor_enrollment_text'	=> "Autenticación de doble factor se requiere, sin embargo el dispositivo no ha inscrito todavía. Abra la aplicación Google Authenticator y escanear el código QR a continuación para inscribir a su dispositivo. Una vez que haya inscrito su dispositivo, introduzca el código de abajo",
    'require_accept_signature'      => 'Requerir Firma',
    'require_accept_signature_help_text'      => 'Para activar esta función se requiere que los usuarios firmen fisicamente aceptando el activo.',
    'left'        => 'izquierda',
    'right'        => 'derecha',
    'top'        => 'arriba',
    'bottom'        => 'fondo',
    'vertical'        => 'vertical',
    'horizontal'        => 'horizontal',
    'unique_serial'                => 'Números de serie únicos',
    'unique_serial_help_text'                => 'Al marcar esta casilla se aplicará una restricción única en los seriales de los equipos',
    'zerofill_count'        => 'Longitud de etiquetas de activos, incluyendo relleno de ceros',
    'username_format_help'   => 'Esta configuración sólo será utilizada por el proceso de importación si no se proporciona un nombre de usuario y tenemos que generar un nombre de usuario para usted.',
    'oauth_title' => 'Configuración de la API de OAuth',
    'oauth' => 'OAuth',
    'oauth_help' => 'Configuración de Endpoint para Oauth',
    'asset_tag_title' => 'Actualizar ajustes de etiqueta de activos',
    'barcode_title' => 'Actualizar ajustes de código de barras',
    'barcodes' => 'Códigos de barras',
    'barcodes_help_overview' => 'Configuración del código de barras &amp; QR',
    'barcodes_help' => 'Esto intentará eliminar códigos de barras en caché. Esto normalmente sólo se usaría si la configuración del código de barras ha cambiado, o si la URL de Snipe-IT ha cambiado. Los códigos de barras se regenerarán cuando se acceda a continuación.',
    'barcodes_spinner' => 'Intentando eliminar archivos...',
    'barcode_delete_cache' => 'Borrar caché de código de barras',
    'branding_title' => 'Actualizar Configuración de Marca',
    'general_title' => 'Actualizar ajustes generales',
    'mail_test' => 'Enviar prueba',
    'mail_test_help' => 'Esto intentará enviar un correo de prueba a :replyto.',
    'filter_by_keyword' => 'Filtrar por palabra clave',
    'security' => 'Seguridad',
    'security_title' => 'Actualizar ajustes de seguridad',
    'security_keywords' => 'contraseña, contraseñas, requisitos, dos factores, dos factores, contraseñas comunes, inicio de sesión remoto, autenticación',
    'security_help' => 'Restricciones de contraseña de dos factores',
    'groups_keywords' => 'permisos, grupos de permisos, autorización',
    'groups_help' => 'Permisos de grupos para la cuenta',
    'localization' => 'Localización',
    'localization_title' => 'Actualizar ajustes de localización',
    'localization_keywords' => 'localización, moneda, local, locale, zona horaria, zona horaria, internacional, internatinalización, idioma, idioma, traducción',
    'localization_help' => 'Idioma, fecha',
    'notifications' => 'Notificaciones',
    'notifications_help' => 'Alertas de Correo y Configuración de Auditoría',
    'asset_tags_help' => 'Incrementales y prefijos',
    'labels' => 'Etiquetas',
    'labels_title' => 'Actualizar ajustes de etiqueta',
    'labels_help' => 'Tamaños de etiqueta &amp; ajustes',
    'purge' => 'Purgar',
    'purge_keywords' => 'eliminar permanentemente',
    'purge_help' => 'Purgar registros eliminados',
    'ldap_extension_warning' => 'No parece que la extensión LDAP esté instalada o habilitada en este servidor. Todavía puede guardar su configuración, pero necesitará habilitar la extensión LDAP para PHP antes de que funcione la sincronización LDAP o el inicio de sesión.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Número de empleado',
    'create_admin_user' => 'Crear un usuario ::',
    'create_admin_success' => '¡Éxito! ¡Tu usuario admin ha sido añadido!',
    'create_admin_redirect' => '¡Haz clic aquí para acceder a tu aplicación!',
    'setup_migrations' => 'Migraciones de base de datos ::',
    'setup_no_migrations' => 'No hay nada que migrar. ¡Las tablas de la base de datos ya estaban configuradas!',
    'setup_successful_migrations' => 'Se han creado las tablas de la base de datos',
    'setup_migration_output' => 'Salida de Migración:',
    'setup_migration_create_user' => 'Siguiente: Crear usuario',
    'ldap_settings_link' => 'Página de ajustes LDAP',
    'slack_test' => 'Prueba <i class="fab fa-slack"></i> Integración',
    'label2_enable'           => 'Nuevo motor de etiqueta',
    'label2_enable_help'      => 'Cambiar al nuevo motor de etiquetas. <b>Nota: Deberá guardar esta configuración antes de configurar otros.</b>',
    'label2_template'         => 'Plantilla',
    'label2_template_help'    => 'Seleccione qué plantilla utilizar para la generación de etiquetas',
    'label2_title'            => 'Titulo',
    'label2_title_help'       => 'El título a mostrar en etiquetas que lo soporten',
    'label2_title_help_phold' => 'El marcador de posición <code>{COMPANY}</code> será reemplazado con el nombre de empresa del activo&apos;s',
    'label2_asset_logo'       => 'Usar Logo de Activo',
    'label2_asset_logo_help'  => 'Utilice el logo de la empresa asignada&apos;s, en lugar del valor en <code>:setting_name</code>',
    'label2_1d_type'          => 'Tipo de código de barras 1D',
    'label2_1d_type_help'     => 'Formato para códigos de barras 1D',
    'label2_2d_type'          => 'Tipo de código de barras 2D',
    'label2_2d_type_help'     => 'Formato para códigos de barras 2D',
    'label2_2d_target'        => 'Objetivo Código de barras 2D',
    'label2_2d_target_help'   => 'La URL a la que apunta el código de barras 2D cuando se escanea',
    'label2_fields'           => 'Definiciones del campo',
    'label2_fields_help'      => 'Los campos pueden ser agregados, eliminados y reordenados en la columna izquierda. Para cada campo, múltiples opciones para Etiqueta y DataSource pueden ser agregadas, eliminadas y reordenadas en la columna derecha.',
    'help_asterisk_bold'    => 'El texto escrito como <code>**texto**</code> se mostrará como negrita',
    'help_blank_to_use'     => 'Deje en blanco para usar el valor de <code>:setting_name</code>',
    'help_default_will_use' => '<code>:default</code> will use the value from <code>:setting_name</code>. <br>Note that the value of the barcodes must comply with the respective barcode spec in order to be successfully generated. Please see <a href="https://snipe-it.readme.io/docs/barcodes">the documentation <i class="fa fa-external-link"></i></a> for more details. ',
    'default'               => 'Predeterminado',
    'none'                  => 'Ninguno',
    'google_callback_help' => 'Esto debería introducirse como la URL de devolución de llamada en la configuración de la aplicación de Google OAuth de la <strong><a href="https://console.cloud.google.com/" target="_blank">Google developer console <i class="fa fa-external-link" aria-hidden="true"></i></a></strong> de tu organización.',
    'google_login'      => 'Configuración de inicio de sesión de Google Workspace',
    'enable_google_login'  => 'Permitir a los usuarios iniciar sesión con Google Workspace',
    'enable_google_login_help'  => 'Los usuarios no serán provistos automáticamente. Deben tener una cuenta existente aquí Y en Google Workspace, y su nombre de usuario debe coincidir con su dirección de correo electrónico de Google Workspace. ',
    'mail_reply_to' => 'Dirección de respuesta de correo',
    'mail_from' => 'Correo desde la dirección',
    'database_driver' => 'Controlador de base de datos',
    'bs_table_storage' => 'Almacenamiento de Tabla',
    'timezone' => 'Timezone',

];
