<?php

return [
    'ad'                        => 'Active Directory',
    'ad_domain'                    => 'Active Directory -verkkotunnus',
    'ad_domain_help'            => 'Tämä on joskus sama kuin sähköpostiosoitteesi, mutta ei aina.',
    'is_ad'                        => 'Tämä on Active Directory -palvelin',
    'alert_email'                => 'Lähetä ilmoitukset',
    'alerts_enabled'            => 'Hälytykset käytössä',
    'alert_interval'            => 'Kynnysrajan kynnys (päivinä)',
    'alert_inv_threshold'        => 'Varaston hälytysraja',
    'asset_ids'                    => 'Omaisuuden tunnukset',
    'audit_interval'            => 'Tilintarkastusväli',
    'audit_interval_help'       => 'Jos sinun on säännöllisesti tarkastettava varojasi fyysisesti, anna aikaväli kuukausina.',
    'audit_warning_days'        => 'Tarkastuksen varoituskynnys',
    'audit_warning_days_help'   => 'Kuinka monta päivää etukäteen varoitamme, kun varat on suoritettava tilintarkastukseen?',
    'auto_increment_assets'        => 'Luo automaattisesti kasvavat laite-ID:t',
    'auto_increment_prefix'        => 'Etuliite (valinnainen)',
    'auto_incrementing_help'    => 'Ota ensin käyttöön automaattinen lisäys omaisuuden tunnuksista',
    'backups'                    => 'Varmuuskopiointi',
    'barcode_settings'            => 'Viivakoodi asetukset',
    'confirm_purge'                => 'Vahvista poisto',
    'confirm_purge_help'        => 'Kirjoita alla olevaan kohtaan "DELETE" teksti tyhjentääksesi poistetut tietueet. Tätä toimintoa ei voi kumota.',
    'custom_css'                => 'Oma CSS',
    'custom_css_help'            => 'Anna haluamasi mukautetut CSS-ohitukset. Älä lisää &lt;style&gt;&lt;/style&gt; tunnisteita.',
    'custom_forgot_pass_url'    => 'Custom Password Reset URL',
    'custom_forgot_pass_url_help'    => 'This replaces the built-in forgotten password URL on the login screen, useful to direct people to internal or hosted LDAP password reset functionality. It will effectively disable local user forgotten password functionality.',
    'default_currency'        => 'Oletusvaluutta',
    'default_eula_text'            => 'Oletus EULA',
  'default_language'                    => 'Oletuskieli',
    'default_eula_help_text'    => 'Voit myös liittää muokattuja EULA-sopimuksia tiettyihin omaisuusluokkiin.',
    'display_asset_name'        => 'Näytä laitteen nimi listauksessa',
    'display_checkout_date'     => 'Näytä luovutuspäivämäärä listauksessa',
    'display_eol'               => 'Näytä elinaika listauksessa',
    'display_qr'                => 'Näytä neliökoodit',
    'display_alt_barcode'        => 'Näytä 1D viivakoodi',
    'barcode_type'                => '2D viivakoodityyppi',
    'alt_barcode_type'            => '1D viivakoodityyppi',
    'eula_settings'                => 'EULA-asetukset',
    'eula_markdown'                => 'Tämä EULA sallii <a href="https://help.github.com/articles/github-flavored-markdown/">Github-maustamattoman markdown</a>.',
    'general_settings'            => 'Yleiset asetukset',
    'generate_backup'            => 'Luo varmuuskopio',
    'header_color'              => 'Yläosion logo',
    'info'                      => 'Näiden asetusten avulla voit mukauttaa tiettyjä toimintoja.',
    'laravel'                   => 'Versio Laravel',
    'ldap_enabled'              => 'LDAP käytössä',
    'ldap_integration'          => 'LDAP integraatio',
    'ldap_settings'             => 'LDAP Asetukset',
    'ldap_login_test_help'      => 'Enter a valid LDAP username and password from the base DN you specified above to test whether your LDAP login is configured correctly. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_login_sync_help'      => 'This only tests that LDAP can sync correctly. If your LDAP Authentication query is not correct, users may still not be able to login. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_server'               => 'LDAP Palvelin',
    'ldap_server_help'          => 'Tämän pitäisi alkaa ldap: // (salaamaton tai TLS) tai ldaps: // (SSL)',
    'ldap_server_cert'            => 'LDAP SSL Varmenteen varmennus',
    'ldap_server_cert_ignore'    => 'Salli virheelliset SSL Varmenteet',
    'ldap_server_cert_help'        => 'Valitse tämä valintaruutu, jos käytät itse allekirjoitettua SSL-varmennetta ja haluat hyväksyä virheellisen SSL-varmennuksen.',
    'ldap_tls'                  => 'Käytä TLS: ää',
    'ldap_tls_help'             => 'Tämä on tarkistettava vain, jos käynnistät STARTTLS: n LDAP-palvelimella.',
    'ldap_uname'                => 'LDAP-sitoa käyttäjätunnusta',
    'ldap_pword'                => 'LDAP-sidontalasana',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP-suodatin',
    'ldap_pw_sync'              => 'LDAP-salasanan synkronointi',
    'ldap_pw_sync_help'         => 'Poista tämä valintaruutu, jos et halua säilyttää LDAP-salasanoja synkronoituna paikallisilla salasanoilla. Tämän poistaminen käytöstä tarkoittaa, että käyttäjät eivät ehkä voi kirjautua sisään, jos LDAP-palvelin ei jostain syystä ole tavoitettavissa.',
    'ldap_username_field'       => 'Käyttäjätunnus',
    'ldap_lname_field'          => 'Sukunimi',
    'ldap_fname_field'          => 'LDAP Etunimi',
    'ldap_auth_filter_query'    => 'LDAP-todennuskysely',
    'ldap_version'              => 'LDAP Versio',
    'ldap_active_flag'          => 'LDAP-aktiivinen lippu',
    'ldap_emp_num'              => 'LDAP-työntekijän numero',
    'ldap_email'                => 'LDAP Sähköposti',
    'load_remote_text'          => 'Etäkriptit',
    'load_remote_help_text'        => 'Tämä Snipe-IT-asennus voi ladata skriptejä ulkopuolelta.',
    'login_note'                => 'Kirjautumisviesti',
    'login_note_help'           => 'Voit myös sisällyttää muutamia lauseita kirjautumisruudulle, esimerkiksi auttaa ihmisiä, jotka ovat löytäneet kadonneen tai varastetun laitteen. Tämä kenttä hyväksyy <a href="https://help.github.com/articles/github-flavored-markdown/">Github-maustamaton markdown</a>',
    'logo'                        => 'Logo',
    'full_multiple_companies_support_help_text' => 'Käyttäjien (myös ylläpitäjien) rajoittaminen yrityksille varattavaksi yrityksen omiin varoihin.',
    'full_multiple_companies_support_text' => 'Täysi monikansallisten yritysten tuki',
    'optional'                    => 'valinnainen',
    'per_page'                  => 'Tuloksia Per Sivu',
    'php'                       => 'Versio PHP',
    'php_gd_info'               => 'Sinun tulee asentaa php-gd paketti näyttääksesi QR-koodit, katso lisätietoja asennusohjeista.',
    'php_gd_warning'            => 'PHP Image Prosessing ja GD-lisäosia EI ole asennettuna.',
    'pwd_secure_complexity'     => 'Salasanan monimutkaisuus',
    'pwd_secure_complexity_help' => 'Valitse mikä tahansa salasanan monimutkaisuus sääntö, jonka haluat panna täytäntöön.',
    'pwd_secure_min'            => 'Salasanan minimimerkit',
    'pwd_secure_min_help'       => 'Pienin sallittu arvo on 5',
    'pwd_secure_uncommon'       => 'Estä tavalliset salasanat',
    'pwd_secure_uncommon_help'  => 'Tämä estää käyttäjiä käyttämästä yhteisiä salasanoja ylimmistä 10 000 salasanasta, jotka on ilmoitettu rikkoneen.',
    'qr_help'                   => 'Ota QR-koodit käyttöön valitaksesi tämän',
    'qr_text'                   => 'QR-koodin Teksti',
    'setting'                   => 'Asetus',
    'settings'                  => 'Asetukset',
    'site_name'                 => 'Sivuston Nimi',
    'slack_botname'             => 'Löysä Botname',
    'slack_channel'             => 'Löytää kanava',
    'slack_endpoint'            => 'Lakkautettu loppupiste',
    'slack_integration'         => 'Slackin asetukset',
    'slack_integration_help'    => 'Liukas integraatio on valinnainen, mutta loppupiste ja kanava ovat välttämättömiä, jos haluat käyttää sitä. Jos haluat määrittää Liukastumisen integrointi, sinun on ensin tehtävä <a href=":slack_link" target="_new"> luoda saapuva Webhook</a> Laskutus-tilillesi.',
    'snipe_version'            => 'Snipe-IT versio',
    'system'                    => 'Järjestelmän Tiedot',
    'update'                    => 'Päivitä Asetukset',
    'value'                     => 'Arvo',
    'brand'                     => 'brändäys',
    'about_settings_title'      => 'Tietoa Asetuksista',
    'about_settings_text'       => 'Näiden asetusten avulla voit mukauttaa tiettyjä toimintoja.',
    'labels_per_page'           => 'Tarrat sivua kohden',
    'label_dimensions'          => 'Tarran mitat (tuumaa)',
    'next_auto_tag_base'        => 'Seuraava automaattinen lisäys',
    'page_padding'             => 'Sivun marginaalit (tuumaa)',
    'purge'                    => 'Puhdista poistetut tietueet',
    'labels_display_bgutter'    => 'Merkitse pohjaventtiili',
    'labels_display_sgutter'    => 'Etikettipuoli',
    'labels_fontsize'           => 'Tarrafontin koko',
    'labels_pagewidth'          => 'Tarra-arkin leveys',
    'labels_pageheight'         => 'Tarralevyn korkeus',
    'label_gutters'        => 'Tarraetäisyys (tuumaa)',
    'page_dimensions'        => 'Sivun mitat (tuumaa)',
    'label_fields'          => 'Merkitse näkyvät kentät',
    'inches'        => 'tuumaa',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Linkki Snipe-IT: hen sähköposteissa',
    'show_url_in_emails_help_text'      => 'Poista tämä valintaruutu, jos et halua linkata takaisin Snipe-IT-asennukseen sähköpostin alatunnisteisiin. Hyödyllinen, jos useimmat käyttäjät eivät koskaan kirjaudu sisään.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Suurin pikkukuva',
    'thumbnail_max_h_help'   => 'Enimmäiskorkeus kuvapisteissä, jotka pienoiskuvat voivat näkyä listalle nähden. Min 25, max 500.',
    'two_factor'        => 'Kaksi tekijän todentamista',
    'two_factor_secret'        => 'Kaksi-tekijäkoodi',
    'two_factor_enrollment'        => 'Kahden tekijän ilmoittautuminen',
    'two_factor_enabled_text'        => 'Ota käyttöön kaksi tekijää',
    'two_factor_reset'        => 'Nollaa kaksi tekijän salaisuus',
    'two_factor_reset_help'        => 'Tämä pakottaa käyttäjän rekisteröimään laitteen uudelleen Google Authenticator -palveluun. Tämä voi olla hyödyllistä, jos heidän tällä hetkellä rekisteröidyt laitteet menetetään tai varastetaan.',
    'two_factor_reset_success'          => 'Kaksi tekijälaitetta onnistuneesti nollattu',
    'two_factor_reset_error'          => 'Kaksi tekijän laitteen nollausta epäonnistui',
    'two_factor_enabled_warning'        => 'Kaksikerroksen ottaminen käyttöön, jos sitä ei ole tällä hetkellä käytössä, välittömästi pakottaa sinut autentikoimaan Google Auth -ohjelmaan kuuluvalla laitteella. Sinulla on mahdollisuus rekisteröidä laite, jos et ole tällä hetkellä rekisteröitynyt.',
    'two_factor_enabled_help'        => 'Tämä kytkee kaksitasoisen todennuksen käyttämällä Google Authenticatoria.',
    'two_factor_optional'        => 'Valikoiva (Käyttäjät voivat ottaa käyttöön tai poistaa käytöstä, jos sallittu)',
    'two_factor_required'        => 'Vaatii kaikille käyttäjille',
    'two_factor_disabled'        => 'Liikuntarajoitteinen',
    'two_factor_enter_code'    => 'Syötä kaksi tekijäkoodi',
    'two_factor_config_complete'    => 'Lähetä koodi',
    'two_factor_enabled_edit_not_allowed' => 'Järjestelmänvalvoja ei salli sinun muokata tätä asetusta.',
    'two_factor_enrollment_text'    => 'Kaksi tekijän todennusta tarvitaan, mutta laitteesi ei ole vielä kirjoittanut. Avaa Google Authenticator -sovellus ja skannaa alla oleva QR-koodi rekisteröidäksesi laitteesi. Kun olet kirjoittanut laitteesi, kirjoita alla oleva koodi',
    'require_accept_signature'      => 'Vaadittava allekirjoitus',
    'require_accept_signature_help_text'      => 'Tämän ominaisuuden ottaminen käyttöön edellyttää käyttäjiltä fyysisesti kirjautumista hyväksymisen yhteydessä.',
    'left'        => 'vasen',
    'right'        => 'oikea',
    'top'        => 'Ylin',
    'bottom'        => 'pohja',
    'vertical'        => 'pystysuora',
    'horizontal'        => 'vaakasuora',
    'zerofill_count'        => 'Omaisuusavun pituus, mukaan lukien nollatäyttö',
];
