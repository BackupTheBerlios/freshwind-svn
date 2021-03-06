<?php
// File: $Id: global.php 20451 2006-11-08 17:26:58Z larsneo $
//
// Original Author of file: Andreas Krapohl <larsneo@postnuke.com>
// Purpose of file: Installer language defines.
// German Support for PostNuke is avaialable at http://www.pn-cms.de

/* pn0.76 */
define('_REGISTER_GLOBALS_ON', 'register_global ist aktiviert - diese Einstellung sollte aus Gr�nden der Sicherheit deaktiviert sein, weitere Informationen dazu gibt es <a href="http://support.pn-cms.de/modules/dokuwiki/doku.php?id=postnuke:sicherheit" title="PostNuke Sicherheit">hier</a>.');
define('_REGISTER_GLOBALS_ON_HINT', 'Hinweis: PostNuke selbst braucht register_globals=on nicht, einige alte Module k�nnten ohne diese Einstellung nicht korrekt funktionieren. Es wird empfohlen, auf die Verwendung solcher Module zu verzichten.');

define('_MODULE', 'Modul');
define('_ERROR', 'Fehler:');
define('_INSTALLED', 'erfolgreich installiert');
define('_NOTINIT', 'nicht initialisiert');
define('_NOTACTIVATED', 'nicht aktiviert');
define('_NOTLOCALIZED', 'nicht lokalisiert');
define('_NOTCATEGORISED', 'nicht kategorisiert');
define('_MODULES', 'Module');
define('_PNDOCSLINKURL', 'http://support.pn-cms.de/modules/dokuwiki/doku.php?id=index');
define('_PNDOCSLINKTEXT', 'PostNuke Dokumentation');
define('_PNDOCSLINKTITLE', 'Hier gehts zur deutschen PostNuke-Dokumentation');
define('_PNSUPPORTLINKURL', 'http://support.pn-cms.de/module-CMS_Support_Forum.htm');
define('_PNSUPPORTLINKTEXT', 'Unterst�tzung in deutscher Sprache');
define('_PNSUPPORTLINKTITLE', 'Hier gehts zu den deutschsprachigen Supportforen');

define('_INSTALLGUIDEREF1', 'Bitte beachten Sie die');
define('_INSTALLGUIDEREF2', 'Installationsanleitung');
define('_INSTALLGUIDEREF3', '!');
define('_INSTALL_ANONYMOUS','Gast');
define('_INSTALL_BACKENDLANG','de-de');
define('_INSTALL_CENSORLIST','fuck,cunt,fucker,fucking,pussy,cock,c0ck,cum,twat,clit,bitch,fuk,fuking,motherfucker');
define('_INSTALL_ILLEGALNAMES','root adm linux webmaster admin god administrator administrador nobody anonymous anonimo gast gott');
define('_INSTALL_METAKEYWORDS','nuke, postnuke, free, community, php, portal, opensource, open source, gpl, mysql, sql, database, web site, website, weblog, content management, contentmanagement, web content management, webcontentmanagement');
define('_INSTALL_NOTIFYFRM','webmaster');
define('_INSTALL_NOTIFYMAIL','webmaster@example.com');
define('_INSTALL_NOTIFYMSG','Folgender User hat sich neu registriert:');
define('_INSTALL_NOTIFYSBJ','PostNuke Systemmeldung: Neue Registrierung');
define('_INSTALL_PNPOWERED','Diese Seite wird mit PostNuke betrieben');
define('_INSTALL_REASONS','As Is,Offtopic,Flamebait,Troll,Redundant,Insightful,Interesting,Informative,Funny,Overrated,Underrated');
define('_INSTALL_REGDISABLED','Eine Registrierung ist auf dieser Seite zur Zeit nicht m�glich, bitte sp�ter erneut versuchen.');
define('_INSTALL_YOURSITENAME','Neue PostNuke-Seite');
define('_INSTALL_YOURSLOGAN','Willkommen auf einer neuen PostNuke-Seite');
/* Modules Descriptions and names */
define('_MODNAME_ADDSTORY','Beitrag hinzuf�gen');
define('_MODDESC_ADDSTORY','einen neuen Beitrag hinzuf�gen');
define('_MODNAME_ADMIN','Administration');
define('_MODDESC_ADMIN','Administration');
define('_MODNAME_ADMMESSAGES','Adminnachrichten');
define('_MODDESC_ADMMESSAGES','Allgemeine Nachrichten anzeigen und verwalten');
define('_MODNAME_AUTOLINKS','AutoLinks');
define('_MODDESC_AUTOLINKS','Schl�sselworte verlinken');
define('_MODNAME_AVANTGO','AvantGo');
define('_MODDESC_AVANTGO','Neuigkeiten f�r PDAs');
define('_MODNAME_BANNERS','Werbebanner');
define('_MODDESC_BANNERS','Werbebanner verwalten');
define('_MODNAME_BLOCKS','Bl�cke');
define('_MODDESC_BLOCKS','Blockverwaltung');
define('_MODNAME_CENSOR','Zensur');
define('_MODDESC_CENSOR','Zensurverwaltung');
define('_MODNAME_COMMENTS','Kommentare');
define('_MODDESC_COMMENTS','Kommentarverwaltung');
define('_MODNAME_CREDITS','Credits');
define('_MODDESC_CREDITS','Zeigt Informationen zu den installierten Modulen an (Kontaktinformationen, Lizenz, Hilfe etc.)');
define('_MODNAME_DOWNLOADS','Downloads');
define('_MODDESC_DOWNLOADS','Downloadverwaltung');
define('_MODNAME_EPHEM','Ephemeriden');
define('_MODDESC_EPHEM','Was geschah heute?'); // Was geschah am heutigen Datum???
define('_MODNAME_FAQ','FAQ');
define('_MODDESC_FAQ','H�ufig gestellte Fragen (FAQ)');
define('_MODNAME_GROUPS','Gruppen');
define('_MODDESC_GROUPS','Gruppenverwaltung');
define('_MODNAME_HEADFOOT','Kopf- und Fussbereich');
define('_MODDESC_HEADFOOT','Kopf- und Fussbereich der PostNuke-Seite');
define('_MODNAME_LANGUAGES','Sprachen');
define('_MODDESC_LANGUAGES','Spracheinstellungen');
define('_MODNAME_LEGAL','Rechtliches');
define('_MODDESC_LEGAL','Nutzungsbedingungen und Informationen zum Datenschutz');
define('_MODNAME_LOSTPASS','Vergessenes Kennwort');
define('_MODDESC_LOSTPASS','Vergessenes Kennwort anfordern');
define('_MODNAME_MAILER','Mailer');
define('_MODDESC_MAILER','PostNuke Mailer');
define('_MODNAME_MAILUSERS','Benutzer anschreiben.');
define('_MODDESC_MAILUSERS','Benutzer der Seite anschreiben');
define('_MODNAME_MBLIST','Mitgliederliste');
define('_MODDESC_MBLIST','Mitgliederliste');
define('_MODNAME_MESSAGES','Private Nachrichten');
define('_MODDESC_MESSAGES','Private Nachrichten an die Benutzer');
define('_MODNAME_MODULES','Module');
define('_MODDESC_MODULES','Modulverwaltung');
define('_MODNAME_MULTISITES','MultiSites');
define('_MODDESC_MULTISITES','Mehrere Webseiten mit der gleichen PostNuke-Installation einrichten');
define('_MODNAME_NEWS','Nachrichten');
define('_MODDESC_NEWS','Nachrichtenverwaltung');
define('_MODNAME_NEWUSER','Neuer Benutzer');
define('_MODDESC_NEWUSER','Neuen PostNuke-Benutzer anlegen');
define('_MODNAME_PERMISSIONS','Zugriffsrechte');
define('_MODDESC_PERMISSIONS','Zugriffsrechte verwalten');
define('_MODNAME_PNRENDER','pnRender');
define('_MODDESC_PNRENDER','Die Smarty-Implementation f�r PostNuke');
define('_MODNAME_POLLS','Umfragen');
define('_MODDESC_POLLS','Umfragen');
define('_MODNAME_QUOTES','Zitate');
define('_MODDESC_QUOTES','Zitate und Sprichw�rter');
define('_MODNAME_RATINGS','Bewertungen');
define('_MODDESC_RATINGS','Beitr�ge bewerten');
define('_MODNAME_RECOMMENDUS','Weiterempfehlen');
define('_MODDESC_RECOMMENDUS','Diese Seite weiterempfehlen');
define('_MODNAME_REFERERS','Referers');
define('_MODDESC_REFERERS','Woher kommen die Besucher');
define('_MODNAME_REVIEWS','Rezensionen');
define('_MODDESC_REVIEWS','Rezensionen');
define('_MODNAME_SEARCH','Suche');
define('_MODDESC_SEARCH','Diese Seite durchsuchen');
define('_MODNAME_SECTIONS','Sektionen');
define('_MODDESC_SECTIONS','Sektionen');
define('_MODNAME_SETTINGS','Einstellungen');
define('_MODDESC_SETTINGS','Globale Einstellungen der PostNuke-Seite');
define('_MODNAME_STATS','Statistiken');
define('_MODDESC_STATS','Besucherstatistiken');
define('_MODNAME_SUBMITNEWS','Neuer Beitrag');
define('_MODDESC_SUBMITNEWS','Einen Beitrag zur Ver�ffentlichung einreichen');
define('_MODNAME_TOPICS','Themen');
define('_MODDESC_TOPICS','Themenverwaltung');
define('_MODNAME_TOPLIST','Top 10');
define('_MODDESC_TOPLIST','Top 10 Listen');
define('_MODNAME_TYPETOOL','TypeTool');
define('_MODDESC_TYPETOOL','TypeTool Visual Editor');
define('_MODNAME_USER','Benutzer');
define('_MODDESC_USER','Benutzerverwaltung');
define('_MODNAME_WEBLINKS','Weblinks');
define('_MODDESC_WEBLINKS','Links zu anderen Webseiten');
define('_MODNAME_WIKI','Wiki');
define('_MODDESC_WIKI','Wiki-Unterst�tzung');
define('_MODNAME_XMLRPC','XML-RPC');
define('_MODDESC_XMLRPC','XML-RPC Hilfsmodul');
define('_MODNAME_YOURACCOUNT','Benutzeroptionen');
define('_MODDESC_YOURACCOUNT','Konfiguration der Benutzeroptionen');
define('_MODNAME_XANTHIA','Xanthia');
define('_MODDESC_XANTHIA','Xanthia Theme Engine');
define('_MODNAME_PNBBSMILE','pn_bbsmile');
define('_MODDESC_PNBBSMILE','Smilie Hook');
define('_MODNAME_RSS','RSS');
define('_MODDESC_RSS','Inhalte fremder Seiten als RSS-News einbinden');

define("_INSTALL_REMINDERBLOCK","Bitte daran denken<br />&middot;<strong>install.php</strong> (Datei)<br />&middot;<strong>install</strong> (Verzeichnis)<br />aus dem PostNuke Verzeichnis zu l�schen.<br />Ansonsten k�nnen die Verbindungsdaten zur Datenbank von Unbefugten eingesehen werden!<br /><br /><em>Anmerkung: Dieser Block kann in Administration-Bl�cke bearbeitet werden.</em>");

define('_MESSAGE_00_a', 'PostNuke 0.764 Platinum');
define("_MESSAGE_00_b","PostNuke ist ein Content Management System (CMS), das Inhalte von Design und Technik trennt. Die Inhalte einer Internetpr�senz (zum Beispiel Beitr�ge, Links, Downloads, FAQs, Bildergalerien, Foren etc.) k�nnen dabei direkt via Browser verwaltet werden. Durch die klare Aufgliederung in Form, Funktion, Inhalt und Gestaltung hilft PostNuke, die Kosten und den Aufwand beim Betrieb einer Webseite zu reduzieren.<br /><br />
PostNuke ist modular aufgebaut - die zentralen Funktionen (Benutzermanagement, Berechtigungssystem, API) werden vom sogenannten Core �bernommen, der Leistungsumfang kann dar�berhinaus individuell angepasst und nahezu beliebig erweitert werden.<br /><br />
<strong>Das deutsche Sprachpaket sowie Support und Dokumentation zu PostNuke gibt es bei <a href=\"http://www.pn-cms.de\">www.pn-cms.de</a>.</strong><br /><br />
<em>Anmerkung: Diese Meldung kann in Administration-Admin Nachrichten bearbeitet werden.</em>");
define('_MESSAGE_00_d','0');
define('_MESSAGE_00_e','1');
define('_MESSAGE_00_f','1');
define('_MESSAGE_00_g','');

define('_FOOTMSGTEXT','<br /><a href="http://www.pn-cms.de/"><img src="images/powered/postnuke.butn.gif" alt="Diese Seite wird mit PostNuke betrieben" /></a> <a href="http://adodb.sourceforge.net"><img src="images/powered/adodb2.gif" alt="ADODB database library" /></a> <a href="http://www.php.net"><img src="images/powered/php4_powered.gif" alt="PHP Language" /></a><br /><br /><a href="index.php?module=legal">Allgemeine Nutzungsbedingungen</a> | <a href="index.php?module=legal&amp;func=privacy">Datenschutzhinweis</a> | <a href="index.php?module=Credits">Credits</a><br />Diese WebSite wurde mit <a href="http://www.pn-cms.de/">PostNuke CMS</a> erstellt - PostNuke ist als freie Software unter der <a href="http://www.gnu.org">GNU/GPL Lizenz</a> erh�ltlich.<br />RSS-News-Syndikation �ber <a href="backend.php">backend.php</a><br /><em>Anmerkung: Diese Meldung kann in Administration-Einstellungen bearbeitet werden.</em>                                                  ');

define('_BLOCKTITLE_INCOMING','wartend');
define('_BLOCKTITLE_WHOISONLINE','Online');
define('_BLOCKTITLE_OTHERSTORIES','weitere Beitr�ge');
define('_BLOCKTITLE_USERSBLOCK','Benutzer-Block');
define('_BLOCKTITLE_SEARCHBOX','Such-Block');
define('_BLOCKTITLE_EPHEMERIDS','Ephemeriden');
define('_BLOCKTITLE_LANGUAGES','Sprachen');
define('_BLOCKTITLE_CATMENU','Kategorien');
define('_BLOCKTITLE_RANHEAD','zuf�llige Beitr�ge');
define('_BLOCKTITLE_POLL','Umfrage');
define('_BLOCKTITLE_BIGSTORY','heutiger Top-Beitrag');
define('_BLOCKTITLE_USERSLOGIN','Anmeldung');
define('_BLOCKTITLE_PASTART','�ltere Beitr�ge');
define('_BLOCKTITLE_ADMINMESS','Admin-Nachrichten');
define('_BLOCKTITLE_REMINDER','WICHTIG');
define('_BLOCKTITLE_USERSBLOCK_TEXTE','frei konfigurierbar');

define('_POLLDESCTEXT','PostNuke...');
define('_POLLDATATEXT1','...was ist das?');
define('_POLLDATATEXT2','...ist das, was ich brauchte!');
define('_POLLDATATEXT3','...benutze ich schon lange!');

define('_REWIEWSMAINTITLE','Rezensionen');
define('_REWIEWSMAINDESC','Beschreibung der Rezensionen');

define('_BLOCKTITLE_MAINMENU','Hauptmen�');
define('_BLOCKTITLE_MAINMENU_ADMIN','Administration');
define('_BLOCKTITLE_MAINMENU_ADMINALT','Administration der Website');
define('_BLOCKTITLE_MAINMENU_AVANTGO','AvantGo');
define('_BLOCKTITLE_MAINMENU_AVANTGOALT','f�r PDA formatierte Beitr�ge');
define('_BLOCKTITLE_MAINMENU_DL','Downloads');
define('_BLOCKTITLE_MAINMENU_DLALT','Download-Bereich');
define('_BLOCKTITLE_MAINMENU_FAQ','FAQ');
define('_BLOCKTITLE_MAINMENU_FAQALT','h�ufig gestellte Fragen');
define('_BLOCKTITLE_MAINMENU_HOME','Start');
define('_BLOCKTITLE_MAINMENU_HOMEALT','zur�ck zur Startseite');
define('_BLOCKTITLE_MAINMENU_MLIST','Mitglieder');
define('_BLOCKTITLE_MAINMENU_MLISTALT','Mitgliederliste der Website');
define('_BLOCKTITLE_MAINMENU_NEWS','Beitr�ge');
define('_BLOCKTITLE_MAINMENU_NEWSALT','Beitr�ge auf der Website');
define('_BLOCKTITLE_MAINMENU_RUS','Weiterempfehlen');
define('_BLOCKTITLE_MAINMENU_RUSALT','diese Seite weiterempfehlen');
define('_BLOCKTITLE_MAINMENU_RWS','Rezensionen');
define('_BLOCKTITLE_MAINMENU_RWSALT','Rezensions-Bereich');
define('_BLOCKTITLE_MAINMENU_SEARCH','Suche');
define('_BLOCKTITLE_MAINMENU_SEARCHALT','Suche auf dieser Seite');
define('_BLOCKTITLE_MAINMENU_SECTIONS','Sektionen');
define('_BLOCKTITLE_MAINMENU_SECTIONSALT','Sektions-Bereich');
define('_BLOCKTITLE_MAINMENU_SNEWS','Beitr�ge einreichen');
define('_BLOCKTITLE_MAINMENU_SNEWSALT','Beitr�ge zur Ver�ffentlichung einreichen');
define('_BLOCKTITLE_MAINMENU_STATS','Statistiken');
define('_BLOCKTITLE_MAINMENU_STATSALT','Abrufstatistiken der Seite');
define('_BLOCKTITLE_MAINMENU_TLIST','Top-Liste');
define('_BLOCKTITLE_MAINMENU_TLISTALT','Top-Liste der Seite');
define('_BLOCKTITLE_MAINMENU_TOPICS','Themen');
define('_BLOCKTITLE_MAINMENU_TOPICSALT','Aufstellung der Themen');
define('_BLOCKTITLE_MAINMENU_USER','Einstellungen');
define('_BLOCKTITLE_MAINMENU_USERALT','individuelle Einstellungen');
define('_BLOCKTITLE_MAINMENU_USEREXIT','Abmeldung');
define('_BLOCKTITLE_MAINMENU_USEREXITALT','Abmeldung von dieser Seite');
define('_BLOCKTITLE_MAINMENU_WLINKS','Weblinks');
define('_BLOCKTITLE_MAINMENU_WLINKSALT','Weblinks-Bereich');


define("_ADMIN_EMAIL","E-Mail-Adresse des Administrators");
define("_ADMIN_LOGIN","Benutzername des Administrators (Verwendet zum Login)");
define("_ADMIN_NAME","Vollst�ndiger Name des Administrators");
define("_ADMIN_PASS","Kennwort des Administrators");
define("_ADMIN_REPEATPASS","Kennwort des Administrators (wiederholen)");
define("_ADMIN_URL","Webseite des Administrators");
define('_BTN_CHANGEINFO','Info �ndern');
define("_BTN_CONTINUE","fortfahren");
define("_BTN_FINISH","beenden");
define("_BTN_NEXT","weiter");
define('_BTN_NEWINSTALL','Neue Installation');
define("_BTN_RECHECK","nochmals pr�fen");
define("_BTN_SET_LANGUAGE","Sprache setzen");
define("_BTN_SET_LOGIN","Login setzen");
define("_BTN_START","Start");
define("_BTN_SUBMIT","abschicken");
define('_BTN_UPGRADE','Upgrade');
define("_CHANGE_INFO_0","Daten �ndern");
define("_CHANGE_INFO_1","Bitte die Datenbank-Information korrigieren");
define("_CHMOD_CHECK_1","CHMOD-�berpr�fung");
define("_CHMOD_CHECK_2","Es wird zuerst �berpr�ft, ob die Schreibrechte (CHMOD) von config.php und config-old.php korrekt gesetzt sind, ansonsten wird dieses Skript nicht in der Lage sein, die Datenbank-Informationen zu verschl�sseln.<br />Die Verschl�sselung der Datenbank-Informationen ist eine zus�tzliche Sicherheit.");
define("_CHMOD_CHECK_3","Schreibrechte (CHMOD) f�r config.php sind 666 - korrekt, das Skript kann in die Datei schreiben.");
define("_CHMOD_CHECK_4","Bitte die Schreibrechte (CHMOD) f�r config.php auf 666 setzen, damit das Skript in die Datei schreiben kann.");
define("_CHMOD_CHECK_5","Schreibrechte (CHMOD) f�r config-old.php sind 666 - korrekt, das Skript kann in die Datei schreiben.");
define("_CHMOD_CHECK_6","Bitte die Schreibrechte (CHMOD) f�r config-old.php auf 666 setzen, damit das Skript in die Datei schreiben kann.");
define("_CHM_CHECK_1", "Bitte die Datenbank-Informationen eingeben.<br />Falls kein Root-Zugriff auf MySQL besteht, k�nnen keine neuen Datenbanken angelegt werden - in diesem Fall die Datenbank angeben, in die das Skript die erforderlichen Tabellen anlegen soll.");
define("_CONTINUE_1","Datenbankeinstellungen setzen");
define("_CONTINUE_2","<br />Jetzt sollte der Administrator-Account individuell eingerichtet werden - ansonsten ist der Benutzername <b>Admin</b> und das Passwort <b>Password</b> (Achtung Gross/Kleinschreibung beachten).<br /><b>Eine individuelle Einstellung ist aus Sicherheitsgr�nden dringend empfohlen!</b>");
define("_DBHOST","Datenbank-Server");
define("_DBINFO","Datenbank-Informationen<br />");
define("_DBNAME","Name der Datenbank");
define("_DBPASS","Passwort des Datenbank-Benutzers");
define("_DBPREFIX","Tabellenpr�fix (f�r Table-Sharing)");
define("_DBTYPE","Datenbank");
define("_DBTABLETYPE","Datenbank-Tabellen-Typ");
define("_DBUNAME","Name des Datenbank-Benutzers");
define("_DEFAULT_1","Dieses Skript wird die PostNuke Datenbank installieren und helfen, alle notwendigen Grundeinstellungen vorzunehmen.<br />Es wird nun Schritt f�r Schritt durch die Installation gef�hrt, der gesch�tzte Zeitaufwand betr�gt rund 10 Minuten.<br />Bei Problemen w�hrend der Installation bitte an den PostNuke Support (http://support.pn-cms.de) wenden.");
define("_DEFAULT_2","Lizenz:<br />");
define("_DEFAULT_3","Bitte die GNU General Public License durchlesen.<br /> PostNuke wird als freie Software entwickelt, aber es gibt bestimmte Bedingungen f�r die Distribution und Ver�nderungen.");
define("_DONE","Fertig.");
define("_FINISH_1","Danksagungen");
define("_FINISH_2","<br />Das sind die Skripte und Personen, welche PostNuke ausmachen - wir freuen uns �ber jede Art von Feedback unserer Benutzer.<br />Wir k�nnen immer Hilfe gebrauchen - wer hier gelistet werden m�chte, sollte uns einfach kontaktieren.");
define("_FINISH_3","<b>Die Installation ist nun abgeschlossen.<br /><br />Deutschsprachiger Support und Dokumentation zu PostNuke unter <a href=\"http://www.pn-cms.de\">http://www.pn-cms.de</a><br /><br /><font color=\"#990000\">Die Installations-Skripte (install.php sowie der /install-Ordner) werden nun nicht mehr ben�tigt und sollten gel�scht werden.</font></b>");
define("_FINISH_4","Zur neu eingerichteten PostNuke-Seite");
define("_FOOTER_1","Willkommen in der PostNuke-Gemeinschaft und Danke f�r die Wahl von PostNuke als Content Management System!");
define("_FORUM_INFO_1","Die Forum Tabellen sind unver�ndert.<br />Es handelt sich um folgende Tabellen:");
define("_FORUM_INFO_2","Diese Tabellen k�nnen gel�scht werden, wenn kein Forum verwendet werden soll. Bei http://mods.postnuke.com findet man eine grosse Anzahl an Forum-Modulen.");
define("_INPUT_DATA_1","Daten gespeichert");
define("_INSTALLATION","PostNuke-Installation");
define("_MADE"," angelegt.");
define("_MAKE_DB_1","Die Datenbank konnte nicht angelegt werden.");
define("_MAKE_DB_2","wurde angelegt.");
define("_MAKE_DB_3","Keine Datenbank angelegt.<br />");
define("_MODIFY_FILE_1","Fehler beim Lesezugriff auf Datei:");
define("_MODIFY_FILE_2","Fehler beim Schreibzugriff auf Datei:");
define("_MODIFY_FILE_3","0 Zeilen ge�ndert.");
define("_MYPHPNUKE_1","Upgrade von MyPHPNuke 1.8.7?");
define("_MYPHPNUKE_2","<b>MyPHPNuke 1.8.7</b> anklicken.");
define("_MYPHPNUKE_3","Upgrade von MyPHPNuke 1.8.8b2?");
define("_MYPHPNUKE_4","<b>MyPHPNuke 1.8.8</b> anklicken.");
define("_NEWINSTALL","Neuinstallation");
define("_NEW_INSTALL_1","<br />Es wurde <b>Neuinstallation</b> gew�hlt.<br /> Bitte die folgenden Informationen �berpr�fen.");
define("_NEW_INSTALL_2","Hinweis: <b>neue Datenbank anlegen</b> nur anw�hlen, falls Root-Zugriff auf MySQL besteht -<br />andernfalls wird das Skript die Tabellen in der angebenen Datenbank anlegen.");
define("_NEW_INSTALL_3","neue Datenbank anlegen");
define("_NOTMADE","Es konnte nicht angelegt werden: ");
define("_NOTSELECT","Datenbank konnte nicht ausgew�hlt werden.");
define("_NOTUPDATED","Es konnte nicht aktualisiert werden: ");
define("_PHPNUKE_1","Upgrade von PHP-Nuke 4.4?");
define('_PHPNUKE_10','<b>PHP-Nuke 5.3.1</b> anklicken.');
define('_PHPNUKE_11','Upgrade von PHP-Nuke 5.4?');
define('_PHPNUKE_12','<b>PHP-Nuke 5.4</b> anklicken.');
define("_PHPNUKE_2","Bitte die folgende Anmerkung lesen und auf <b>PHP-Nuke 4.4</b> klicken.<br /><br />Die bestehende Forum-Installation kann nicht automatisch �bernommen werden, da phpBB nicht im Standard-Core enthalten ist und bleibt bei der Installation unver�ndert.<i>Es gibt ein (ungetestes) Upgrade-Skript im pn-modules-CVS-tree.</i>");
define("_PHPNUKE_3","Upgrade von PHP-Nuke 5?");
define("_PHPNUKE_4","<b>PHP-Nuke 5</b> anklicken.");
define("_PHPNUKE_5","Upgrade von PHP-Nuke 5.2?");
define("_PHPNUKE_6","<b>PHP-Nuke 5.2</b> anklicken.");
define("_PHPNUKE_7","Upgrade von PHP-Nuke 5.3?");
define("_PHPNUKE_8","<b>PHP-Nuke 5.3</b> anklicken.");
define('_PHPNUKE_9','Upgrade von PHP-Nuke 5.3.1?');
define("_PHP_CHECK_1","Die PHP Version ist ");
define("_PHP_CHECK_2","PHP muss mindestens auf die Version 4.0.1 von <a href=\"http://www.php.net\">http://www.php.net</a> aktualisiert werden.");
define("_PHP_CHECK_3","Achtung! magic_quotes_gpc ist Off.<br />Dies kann in vielen F�llen durch eine .htaccess mit folgendem Inhalt korrigiert werden:<br />php_flag magic_quotes_gpc On<p>");
define("_PHP_CHECK_4","Achtung! magic_quotes_runtime ist On.<br />Dies kann in vielen F�llen durch eine .htaccess mit folgendem Inhalt korrigiert werden:<br />php_flag magic_quotes_runtime Off<p>");
define("_PN6_1","Memo f�r den Admin: Bitte die allgemeinen Einstellungen in der Administration nach der Installation �berpr�fen!");
define("_PN6_2","(Wir entschuldigen uns f�r diese Unannehmlichkeiten.)");
define("_PN6_3","Fehler: Datei nicht gefunden: ");
define("_PN6_4","Konvertierung der old-style-Blocks abgeschlossen.");
define('_PNTEMP_DIRNOTWRITABLE', 'Please change permissions on this directory to 777 so this script can write to this directory (HINT: use "chmod")');
define('_PNTEMP_DIRWRITABLE', 'correct, the script can write to this directory');
define("_POSTNUKE_1","Upgrade von PostNuke .5x?");
define("_POSTNUKE_10","<b>PostNuke .64</b> anklicken.");
define("_POSTNUKE_11","Upgrade von PostNuke .7?");
define("_POSTNUKE_12","<b>Upgrade .7</b> anklicken.");
define("_POSTNUKE_13","Upgrade von PostNuke .71?");
define("_POSTNUKE_14","<b>Upgrade .71</b> anklicken.");
define('_POSTNUKE_15','Sprache best�tigen?');
define("_POSTNUKE_16","<b>Validate</b> anklicken.");
define("_POSTNUKE_17","Tabellen-Struktur validieren?");
define("_POSTNUKE_18","<b>Validate</b> anklicken.");
# added for 0.7.2.2 Neo
define('_POSTNUKE_19','Upgrade von PostNuke .72?');
define('_POSTNUKE_20','<b>PostNuke .72</b> anklicken');
define("_POSTNUKE_2","b>PostNuke .5</b> anklicken.");
define("_POSTNUKE_3","Upgrade von PostNuke .6 / .61?");
define("_POSTNUKE_4","<b>PostNuke .6</b> anklicken.");
define("_POSTNUKE_5","Upgrade von PostNuke .62?");
define("_POSTNUKE_6","<b>PostNuke .62</b> anklicken.");
define("_POSTNUKE_7","Upgrade von PostNuke .63?");
define("_POSTNUKE_8","<b>PostNuke .63</b> anklicken.<br />");
define("_POSTNUKE_9","Upgrade von PostNuke .64?");
define('_PWBADMATCH', 'Die eingegebenen Passw�rter stimmen nicht �berein, bitte zur�ckgehen und die Passworte erneut eingeben.');
define('_QUOTESCHECK_1','NS-Quotes �berpr�fung');
define('_QUOTESCHECK_2','Das alte NS-Quotes-Modul wurde gegen das neue Quotes-Modul ausgetauscht.<br />Bitte das Verzeichnis modules/NS-Quotes entfernen.');
define("_SELECT_LANGUAGE_1","<br /><h3>Bitte Sprache w�hlen</h3><br />Dies wird die Standardsprache der neu eingerichteten PostNuke-Seite werden.<br />Bei Problemen an dieser Stelle in der php.ini kontrollieren, ob register_global = on ist.");
define("_SELECT_LANGUAGE_2","Sprache: ");
define("_SHOW_ERROR_INFO_1","Schreibfehler</b> \"config.php\" konnte nicht geschrieben werden.<br />Folgende �nderungen m�ssen dort noch eingetragen werden:");
define("_SKIPPED","�bersprungen.");
define("_SUBMIT_1","Bitte die folgenden Informationen auf Korrektheit �berpr�fen.");
define("_SUBMIT_2","<b>Folgenden Informationen wurden eingegeben:</b>");
define("_SUBMIT_3","<br /><b>Neue Installation</b> oder <b>Upgrade</b> w�hlen bzw. mit <b>Info �ndern</b> die Angaben korrigieren.");
define("_SUCCESS_1","Beendet.");
define("_SUCCESS_2","Das Upgrade auf die neueste PostNuke Version ist beendet.<br />Bitte daran denken, die Einstellungen der config.php vor der ersten Benutzung zu �ndern.");
define("_UPDATED"," aktualisiert.");
define("_UPDATING","Aktualisierung Tabelle: ");
define("_UPGRADETAKESALONGTIME", "Je nach Umfang des bisherigen Datenbestandes kann das Upgrade eine recht lange Zeit ben�tigen! Bitte die entsprechende Option nur einmal ausw�hlen und warten bis die n�chste Anzeige erscheint, mehrfaches Klicken kann den Upgrade-Prozess zum Scheitern bringen.");
define("_UPGRADE_1","Upgrades");
define("_UPGRADE_2","Hier wird das System, von welchem aktualisiert werden soll, ausgew�hlt.<br /><br /><center><b>PHP-Nuke</b> w�hlen, um eine bestehende PHP-Nuke Installation zu upgraden.<br /><b>PostNuke</b> w�hlen, um eine bestehende PostNuke Installation zu upgraden.<br /><b>MyPHPNuke</b> w�hlen, um eine bestehende MyPHPNuke Installation zu upgraden.");
define('_VERSION_WARNING','Offizielle PostNuke Distributionen sind bei <a href="http://download.postnuke.com/">postnuke.com</a> verf�gbar.<br />Service und Support zu PostNuke in deutscher Sprache unter <a href="http://support.pn-cms.de/">support.pn-cms.de</a>.');


/* admin module default categories */
define('_ADMIN_CATEGORY_00_a',	'System');
define('_ADMIN_CATEGORY_00_b',	'Systemmodule');
define('_ADMIN_CATEGORY_01_a',	'Inhalt');
define('_ADMIN_CATEGORY_01_b',	'Module f�r die Verwaltung von Inhalten');
define('_ADMIN_CATEGORY_02_a',	'Resource Pack');
define('_ADMIN_CATEGORY_02_b',	'Resource Pack Module');
define('_ADMIN_CATEGORY_03_a',	'Werkzeuge');
define('_ADMIN_CATEGORY_03_b',	'N�tzliche Werkzeuge');
define('_ADMIN_CATEGORY_04_a',	'3rd Party');
define('_ADMIN_CATEGORY_04_b',	'Third Party Module');

/* language defines as taken from language/xxx/language.php */
define('_LANGUAGE_ARA','Arabisch');
define('_LANGUAGE_BUL','Bulgarisch');
define('_LANGUAGE_CAT','Katalanisch');
define('_LANGUAGE_CES','Czechisch');
define('_LANGUAGE_CRO','Kroatisch CRO');
define('_LANGUAGE_HRV','Kroatisch HRV ');
define('_LANGUAGE_DAN','D�nisch');
define('_LANGUAGE_DEU','Deutsch');
define('_LANGUAGE_ELL','Griechisch');
define('_LANGUAGE_ENG','Englisch');
define('_LANGUAGE_EPO','Esperanto');
define('_LANGUAGE_EST','Estonisch');
define('_LANGUAGE_FIN','Finnisch');
define('_LANGUAGE_FRA','Franz�sisch');
define('_LANGUAGE_HEB','Hebr�isch');
define('_LANGUAGE_HUN','Ungarisch');
define('_LANGUAGE_IND','Indonesisch');
define('_LANGUAGE_ISL','Isl�ndisch');
define('_LANGUAGE_ITA','Italienisch');
define('_LANGUAGE_JPN','Japanisch');
define('_LANGUAGE_KOR','Koreanisch');
define('_LANGUAGE_LAV','Lettisch');
define('_LANGUAGE_LIT','Litauisch');
define('_LANGUAGE_MAS','Malayisch');
define('_LANGUAGE_MKD','Mazedonisch');
define('_LANGUAGE_NLD','Holl�ndisch');
define('_LANGUAGE_NOR','Norwegisch');
define('_LANGUAGE_POL','Polnisch');
define('_LANGUAGE_POR','Portugisisch');
define('_LANGUAGE_RON','Rum�nisch');
define('_LANGUAGE_RUS','Russisch');
define('_LANGUAGE_SLV','Slovenisch');
define('_LANGUAGE_SPA','Spanisch');
define('_LANGUAGE_SWE','Schwedisch');
define('_LANGUAGE_THA','Thai');
define('_LANGUAGE_TUR','Tu�rkisch');
define('_LANGUAGE_UKR','Ukrainisch');
define('_LANGUAGE_X_BRAZILIAN_PORTUGUESE','Brasilianisch');
define('_LANGUAGE_X_KLINGON','Klingonisch');
define('_LANGUAGE_X_RUS_KOI8R','Russisch KOI8-R');
define('_LANGUAGE_YID','Jiddisch');
define('_LANGUAGE_ZHO','Chinesisch (Simp.)');

?>