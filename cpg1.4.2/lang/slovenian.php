<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2005 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.4.1
  $Source: /cvsroot/coppermine/devel/lang/slovenian.php,v $
  $Revision: 1.12 $
  $Author: gaugau $
  $Date: 2005/09/21 04:32:55 $
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Slovenian_SI', //cpg1.4
  'lang_name_native' => 'Slovenščina_SI', //cpg1.4
  'lang_country_code' => 'si', //cpg1.4
  'trans_name'=> 'S55HH',
  'trans_email' => 's55hh@prekmurje.com',
  'trans_website' => 'http://prekmurje.com/',
  'trans_date' => '2005-08-15',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bitov', 'Kb', 'Mb');

// Day of weeks and months
$lang_day_of_week = array('Ne', 'Po', 'To', 'Sr', 'Če', 'Pe', 'So');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Avg', 'Sep', 'Okt', 'Nov', 'Dec');

// Some common strings
$lang_yes = 'Da';
$lang_no  = 'Ne';
$lang_back = 'NAZAJ';
$lang_continue = 'NAPREJ';
$lang_info = 'Informacija';
$lang_error = 'Napaka';
$lang_check_uncheck_all = 'označi/odznači vse'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d.%m.%Y';
$lastcom_date_fmt =  '%d.%m.%Y ob %H:%M';
$lastup_date_fmt = '%d.%m.%Y';
$register_date_fmt = '%d.%m.%Y';
$lasthit_date_fmt = '%d.%m.%Y ob %I:%M %p';
$comment_date_fmt =  '%d.%m.%Y ob %I:%M %p';
$log_date_fmt = '%B %d, %Y ob %I:%M %p'; //cpg1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'Naključne fotografije',
  'lastup' => 'Nove fotografije',
  'lastalb'=> 'Zadnji dodani albumi',
  'lastcom' => 'Zadnji komentarji',
  'topn' => 'Največ ogledov',
  'toprated' => 'Naj ocene',
  'lasthits' => 'Zadnji ogledi',
  'search' => 'Rezultati iskanja',
  'favpics'=> 'Priljubljene fotografije',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'Nimate pravic za dostop do te strani.',
  'perm_denied' => 'Nimate pravic za izvedbo tega ukaza.',
  'param_missing' => 'Manjkajo podatki za izvedbo...',
  'non_exist_ap' => 'Izbrani album/fotografija ne obstaja!',
  'quota_exceeded' => 'Disk je poln<br /><br />Na razpolago imate [quota]Kb, vaše fotografije pa trenutno zasedajo [space]K, če bi dodali pa še to fotografijoo, bi prekoračili vaš prostor na disku.',
  'gd_file_type_err' => 'Pri uporabi GD knjižnice lahko uporabite samo JPEG in PNG fotografije.',
  'invalid_image' => 'Poslana fotografija je poškodovana ali pa ni v pravilnem formatu za GD knjižnico.',
  'resize_failed' => 'Ne morem narediti ikone ali pomanjšane slike.',
  'no_img_to_display' => 'Trenutno še brez fotografij',
  'non_exist_cat' => 'Izbrana kategorija ne obstaja',
  'orphan_cat' => 'Kategorija ima določeno neobstoječo nadrejeno kategorijo. Popravite napako v nastavitvah.',
  'directory_ro' => 'Direktorij \'%s\' ne dopušča pisanja, fotografij ni možno pobrisati',
  'non_exist_comment' => 'Izbrani komentar ne obstaja.',
  'pic_in_invalid_album' => 'Fotografija je v neobstoječem albumu (%s)!?',
  'banned' => 'Trenutno imate prepoved dostopa do teh strani.',
  'not_with_udb' => 'Ta ukaz je onemogočen, ker je premaknjen v forum. Ali to kar želite narediti ni omogočeno v nastavitvah ali pa je predvideno za izvedbo v forumu.',
  'offline_title' => 'Izklopljeno',
  'offline_text' => 'Galerija je trenutno zaradi vzdrževanja izklopljena - obiščite nas čez par ur...',
  'ecards_empty' => 'Trenutno brez zapisov o poslanih e-razglednicah.',
  'action_failed' => 'Vašega ukaza ni bilo možno izvesti.',
  'no_zip' => 'Potrebna knjižnica za obdelavo ZIP datotek ni nameščena. Obvestite administratorja od galerije.',
  'zip_type' => 'Za nalaganje ZIP datotek nimate dovoljenj.',
  'database_query' => 'Pri poizvedbi v podatkovni bazi je prišlo do napake', //cpg1.4
  'non_exist_comment' => 'Izbrani komentar ne obstaja.', //cpg1.4
);

$lang_bbcode_help_title = 'Pomoč za bbcode'; //cpg1.4
$lang_bbcode_help = 'Dodajate lahko povezave in uporabite oblikovanje s pomočjo bbcode oznak: <li>[b]Povdarjeno[/b] =&gt; <b>Povdarjeno</b></li><li>[i]Poševno[/i] =&gt; <i>Poševno</i></li><li>[url=http://vasastran.com/]To je moja stran...[/url] =&gt; <a href="http://vasastran.com">To je moja stran...</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]besedilo...[/color] =&gt; <span style="color:red">besedilo...</span></li><li>[img]http://coppermine.sf.net/demo/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// -------------------------povezavo in ne------------------------------------------------ //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'Nazaj na domačo stran',
  'home_lnk' => 'Domov',
  'alb_list_title' => 'Pojdi na seznam albumov',
  'alb_list_lnk' => 'Seznam albumov',
  'my_gal_title' => 'Pojdi v mojo osebno galerijo',
  'my_gal_lnk' => 'Moja galerija',
  'my_prof_title' => 'Pojdi na moje nastavitve', //cpg1.4
  'my_prof_lnk' => 'Moj profil',
  'adm_mode_title' => 'Preklop v administracijo',
  'adm_mode_lnk' => 'Administracija',
  'usr_mode_title' => 'Preklop v uporabniški način',
  'usr_mode_lnk' => 'Uporabniški način',
  'upload_pic_title' => 'Dodajanje fotografij v album',
  'upload_pic_lnk' => 'Dodajanje fotografij',
  'register_title' => 'Ustvari račun',
  'register_lnk' => 'Registracija',
  'login_title' => 'Prijavi me', //cpg1.4
  'login_lnk' => 'Prijava',
  'logout_title' => 'Odjavi me', //cpg1.4
  'logout_lnk' => 'Odjava',
  'lastup_title' => 'Prikaži zadnje dodane fotografije', //cpg1.4
  'lastup_lnk' => 'Zadnje dodane fotografije',
  'lastcom_title' => 'Prikaži zadnje komentarje', //cpg1.4
  'lastcom_lnk' => 'Zadnji komentarji',
  'topn_title' => 'Prikaži fotografije z največ ogledi', //cpg1.4
  'topn_lnk' => 'Največ ogledov',
  'toprated_title' => 'Prikaži fotografije z naj ocenami', //cpg1.4
  'toprated_lnk' => 'Najbolj ocenjeno',
  'search_title' => 'Iskanje po galeriji', //cpg1.4
  'search_lnk' => 'Iskanje',
  'fav_title' => 'Pojdi na moje priljubljene fotografije', //cpg1.4
  'fav_lnk' => 'Moji favoriti',
  'memberlist_title' => 'Prikaz seznama članov',
  'memberlist_lnk' => 'Seznam članov',
  'faq_title' => 'Pogosto postavljena vprašanja;',
  'faq_lnk' => 'FAQ',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Odobritev novih vsebin', //cpg1.4
  'upl_app_lnk' => 'Odobritev',
  'admin_title' => 'Pojdi na nastavitve', //cpg1.4
  'admin_lnk' => 'Nastavitve', //cpg1.4
  'albums_title' => 'Pojdi na nastavitve albumov', //cpg1.4
  'albums_lnk' => 'Albumi',
  'categories_title' => 'Pojdi na nastavitve kategorij', //cpg1.4
  'categories_lnk' => 'Kategorije',
  'users_title' => 'Pojdi na nastavitve uporabnikov', //cpg1.4
  'users_lnk' => 'Uporabniki',
  'groups_title' => 'Pojdi na nastavitve skupin', //cpg1.4
  'groups_lnk' => 'Skupine',
  'comments_title' => 'Ogled vseh komentarjev', //cpg1.4
  'comments_lnk' => 'Komentarji',
  'searchnew_title' => 'Pojdi na dodajanje poslanih vsebin', //cpg1.4
  'searchnew_lnk' => 'Najdi nove fotografije',
  'util_title' => 'Pojdi na administrativna orodja', //cpg1.4
  'util_lnk' => 'Orodja',
  'key_title' => 'Pojdi na slovar klučnih besed', //cpg1.4
  'key_lnk' => 'Ključne besede', //cpg1.4
  'ban_title' => 'Pojdi na seznam zavrnitev', //cpg1.4
  'ban_lnk' => 'Prepoved dostopa',
  'db_ecard_title' => 'Ogled razglednic', //cpg1.4
  'db_ecard_lnk' => 'Prikaži e-razglednice',
  'pictures_title' => 'Sortiranje fotografij', //cpg1.4
  'pictures_lnk' => 'Sortiranje fotografij', //cpg1.4
  'documentation_lnk' => 'Dokumentacija', //cpg1.4
  'documentation_title' => 'Coppermine navodila', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Kreiranje in naročanje svojih albumov', //cpg1.4
  'albmgr_lnk' => 'Ustvari/naroči svoj album',
  'modifyalb_title' => 'Pojdi na urejanje mojih lastnih albumov',  //cpg1.4
  'modifyalb_lnk' => 'Urejanje svojih albumov',
  'my_prof_title' => 'Pojdi na urejanje mojega profila', //cpg1.4
  'my_prof_lnk' => 'Moj profil',
);

$lang_cat_list = array(
  'category' => 'Kategorija',
  'albums' => 'Albumi',
  'pictures' => 'Fotografije',
);

$lang_album_list = array(
  'album_on_page' => 'Št. albumov:%d (št. strani:%d)',
);

$lang_thumb_view = array(
  'date' => 'DATUM',
  //Sort by filename and title
  'name' => 'Datoteka',
  'title' => 'Naziv',
  'sort_da' => 'Razvrsti po datumu naraščajoče',
  'sort_dd' => 'Razvrsti po datumu padajoče',
  'sort_na' => 'Razvrsti po imenu datoteke naraščajoče',
  'sort_nd' => 'Razvrsti po imenu datoteke padajoče',
  'sort_ta' => 'Razvrsti po nazivu naraščajoče',
  'sort_td' => 'Razvrsti po nazivu padajoče',
  'position' => 'POZICIJA', //cpg1.4
  'sort_pa' => 'Razvrsti po poziciji naraščajoče', //cpg1.4
  'sort_pd' => 'Razvrsti po poziciji padajoče', //cpg1.4
  'download_zip' => 'Presnami kot ZIP datoteko',
  'pic_on_page' => 'Št. fotografij:%d (št. strani:%d)',
  'user_on_page' => 'Št. uporabnikov:%d (št. strani:%d)',
  'enter_alb_pass' => 'Vpišite geslo za ta album', //cpg1.4
  'invalid_pass' => 'Napačno geslo', //cpg1.4
  'pass' => 'Geslo', //cpg1.4
  'submit' => 'Pošlji', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Nazaj na stran z ikonami',
  'pic_info_title' => 'Prikaži/skrij informacije o fotografiji',
  'slideshow_title' => 'Samodejno predvajanje',
  'ecard_title' => 'Pošlji fotografijo kot e-razglednico',
  'ecard_disabled' => 'Pošiljanje e-razglednic ni dovoljeno',
  'ecard_disabled_msg' => 'Nimate pravic za pošiljanje e-razglednic', //js-alert
  'prev_title' => 'Predhodna fotografija',
  'next_title' => 'Naslednja fotografija',
  'pic_pos' => 'Fotografija %s/%s',
  'report_title' => 'Obvesti administratorja o tej fotografiji', //cpg1.4
  'go_album_end' => 'Na konec', //cpg1.4
  'go_album_start' => 'Na začetek', //cpg1.4
  'go_back_x_items' => 'nazaj za %s fotografij', //cpg1.4
  'go_forward_x_items' => 'naprej za %s fotografij', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Ocenite to fotografijo ',
  'no_votes' => '(trenutno še brez ocen)',
  'rating' => '(trenutna ocena:%s / 5 z %s ocenami)',
  'rubbish' => 'Zanič',
  'poor' => 'Slabo',
  'fair' => 'Dobro',
  'good' => 'Še kar',
  'excellent' => 'Lepo',
  'great' => 'Odlično',
);

// ------------------------------------------------------------------------- //
// File include/exif.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die = array(
  INFORMATION => $lang_info,
  ERROR => $lang_error,
  CRITICAL_ERROR => 'Kritična napaka',
  'file' => 'Datoteka: ',
  'line' => 'Vrstica: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Ime datoteke=', //cpg1.4
  'filesize' => 'Velikost datoteke=', //cpg1.4
  'dimensions' => 'Dimenzija=', //cpg1.4
  'date_added' => 'Datum objave=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => 'Št. komentarjev:%s',
  'n_views' => 'Št. ogledov:%s',
  'n_votes' => '(št. ocen:%s)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug Info',
  'select_all' => 'Izberi vse',
  'copy_and_paste_instructions' => 'Če želite poiskati pomoč v forumu od Coppermine galerije, označite in prekopirajte poročilo o napaki v svoje sporočilo na forumu. Prepričajte se, da ste zamenjali gesla z zvezdicami pred pošiljanjem. <br />Opomba: to je samo informacija in ni nujno, da je z vašo galerijo kaj narobe.', //cpg1.4
  'phpinfo' => 'Prikaži phpinfo',
  'notices' => 'Zaznamki', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Privzeti jezik',
  'choose_language' => 'Izberite jezik',
);

$lang_theme_selection = array(
  'reset_theme' => 'Privzeta tema',
  'choose_theme' => 'Izberite temo',
);

$lang_version_alert = array(
  'version_alert' => 'Nepodprta verzija!', //cpg1.4
  'no_stable_version' => 'Trenutno uporabljate Coppermine galerijo %s (%s), ki je namenjena samo za iskušene uporabnike. Ta verzija galerije nima podpore in garancije s strani razvijalcev. Uporabljate jo na lastno odgovornost, če želite podporo, uporabite zadnjo stabilno verzijo galerije!', //cpg1.4
  'gallery_offline' => 'Galerija je trenutno izklopljena in jo vidijo samo administratorji. Ne pozabite je ponovno vklopiti, ko končate z nastavitvami oz. spremembami.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'nazaj', //cpg1.4
  'next' => 'naprej', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/init.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File keyword.inc.php                                                      //
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File include/picmgmt.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api = array(
  'error_wakeup' => "Dodatka '%s' ni možno aktivirati.", //cpg1.4
  'error_install' => "Namestitev dodatka '%s' ni uspela.", //cpg1.4
  'error_uninstall' => "Odstranitev dodatka '%s' ni uspela.", //cpg1.4
  'error_sleep' => "Neuspešna odstranitev dodatka '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Vzklik',
  'Question' => 'Vprašanje',
  'Very Happy' => 'Zelo srečen',
  'Smile' => 'Smeško',
  'Sad' => 'Žalosten',
  'Surprised' => 'Presenečen',
  'Shocked' => 'V šoku',
  'Confused' => 'Zmeden',
  'Cool' => 'Hladen',
  'Laughing' => 'Nasmejan',
  'Mad' => 'Nor',
  'Razz' => 'Nagajiv',
  'Embarassed' => 'Zbegan',
  'Crying or Very sad' => 'Jokajoč ali žalosten',
  'Evil or Very Mad' => 'Vražji ali zloben',
  'Twisted Evil' => 'Slepar',
  'Rolling Eyes' => 'Kotaleče oči',
  'Wink' => 'Mežikanje',
  'Idea' => 'Ideja',
  'Arrow' => 'Puščica',
  'Neutral' => 'Nevtralen',
  'Mr. Green' => 'Gospod zelenko',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'Zapuščam administracijo...',
  1 => 'Vstop v administracijo...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Album mora imeti ime!', //js-alert
  'confirm_modifs' => 'Res želite izvesti te spremembe?', //js-alert
  'no_change' => 'Nobenih sprememb niste naredili!', //js-alert
  'new_album' => 'Novi album',
  'confirm_delete1' => 'Želite resnično pobrisati ta album?', //js-alert
  'confirm_delete2' => '\nVse fotografije in vsi komentarji bodo prav tako pobrisani!', //js-alert
  'select_first' => 'Najprej izberite album', //js-alert
  'alb_mrg' => 'Urejanje albumov',
  'my_gallery' => '* Moja galerija *',
  'no_category' => '* Brez kategorij *',
  'delete' => 'Brisanje',
  'new' => 'Novo',
  'apply_modifs' => 'Izvedi spremembe',
  'select_category' => 'Izberi kategorijo',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Zavrnitev uporabnikov', //cpg1.4
  'user_name' => 'Uporabniško ime', //cpg1.4
  'ip_address' => 'IP naslov', //cpg1.4
  'expiry' => 'Veljavnost (prazno je za trajno)', //cpg1.4
  'edit_ban' => 'Shrani spremembe', //cpg1.4
  'delete_ban' => 'Briši', //cpg1.4
  'add_new' => 'Dodaj novo prepoved', //cpg1.4
  'add_ban' => 'Dodaj', //cpg1.4
  'error_user' => 'Ne najdem uporabnika', //cpg1.4
  'error_specify' => 'Vpisati morate uporabnika ali IP naslov', //cpg1.4
  'error_ban_id' => 'Napačni IP naslov!', //cpg1.4
  'error_admin_ban' => 'Sebe ne morete odstraniti!', //cpg1.4
  'error_server_ban' => 'Želite prepovedati dostop lastnemu serverju? C, c, c, tega pa ne morem narediti...', //cpg1.4
  'error_ip_forbidden' => 'Tega IP naslova ne morete prepovedati!<br />Če želite prepovedati zasebne IP naslove, spremenite to v <a href="admin.php">Nastavitvah</a> (smiselno samo v primeru lokalnega omrežja).', //cpg1.4
  'lookup_ip' => 'Poizvedba za IP naslovom', //cpg1.4
  'submit' => 'Naprej!', //cpg1.4
  'select_date' => 'izberite datum', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Bridge Wizard',
  'warning' => 'Warning: when using this wizard you have to understand that sensitive data is being sent using html forms. Only run it on your own PC (not on a public client like an internet cafe), and make sure to clear the browser cache and temporary files after you have finished, or others might be able to access your data!',
  'back' => 'back',
  'next' => 'next',
  'start_wizard' => 'Start bridging wizard',
  'finish' => 'Finish',
  'hide_unused_fields' => 'hide unused form fields (recommended)',
  'clear_unused_db_fields' => 'clear invalid database entries (recommended)',
  'custom_bridge_file' => 'your custom bridge file\'s name (if the bridge file\'s name is <i>myfile.inc.php</i>, enter <i>myfile</i> into this field)',
  'no_action_needed' => 'No action needed in this step. Just click \'next\' to continue.',
  'reset_to_default' => 'Reset to default value',
  'choose_bbs_app' => 'choose application to bridge coppermine with',
  'support_url' => 'Go here for support on this application',
  'settings_path' => 'path(s) used by your BBS app',
  'database_connection' => 'database connection',
  'database_tables' => 'database tables',
  'bbs_groups' => 'BBS groups',
  'license_number' => 'License number',
  'license_number_explanation' => 'enter your license number (if applicable)',
  'db_database_name' => 'Database name',
  'db_database_name_explanation' => 'Enter the name of the database your BBS app uses',
  'db_hostname' => 'Database host',
  'db_hostname_explanation' => 'Hostname where your mySQL database resides, usually &quot;localhost&quot;',
  'db_username' => 'Database user account',
  'db_username_explanation' => 'mySQL user account to use for connection with BBS',
  'db_password' => 'Database passsword',
  'db_password_explanation' => 'Passsword for this mySQL user account',
  'full_forum_url' => 'Forum URL',
  'full_forum_url_explanation' => 'Full URL of your BBS app (including the leading http:// bit, e.g. http://www.yourdomain.tld/forum)',
  'relative_path_of_forum_from_webroot' => 'Relative forum path',
  'relative_path_of_forum_from_webroot_explanation' => 'Relative path to your BBS app from the webroot (Example: if your BBS is at http://www.yourdomain.tld/forum/, enter &quot;/forum/&quot; into this field)',
  'relative_path_to_config_file' => 'Relative path to your BBS\'s config file',
  'relative_path_to_config_file_explanation' => 'Relative path to your BBS, seen from your Coppermine folder (e.g. &quot;../forum/&quot; if your BBS is at http://www.yourdomain.tld/forum/ and Coppermine at http://www.yourdomain.tld/gallery/)',
  'cookie_prefix' => 'Cookie prefix',
  'cookie_prefix_explanation' => 'this has to be your BBS\'s cookie name',
  'table_prefix' => 'Table prefix',
  'table_prefix_explanation' => 'Must match the prefix you chose for your BBS when setting it up.',
  'user_table' => 'User table',
  'user_table_explanation' => '(usually default value should be OK, unless your BBS install isn\'t standard)',
  'session_table' => 'Session table',
  'session_table_explanation' => '(usually default value should be OK, unless your BBS install isn\'t standard)',
  'group_table' => 'Group table',
  'group_table_explanation' => '(usually default value should be OK, unless your BBS install isn\'t standard)',
  'group_relation_table' => 'Group relation table',
  'group_relation_table_explanation' => '(usually default value should be OK, unless your BBS install isn\'t standard)',
  'group_mapping_table' => 'Group mapping table',
  'group_mapping_table_explanation' => '(usually default value should be OK, unless your BBS install isn\'t standard)',
  'use_standard_groups' => 'Use standard BBS usergroups',
  'use_standard_groups_explanation' => 'Use standard (built-in) usergroups (recommended). This will make all custom usergroups settings made on this page become void. Only disable this option if you REALLY know what you\'re doing!',
  'validating_group' => 'Validating group',
  'validating_group_explanation' => 'The group ID of your BBS where users accounts that need validation are in (usually default value should be OK, unless your BBS install isn\'t standard)',
  'guest_group' => 'Guest group',
  'guest_group_explanation' => 'Group ID of your BBS where guests (anonymous users) are in (default value should be OK, only edit if you know what you\'re doing)',
  'member_group' => 'Member group',
  'member_group_explanation' => 'Group ID of your BBS where &quot;regular&quot; users accounts are in (default value should be OK, only edit if you know what you\'re doing)',
  'admin_group' => 'Admin group',
  'admin_group_explanation' => 'Group ID of your BBS where admins are in (default value should be OK, only edit if you know what you\'re doing)',
  'banned_group' => 'Banned group',
  'banned_group_explanation' => 'Group ID of your BBS where banned users are in (default value should be OK, only edit if you know what you\'re doing)',
  'global_moderators_group' => 'Global moderators group',
  'global_moderators_group_explanation' => 'Group ID of your BBS where global moderators of your BBS are in (default value should be OK, only edit if you know what you\'re doing)',
  'special_settings' => 'BBS-specific settings',
  'logout_flag' => 'phpBB version (logout flag)',
  'logout_flag_explanation' => 'What\'s your BBS version (this setting specifies how logouts are being handled)',
  'use_post_based_groups' => 'Use post-based groups?',
  'logout_flag_yes' => '2.0.5 or higher',
  'logout_flag_no' => '2.0.4 or lower',
  'use_post_based_groups_explanation' => 'Should the groups from the BBS that are defined by the number of posts be taken into account (allows a granular permissions management) or just the default groups (makes administration easier, recommended). You can change this setting later as well.',
  'use_post_based_groups_yes' => 'yes',
  'use_post_based_groups_no' => 'no',
  'error_title' => 'You need to correct these errors before you can continue. Go to the previous screen.',
  'error_specify_bbs' => 'You have to specify what application you want to bridge your Coppermine install with.',
  'error_no_blank_name' => 'You can\'t leave the name of your custom bridge file blank.',
  'error_no_special_chars' => 'The bridge file name mustn\'t contain any special chars except underscore (_) and dash (-)!',
  'error_bridge_file_not_exist' => 'The bridge file %s doesn\'t exist on the server. Check if you have actually uploaded it.',
  'finalize' => 'enable/disable BBS integration',
  'finalize_explanation' => 'So far, the settings you specified have been written into the database, but BBS integration hasn\'t been enabled. You can switch integration on/off later at any time. Make sure to remember the admin username and password from standalone Coppermine, you might need it later to be able to make any changes. If anything goes wrong, go to %s and disable BBS integration there, using your standalone (unbridged) admin account (usually the one you set up during Coppermine install).',
  'your_bridge_settings' => 'Your bridge settings',
  'title_enable' => 'Enable integration/bridging with %s',
  'bridge_enable_yes' => 'enable',
  'bridge_enable_no' => 'disable',
  'error_must_not_be_empty' => 'must not be empty',
  'error_either_be' => 'must either be %s or %s',
  'error_folder_not_exist' => '%s doesn\'t exist. Correct the value you entered for %s',
  'error_cookie_not_readible' => 'Coppermine can\'t read a cookie named %s. Correct the value you entered for %s, or go to your BBS administration panel and make sure that the cookie path is readible for coppermine.',
  'error_mandatory_field_empty' => 'You can not leave the field %s blank - fill in the proper value.',
  'error_no_trailing_slash' => 'There mustn\'t be a trailing slash in the field %s.',
  'error_trailing_slash' => 'There must be a trailing slash in the field %s.',
  'error_db_connect' => 'Could not connect to the mySQL database with the data you specified. Here\'s what mySQL said:',
  'error_db_name' => 'Although Coppermine could establish a connection, it wasn\'t able to find the database %s. Make sure you have specified %s properly. Here\'s what mySQL said:',
  'error_prefix_and_table' => '%s and ',
  'error_db_table' => 'Could not find the table %s. Make sure you have specified %s correctly.',
  'recovery_title' => 'Bridge Manager: emergency recovery',
  'recovery_explanation' => 'If you came here to administer the BBS integration of your Coppermine gallery, you have to log in first as admin. If you can not log in because bridging doesn\'t work as expected, you can disable BBS integration with this page. Entering your username and password will not log you in, it will only disable BBS integration. Refer to the documentation for details.',
  'username' => 'Username',
  'password' => 'Password',
  'disable_submit' => 'submit',
  'recovery_success_title' => 'Authorization successfull',
  'recovery_success_content' => 'You have successfully disabled BBS bridging. Your Coppermine install runs now in standalone mode.',
  'recovery_success_advice_login' => 'Log in as admin to edit your bridge settings and/or enable BBS integration again.',
  'goto_login' => 'Go to login page',
  'goto_bridgemgr' => 'Go to bridge manager',
  'recovery_failure_title' => 'Authorization failed',
  'recovery_failure_content' => 'You supplied the wrong credentials. You will have to supply the admin account data of the standalone version (usually the account you set up during Coppermine install).',
  'try_again' => 'try again',
  'recovery_wait_title' => 'Wait time has not elapsed',
  'recovery_wait_content' => 'For security reasons this script does not allow failed logons in short succession, so you will have to wait a bit untill you\'re allowed to try to authenticate.',
  'wait' => 'wait',
  'create_redir_file' => 'Create redirection file (recommended)',
  'create_redir_file_explanation' => 'To redirect users back to Coppermine once they logged into your BBS, you need a redirection file to be created within your BBS folder. When this option is checked, the bridge manager will attempt to create this file for you, or give you code ready to copy-and-paste to create the file manually.',
  'browse' => 'browse',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Koledar', //cpg1.4
  'close' => 'zapri', //cpg1.4
  'clear_date' => 'pobriši datum', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Parameter potreben za \'%s\'operacijo ni vpisan!',
  'unknown_cat' => 'Izbrana kategorija ne obstaja v bazi',
  'usergal_cat_ro' => 'Brisanje kategorije od uporabniških galerij ni možno!',
  'manage_cat' => 'Urejanje kategorij',
  'confirm_delete' => 'Resnično želite pobrisati to kategorijo?', //js-alert
  'category' => 'Kategorija',
  'operations' => 'Operacija',
  'move_into' => 'Premakni v',
  'update_create' => 'Posodobi/ustvari kategorijo',
  'parent_cat' => 'Nadrejena kategorija',
  'cat_title' => 'Ime kategorije',
  'cat_thumb' => 'Ikona od kategorije',
  'cat_desc' => 'Opis kategorije',
  'categories_alpha_sort' => 'Sortiraj kategorije po abecedi (namesto uporabniško določenega načina)', //cpg1.4
  'save_cfg' => 'Shrani nastavitve', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Nastavitve', //cpg1.4
  'manage_exif' => 'Urejanje prikaza exif podatkov', //cpg1.4
  'manage_plugins' => 'Urejanje dodatkov', //cpg1.4
  'manage_keyword' => 'Urejanje ključnih besed', //cpg1.4
  'restore_cfg' => 'Povrni osnovne nastavitve',
  'save_cfg' => 'Shrani nove nastavitve',
  'notes' => 'Opombe',
  'info' => 'Informacija',
  'upd_success' => 'Nastavitve galerije so bile uspešno posodobljene',
  'restore_success' => 'Povrnjene so bile osnovne nastavitve galerije',
  'name_a' => 'Ime naraščajoče',
  'name_d' => 'Ime padajoče',
  'title_a' => 'Naziv naraščajoče',
  'title_d' => 'Naziv padajoče',
  'date_a' => 'Datum naraščajoče',
  'date_d' => 'Datum padajoče',
  'pos_a' => 'Pozicija naraščajoče', //cpg1.4
  'pos_d' => 'Pozicija padajoče', //cpg1.4
  'th_any' => 'Max razmerje',
  'th_ht' => 'Višina',
  'th_wd' => 'Širina',
  'label' => 'oznaka',
  'item' => 'predmet',
  'debug_everyone' => 'Vsi',
  'debug_admin' => 'Samo administrator',
  'no_logs'=> 'Izklopljeno', //cpg1.4
  'log_normal'=> 'Normalno', //cpg1.4
  'log_all' => 'Vse', //cpg1.4
  'view_logs' => 'Prikaz zgodovine', //cpg1.4
  'click_expand' => 'kliknite na ime za več podatkov', //cpg1.4
  'expand_all' => 'Razširi vse', //cpg1.4
  'notice1' => '(*) Teh nastavitev ne smete spreminjati, če so fotografije že v galeriji.', //cpg1.4 - (relocated)
  'notice2' => '(**) Če spremenite te nastavitve, bo to vplivalo samo na fotografije, ki jih dodate od spremembe naprej. <br> Spremembe pa lahko izvedete tudi na obstoječih fotografijah in to z uporabo &quot;<a href="util.php">Orodja</a> (sprememba velikosti...)&quot; pripomočka v administrativnem meniju.', //cpg1.4 - (relocated)
  'notice3' => '(***) Log podatki se zapisujejo v angleščini.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Funkcija je izklopljena, če se uporablja forum', //cpg1.4
  'auto_resize_everyone' => 'Vsi', //cpg1.4
  'auto_resize_user' => 'Samo uporabniki', //cpg1.4
  'ascending' => 'naraščajoče', //cpg1.4
  'descending' => 'padajoče', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Osnovne nastavitve',
  array('Ime galerije', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Opis galerije', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Administratorjev e-mail', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('Naslov za link v e-razglednicah (Poglej si več slik), brez \'index.php\' ali podobnega na koncu', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('Naslov za začetno stran', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Dovoli ZIP download priljubljenih fotografij', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Časovni pas glede na GMT (Trenutni čas: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Omogoči šifrirana gesla (poti nazaj ni)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Prikaz ikone za pomoč (pomoč samo v angleščini)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Omogoči klik na ključne besede pri iskanju','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Omogoči dodatke', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Dovoli zavrnitev zasebnih uporabnikov', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Brskalni vmesnik pri dodajanju fotografij', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Jezik in kodiranje znakov',
  array('Jezik', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Uporabim angleški izraz, če ni prevoda?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Kodna tabela', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Prikaz seznama jezikov', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Prikaz zastavic od jezikov', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Prikaži tipko &quot;reset&quot; pri izbiri jezikov', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Display previous/next on tabbed pages', 'previous_next_tab', 1), //cpg1.4

  'Nastavitev izgleda galerije - teme',
  array('Izgled galerije', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Prikaži seznam tem', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Prikaži tipko &quot;reset&quot; pri izbiri tem', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Prikaži FAQ (vprašanja in odgovori)', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Ime uporabniške povezave v meniju (dodatne)', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('Naslov od dodatne povezave v meniju', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Prikaži pomoč za bbcode', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Označi teme, ki so definirane kot XHTML in CSS','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Pot do uporabniške glave', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Pot do uporabniške pete', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Nastavitve za prikaz albumov',
  array('Širina glavne tabele (pixli ali %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Število nivojev za prikaz kategorij', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Število albumov na strani', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Število kolon za prikaz albumov', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Velikost ikon v pixlih', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Vsebina na glavni strani', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Prikaz ikon albumov za prvi nivo kategorij','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Sortiranje kategorij po abecedi','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Prikaz števila povezanih fotografij','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Nastavitve za prikaz ikon',
  array('Število kolon na strani z ikonami', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Število vrstic na strani z ikonami', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Število zavihkov na strani', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Prikaži opis slike (zraven imena) pod ikono', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Prikaži število ogledov pod ikono', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Prikaži število komentarjev pod ikono', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Prikaži ime uporabnika pod ikono', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Prikaži ime datoteke pod ikono', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  array('Prikaži opis albuma pod ikono', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Privzeto sortiranje fotografij', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Minimalno število ocen za sliko, da se uvrsti na seznam \'naj-ocene\'', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Prikaz fotografij', //cpg1.4
  array('Širina tabele za prikaz fotografij (pixli ali %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Informacija o fotografiji je privzeto vidna', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Max. velikost za opis fotografije', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Max. število znakov v posamezni besedi', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Prikaži filmski trak z ikonami', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Prikaži ime datoteke pod filmskim trakom', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Št. ikon na traku', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Interval pri samodejnem predvajanju v mili sekundah (1 sekunda = 1000 mili sekund)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Nastavitve za komentarje', //cpg1.4
  array('Odstrani prepovedane besede v komentarjih', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Dovoli smeškote v komentarjih', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Dovoli več komentarjev od istega uporabnika', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Max. število vrstic komentarja', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Max. velikost komentarja', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Obvesti administratorja o novem komentarju', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Sortiranje komentarjev', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Oznaka za anonimni komentar', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Nastavitve za datoteke in ikone',
  array('Kvaliteta za JPEG datoteke', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Max. velikost za ikone <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Velikost uporabi za širino ali višino ali razmerje ikone <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Ustvari vmesne slike','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Max. širina ali višina vmesnih slik/videa <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Max. velikost datotek/slik (kB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Max. širina ali višina dodanih slik (pixli)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Samodejno prilagodi velikost prevelikih fotografij', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Dodatne nastavitve za datoteke in ikone',
  array('Albumi so lahko tudi zasebni (Opomba: če preklopite iz DA na NE, bodo vsi obstoječi zasebni albumi postali javni)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Prikaži ikone zasebnih albumov tudi neprijavljenim uporabnikom','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Prepovedani znaki v imenih datotek', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Dovoljene vrste foto datotek', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Dovoljene vrste video datotek', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Samodejno predvajanje filmov', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Dovoljene vrste avdio datotek', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Dovoljene vrste dokumentov (txt...)', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Način za spreminjanje velikosti fotografij','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Pot do ImageMagick programa (primer: /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Ukazna vrstica za ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Preberi EXIF podatke v JPEG datotekah', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Preberi IPTC podatke v JPEG datotekah', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Direktorij za albume <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Direktorij za fotografije od uporabnikov <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Predpona za vmesne slike <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Predpona za ikone <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Privzete pravice za direktorije', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Privzete pravice za datoteke', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Nastavitve uporabnikov',
  array('Dovoli registriranje novih uporabnikov', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Dovoli neprijavljenim uporabnikom dostop', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Registracija zahteva preverjanje e-mail naslova', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Obvesti administratorja o novi registraciji', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Registracija zahteva odobritev administratorja', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Dva uporabnika lahko imata enak e-mail naslov', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Obvesti administratorja o čakajočih fotografijah za odobritev', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Prijavljeni uporabniki lahko vidijo seznam članov', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Uporabniki lahko spremenijo e-mail naslov v svojih nastavitvah', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Uporabniki lahko imajo nadzor nad svojimi fotografijami v javnih albumih', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Število napačnih prijav pred nastopom prepovedi prijave (za zaščito pred poskusi vdora)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Čas trajanja prepovedi dostopa po neuspešni prijavi in zavrnitvi', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Pošlji poročilo administratorju', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Dodatna polja za opis uporabnikov (pustite prazno, če ni potrebno).
  Uporabi Profil 6 za dolge vnose kot npr. življenjepis', //cpg1.4
  array('Profil 1', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Profil 2', 'user_profile2_name', 0), //cpg1.4
  array('Profil 3', 'user_profile3_name', 0), //cpg1.4
  array('Profil 4', 'user_profile4_name', 0), //cpg1.4
  array('Profil 5', 'user_profile5_name', 0), //cpg1.4
  array('Profil 6', 'user_profile6_name', 0), //cpg1.4

  'Dodatna polja za vpis informacij o fotografiji (pustite prazno, če ne uporabljate)',
  array('Polje 1', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Polje 2', 'user_field2_name', 0),
  array('Polje 3', 'user_field3_name', 0),
  array('Polje 4', 'user_field4_name', 0),

  'Nastavitve piškotkov',
  array('Ime za piškotke', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Pot do piškotkov', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'E-mail nastavitve  (običajno se tukaj ničesar ne spreminja. Pustite prazno, če niste prepričani o tem kaj vpisujete)', //cpg1.4
  array('SMTP gostitelj (če je prazno, se uporablja sendmail)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP uporabniško ime', 'smtp_username', 0), //cpg1.4
  array('SMTP geslo', 'smtp_password', 0), //cpg1.4

  'Zgodovina in statistika', //cpg1.4
  array('Način beleženja zgodovine <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Beleženje pošiljanja e-razglednic', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Spremljaj podrobno statistiko o glasovanju','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Spremljaj podrobno statistiko o ogledih','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Vzdrževanje galerije', //cpg1.4
  array('Omogoči razhroščevanje', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Prikaži opombe v načinu razhroščevanja', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Galerija je izklopljena', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Pošiljanje e-razglednic',
  'ecard_sender' => 'Pošiljatelj',
  'ecard_recipient' => 'Naslovnik',
  'ecard_date' => 'Datum',
  'ecard_display' => 'Prikaži e-razglednico',
  'ecard_name' => 'Ime',
  'ecard_email' => 'e-mail',
  'ecard_ip' => 'IP #',
  'ecard_ascending' => 'naraščajoče',
  'ecard_descending' => 'padajoče',
  'ecard_sorted' => 'Razvrsti',
  'ecard_by_date' => 'po datumu',
  'ecard_by_sender_name' => 'po pošiljatelju',
  'ecard_by_sender_email' => 'po pošiljateljevem e-mail naslovu',
  'ecard_by_sender_ip' => 'po pošiljateljevem IP naslovu',
  'ecard_by_recipient_name' => 'po naslovniku',
  'ecard_by_recipient_email' => 'po naslovnikovem e-mail naslovu',
  'ecard_number' => 'prikazani zapisi od %s do %s od %s',
  'ecard_goto_page' => 'pojdi na stran',
  'ecard_records_per_page' => 'Zapisov na strani',
  'check_all' => 'Označi vse',
  'uncheck_all' => 'Odznači vse',
  'ecards_delete_selected' => 'Briši označene e-razglednice',
  'ecards_delete_confirm' => 'Ste prepričani, da želite pobrisati te zapise? Označite okvirček!',
  'ecards_delete_sure' => 'Prepričan sem',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Vpisati morate ime in komentar',
  'com_added' => 'Komentar je bil dodan',
  'alb_need_title' => 'Vpisati morate ime za album!',
  'no_udp_needed' => 'Posodobitve niso potrebne.',
  'alb_updated' => 'Album je bil posodobljen',
  'unknown_album' => 'Izbrani album ne obstaja ali pa nimate pravic za dodajanje fotografij v njega',
  'no_pic_uploaded' => 'Nobena fotografija ni bila dodana!<br /><br />Če ste resnično poslali fotografijo, preverite ali je to sploh dovoljeno...',
  'err_mkdir' => 'Kreiranje direktorija %s ni bilo uspešno!',
  'dest_dir_ro' => 'Željeni direktorij %s ne omogoča pisanja - pravice!',
  'err_move' => 'Nemogoče je premakniti %s v %s!',
  'err_fsize_too_large' => 'Dimenzije slike so prevelike (dovoljeno je %s x %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'Velikost datoteke presega limit (dovoljeno je %s kB) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'Poslana fotografija ni v pravilnem formatu!',
  'allowed_img_types' => 'Dodate lahko samo %s fotografije.',
  'err_insert_pic' => 'Fotografije \'%s\' se ne da dodati v album ',
  'upload_success' => 'Vaša fotografija je bila dodana.<br /><br />Vidna bo takoj po administratorjevi odobritvi.',
  'notify_admin_email_subject' => '%s - Obvestilo o poslani fotografiji',
  'notify_admin_email_body' => 'Fotografija je bila dodana s strani %s in čaka na odobritev. Obiščite %s',
  'info' => 'Informacija',
  'com_added' => 'Komentar dodan',
  'alb_updated' => 'Album posodobljen',
  'err_comment_empty' => 'Komentar je prazen!',
  'err_invalid_fext' => 'Veljavne so samo datoteke z naslednjimi končnicami: <br /><br />%s.',
  'no_flood' => 'Oprostite, ampak ste avtor zadnjega komentarja za to fotografijo<br /><br />Izberite urejanje, če ga želite spremeniti',
  'redirect_msg' => 'Prestavljen boste na novo stran.<br /><br /><br />Kliknite \'NAPREJ\', če se stran samodejno ne zamenja',
  'upl_success' => 'Vaše fotografije so bile uspešno dodane',
  'email_comment_subject' => 'Dodani komentar v galerijo',
  'email_comment_body' => 'Nekdo je vpisal novi komentar. Vidite ga lahko na ',
  'album_not_selected' => 'Album ni izbran', //cpg1.4
  'com_author_error' => 'Registrirani uporabnik uporablja ta vzdevek. Prijavite se ali uporabite drugega', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Naslov',
  'fs_pic' => 'velika slika',
  'del_success' => 'Uspešno pobrisano',
  'ns_pic' => 'normalna velikost slike',
  'err_del' => 'brisanje ni možno',
  'thumb_pic' => 'ikona',
  'comment' => 'komentar',
  'im_in_alb' => 'slika v albumu',
  'alb_del_success' => 'Album \'%s\' pobrisan', //cpg1.4
  'alb_mgr' => 'Urejanje albumov',
  'err_invalid_data' => 'Napačni podatki v \'%s\'',
  'create_alb' => 'Kreiram album \'%s\'',
  'update_alb' => 'Posodabljam album \'%s\' z naslovom \'%s\' in indeksom \'%s\'',
  'del_pic' => 'Pobriši sliko',
  'del_alb' => 'Pobriši album',
  'del_user' => 'Pobriši uporabnika',
  'err_unknown_user' => 'Izbrani uporabnik ne obstaja!',
  'err_empty_groups' => 'Skupina ne obstaja ali pa je prazna!', //cpg1.4
  'comment_deleted' => 'Komentar uspešno pobrisan',
  'npic' => 'Fotografije', //cpg1.4
  'pic_mgr' => 'Urejanje fotografij', //cpg1.4
  'update_pic' => 'Posodabljam fotografijo \'%s\' z imenom \'%s\' in indexom \'%s\'', //cpg1.4
  'username' => 'Uporabniško ime', //cpg1.4
  'anonymized_comments' => '%s anonimnih komentarjev', //cpg1.4
  'anonymized_uploads' => '%s anonimnih poslanih fotografij', //cpg1.4
  'deleted_comments' => '%s pobrisanih komentarjev', //cpg1.4
  'deleted_uploads' => '%s poslanih fotografij pobrisanih', //cpg1.4
  'user_deleted' => 'uporabnik %s pobrisan', //cpg1.4
  'activate_user' => 'Aktiviraj uporabnika', //cpg1.4
  'user_already_active' => 'Račun je že aktiviran', //cpg1.4
  'activated' => 'Aktivirani', //cpg1.4
  'deactivate_user' => 'Deaktivirani uporabniki', //cpg1.4
  'user_already_inactive' => 'Račun je že bil deaktiviran', //cpg1.4
  'deactivated' => 'Deaktivirani', //cpg1.4
  'reset_password' => 'Ponastavitev gesla', //cpg1.4
  'password_reset' => 'Geslo spremenjeno v %s', //cpg1.4
  'change_group' => 'Spremeni osnovno skupino', //cpg1.4
  'change_group_to_group' => 'Spreminjam iz %s v %s', //cpg1.4
  'add_group' => 'Dodaj sekundarno skupino', //cpg1.4
  'add_group_to_group' => 'Dodajanje uporabnika %s v skupino %s. Uporabnik je sedaj član primarne skupine %s in član sekundarne skupine %s.', //cpg1.4
  'status' => 'Status', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Podatki za prikaz e-razglednice so bili poškodovani s strani vašega e-mail programa.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Res želite pobrisati to fotografijo? \\nTudi komentarji od nje bodo pobrisani.', //js-alert
  'del_pic' => 'POBRIŠI TO SLIKO',
  'size' => '%s x %s pixlov',
  'views' => '%s krat',
  'slideshow' => 'Samodejno predvajanje',
  'stop_slideshow' => 'Ustavi predvajanje',
  'view_fs' => 'Kliknite za ogled večje slike',
  'edit_pic' => 'Uredi podatke', //cpg1.4
  'crop_pic' => 'Obreži in zavrti',
  'set_player' => 'Spremeni predvajalnik',
);

$lang_picinfo = array(
  'title' =>'Informacija o fotografiji',
  'Filename' => 'Ime datoteke',
  'Album name' => 'Ime albuma',
  'Rating' => 'Ocena (št. glasov:%s)',
  'Keywords' => 'Ključne besede',
  'File Size' => 'Velikost datoteke',
  'Date Added' => 'Datum vpisa', //cpg1.4
  'Dimensions' => 'Velikost fotografije',
  'Displayed' => 'Št. ogledov',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Make', //cpg1.4
  'Model' => 'Model', //cpg1.4
  'DateTime' => 'Date Time', //cpg1.4
  'DateTimeOriginal' => 'Date taken', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Max Aperture', //cpg1.4
  'FocalLength' => 'Focal length', //cpg1.4
  'Comment' => 'Komentar',
  'addFav'=>'Dodaj med priljubljene',
  'addFavPhrase'=>'Priljubljene',
  'remFav'=>'Odstrani iz priljubljenih',
  'iptcTitle'=>'IPTC Title',
  'iptcCopyright'=>'IPTC Copyright',
  'iptcKeywords'=>'IPTC Keywords',
  'iptcCategory'=>'IPTC Category',
  'iptcSubCategories'=>'IPTC Sub Categories',
  'ColorSpace' => 'Color Space', //cpg1.4
  'ExposureProgram' => 'Exposure Program', //cpg1.4
  'Flash' => 'Flash', //cpg1.4
  'MeteringMode' => 'Metering Mode', //cpg1.4
  'ExposureTime' => 'Exposure Time', //cpg1.4
  'ExposureBiasValue' => 'Exposure Bias', //cpg1.4
  'ImageDescription' => ' Image Description', //cpg1.4
  'Orientation' => 'Orientation', //cpg1.4
  'xResolution' => 'X Resolution', //cpg1.4
  'yResolution' => 'Y Resolution', //cpg1.4
  'ResolutionUnit' => 'Resolution Unit', //cpg1.4
  'Software' => 'Software', //cpg1.4
  'YCbCrPositioning' => 'YCbCrPositioning', //cpg1.4
  'ExifOffset' => 'Exif Offset', //cpg1.4
  'IFD1Offset' => 'IFD1 Offset', //cpg1.4
  'FNumber' => 'FNumber', //cpg1.4
  'ExifVersion' => 'Exif Version', //cpg1.4
  'DateTimeOriginal' => 'DateTime Original', //cpg1.4
  'DateTimedigitized' => 'DateTime digitized', //cpg1.4
  'ComponentsConfiguration' => 'Components Configuration', //cpg1.4
  'CompressedBitsPerPixel' => 'Compressed Bits Per Pixel', //cpg1.4
  'LightSource' => 'Light Source', //cpg1.4
  'ISOSetting' => 'ISO Setting', //cpg1.4
  'ColorMode' => 'Color Mode', //cpg1.4
  'Quality' => 'Quality', //cpg1.4
  'ImageSharpening' => 'Image Sharpening', //cpg1.4
  'FocusMode' => 'Focus Mode', //cpg1.4
  'FlashSetting' => 'Flash Setting', //cpg1.4
  'ISOSelection' => 'ISO Selection', //cpg1.4
  'ImageAdjustment' => 'Image Adjustment', //cpg1.4
  'Adapter' => 'Adapter', //cpg1.4
  'ManualFocusDistance' => 'Manual Focus Distance', //cpg1.4
  'DigitalZoom' => 'Digital Zoom', //cpg1.4
  'AFFocusPosition' => 'AF Focus Position', //cpg1.4
  'Saturation' => 'Saturation', //cpg1.4
  'NoiseReduction' => 'Noise Reduction', //cpg1.4
  'FlashPixVersion' => 'Flash Pix Version', //cpg1.4
  'ExifImageWidth' => 'Exif Image Width', //cpg1.4
  'ExifImageHeight' => 'Exif Image Height', //cpg1.4
  'ExifInteroperabilityOffset' => 'Exif Interoperability Offset', //cpg1.4
  'FileSource' => 'File Source', //cpg1.4
  'SceneType' => 'Scene Type', //cpg1.4
  'CustomerRender' => 'Customer Render', //cpg1.4
  'ExposureMode' => 'Exposure Mode', //cpg1.4
  'WhiteBalance' => 'White Balance', //cpg1.4
  'DigitalZoomRatio' => 'Digital Zoom Ratio', //cpg1.4
  'SceneCaptureMode' => 'Scene Capture Mode', //cpg1.4
  'GainControl' => 'Gain Control', //cpg1.4
  'Contrast' => 'Contrast', //cpg1.4
  'Saturation' => 'Saturation', //cpg1.4
  'Sharpness' => 'Sharpness', //cpg1.4
  'ManageExifDisplay' => 'Manage Exif Display', //cpg1.4
  'submit' => 'Pošlji', //cpg1.4
  'success' => 'Posodobitve uspešno shranjene.', //cpg1.4
  'details' => 'Podrobnosti', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'V REDU',
  'edit_title' => 'Uredi komentar',
  'confirm_delete' => 'Res želite pobrisati komentar?', //js-alert
  'add_your_comment' => 'Dodaj komentar',
  'name'=>'Ime',
  'comment'=>'Komentar',
  'your_name' => 'Anonimnež',
  'report_comment_title' => 'Obvesti administratorja o tem komentarju', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Kliknite na fotografijo, da zaprete to okno',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Pošlji e-razglednico',
  'invalid_email' => '<font color="red"><b>Opozorilo</b></font>: napačni e-mail naslov:', //cpg1.4
  'ecard_title' => 'To je e-razglednica od %s za tebe',
  'error_not_image' => 'Samo fotografije se lahko pošiljajo kot e-razglednice.',
  'view_ecard' => 'Če razglednice ne vidite pravilno, kliknite na to povezavo', //cpg1.4
  'view_ecard_plaintext' => 'Za ogled razglednice označite in pokirajte ta naslov v naslovno vrstico vašega internet brskalnika:', //cpg1.4
  'view_more_pics' => 'Kliknite tukaj za ogled večih slik!', //cpg1.4
  'send_success' => 'Razglednica je bila poslana',
  'send_failed' => 'Oprostite, ampak server ne omogoča pošiljanja razglednic...',
  'from' => 'Od',
  'your_name' => 'Vaše ime',
  'your_email' => 'Vaš e-mail naslov',
  'to' => 'Za',
  'rcpt_name' => 'Prejemnikovo ime',
  'rcpt_email' => 'Prejemnikov e-mail naslov',
  'greetings' => 'Pozdrav', //cpg1.4
  'message' => 'Sporočilo', //cpg1.4
  'ecards_footer' => 'Poslano od %s z IP %s ob %s', //cpg1.4
  'preview' => 'Predogled e-razglednice', //cpg1.4
  'preview_button' => 'Predogled', //cpg1.4
  'submit_button' => 'Pošlji', //cpg1.4
  'preview_view_ecard' => 'To je nadomestna povezava za ogled razglednice - ni uporabna pri predogledu.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Poročilo administratorju', //cpg1.4
  'invalid_email' => '<b>Opozorilo</b>: napačni e-mail naslov!', //cpg1.4
  'report_subject' => 'Poročilo od %s on a gallery %s', //cpg1.4
  'view_report' => 'Nadomestna povezava, če poročilo ni pravilno prikazano', //cpg1.4
  'view_report_plaintext' => 'Za ogled poročila, prekopirajte to povezavo v naslovno vrstico vašega brskalnika:', //cpg1.4
  'view_more_pics' => 'Galerija', //cpg1.4
  'send_success' => 'Vaše poročilo je bilo poslano', //cpg1.4
  'send_failed' => 'Oprostite, ampak strežnik ne more poslati vašega poročila...', //cpg1.4
  'from' => 'Od', //cpg1.4
  'your_name' => 'Vaše ime', //cpg1.4
  'your_email' => 'Vaš e-mail naslov', //cpg1.4
  'to' => 'Za', //cpg1.4
  'administrator' => 'Administrator/Mod', //cpg1.4
  'subject' => 'Zadeva', //cpg1.4
  'comment_field_name' => 'Poročilo o komentarju od "%s"', //cpg1.4
  'reason' => 'Razlog', //cpg1.4
  'message' => 'Sporočilo', //cpg1.4
  'report_footer' => 'Poslano od %s z IP-ja %s ob %s (čas na serverju)', //cpg1.4
  'obscene' => 'obsceno', //cpg1.4
  'offensive' => 'žaljivo', //cpg1.4
  'misplaced' => 'ni povezano s temo/napačni vpis', //cpg1.4
  'missing' => 'manjka', //cpg1.4
  'issue' => 'napaka/ni možen ogled', //cpg1.4
  'other' => 'ostalo', //cpg1.4
  'refers_to' => 'Datoteka s poročilom se nanaša na', //cpg1.4
  'reasons_list_heading' => 'razlog za poročilo:', //cpg1.4
  'no_reason_given' => 'razlog ni naveden', //cpg1.4
  'go_comment' => 'Pojdite na komentar', //cpg1.4
  'view_comment' => 'Ogled poročila s komentarjem', //cpg1.4
  'type_file' => 'datoteka', //cpg1.4
  'type_comment' => 'komentar', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Informacija o fotografiji',
  'album' => 'Album',
  'title' => 'Naziv',
  'filename' => 'Ime datoteke', //cpg1.4
  'desc' => 'Opis',
  'keywords' => 'Ključne besede',
  'new_keyword' => 'Nova ključna beseda', //cpg1.4
  'new_keywords' => 'Najdene nove ključne besede', //cpg1.4
  'existing_keyword' => 'Obstoječe ključne besede', //cpg1.4
  'pic_info_str' => '%sx%s - %skB - %s ogledov - %s ocen',
  'approve' => 'Odobri fotografijo',
  'postpone_app' => 'Preloži odobritev',
  'del_pic' => 'Pobriši fotografijo',
  'del_all' => 'Pobriši vse fotografije', //cpg1.4
  'read_exif' => 'Ponovno preberi EXIF podatke',
  'reset_view_count' => 'Resetiraj števec ogledov',
  'reset_all_view_count' => 'Resetiraj vse števce ogledov', //cpg1.4
  'reset_votes' => 'Resetiraj ocene',
  'reset_all_votes' => 'Resetiraj vse ocene', //cpg1.4
  'del_comm' => 'Pobriši komentarje',
  'del_all_comm' => 'Pobriši vse komentarje', //cpg1.4
  'upl_approval' => 'Odobritev poslanega gradiva', //cpg1.4
  'edit_pics' => 'Edit files',
  'see_next' => 'Naslednja fotografija',
  'see_prev' => 'Predhodna fotografija',
  'n_pic' => '%s fotografij',
  'n_of_pic_to_disp' => 'Število fotografij za prikaz',
  'apply' => 'Izvedi spremembe',
  'crop_title' => 'Coppermine urejevalnik fotografij',
  'preview' => 'Predogled',
  'save' => 'Shrani fotografijo',
  'save_thumb' =>'Shrani kot ikono',
  'gallery_icon' => 'Naredi to ikono za mojo', //cpg1.4
  'sel_on_img' =>'Izbira mora biti vsa na fotografiji!', //js-alert
  'album_properties' =>'Lastnosti albuma', //cpg1.4
  'parent_category' =>'Nadrejena kategorija', //cpg1.4
  'thumbnail_view' =>'Prikaz ikon', //cpg1.4
  'select_unselect' =>'označi/odznači vse', //cpg1.4
  'file_exists' => "Ciljna datoteka '%s' že obstaja.", //cpg1.4
  'rename_failed' => "Preimenovanje '%s' v '%s' ni uspelo.", //cpg1.4
  'src_file_missing' => "Manjka izvorna datoteka '%s'.", // cpg 1.4
  'mime_conv' => "Ne morem pretvoriti '%s' v '%s'",//cpg1.4
  'forb_ext' => 'Prepovedana končnica datoteke.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Pogosto postavljena vprašanja',
  'toc' => 'Kazalo',
  'question' => 'Vprašanje: ',
  'answer' => 'Odgovor: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Splošna vprašanja',
  array('Zakaj se moram registrirati?', 'Registracija da ali ne - to določi administrator. Registrirani uporabniki imajo nekaj dodatnih možnosti kot je to dodajanje fotografij, komentarjev, ocenjevanje, lastni albumi...', 'allow_user_registration', '1'),
  array('Kako se lahko registriram?', 'Kliknite na &quot;Registracija&quot; in izpolnite vsa potrebna polja (lahko tudi dodatna, če to želite).<br />Če je administrator določil aktiviranje računa preko e-mail sporočila, boste po takoj , ko pošljete izpolnjen obrazec, prejeli e-mail sporočilo z navodili za aktiviranje vaše registracije. Aktiviranje je potrebno pred prijavo.', 'allow_user_registration', '1'), //cpg1.4
  array('Kako se prijavim?', 'Kliknite na &quot;Prijava&quot;, vpišite svoje uporabniško ime in geslo ter označite polje pred &quot;Zapomni si me&quot;.<br /><b>POMEMBNO:Omogočene morate imeti piškotke in le-ti ne smejo biti pobrisani, če želite uporabiti opcijo &quot;Zapomni si me&quot;.</b>', 'offline', 0),
  array('Zakaj se ne morem prijaviti?', 'Ste se registrirali in kliknili na povezavo, ki ste jo prejeli na vpisani e-mail?. Ta povezava aktivira vašo registracijo. Če je temu tako, vam ostane še kontaktiranje administratorja.', 'offline', 0),
  array('Kaj če pozabim geslo?', 'Uporabite povezavo &quot;Pozabil sem geslo&quot;, lahko pa tudi pošljete sporočilo administratorju, ki vam bo lahko pomagal.', 'offline', 0),
  //array('What if I changed my email address?', 'Just simply login and change your email address through &quot;Profile&quot;', 'offline', 0),
  array('Kako lahko shranim fotografije med &quot;Moje priljubljene&quot;?', 'Pri ogledu fotografije kliknite na ikono &quot;informacije o fotografiji&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Informacije o fotografiji" />); premaknite se navzdol po strani in pri prikazu podatkov o fotografijo kliknite na &quot;Dodaj med priljubljene&quot;.<br />V nastavitvah galerije je možno, da so informacije o fotografiji že privzeto vidne.<br />POMEMBNO:piškotki morajo biti omogočeni, ne smete pa jih tudi brisati, če želite da bo ta funkcija delovala.', 'offline', 0),
  array('Kako lahko ocenim fotografijo?', 'Kliknite na eno od ocen pod fotografijo.', 'offline', 0),
  array('Kako lahko dodam komentar?', 'Če je omogočeno, vpišite svoj komentar spodaj pod fotografijo.', 'offline', 0),
  array('Kako lahko dodam fotografijo?', 'Kliknite na &quot;Dodajanje fotografij&quot; (če je to omogočeno), prebrskajte lokalni disk in izberite fotografije, ki jih želite dodati. Dodajte ime in/ali opis fotografije, izberite še album in kliknite na &quot;NAPREJ&quot;.<br /><br />Lahko pa uporabite tudi čarovnika za dodajanje fotografij - <b>Windows XP čarovnik za dodajanje</b>.<br />Kako to naredite je opisano <a href="xp_publish.php">TUKAJ.</a>', 'allow_private_albums', 1), //cpg1.4
  array('Kam vse lahko dodam fotografije?', 'Fotografije lahko dodate v enega od svojih albumov v &quot;Moji galeriji&quot;. Administrator lahko omogoči dodajanje še v druge albume.', 'allow_private_albums', 0),
  array('Kako velike fotografije lahko dodam?', 'Velikost in vrsta fotografij (jpg, png, itd.) je določena s strani administratorja.', 'offline', 0),
  array('Kako lahko kreiram, preimenujem ali pobrišem albume v quot;Moji galeriji&quot;?', 'Po prijavi ste že v  &quot;Administraciji&quot;<br />Kliknite na &quot;Kreiraj/naroči album&quot; in kliknite na &quot;Novo&quot;. Spremenite &quot;Novo&quot; v ime po vaši izbiri.<br />Album lahko na ta način tudi preimenujete.<br />Kliknite na  &quot;Izvedi spremembe&quot;.', 'allow_private_albums', 0),
  array('Kako lahko spremenim in onemogočim ostalim, da vidijo moje albume?', 'Po prijavi ste že v &quot;Administraciji&quot;<br />Kliknite na &quot;Urejanje svojih albumov&quot; izberite album,, ki ga želite urejati.<br />Tukaj lahko spremenite vse lastnosti albuma. Na koncu kliknite še na &quot;Posodobi album&quot;.', 'allow_private_albums', 0),
  array('Kako lahko vidim galerije ostalih uporabnikov?', 'Kliknite na &quot;Seznam albumov&quot; in izberite &quot;Uporabniške galerije&quot;.', 'allow_private_albums', 0),
  array('Kaj so piškotki?', 'Piškotki so majhne tekstovne datoteke, ki jih spletno mesto shrani na vašem računalniku.<br />Piškotki omogočajo prijao in odjavo na strani galerije.', 'offline', 0),
  array('Kje lahko najdem to galerijo še za svojo spletno stran?', 'Coppermine je prosta multimedijska galerija, ki je dostopna pod GNU GPL pogoji. Vsebuje polno možnosti, obstaja pa za razlišne platforme. Obiščite <a href="http://coppermine.sf.net/">Coppermine domačo stran</a> kjer si jo lahko presnamete.', 'offline', 0),

  'Sprehod po galeriji',
  array('Kaj pomeni &quot;Seznam albumov&quot;?', 'Ta povezava prikaže celotno galerijo v kateri se trenutno nahajate, vklučno s povezavami do vseh albumov. Če se ne nahajate v eni od kategorij, boste videli tudi povezave do posameznih kategorij. Ikone so lahko povezave do posamezne kategorije.', 'offline', 0),
  array('Kaj pomeni &quot;Moja galerija&quot;?', 'Ta opcija omogoča uporabnikom, da si sami ustvarijo svojo galerijo in dodajajo albume in fotografije v nje.', 'allow_private_albums', 1), //cpg1.4
  array('Kakšna je razlika med &quot;Administracija&quot; in &quot;Uporabniški način&quot;?', 'Ta opcija omogoča uporabnikom urejanje svojih galerij in ostalega, če je to seveda omogočeno s strani administratorja.', 'allow_private_albums', 0),
  array('Kaj pomeni &quot;Dodajanje fotografij&quot;?', 'Uporabnikom omogoča dodajanje fotografij v lastne albume oz. albume določene s strani administratorja.', 'allow_private_albums', 0),
  array('Kaj pomeni &quot;Zadnje dodane fotografije&quot;?', 'Prikaže seznam fotografij, ki so bile dodane kot zadnje - to so nove fotografije v galeriji.', 'offline', 0),
  array('Kaj pomeni &quot;Zadnji komentarji&quot;?', 'This feature shows the last comments along with the files posted by users.', 'offline', 0),
  array('Kaj pomeni &quot;Most Viewed&quot;?', 'To je seznam komentarjev, ki so jih uporabniki (prijavljeni ali anonimni) nazadnje dodali.', 'offline', 0),
  array('Kaj pomeni &quot;Najbolj ocenjeno&quot;?', 'To je prikaz fotografij, ki imajo največjo povprečno oceno  dobljeno s strani obiskovalcev (primer: pet uporabnikov, vsak je dal oceno <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: fotografija bo imela povprečno oceno <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;pet obiskovalcev oceni fotografijo od 1 do 5 (1,2,3,4,5) - rezultat je povprečje <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Ocene gredo od <img src="images/rating5.gif" width="65" height="14" border="0" alt="odlično" /> (odlično) do <img src="images/rating0.gif" width="65" height="14" border="0" alt="zanič" /> (zanič).', 'offline', 0),
  array('Kaj pomeni &quot;Moji favoriti&quot;?', 'Ta opcija omogoča, da si uporabniki shranijo seznam priljubljenih fotografij v piškotek, ki ga prejme na svoj računalnik s pletne strani.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Obnovitev gesla',
  'err_already_logged_in' => 'Ste že prijavljeni!',
  'enter_email' => 'Vpišite svoj e-mail naslov', //cpg1.4
  'submit' => 'Naprej',
  'failed_sending_email' => 'Sporočila za obnovitev gesla ni bilo možno poslati!',
  'email_sent' => 'Sporočilo z uporabniškim imenom in geslom je bilo poslano %s',
  'err_unk_user' => 'Izbrani uporabnik ne obstaja!',
  'passwd_reminder_subject' => '%s - obnovitev gesla',
  'passwd_reminder_body' => 'Prosili ste za svoje podatke potrebne za prijavo :
Uporabniško ime: %s
Geslo: %s
Kliknite %s za prijavo.',
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Ime skupine', //cpg1.4
  'permissions' => 'Dovoljenja', //cpg1.4
  'public_albums' => 'Dodajanje v javne albume', //cpg1.4
  'personal_gallery' => 'Osebne galerije', //cpg1.4
  'upload_method' => 'Način pošiljanja fotografij', //cpg1.4
  'disk_quota' => 'Disk', //cpg1.4
  'rating' => 'Ocenjevanje', //cpg1.4
  'ecards' => 'Razglednice', //cpg1.4
  'comments' => 'Komentarji', //cpg1.4
  'allowed' => 'Dovoljeno', //cpg1.4
  'approval' => 'Odobritev', //cpg1.4
  'boxes_number' => 'Št. polj', //cpg1.4
  'variable' => 'sprem.', //cpg1.4
  'fixed' => 'fiksno', //cpg1.4
  'apply' => 'Izvedi spremembe',
  'create_new_group' => 'Dodaj novo skupino',
  'del_groups' => 'Briši označene skupine',
  'confirm_del' => 'Opozorilo: če pobrišete skupino, bodo vsi njeni uporabniki premeščeni v skupino \'Registered\'!\n\nŽelite nadaljevati?', //js-alert
  'title' => 'Urejanje uporabniških skupin',
  'num_file_upload' => 'Polja pri nalaganju datotek', //cpg1.4
  'num_URI_upload' => 'Polja pri nalaganju URI', //cpg1.4
  'reset_to_default' => 'Ponastavi na privzeto ime (%s) - priporočeno!', //cpg1.4
  'error_group_empty' => 'Tabela skupin je bila prazna!<br /><br />Kreirane so bile privzete skupine, prosimo osvežite prikaz te strani', //cpg1.4
  'explain_greyed_out_title' => 'Zakaj je ta vrstica siva?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Ne morete spreminjati lastnosti te skupine, ker ste nastavili opcijo &quot; Dovoli neprijavljenim uporabnikom (gost ali anonimnež) dostop&quot; na &quot;NE&quot; na strani z nastavitvami. Vsi člani skupine %s se lahko samo prijavijo, drugega pa ne smejo početi. Zaradi tega nastavitve skupine na njih nimajo vpliva.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Ne morete spreminjati lastnosti skupine %s, ker njeni člani tako ali tako ne smejo početi ničesar.', //cpg1.4
  'group_assigned_album' => 'pripadajoči album(i)', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Dobrodošli!',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Resnično želite pobrisati ta album? \\nVse fotografije in komentarji bodo pobriani.', //js-alert
  'delete' => 'BRISANJE',
  'modify' => 'LASTNOSTI',
  'edit_pics' => 'UREJANJE',
);

$lang_list_categories = array(
  'home' => 'Domov',
        'stat1' => 'Št. slik:<b>[pictures]</b> - št. albumov:<b>[albums]</b> - št. kategorij:<b>[cat]</b>  - št. komentarjev:<b>[comments]</b> - št. ogledov:<b>[views]</b>',
        'stat2' => 'Št. slik:<b>[pictures]</b> - št. albumov:<b>[albums]</b> - št. ogledov<b>[views]</b>',
        'xx_s_gallery' => 'Galerija od %s',
        'stat3' => 'Št. slik:<b>[pictures]</b> - št. albumov:<b>[albums]</b> - št. komentarjev:<b>[comments]</b>  - št. ogledov:<b>[views]</b>'
);

$lang_list_users = array(
  'user_list' => 'Seznam uporabnikov',
  'no_user_gal' => 'Brez uporabniških galerij',
  'n_albums' => 'Št. albumov:%s',
  'n_pics' => 'Št. fotografij:%s',
);

$lang_list_albums = array(
  'n_pictures' => 'Št. fotografij:%s',
  'last_added' => ', zadnja dodana %s',
  'n_link_pictures' => '%s povezanih fotografij', //cpg1.4
  'total_pictures' => 'Skupaj fotografij:%s', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Urejanje ključnih besed', //cpg1.4
  'edit' => 'uredi', //cpg1.4
  'delete' => 'briši', //cpg1.4
  'search' => 'išči', //cpg1.4
  'keyword_test_search' => 'išči %s v novem oknu', //cpg1.4
  'keyword_del' => 'briši ključno besedeo %s', //cpg1.4
  'confirm_delete' => 'Ste prepričani, da želite pobrisati ključno besedo %s v celotni galeriji?', //cpg1.4  // js-alert
  'change_keyword' => 'spremeni ključno besedo', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Prijava',
  'enter_login_pswd' => 'Vpišite uporabniško ime in geslo za prijavo',
  'username' => 'Uporabniško ime',
  'password' => 'Geslo',
  'remember_me' => 'Zapomni si me',
  'welcome' => 'Pozdravljeni %s ...',
  'err_login' => '*** Prijava ni uspela. Poskusite znova ***',
  'err_already_logged_in' => 'Ste že prijavljeni!',
  'forgot_password_link' => 'Pozabil sem geslo',
  'cookie_warning' => 'Opozorilo: vaš brskalnik ne omogoča uporabe piškotkov', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Odjava',
  'bye' => 'Lepo pozdravljeni %s ...',
  'err_not_loged_in' => 'Niste prijavljeni!',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'zapri', //cpg1.4
  'submit' => 'Naprej', //cpg1.4
  'up' => 'gor za en nivo', //cpg1.4
  'current_path' => 'trenutna pot', //cpg1.4
  'select_directory' => 'Izberite direktorij', //cpg1.4
  'click_to_close' => 'Kliknite na fotografijo, da zaprete okno',
); 

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Posodobi album %s',
  'general_settings' => 'Splošne nastavitve',
  'alb_title' => 'Ime albuma',
  'alb_cat' => 'Kategorija od albuma',
  'alb_desc' => 'Opis albuma',
  'alb_keyword' => 'Ključna beseda za album', //cpg1.4
  'alb_thumb' => 'Ikona albuma',
  'alb_perm' => 'Pravice za ta album',
  'can_view' => 'Album lahko vidijo',
  'can_upload' => 'Obiskovalci lahko dodajajo fotografije',
  'can_post_comments' => 'Obiskovalci lahko dodajajo komentarje',
  'can_rate' => 'Obiskovalci lahko ocenjujejo fotografije',
  'user_gal' => 'Uporabniška galerija',
  'no_cat' => '* Brez kategorije *',
  'alb_empty' => 'Album je prazen',
  'last_uploaded' => 'Zadnje dodano...',
  'public_alb' => 'Vsi (javni album)',
  'me_only' => 'Samo jaz',
  'owner_only' => 'Lastnik albuma (%s)',
  'groupp_only' => 'Člani skupine \'%s\'',
  'err_no_alb_to_modify' => 'V bazi ni albumov, ki bi jih lahko urejali.',
  'update' => 'Posodobi album',
  'reset_album' => 'Reset album', //cpg1.4
  'reset_views' => 'Nastavi števec ogledov na &quot;0&quot; v %s', //cpg1.4
  'reset_rating' => 'Pobriši ocene vseh fotografij v %s', //cpg1.4
  'delete_comments' => 'Pobriši vse komentarje v %s', //cpg1.4
  'delete_files' => '%sNepovratno briše vse fotografije v %s', //cpg1.4
  'views' => 'ogledov', //cpg1.4
  'votes' => 'glasov', //cpg1.4
  'comments' => 'komentarjev', //cpg1.4
  'files' => 'datotek', //cpg1.4
  'submit_reset' => 'pošlji spremembe', //cpg1.4
  'reset_views_confirm' => 'Prepričan sem', //cpg1.4
  'notice1' => '(*) odvisno od nastavitev %sgroups%s ',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Geslo od albuma', //cpg1.4
  'alb_password_hint' => 'Opomnik za albumovo geslo', //cpg1.4
  'edit_files' =>'Urejanje datotek', //cpg1.4
  'parent_category' =>'Nadrejena kategorija', //cpg1.4
  'thumbnail_view' =>'Pogled ikon', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info',
  'explanation' => 'To je rezultat izvedbe PHP funkcije <a href="http://www.php.net/phpinfo">phpinfo()</a>, prikazan v okviru galerije.',
  'no_link' => 'Ni preveč pametno, da bi te podatke videl še kdo razen vas. Prikazani so tudi podatki, ki so pomembni za varnost delovanja vaše galerije. Tudi zaradi tega lahko te podatke vidi samo administrator (tudi, če komu pošljete povezavo do te strani, podatkov ne bo videl).',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Urejanje fotografij', //cpg1.4
  'select_album' => 'Izberite album', //cpg1.4
  'delete' => 'Briši', //cpg1.4
  'confirm_delete1' => 'Ste prepričani, da želite pobrisati ti fotografijo?', //cpg1.4
  'confirm_delete2' => '\nFotografija bo trajno pobrisana.', //cpg1.4
  'apply_modifs' => 'Izvedi spremembe', //cpg1.4
  'confirm_modifs' => 'Potrdite spremembe', //cpg1.4
  'pic_need_name' => 'Fotografija mora imeti ime!', //cpg1.4
  'no_change' => 'Niste naredili nobene spremembe!', //cpg1.4
  'no_album' => '* Brez albuma *', //cpg1.4
  'explanation_header' => 'Nastavljeno razvrščanje na tej strani bo upoštevano samo v naslednih primerih', //cpg1.4
  'explanation1' => 'administrator je nastavil v nastavitvah sortiranje na "pozicija naraščajoče" ali "pozicija padajoče", kar je privzeto za vse uporabnike, ki si niso sami nastavili razvrščanja fotografij', //cpg1.4
  'explanation2' => 'uporabnik ima nastavljeno sortiranje na "pozicija naraščajoče" ali "pozicija padajoče" strani z ikonami', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Ste prepričani, da želite odstraniti ta dodatek', //cpg1.4
  'confirm_delete' => 'Ste prepričani, da želite pobrisati ta dodatek', //cpg1.4
  'pmgr' => 'Urejanje dodatkov', //cpg1.4
  'name' => 'Ime', //cpg1.4
  'author' => 'Avtor', //cpg1.4
  'desc' => 'Opis', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Nameščeni dodatki', //cpg1.4
  'n_plugins' => 'Dodatki, ki še niso aktivni', //cpg1.4
  'none_installed' => 'Brez dodatkov', //cpg1.4
  'operation' => 'Operacija', //cpg1.4
  'not_plugin_package' => 'Datoteka, ki ste jo naložili NI veljavni dodatek za galerijo.', //cpg1.4
  'copy_error' => 'Pri kopiranju dodatka v direktorij z dodatki je prišlo do napake.', //cpg1.4
  'upload' => 'Nalaganje', //cpg1.4
  'configure_plugin' => 'Uredi dodatek', //cpg1.4
  'cleanup_plugin' => 'Počisti dodatek', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Oprostite, ampak to fotografijo ste že ocenili',
  'rate_ok' => 'Vaša ocena je bila shranjena',
  'forbidden' => 'Svojih fotografij ne morete ocenjevati.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Čeprav bo administrator {SITE_NAME} poskušal odstraniti vsako neprimerno vsebino objavljeno v galeriji, je nemogoče hkrati in pravočasno pregledati vse kar je objavljeno s strani obiskovalcev. Zavedati se morate, da vse objavljeno na teh straneh predstavlja pogled in mnenje avtorja in ne administratorja oz. vzdrževalca teh spletnih strani (razen tistega kar je objavljeno z njune strani).<br />
<br />
S sodelovanjem na teh spletnih straneh se tudi strinjate, da ne boste objavljali nobenih obscenih, vulgarnih, žaljivih, seksualnih, sovražnih, rasno nestrpnih in ostalih vsebin, ki so v nasprotju z veljavno zakonodajo in splošnimi moralnimi normami. Strinjate se tudi, da ima aministrator in/ali moderator določenih vsebin na {SITE_NAME} pravico v katerem koli trenutku pravico odstraniti po njegovem mnenju sporni objavljeni prispevek. Kot uporabnik se strinjate, da je z vaše strani objavljeno gradivo shranjeno v bazi in je vaše osebno. V nasprotnem primeru morate pridobiti dovoljenje za objavo od lastnika in pri objavi navesti tudi vir podatkov. Čeprav ti podatki ne bodo posredovani nobeni tretji stranki, administrator oziroma skrbnik teh strani ne odgovarja za izgubljene podatke v primeru hekerskega poskusa kraje podatkov.<br />
<br />
Te spletne strani uporabljajo piškotke (cookies) za shranjevanje informacij na vašem računalniku. Ti podatki so namenjeni isključno temu, da vam olajšajo brskanje na teh straneh. Vaš email naslov pa je uporabljen samo za to, da vam lahko posredujemo geslo za prijavo.<br />
<br />
S klikom na 'STRINJAM SE' potrjujete, da ste seznanjeni s pogoji sodelovanje na straneh {SITE_NAME}.
EOT;

$lang_register_php = array(
  'page_title' => 'Registracija',
  'term_cond' => 'Navodila in pogoji za sodelovanje',
  'i_agree' => 'STRINJAM SE',
  'submit' => 'Pošlji registracijo',
  'err_user_exists' => 'To uporabniško ime že obstaja, izberite si drugo',
  'err_password_mismatch' => 'Gesli se ne ujemata - ponovite vpis',
  'err_uname_short' => 'Uporabniško ime mora imeti vsaj dva znaka',
  'err_password_short' => 'Geslo mora biti dolgo vsaj dva znaka',
  'err_uname_pass_diff' => 'Uporabniško ime in geslo morata biti različna',
  'err_invalid_email' => 'Napačni e-mail naslov!',
  'err_duplicate_email' => 'Ta e-mail naslov je nekdo že uporabil',
  'enter_info' => 'Vpis podatkov za registracijo',
  'required_info' => 'Obvezni podatki',
  'optional_info' => 'Neobvezni vpis',
  'username' => 'Uporabniško ime',
  'password' => 'Geslo',
  'password_again' => 'Ponovite geslo',
  'email' => 'e-mail',
  'location' => 'Kraj',
  'interests' => 'Zanimanje',
  'website' => 'Domača stran',
  'occupation' => 'Zaposlitev',
  'error' => 'NAPAKA',
  'confirm_email_subject' => '%s - registracija potrjena',
  'information' => 'Informacija',
  'failed_sending_email' => 'Ne morem poslati e-mail sporočila s podatki o registraciji!',
  'thank_you' => 'Hvala za registracijo.<br /><br />Navodila za aktiviranje računa so bila poslana na vpisani e-mail naslov.',
  'acct_created' => 'Vaš račun je bil ustvarjen - lahko se prijavite s svojim uporabniškim imenom in geslom',
  'acct_active' => 'Vaš račun je aktiven in se lahko prijavite',
  'acct_already_act' => 'Vaš račun je že aktiven!', //cpg1.4
  'acct_act_failed' => 'Tega računa ni možno aktivirati!',
  'err_unk_user' => 'Izbrani uporabnik ne obstaja!',
  'x_s_profile' => 'Profil od %s',
  'group' => 'Skupina',
  'reg_date' => 'Datum pristopa',
  'disk_usage' => 'Velikost diska',
  'change_pass' => 'Spremeni geslo',
  'current_pass' => 'Staro geslo',
  'new_pass' => 'Novo geslo',
  'new_pass_again' => 'Novo geslo ponovno',
  'err_curr_pass' => 'Staro geslo ni pravilno',
  'apply_modif' => 'Izvedi spremembe',
  'change_pass' => 'Spremeni moje geslo',
  'update_success' => 'Profil je bil posodobljen',
  'pass_chg_success' => 'Geslo je bilo spremenjeno',
  'pass_chg_error' => 'Geslo ni bilo spremenjeno',
  'notify_admin_email_subject' => '%s - Registration notification',
  'last_uploads' => 'Zadnje dodane datoteke.<br />Kliknite za ogled vseh datotek od', //cpg1.4
  'last_comments' => 'Zadnji komentar.<br />Kliknite za ogled vseh komentarjev od', //cpg1.4
  'notify_admin_email_body' => 'Registriral se je novi uporabnik z imenom "%s"',
  'pic_count' => 'Dodanih datotek', //cpg1.4
  'notify_admin_request_email_subject' => '%s - zahtevek za registracijo', //cpg1.4
  'thank_you_admin_activation' => 'Hvala za registracijo.<br /><br />Vaš zahtevek za aktiviranje uporabniškega računa je bil poslan administratorju. Ko bo vaš račun odobren, prejmete e-mail sporočilo z obvestilom o aktiviranju.', //cpg1.4
  'acct_active_admin_activation' => 'Uporabniški račun je aktiviran, uporabniku je bilo poslano sporočilo z obvestilom o aktiviranju.', //cpg1.4
  'notify_user_email_subject' => '%s - obvestilo o aktiviranju računa', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Hvala za registracijo pri: {SITE_NAME}

Če želite aktivirati svoj uporabniški račun (uporabniško ime: {USER_NAME} ),kliknite na spodnjo povezavo ali pa jo prekopirajte v naslovno vrstico internet brskalnika.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Lep pozdrav,

administrator od {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Novi uporabnik z uporabniškim imenom "{USER_NAME}" se je registriral v galeriji.

Da aktivirate njegov uporabniški račun, morate klikniti na spodnjo povezavo.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Vaš uporabniški račun je bil odobren in aktiviran.

Lahko se prijavite na <a href="{SITE_LINK}">{SITE_LINK}</a> s svojim uporabniškim imenom "{USER_NAME}"


Lepo pozdravljeni,

administrator SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Prikaz komentarjev',
  'no_comment' => 'Ni komentarjev za prikaz',
  'n_comm_del' => 'Št. pobrisanik komentarjev:%s',
  'n_comm_disp' => 'Št. komentarjev za prikaz',
  'see_prev' => 'Predhodni komentar',
  'see_next' => 'naslednji komentar',
  'del_comm' => 'Pobriši izbrane komentarje',
  'user_name' => 'Ime', //cpg1.4
  'date' => 'Datum', //cpg1.4
  'comment' => 'Komentar', //cpg1.4
  'file' => 'Datoteka', //cpg1.4
  'name_a' => 'Uporabniško ime naraščajoče', //cpg1.4
  'name_d' => 'Uporabniško ime padajoče', //cpg1.4
  'date_a' => 'Datum naraščajoče', //cpg1.4
  'date_d' => 'Datum padajoče', //cpg1.4
  'comment_a' => 'Komentar naraščajoče', //cpg1.4
  'comment_d' => 'Komentar padajoče', //cpg1.4
  'file_a' => 'Datoteka naraščajoče', //cpg1.4
  'file_d' => 'Datoteka padajoče', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Iskanje po galeriji', //cpg1.4
  'submit_search' => 'Najdi', //cpg1.4
  'keyword_list_title' => 'Seznam ključnih besed', //cpg1.4
  'keyword_msg' => 'Zgornji seznam ne vsebuje vsega. Ne vključuje besed iz nazivov fotografij ali opisov le-teh. Poskusite z razširjenim iskanjem.',  //cpg1.4
  'edit_keywords' => 'Uredi ključne besede', //cpg1.4
  'search in' => 'Išči v:', //cpg1.4
  'ip_address' => 'IP naslov', //cpg1.4
  'fields' => 'Išči v', //cpg1.4
  'age' => 'Starost', //cpg1.4
  'newer_than' => 'Novejše od', //cpg1.4
  'older_than' => 'Starejše od', //cpg1.4
  'days' => 'dni', //cpg1.4
  'all_words' => 'Uporabi vse besede (IN)', //cpg1.4
  'any_words' => 'Uporabi eno besedo (ALI)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Naziv', //cpg1.4
  'caption' => 'Opis', //cpg1.4
  'keywords' => 'Ključne besede', //cpg1.4
  'owner_name' => 'Uporabnik', //cpg1.4
  'filename' => 'Ime datoteke', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Iskanje novih fotografij',
  'select_dir' => 'Izberite direktorij',
  'select_dir_msg' => 'Ta ukaz vam omogoča dodajanje fotografij, ki ste jih dodali na server s pomočjo FTP protokola.<br /><br />Izberite direktorij v katerega ste dodal fotografije', //cpg1.4
  'no_pic_to_add' => 'Tu ni nobenih fotografij za dodajanje',
  'need_one_album' => 'Za uporabo te funkcije morate imeti vsaj en album',
  'warning' => 'Opozorilo',
  'change_perm' => 'pisanje v direktorij ni omogočeno, spremenite pravice v 755 ali 777 pred ponovnim poskusom dodajanja fotografij!',
  'target_album' => '<b>Dodaj fotografije &quot;</b>%s<b>&quot; v </b>%s',
  'folder' => 'Direktorij',
  'image' => 'fotografija',
  'album' => 'Album',
  'result' => 'Rezultat',
  'dir_ro' => 'Pisanje onemogočeno. ',
  'dir_cant_read' => 'Branje onemogočeno. ',
  'insert' => 'Dodajanje novih fotografij v galerijo',
  'list_new_pic' => 'Seznam novih fotografij',
  'insert_selected' => 'Dodaj izbrane fotografije',
  'no_pic_found' => 'Brez novih fotografij',
  'be_patient' => 'Potrpežljivost... dodajanje traja nekaj časa',
  'no_album' => 'album ni bil izbran',
  'result_icon' => 'kliknite za podrobnosti ali osvežite prikaz strani',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : pomeni, da so fotografije uspešno dodane'.
                          '<li><b>DP</b> : pomeni, da je fotografija duplikat in je že v bazi'.
                          '<li><b>PB</b> : pomeni, da fotografije ni možno dodati. Preverite nastavitve in pravice za direktorij v katerem se nahajajo'.
                          '<li><b>NA</b> : pomeni, da niste izbrali albuma v katerega želite dodati fotografije, kliknite gumb \'<a href="javascript:history.back(1)">nazaj</a>\' in izberite n album. Če albuma še nimate, ga najprej <a href="albmgr.php">kreirajte</a></li>'.
                          '<li>Če ne vidite oznak OK, DP ali PB, kliknite na manjkajočo slikico za prikaz napake, ki jo generira PHP'.
                          '<li>Za osvežitev prikaza pritisnite tipko reload v svojem brskalniku'.
                          '</ul>',
  'select_album' => 'Izberite album',
  'check_all' => 'Označi vse',
  'uncheck_all' => 'Odznači vse',
  'no_folders' => 'V direktoriju "albums" ni nobenega direktorija. Naredite vsaj en uporabniški album v direktoriju "albums" in s FTP protokolom naložite fotografije v njega. S FTP-jem ne smete nalagati fotografij v direktorij "userpics" ali "edit". Ta direktorija sta rezervirana za http dodajanje in interne namene.', //cpg1.4
   'albums_no_category' => 'Albumi brez kategorij', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Osebni albumi', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'vmesnik za brskanje (priporočeno)', //cpg1.4
  'edit_pics' => 'Urejanje fotografij', //cpg1.4
  'edit_properties' => 'Lastnosti albuma', //cpg1.4
  'view_thumbs' => 'Prikaz ikon', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'prikaži/skrij ta album', //cpg1.4
  'vote' => 'Podrobnosti glasovanja', //cpg1.4
  'hits' => 'Podrobnosti ogledov', //cpg1.4
  'stats' => 'Statistika glasovanja', //cpg1.4
  'sdate' => 'Datum', //cpg1.4
  'rating' => 'Ocena', //cpg1.4
  'search_phrase' => 'Iskana beseda', //cpg1.4
  'referer' => 'Napotitelj', //cpg1.4
  'browser' => 'Brskalnik', //cpg1.4
  'os' => 'Operacijski sistem', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Razvrsti po %s', //cpg1.4
  'ascending' => 'naraščajoče', //cpg1.4
  'descending' => 'padajoče', //cpg1.4
  'internal' => 'int', //cpg1.4
  'close' => 'zapri', //cpg1.4
  'hide_internal_referers' => 'skrij interne napotitelje', //cpg1.4
  'date_display' => 'Date display', //cpg1.4
  'submit' => 'pošlji/osveži', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Dodajanje fotografij',
  'custom_title' => 'Kreiranje obrazca za dodajanje fotografij',
  'cust_instr_1' => 'Nastavite si lahko poljubno število polj na obrazcu za dodajanje fotografij, le da ne presežete spodnjih max. vrednosti.',
  'cust_instr_2' => 'Zahtevek za kreiranje obrazca',
  'cust_instr_3' => 'Polja za lokalne fotografije: %s',
  'cust_instr_4' => 'URI/URL polja: %s',
  'cust_instr_5' => 'URI/URL polja:',
  'cust_instr_6' => 'Polja za lokalne fotografije:',
  'cust_instr_7' => 'Vpišite število polj za posamezno vrsto in kliknite na \'NAPREJ\'. ',
  'reg_instr_1' => 'Prepovedana akcija pri kreiranju obrazca.',
  'reg_instr_2' => 'Sedaj lahko dodate fotografije - uporabite spodnji obrazec. Velikost posamezne datoteke, ki jo želite dodati, ne sme preseči velikosti %s Kb. Stisnjene (ZIP) datoteke, ki jih boste dodali (neglede na opcijo dodajanja lokalnih datotek ali preko URL naslova) bodo ostale nerazpakirane.',
  'reg_instr_3' => 'Če želite razpakirati zip datoteke, uporabite obrazec za dodajanje v \'Decompressive ZIP Upload\' področju.',
  'reg_instr_4' => 'Če uporabite opcijo URI/URL za dodajanje fotografij, vpišite pot do fotografij na naslednji način: http://www.mojastran.com/images/deteljica.jpg',
  'reg_instr_5' => 'Ko izpolnite obrazec, kliknite na \'NAPREJ\'.',
  'reg_instr_6' => 'Decompressive ZIP Uploads:',
  'reg_instr_7' => 'Dodajanje lokalnih fotografij:',
  'reg_instr_8' => 'URI/URL dodajanje fotografij:',
  'error_report' => 'Poročilo o napaki',
  'error_instr' => 'Pri naslednjih datotekah je prišlo do napake:',
  'file_name_url' => 'Ime datoteke/URL',
  'error_message' => 'Vsebina napake',
  'no_post' => 'Datoteka ni dodana s POST funkcijo.',
  'forb_ext' => 'Prepovedana končnica datoteke.',
  'exc_php_ini' => 'Presežena velikost datoteke dovoljena v php.ini.',
  'exc_file_size' => 'Presežena velikost datoteke dovoljena v nastavitvah galerije.',
  'partial_upload' => 'Dodajanje je samo delno uspelo.',
  'no_upload' => 'Dodajanje ni bilo izvedeno.',
  'unknown_code' => 'Neznana PHP napaka...',
  'no_temp_name' => 'Brez dodajanja - ni temp ime.',
  'no_file_size' => 'Ne vsebuje podatkov/poškodovano',
  'impossible' => 'Impossible to move.',
  'not_image' => 'Ni fotografija/poškodovano',
  'not_GD' => 'Ni GD podaljšek.',
  'pixel_allowance' => 'Višina in/ali širina fotografije je večja kot je dovoljeno v nastavitvah galerije.', //cpg1.4
  'incorrect_prefix' => 'Napačna URI/URL predpona',
  'could_not_open_URI' => 'Ne morem odpreti URI.',
  'unsafe_URI' => 'Varnosti ni možno preveriti.',
  'meta_data_failure' => 'Manjkajo Meta podatki',
  'http_401' => '401 Neautorizirani dostop',
  'http_402' => '402 Potrebno predhodno plačilo',
  'http_403' => '403 Prepovedano',
  'http_404' => '404 Ni najdeno',
  'http_500' => '500 Interna strežniška napaka',
  'http_503' => '503 Servis ni na razpolago',
  'MIME_extraction_failure' => 'MIME tip ni prepoznan.',
  'MIME_type_unknown' => 'Neznani MIME tip',
  'cant_create_write' => 'Datoteke za pisanje ni možno kreirati.',
  'not_writable' => 'Pisanje v datoteko ni možno.',
  'cant_read_URI' => 'Ne morem prebrati URI/URL',
  'cant_open_write_file' => 'Ne morem odpreti URI datoteke za pisanje.',
  'cant_write_write_file' => 'Ne morem pisati v URI datoteko za pisanje.',
  'cant_unzip' => 'Razpakiranje datoteke ni možno.',
  'unknown' => 'Neznana napaka',
  'succ' => 'Uspešno dodano',
  'success' => 'Št. uspešno dodanih datotek:%s',
  'add' => 'Prosimo kliknite \'NAPREJ\' da dodate fotografije v albume.',
  'failure' => 'Dodajanje ni uspelo',
  'f_info' => 'Podatki o datoteki',
  'no_place' => 'Prejšnja datoteka ni bila dodana.',
  'yes_place' => 'Prejšnja datoteka je bila uspešno dodana.',
  'max_fsize' => 'Maksimalna velikost datoteke je %s Kb',
  'album' => 'Album',
  'picture' => 'Fotografija',
  'pic_title' => 'Ime fotografije',
  'description' => 'Opis fotografije',
  'keywords' => 'Ključne besede (ločite jih s presledki)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Izberite s seznama</a>', //cpg1.4
  'keywords_sel' =>'Izberite ključno besedo', //cpg1.4
  'err_no_alb_uploadables' => 'Oprostite, tukaj ni albumov v katere bi lahko dodali fotografije',
  'place_instr_1' => 'Prosimo dodajte fotografije v album. Lahko dodate še podatke o vsaki fotografiji.',
  'place_instr_2' => 'Na dodajanje čaka še več fotografij. Kliknite na \'Nadaljuj\'.',
  'process_complete' => 'Uspešno ste dodali vse fotografije.',
   'albums_no_category' => 'Albumi brez kategorij', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* osebni albumi', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Izberite album', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Zapri', //cpg1.4
  'no_keywords' => 'Oprostite, ključnih besed ni na razpolago!', //cpg1.4
  'regenerate_dictionary' => 'Osveži slovar', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Seznam uporabnikov', //cpg1.4
  'user_manager' => 'Urejanje uporabnikov', //cpg1.4
  'title' => 'Urejanje uporabnikov',
  'name_a' => 'Ime naraščajoče',
  'name_d' => 'Ime padajoče',
  'group_a' => 'Skupina naraščajoče',
  'group_d' => 'Skupina padajoče',
  'reg_a' => 'Datum reg. naraščajoče',
  'reg_d' => 'Datum reg. padajoče',
  'pic_a' => 'Št. fotogr. naraščajoče',
  'pic_d' => 'Št. fotogr. padajoče',
  'disku_a' => 'Poraba diska naraščajoče',
  'disku_d' => 'Poraba diska padajoče',
  'lv_a' => 'Zadnji obisk naraščajoče',
  'lv_d' => 'Zadnji obisk padajoče',
  'sort_by' => 'Razvrsti uporabnike po',
  'err_no_users' => 'Tabela s podatki je prazna!',
  'err_edit_self' => 'Svojega prifila ne morete spremeniti. Uporabite povezavo \'Moj profil\'',
  'edit' => 'Uredi', //cpg1.4
  'with_selected' => 'Z označenim:', //cpg1.4
  'delete' => 'Briši', //cpg1.4
  'delete_files_no' => 'obdrži fotografije (označi kot anonimni prispevek)', //cpg1.4
  'delete_files_yes' => 'pobriši javne fotografije', //cpg1.4
  'delete_comments_no' => 'zadrži komentarje (označi kot anonimne vpise)', //cpg1.4
  'delete_comments_yes' => 'pobriši komentarje', //cpg1.4
  'activate' => 'Vklopi', //cpg1.4
  'deactivate' => 'Izklopi', //cpg1.4
  'reset_password' => 'Ponastavi geslo', //cpg1.4
  'change_primary_membergroup' => 'Spremeni osnovno skupino', //cpg1.4
  'add_secondary_membergroup' => 'Dodaj sekundarno skupino', //cpg1.4
  'name' => 'Uporabniško ime',
  'group' => 'Skupina',
  'inactive' => 'Neaktivno',
  'operations' => 'Operacija',
  'pictures' => 'Fotografije',
  'disk_space_used' => 'Porabljeni prostor', //cpg1.4
  'disk_space_quota' => 'Dodeljeni prostor', //cpg1.4
  'registered_on' => 'Registracija', //cpg1.4
  'last_visit' => 'Zadnji obisk',
  'u_user_on_p_pages' => 'Št. uporabnikov:%d (št. strani:%d)',
  'confirm_del' => 'Želite pobrisati tega uporabnika? \\nVsi njegovi albumi in fotografije bodo pobrisani.', //js-alert
  'mail' => 'Pošta',
  'err_unknown_user' => 'Izbrani uporabnik ne obstaja!',
  'modify_user' => 'Uredi uporabnika',
  'notes' => 'Opombe',
  'note_list' => '<li>Če gesla ne želite spreminjati, pustite polje za geslo prazno',
  'password' => 'Geslo',
  'user_active' => 'Uporabnik je aktiven',
  'user_group' => 'Uporabnikova skupina',
  'user_email' => 'Uporabnikov e-mail',
  'user_web_site' => 'Uporabnikova domača stran',
  'create_new_user' => 'Dodaj novega uporabnika',
  'user_location' => 'Kraj',
  'user_interests' => 'Hobiji',
  'user_occupation' => 'Zaposlitev',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Recent uploads',
  'never' => 'nikoli',
  'search' => 'Iskanje uporabnika', //cpg1.4
  'submit' => 'Pošlji', //cpg1.4
  'search_submit' => 'Naprej!', //cpg1.4
  'search_result' => 'Rezultati iskanja: ', //cpg1.4
  'alert_no_selection' => 'Izbrati morate vsaj enega uporabnika!', //cpg1.4 //js-alert
  'password' => 'geslo', //cpg1.4
  'select_group' => 'Izberite skupino', //cpg1.4
  'groups_alb_access' => 'Pravice albuma glede na skupino', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategorija', //cpg1.4
  'modify' => 'Spremembe?', //cpg1.4
  'group_no_access' => 'Ta skupina nima posebnih pravic', //cpg1.4
  'notice' => 'Opombe', //cpg1.4
  'group_can_access' => 'Album(i), do katerih lahko dostopa samo "%s"', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Kreira imena slik iz imena datotek', //cpg1.4
'Brisanje imen', //cpg1.4
'Ponastavi ikone in spremeni velikost slik', //cpg1.4
'Pobriše originalne slike in jih nadomesti z novimi', //cpg1.4
'Briše originalne ali vmesne fotografije, da sprosti prostor na disku', //cpg1.4
'Briše komentarje brez pripadajočih fotografij', //cpg1.4
'Ponovno preveri dimenzije in velikost fotografij (če so bile pred tem ročno spremenjene)', //cpg1.4
'Resetira števec ogledov', //cpg1.4
'Prikaže phpinfo', //cpg1.4
'Posodobi podatkovni strežnik', //cpg1.4
'Prikaže datoteko z zgodovino', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Administracijski pripomočki',
  'what_it_does' => 'Kaj vse lahko naredite',
  'file' => 'Datoteka',
  'problem' => 'Problem', //cpg1.4
  'status' => 'Status', //cpg1.4
  'title_set_to' => 'naslov spremenjen v',
  'submit_form' => 'pošlji',
  'updated_succesfully' => 'uspešno posodobljeno',
  'error_create' => 'NAPAKA pri kreiranju',
  'continue' => 'Obdelam več fotografij',
  'main_success' => 'Datoteka %s je bila uspešno uporabljena za izhodišče',
  'error_rename' => 'Napaka pri preimenovanju %s v %s',
  'error_not_found' => 'Datoteke %s ni možno najti',
  'back' => 'nazaj na osnovno stran',
  'thumbs_wait' => 'Posodabljam ikone in/ali spreminjam velikost fotografij...',
  'thumbs_continue_wait' => 'Nadaljujem s posodabljanjem ikon in/ali spreminjanjem velikosti fotografij...',
  'titles_wait' => 'Posodabljam naslove, počakajte prosim...',
  'delete_wait' => 'Brišem naslove, počakajte prosim...',
  'replace_wait' => 'Brišem originalne fotografije in jih nadomeščam s spremenjenimi, počakajte prosim...',
  'instruction' => 'Kratka navodila',
  'instruction_action' => 'Izberite akcijo',
  'instruction_parameter' => 'Nastavite parametre',
  'instruction_album' => 'Izberite album',
  'instruction_press' => 'Pritisnite %s',
  'update' => 'Posodabljanje ikon in/ali spremenjenih fotografij',
  'update_what' => 'Kaj naj bo posodobljeno',
  'update_thumb' => 'Samo ikone',
  'update_pic' => 'Samo spremenjene fotografije',
  'update_both' => 'Oboje, ikone in pretvorjene fotografije',
  'update_number' => 'Število fotografij, ki se bodo spremenile ob vsakem kliku',
  'update_option' => '(poskusite z nižjo vrednostjo, če pri obdelavi pride do izteka časa na strežniku)',
  'filename_title' => 'Ime datoteke &rArr; Naziv datoteke',
  'filename_how' => 'Kako naj spremenim naziv datoteke',
  'filename_remove' => 'Odstrani .jpg končnico in nadomesti _ (podčrtaj) s presledki',
  'filename_euro' => 'Spremeni 2003_11_23_13_20_20.jpg v 23/11/2003 13:20',
  'filename_us' => 'Spremeni 2003_11_23_13_20_20.jpg v 11/23/2003 13:20',
  'filename_time' => 'Spremeni 2003_11_23_13_20_20.jpg v 13:20',
  'delete' => 'Briši nazive fotografij ali fotografije originalne velikosti',
  'delete_title' => 'Brisanje naziv fotografij',
  'delete_title_explanation' => 'Pobisani bodo nazivi vseh fotografij v izbranem albumu.', //cpg1.4
  'delete_original' => 'Brisanje fotografij originalnih velikosti',
  'delete_original_explanation' => 'Pobrisane bodo vse VELIKE fotografije.', //cpg1.4
  'delete_intermediate' => 'Brisanje vmesnih fotografij', //cpg1.4
  'delete_intermediate_explanation' => 'Pobrisane bodo vse fotografije vmesnih velikosti.<br />Uporabite za sproščanje prostora na disku, če ste izklopili vmesne fotografije potem, ko ste jih že dodali v galerijo.', //cpg1.4
  'delete_replace' => 'Briše originalne fotografije in jih nadomesti s pretvorjenimi',
  'titles_deleted' => 'Vsi naslovi v navedenm albumu so bili odstranjeni', //cpg1.4
  'deleting_intermediates' => 'Brišem vmesne fotograpije, počakajte...', //cpg1.4
  'searching_orphans' => 'Iskanje sirot, počakajte...', //cpg1.4
  'select_album' => 'Izberite album',
  'delete_orphans' => 'Brisanje komentarjev, ki nimajo pripadajočih fotografij', //cpg1.4
  'delete_orphans_explanation' => 'Poiskani bodo vsi komentarji brez pripadajočih fotografij, ki jih boste lahko pobrisali.<br />Označite vse albume.', //cpg1.4
  'refresh_db' => 'Obnovitev velikosti fotografij in datotek', //cpg1.4
  'refresh_db_explanation' => 'To bo ponovno preverilo velikost datotek in dimenzije fotografij. Uporabite, če je napačno javljena velikost prostora na disku ali pa ste ročno spremenili datoteke/fotografije.', //cpg1.4
  'reset_views' => 'Brisanje števca ogledov', //cpg1.4
  'reset_views_explanation' => 'V izbranem albumu bo vsem fotografijam nastavljen števec ogledov na 0.', //cpg1.4
  'orphan_comment' => 'najden komentar-sirota',
  'delete' => 'Briši',
  'delete_all' => 'Briši vse',
  'delete_all_orphans' => 'Brišem vse sirote?', //cpg1.4
  'comment' => 'Komentar: ',
  'nonexist' => 'priključen k neobstoječi fotografiji # ',
  'phpinfo' => 'Prikaži phpinfo',
  'phpinfo_explanation' => 'Prikaže tehnične podatke o strežniku.<br />Te podatke boste mogoče potrebovali, ko boste rabili pomoč glede delovanja galerije.', //cpg1.4
  'update_db' => 'Posodabljanje podatkovnega strežnika',
  'update_db_explanation' => 'Izvedite ta ukaz vsaj enkrat po tem, ko ste zamenjali datoteke od galerije, izvedli spremembe ali nadgradnjo na novejšo različico. Na ta način bodo posodobljene vse tabele in nastavljene pravilne vrednosti za delovanje galerije.',
  'view_log' => 'Prikaz datotek z zgodovino', //cpg1.4
  'view_log_explanation' => 'Galerija beleži različne aktivnosti uporabnikov, ki jih lahko tukaj preglejujete. Beleženje dogodkov morate vklopiti v <a href="admin.php">nastavitvah galerije</a>.', //cpg1.4
  'versioncheck' => 'Preverjanje verzije galerije', //cpg1.4
  'versioncheck_explanation' => 'Preveri verzijo vseh datotek. Na ta način je zagotovljeno, da so zamenjane vse datoteke po nadgradnji ali izdaji nove različice.', //cpg1.4
  'bridgemanager' => 'Povezovanje galerije', //cpg1.4
  'bridgemanager_explanation' => 'Vklop/izklop povezovanja/integriranja galerije z ostalimi aplikacijami (forumi, cms,...).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Preverjanje verzije galerije', //cpg1.4
  'what_it_does' => 'Ta stran je namenjena vsem, ki ste nadgradili svojo galerijo. Program bo poskušal primerjati vse datoteke na vašem strežniku s tistimi na http://coppermine.sourceforge.net. Na ta način bodo najdene vse datoteke, ki so potrebne zamenjave z novejšo različico.<br />Datoteke, ki bodo označene z rdečo barvo je potrebno zamenjati, datoteke označene z rumeno je potrebno preveriti (in po potrebi zamenjati). Datoteke označene z zeleno barvo (ali z vašo privzeto barvo pisave) so pravilne in jih ni potrebno spreminjati.<br />S klikom na ikonico za pomoč lahko izveste še več podrobnosti.', //cpg1.4
  'online_repository_unable' => 'Povezava z domačo stranjo galerije ni uspela', //cpg1.4
  'online_repository_noconnect' => 'Coppermine galerija se ni uspela povezati s svojo domačo stranjo. Možna sta dva razloga:', //cpg1.4
  'online_repository_reason1' => 'domača stran za preverjanje je trenutno izklopljena - preverite, če lahko dostopate do te strani: %s - če to ni možno, poskusite pozneje.', //cpg1.4
  'online_repository_reason2' => 'PHP na vašem strežniku ima nastavljeno %s na OFF (privzeto je to nastavljeno na ON). Če je strežnik vaš, lahko to nastavite na ON v php.ini datoteki (ali vsaj omogočite, da bo dostopno z %s). IČe gostite svoje strani drugje pa boste verjetno morali živeti z zavestjo, da ne morete izvesti primerjave v živo. Na tej strani bodo tako prikazani samo podatki o datotekah v vaši distribuciji galerije.', //cpg1.4
  'online_repository_skipped' => 'Povezava do domače strani galerije je bila preskočena', //cpg1.4
  'online_repository_to_local' => 'Program je nastavljen trenutno na lokalno kopijo datotek za prikaz verzije. Podatki bodo mogoče našačni, če ste izvedli nadgradnjo galerije in niste naložili čisto vseh datotek. Spremembe narejene po nadgradnji sploh ne bodo prikazane.', //cpg1.4
  'local_repository_unable' => 'Povezava do podatkov na vašem stežniku ni uspela', //cpg1.4
  'local_repository_explanation' => 'Coppermine se ni uspela povezati do podatkov %s na vašem strežniku. To verjetno pomeni, da niste naložili vseh podatkov na strežnik. To lahko naredite sedaj in osvežite prikaz te strani.<br />Če programu še vedno ne bo uspelo prikazati podatkov, je verjetno vaš gostitelj izklopil en del <a href="http://www.php.net/manual/en/ref.filesystem.php">PHP funkcij za delo z datotečnim sistemom</a>. IV tem primeru tega orodja sploh ne boste mogli uporabljati.', //cpg1.4
  'coppermine_version_header' => 'Instalirana verzija galerije', //cpg1.4
  'coppermine_version_info' => 'Trenutno uporabljate različico %s', //cpg1.4
  'coppermine_version_explanation' => 'Če mislite, da je to narobe in uporabljate višjo verzijo, ste verjetno pozabili naložiti zadnjo verzijo datoteke <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Primerjava verzij', //cpg1.4
  'folder_file' => 'direktorij/datoteka', //cpg1.4
  'coppermine_version' => 'cpg verzija', //cpg1.4
  'file_version' => 'verzija datoteke', //cpg1.4
  'webcvs' => 'web cvs', //cpg1.4
  'writable' => 'omogoča pisanje', //cpg1.4
  'not_writable' => 'ne omogoča pisanja', //cpg1.4
  'help' => 'Pomoč', //cpg1.4
  'help_file_not_exist_optional1' => 'datoteka/direktorij ne obstaja', //cpg1.4
  'help_file_not_exist_optional2' => 'Datoteke/direktorija %s ni možno najti na vašem strežniku. Dodate ga lahko s pomočjo FTP protokola (ni pa nujno) - če ugotavljate probleme pri delovanju galerije.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'datoteka/direktorij ne obstaja', //cpg1.4
  'help_file_not_exist_mandatory2' => 'Datoteke/direktorija %s ni možno najti na vašem strežniku. Ti podatki so nujno potrebni za pravilno delovanje in jih morate naložiti na strežnik (uporabite FTP prenos).', //cpg1.4
  'help_no_local_version1' => 'Ni lokalne verzije datoteke', //cpg1.4
  'help_no_local_version2' => 'Programu ni uspelo preveriti verzije lokalne datoteke. Datoteka je ali zastarela ali pa ste jo spreminjali in odstranili podatke zapisane v zaglavju datoteke. Priporočamo posodobitev datoteke.', //cpg1.4
  'help_local_version_outdated1' => 'Lokalna verzija je zastarela', //cpg1.4
  'help_local_version_outdated2' => 'Vaša datoteka je iz starejše verzije galerije (verjetno ste izvedli nadgradnjo). Posodobite/zamenjajte to datoteko.', //cpg1.4
  'help_local_version_na1' => 'Preverjanje cvs verzije ni uspelo', //cpg1.4
  'help_local_version_na2' => 'Programu ni uspelo preveriti katero verzijo galerije uporabljate. Priporočamo, da ponovno naložize galerijo iz paketa, ki ste ga presneli.', //cpg1.4
  'help_local_version_dev1' => 'Razvojna verzija', //cpg1.4
  'help_local_version_dev2' => 'Datoteka na vašem strežniku izgleda novejša kot pa je trenutna verzija galerije. Verjetno uporabljate razvojno različico (priporočljivo samo, če vseste kaj delate), ali pa ste izvedli nadgradnjo in niste naložili datoteke include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'Direktorij ne omogoča pisanja', //cpg1.4
  'help_not_writable2' => 'Spremenite pravice (CHMOD) in omogočite pisanje v direktorij %s in v vse kar je v njem.', //cpg1.4
  'help_writable1' => 'Direktorij omogoča pisanje', //cpg1.4
  'help_writable2' => 'Direktorij %s omogoča pisanje. To je nepotrebno in predstavlja varnostno luknjo. Galerija potrebuje samo pravice za branje in izvajanje na tem direktoriju.', //cpg1.4
  'help_writable_undetermined' => 'Preverjanje pravic za pisanje v direktorij ni bilo uspešno.', //cpg1.4
  'your_file' => 'vaša datoteka', //cpg1.4
  'reference_file' => 'referenčna datoteka', //cpg1.4
  'summary' => 'Povzetek', //cpg1.4
  'total' => 'Skupaj preverjenih datotek/direktorijev', //cpg1.4
  'mandatory_files_missing' => 'Manjkajoče obvezne datoteke', //cpg1.4
  'optional_files_missing' => 'Manjkajoče neobvezne datoteke', //cpg1.4
  'files_from_older_version' => 'Datoteke ostale od prejšnjih verzij', //cpg1.4
  'file_version_outdated' => 'Zastarela datoteke', //cpg1.4
  'error_no_data' => 'Program je ostal z DOLGIM NOSOM - ni mu uspelo preveriti ničesar. Oprostite za nevšečnost.', //cpg1.4
  'go_to_webcvs' => 'pojdi na %s', //cpg1.4
  'options' => 'Opcije', //cpg1.4
  'show_optional_files' => 'prikaži neobvezne direktorije/datoteke', //cpg1.4
  'show_mandatory_files' => 'prikaži obvezne datoteke', //cpg1.4
  'show_file_versions' => 'prikaži verzijo datotek', //cpg1.4
  'show_errors_only' => 'prikaži samo direktorije/datoteke z napakami', //cpg1.4
  'show_permissions' => 'prikaži dovoljenja direktorijev', //cpg1.4
  'show_condensed_output' => 'prikaži zgoščene podatke (za lažji ogled)', //cpg1.4
  'coppermine_in_webroot' => 'galerija je nameščena na root direktoriju', //cpg1.4
  'connect_online_repository' => 'poskusi se povezati do online vira podatkov', //cpg1.4
  'show_additional_information' => 'prikaži dodatne informacije', //cpg1.4
  'no_webcvs_link' => 'ne prikaži web cvs povezave', //cpg1.4
  'stable_webcvs_link' => 'prikaži web cvs povezavo do stabilne verzije', //cpg1.4
  'devel_webcvs_link' => 'prikaži web cvs povezavo do razvojne verzije', //cpg1.4
  'submit' => 'izvedi spremembe/osveži', //cpg1.4
  'reset_to_defaults' => 'ponastavi privzete vrednosti', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Briši vse dnevnike', //cpg1.4
  'delete_this' => 'Briši ta dnevnik', //cpg1.4
  'view_logs' => 'Ogled dnevnikov', //cpg1.4
  'no_logs' => 'Ni dnevnikov.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP Web čarovnik za objavljanje</h1><p>Ta modul omogoča uporabo <b>Windows XP</b> čarovnika za prenos datotek na strežnik z vašo galerijo.</p><p>Koda je zasnovana na osnovi artikla od
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Kaj je potrebno</h2><ul><li>Windows XP, da lahko uporabite čarovnika.</li><li>Delujoča galerija v kateri <b>pravilno deluje funkcija za objavljanje preko spletnega vmesnika.</b></li></ul><h2>kako namestiti klienta za to</h2><ul><li>kliknite z desno tipko na miški na
EOT;

$lang_xp_publish_select = <<<EOT
Izberite &quot;shrani cilj kot..&quot;. Shranite datoteko na vaš trdi disk. Pri shranjevanju se prepričajte, da je ime datoteke <b>cpg_###.reg</b> (### predstavlja časovno oznako). Spremenite, če je potrebno ime v to obliko (pustite pa številke). Po download-u 2x kliknite na datoteko, da registrirate vaš strežnik s čarovnikom za objavljanje.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Preizkus</h2><ul><li>V raziskovalcu izberite katero od datotek in kliknite na <b>Objavi xxx na strežniku</b> v levem okencu.</li><li>Potrdite izbiro datoteke. Kliknite na <b>Naprej</b>.</li><li>Na seznamu izberite servis za vašo galerijo (ima ime od vaše galerije). Če tega servisa ni na seznamu, preverite ali ste namestili  <b>cpg_pub_wizard.reg</b> kot je opisano to zgoraj.</li><li>Vpišite podatke za prijavo, če je to zahtevano.</li><li>Izberite ciljni album za vaše fotografije ali kreirajte novega.</li><li>Kliknite na <b>naprej</b>. Začel se bo prenos fotografij.</li><li>Ko je prenos končan, preverite v galeriji ali so fotografije pravilno dodane.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Opombe :</h2><ul><li>Ko se prenos enkrat začne, čarovnik ne more sporočiti nobene napake s strani galerije. Tako pred končanjem procesa ne morete preveriti ali so bile fotografije pravilno dodane - to lahko preverite samo sami v galeriji.</li><li>Če prenos ni uspel, vklopite &quot;način za odkrivanje napak&quot; v nastavitvah galerije, poskusite dodati samo eno fotografijo in preverite sporočilo o generirani napaki v
EOT;

$lang_xp_publish_flood = <<<EOT
datoteki, ki je v direktoriju od galerije na strežniku.</li><li>Da preprečite <i>poplavo fotografij</i> dodanih s čarovnikom, lahko to funkcijo uporabijo samo <b>administratorji</b> in <b>uporabniki, ki imajo lahko lastne albume</b>.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - XP Web čarovnik', //cpg1.4
  'welcome' => 'Pozdravljeni <b>%s</b>,', //cpg1.4
  'need_login' => 'Preden lahko začnete uporabljati čarovnika, se morate prijaviti.<p/><p>Po prijavi ne pozabite označiti polja <b>zapomni si me</b> če je ta opcija prisotna.', //cpg1.4
  'no_alb' => 'Oprostite, ampak tukaj ni albumov v katere bi lahko dodajali fotografije s čarovnikom.', //cpg1.4
  'upload' => 'Dodajanje fotografij v obstoječi album', //cpg1.4
  'create_new' => 'Kreiranje novega albuma', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategorija', //cpg1.4
  'new_alb_created' => 'Vaš novi album &quot;<b>%s</b>&quot; je bil kreiran.', //cpg1.4
  'continue' => 'Pritisnite &quot;NAPREJ&quot; za začetek dodajanja fotografij', //cpg1.4
  'link' => 'ta povezava', //cpg1.4
);
}
?>