<?php
// File: $Id: language.php 16579 2005-08-01 09:18:44Z landseer $
// ----------------------------------------------------------------------
// PostNuke Content Management System
// Copyright (C) 2001 by the PostNuke Development Team.
// http://www.postnuke.com/
// ----------------------------------------------------------------------
// Based on:
// PHP-NUKE Web Portal System - http://phpnuke.org/
// Thatware - http://thatware.org/
// ----------------------------------------------------------------------
// LICENSE
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License (GPL)
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
// To read the license please visit http://www.gnu.org/copyleft/gpl.html
// ----------------------------------------------------------------------
// Original Author of file: Gregor J. Rothfuss
// Purpose of file: Provide ML functionality for the installer.
// ----------------------------------------------------------------------
/**
 * Loads the required language file for the installer
 */
function installer_get_language($currentlang)
{
    if(empty($currentlang)) {
        $currentlang = sniff_user_language();
    }

    if (!isset($currentlang) || empty($currentlang)) {
        $currentlang = 'eng'; // english is the fallback
    }

    $defaultlanguage = 'eng';
    if (file_exists($file = "install/lang/$currentlang/global.php")) {
        @include $file;
    } elseif (file_exists($file = "install/lang/$defaultlanguage/global.php")) {
        @include $file;
    }
    if (file_exists($file = "language/$currentlang/global.php")) {
        @include $file;
    } elseif (file_exists($file = "language/$defaultlanguage/global.php")) {
        @include $file;
    }
    if (file_exists($file = "language/$currentlang/core.php")) {
        @include $file;
    } elseif (file_exists($file = "language/$defaultlanguage/core.php")) {
        @include $file;
    }
    if (file_exists($file = "language/$currentlang/languages.php")) {
        @include $file;
    } elseif (file_exists($file = "language/$defaultlanguage/languages.php")) {
        @include $file;
    }

    return $currentlang;
}
// Make common language selection dropdown (from Tim Litwiller)
// =======================================

function installer_lang_dropdown($currentlang)
{
    if(empty($currentlang)) {
        $currentlang = sniff_user_language();
    }

    if (!isset($currentlang) || empty($currentlang)) {
        $currentlang = 'eng'; // english is the fallback
    }

    echo "<select name=\"alanguage\" class=\"pn-text\">";
    $lang = installer_languagelist();
    $handle = opendir('install/lang');
    while ($f = readdir($handle)) {
        if (is_dir("install/lang/$f") && @$lang[$f]) {
            $langlist[$f] = $lang[$f];
        }
    }
    asort($langlist);
    foreach ($langlist as $k => $v) {
        echo '<option value="' . $k . '"';
        if ($currentlang == $k) {
            echo ' selected';
        }
        echo '>' . $v . '</option> ';
    }
    echo "</select>";
}

// list of all availabe languages (from Patrick Kellum <webmaster@ctarl-ctarl.com>)
// ==============================
function installer_languagelist()
{
	// All entries use ISO 639-2/T
	// hilope - added all 469 languages available under ISO 639-2
	$lang['aar'] = _LANGUAGE_AAR; // Afar
	$lang['abk'] = _LANGUAGE_ABK; // Abkhazian
	$lang['ace'] = _LANGUAGE_ACE; // Achinese
	$lang['ach'] = _LANGUAGE_ACH; // Acoli
	$lang['ada'] = _LANGUAGE_ADA; // Adangme
	$lang['ady'] = _LANGUAGE_ADY; // Adyghe; Adygei
	$lang['afa'] = _LANGUAGE_AFA; // Afro-Asiatic (Other)
	$lang['afh'] = _LANGUAGE_AFH; // Afrihili
	$lang['afr'] = _LANGUAGE_AFR; // Afrikaans
	$lang['aka'] = _LANGUAGE_AKA; // Akan
	$lang['akk'] = _LANGUAGE_AKK; // Akkadian
	$lang['ale'] = _LANGUAGE_ALE; // Aleut
	$lang['alg'] = _LANGUAGE_ALG; // Algonquian languages
	$lang['amh'] = _LANGUAGE_AMH; // Amharic
	$lang['ang'] = _LANGUAGE_ANG; // English, Old
	$lang['apa'] = _LANGUAGE_APA; // Apache languages
	$lang['ara'] = _LANGUAGE_ARA; // Arabic
	$lang['arc'] = _LANGUAGE_ARC; // Aramaic
	$lang['arg'] = _LANGUAGE_ARG; // Aragonese
	$lang['arn'] = _LANGUAGE_ARN; // Araucanian
	$lang['arp'] = _LANGUAGE_ARP; // Arapaho
	$lang['art'] = _LANGUAGE_ART; // Artificial (Other)
	$lang['arw'] = _LANGUAGE_ARW; // Arawak
	$lang['asm'] = _LANGUAGE_ASM; // Assamese
	$lang['ast'] = _LANGUAGE_AST; // Asturian; Bable
	$lang['ath'] = _LANGUAGE_ATH; // Athapascan languages
	$lang['aus'] = _LANGUAGE_AUS; // Australian languages
	$lang['ava'] = _LANGUAGE_AVA; // Avaric
	$lang['ave'] = _LANGUAGE_AVE; // Avestan
	$lang['awa'] = _LANGUAGE_AWA; // Awadhi
	$lang['aym'] = _LANGUAGE_AYM; // Aymara
	$lang['aze'] = _LANGUAGE_AZE; // Azerbaijani
	$lang['bad'] = _LANGUAGE_BAD; // Banda
	$lang['bai'] = _LANGUAGE_BAI; // Bamileke languages
	$lang['bak'] = _LANGUAGE_BAK; // Bashkir
	$lang['bal'] = _LANGUAGE_BAL; // Baluchi
	$lang['bam'] = _LANGUAGE_BAM; // Bambara
	$lang['ban'] = _LANGUAGE_BAN; // Balinese
	$lang['bas'] = _LANGUAGE_BAS; // Basa
	$lang['bat'] = _LANGUAGE_BAT; // Baltic (Other)
	$lang['bej'] = _LANGUAGE_BEJ; // Beja
	$lang['bel'] = _LANGUAGE_BEL; // Belarusian
	$lang['bem'] = _LANGUAGE_BEM; // Bemba
	$lang['ben'] = _LANGUAGE_BEN; // Bengali
	$lang['ber'] = _LANGUAGE_BER; // Berber (Other)
	$lang['bho'] = _LANGUAGE_BHO; // Bhojpuri
	$lang['bih'] = _LANGUAGE_BIH; // Bihari
	$lang['bik'] = _LANGUAGE_BIK; // Bikol
	$lang['bin'] = _LANGUAGE_BIN; // Bini
	$lang['bis'] = _LANGUAGE_BIS; // Bislama
	$lang['bla'] = _LANGUAGE_BLA; // Siksika
	$lang['bnt'] = _LANGUAGE_BNT; // Bantu (Other)
	$lang['bod'] = _LANGUAGE_BOD; // Tibetan
	$lang['bos'] = _LANGUAGE_BOS; // Bosnian
	$lang['bra'] = _LANGUAGE_BRA; // Braj
	$lang['bre'] = _LANGUAGE_BRE; // Breton
	$lang['btk'] = _LANGUAGE_BTK; // Batak (Indonesia)
	$lang['bua'] = _LANGUAGE_BUA; // Buriat
	$lang['bug'] = _LANGUAGE_BUG; // Buginese
	$lang['bul'] = _LANGUAGE_BUL; // Bulgarian
	$lang['byn'] = _LANGUAGE_BYN; // Blin; Bilin
	$lang['cad'] = _LANGUAGE_CAD; // Caddo
	$lang['cai'] = _LANGUAGE_CAI; // Central American Indian (Other)
	$lang['car'] = _LANGUAGE_CAR; // Carib
	$lang['cat'] = _LANGUAGE_CAT; // Catalan; Valencian
	$lang['cau'] = _LANGUAGE_CAU; // Caucasian (Other)
	$lang['ceb'] = _LANGUAGE_CEB; // Cebuano
	$lang['cel'] = _LANGUAGE_CEL; // Celtic (Other)
	$lang['ces'] = _LANGUAGE_CES; // Czech
	$lang['cha'] = _LANGUAGE_CHA; // Chamorro
	$lang['chb'] = _LANGUAGE_CHB; // Chibcha
	$lang['che'] = _LANGUAGE_CHE; // Chechen
	$lang['chg'] = _LANGUAGE_CHG; // Chagatai
	$lang['chk'] = _LANGUAGE_CHK; // Chuukese
	$lang['chm'] = _LANGUAGE_CHM; // Mari
	$lang['chn'] = _LANGUAGE_CHN; // Chinook jargon
	$lang['cho'] = _LANGUAGE_CHO; // Choctaw
	$lang['chp'] = _LANGUAGE_CHP; // Chipewyan
	$lang['chr'] = _LANGUAGE_CHR; // Cherokee
	$lang['chu'] = _LANGUAGE_CHU; // Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic
	$lang['chv'] = _LANGUAGE_CHV; // Chuvash
	$lang['chy'] = _LANGUAGE_CHY; // Cheyenne
	$lang['cmc'] = _LANGUAGE_CMC; // Chamic languages
	$lang['cop'] = _LANGUAGE_COP; // Coptic
	$lang['cor'] = _LANGUAGE_COR; // Cornish
	$lang['cos'] = _LANGUAGE_COS; // Corsican
	$lang['cpe'] = _LANGUAGE_CPE; // Creoles and pidgins, English based (Other)
	$lang['cpf'] = _LANGUAGE_CPF; // Creoles and pidgins, French-based (Other)
	$lang['cpp'] = _LANGUAGE_CPP; // Creoles and pidgins,
	$lang['cre'] = _LANGUAGE_CRE; // Cree
	$lang['crh'] = _LANGUAGE_CRH; // Crimean Tatar; Crimean Turkish
	$lang['crp'] = _LANGUAGE_CRP; // Creoles and pidgins (Other)
	$lang['csb'] = _LANGUAGE_CSB; // Kashubian
	$lang['cus'] = _LANGUAGE_CUS; // Cushitic (Other)
	$lang['cym'] = _LANGUAGE_CYM; // Welsh
	$lang['dak'] = _LANGUAGE_DAK; // Dakota
	$lang['dan'] = _LANGUAGE_DAN; // Danish
	$lang['dar'] = _LANGUAGE_DAR; // Dargwa
	$lang['day'] = _LANGUAGE_DAY; // Dayak
	$lang['del'] = _LANGUAGE_DEL; // Delaware
	$lang['den'] = _LANGUAGE_DEN; // Slave (Athapascan)
	$lang['deu'] = _LANGUAGE_DEU; // German
	$lang['dgr'] = _LANGUAGE_DGR; // Dogrib
	$lang['din'] = _LANGUAGE_DIN; // Dinka
	$lang['div'] = _LANGUAGE_DIV; // Divehi
	$lang['doi'] = _LANGUAGE_DOI; // Dogri
	$lang['dra'] = _LANGUAGE_DRA; // Dravidian (Other)
	$lang['dsb'] = _LANGUAGE_DSB; // Lower Sorbian
	$lang['dua'] = _LANGUAGE_DUA; // Duala
	$lang['dum'] = _LANGUAGE_DUM; // Dutch, Middle
	$lang['dyu'] = _LANGUAGE_DYU; // Dyula
	$lang['dzo'] = _LANGUAGE_DZO; // Dzongkha
	$lang['efi'] = _LANGUAGE_EFI; // Efik
	$lang['egy'] = _LANGUAGE_EGY; // Egyptian (Ancient)
	$lang['eka'] = _LANGUAGE_EKA; // Ekajuk
	$lang['ell'] = _LANGUAGE_ELL; // Greek, Modern
	$lang['elx'] = _LANGUAGE_ELX; // Elamite
	$lang['eng'] = _LANGUAGE_ENG; // English
	$lang['enm'] = _LANGUAGE_ENM; // English, Middle
	$lang['epo'] = _LANGUAGE_EPO; // Esperanto
	$lang['est'] = _LANGUAGE_EST; // Estonian
	$lang['eus'] = _LANGUAGE_EUS; // Basque
	$lang['ewe'] = _LANGUAGE_EWE; // Ewe
	$lang['ewo'] = _LANGUAGE_EWO; // Ewondo
	$lang['fan'] = _LANGUAGE_FAN; // Fang
	$lang['fao'] = _LANGUAGE_FAO; // Faroese
	$lang['fas'] = _LANGUAGE_FAS; // Persian
	$lang['fat'] = _LANGUAGE_FAT; // Fanti
	$lang['fij'] = _LANGUAGE_FIJ; // Fijian
	$lang['fin'] = _LANGUAGE_FIN; // Finnish
	$lang['fiu'] = _LANGUAGE_FIU; // Finno-Ugrian (Other)
	$lang['fon'] = _LANGUAGE_FON; // Fon
	$lang['fra'] = _LANGUAGE_FRA; // French
	$lang['frm'] = _LANGUAGE_FRM; // French, Middle
	$lang['fro'] = _LANGUAGE_FRO; // French, Old
	$lang['fry'] = _LANGUAGE_FRY; // Frisian
	$lang['ful'] = _LANGUAGE_FUL; // Fulah
	$lang['fur'] = _LANGUAGE_FUR; // Friulian
	$lang['gaa'] = _LANGUAGE_GAA; // Ga
	$lang['gay'] = _LANGUAGE_GAY; // Gayo
	$lang['gba'] = _LANGUAGE_GBA; // Gbaya
	$lang['gem'] = _LANGUAGE_GEM; // Germanic (Other)
	$lang['gez'] = _LANGUAGE_GEZ; // Geez
	$lang['gil'] = _LANGUAGE_GIL; // Gilbertese
	$lang['gla'] = _LANGUAGE_GLA; // Gaelic; Scottish Gaelic
	$lang['gle'] = _LANGUAGE_GLE; // Irish
	$lang['glg'] = _LANGUAGE_GLG; // Gallegan
	$lang['glv'] = _LANGUAGE_GLV; // Manx
	$lang['gmh'] = _LANGUAGE_GMH; // German, Middle High
	$lang['goh'] = _LANGUAGE_GOH; // German, Old High
	$lang['gon'] = _LANGUAGE_GON; // Gondi
	$lang['gor'] = _LANGUAGE_GOR; // Gorontalo
	$lang['got'] = _LANGUAGE_GOT; // Gothic
	$lang['grb'] = _LANGUAGE_GRB; // Grebo
	$lang['grc'] = _LANGUAGE_GRC; // Greek, Ancient
	$lang['grn'] = _LANGUAGE_GRN; // Guarani
	$lang['guj'] = _LANGUAGE_GUJ; // Gujarati
	$lang['gwi'] = _LANGUAGE_GWI; // Gwich�in
	$lang['hai'] = _LANGUAGE_HAI; // Haida
	$lang['hat'] = _LANGUAGE_HAT; // Haitian; Haitian Creole
	$lang['hau'] = _LANGUAGE_HAU; // Hausa
	$lang['haw'] = _LANGUAGE_HAW; // Hawaiian
	$lang['heb'] = _LANGUAGE_HEB; // Hebrew
	$lang['her'] = _LANGUAGE_HER; // Herero
	$lang['hil'] = _LANGUAGE_HIL; // Hiligaynon
	$lang['him'] = _LANGUAGE_HIM; // Himachali
	$lang['hin'] = _LANGUAGE_HIN; // Hindi
	$lang['hit'] = _LANGUAGE_HIT; // Hittite
	$lang['hmn'] = _LANGUAGE_HMN; // Hmong
	$lang['hmo'] = _LANGUAGE_HMO; // Hiri Motu
	$lang['hrv'] = _LANGUAGE_HRV; // Croatian
	$lang['hsb'] = _LANGUAGE_HSB; // Upper Sorbian
	$lang['hun'] = _LANGUAGE_HUN; // Hungarian
	$lang['hup'] = _LANGUAGE_HUP; // Hupa
	$lang['hye'] = _LANGUAGE_HYE; // Armenian
	$lang['iba'] = _LANGUAGE_IBA; // Iban
	$lang['ibo'] = _LANGUAGE_IBO; // Igbo
	$lang['ido'] = _LANGUAGE_IDO; // Ido
	$lang['iii'] = _LANGUAGE_III; // Sichuan Yi
	$lang['ijo'] = _LANGUAGE_IJO; // Ijo
	$lang['iku'] = _LANGUAGE_IKU; // Inuktitut
	$lang['ile'] = _LANGUAGE_ILE; // Interlingue
	$lang['ilo'] = _LANGUAGE_ILO; // Iloko
	$lang['ina'] = _LANGUAGE_INA; // Interlingua (International Auxiliary Language Association)
	$lang['inc'] = _LANGUAGE_INC; // Indic (Other)
	$lang['ind'] = _LANGUAGE_IND; // Indonesian
	$lang['ine'] = _LANGUAGE_INE; // Indo-European (Other)
	$lang['inh'] = _LANGUAGE_INH; // Ingush
	$lang['ipk'] = _LANGUAGE_IPK; // Inupiaq
	$lang['ira'] = _LANGUAGE_IRA; // Iranian (Other)
	$lang['iro'] = _LANGUAGE_IRO; // Iroquoian languages
	$lang['isl'] = _LANGUAGE_ISL; // Icelandic
	$lang['ita'] = _LANGUAGE_ITA; // Italian
	$lang['jav'] = _LANGUAGE_JAV; // Javanese
	$lang['jbo'] = _LANGUAGE_JBO; // Lojban
	$lang['jpn'] = _LANGUAGE_JPN; // Japanese
	$lang['jpr'] = _LANGUAGE_JPR; // Judeo-Persian
	$lang['jrb'] = _LANGUAGE_JRB; // Judeo-Arabic
	$lang['kaa'] = _LANGUAGE_KAA; // Kara-Kalpak
	$lang['kab'] = _LANGUAGE_KAB; // Kabyle
	$lang['kac'] = _LANGUAGE_KAC; // Kachin
	$lang['kal'] = _LANGUAGE_KAL; // Kalaallisut; Greenlandic
	$lang['kam'] = _LANGUAGE_KAM; // Kamba
	$lang['kan'] = _LANGUAGE_KAN; // Kannada
	$lang['kar'] = _LANGUAGE_KAR; // Karen
	$lang['kas'] = _LANGUAGE_KAS; // Kashmiri
	$lang['kat'] = _LANGUAGE_KAT; // Georgian
	$lang['kau'] = _LANGUAGE_KAU; // Kanuri
	$lang['kaw'] = _LANGUAGE_KAW; // Kawi
	$lang['kaz'] = _LANGUAGE_KAZ; // Kazakh
	$lang['kbd'] = _LANGUAGE_KBD; // Kabardian
	$lang['kha'] = _LANGUAGE_KHA; // Khasi
	$lang['khi'] = _LANGUAGE_KHI; // Khoisan (Other)
	$lang['khm'] = _LANGUAGE_KHM; // Khmer
	$lang['kho'] = _LANGUAGE_KHO; // Khotanese
	$lang['kik'] = _LANGUAGE_KIK; // Kikuyu; Gikuyu
	$lang['kin'] = _LANGUAGE_KIN; // Kinyarwanda
	$lang['kir'] = _LANGUAGE_KIR; // Kirghiz
	$lang['kmb'] = _LANGUAGE_KMB; // Kimbundu
	$lang['kok'] = _LANGUAGE_KOK; // Konkani
	$lang['kom'] = _LANGUAGE_KOM; // Komi
	$lang['kon'] = _LANGUAGE_KON; // Kongo
	$lang['kor'] = _LANGUAGE_KOR; // Korean
	$lang['kos'] = _LANGUAGE_KOS; // Kosraean
	$lang['kpe'] = _LANGUAGE_KPE; // Kpelle
	$lang['krc'] = _LANGUAGE_KRC; // Karachay-Balkar
	$lang['kro'] = _LANGUAGE_KRO; // Kru
	$lang['kru'] = _LANGUAGE_KRU; // Kurukh
	$lang['kua'] = _LANGUAGE_KUA; // Kuanyama; Kwanyama
	$lang['kum'] = _LANGUAGE_KUM; // Kumyk
	$lang['kur'] = _LANGUAGE_KUR; // Kurdish
	$lang['kut'] = _LANGUAGE_KUT; // Kutenai
	$lang['lad'] = _LANGUAGE_LAD; // Ladino
	$lang['lah'] = _LANGUAGE_LAH; // Lahnda
	$lang['lam'] = _LANGUAGE_LAM; // Lamba
	$lang['lao'] = _LANGUAGE_LAO; // Lao
	$lang['lat'] = _LANGUAGE_LAT; // Latin
	$lang['lav'] = _LANGUAGE_LAV; // Latvian
	$lang['lez'] = _LANGUAGE_LEZ; // Lezghian
	$lang['lim'] = _LANGUAGE_LIM; // Limburgan; Limburger; Limburgish
	$lang['lin'] = _LANGUAGE_LIN; // Lingala
	$lang['lit'] = _LANGUAGE_LIT; // Lithuanian
	$lang['lol'] = _LANGUAGE_LOL; // Mongo
	$lang['loz'] = _LANGUAGE_LOZ; // Lozi
	$lang['ltz'] = _LANGUAGE_LTZ; // Luxembourgish; Letzeburgesch
	$lang['lua'] = _LANGUAGE_LUA; // Luba-Lulua
	$lang['lub'] = _LANGUAGE_LUB; // Luba-Katanga
	$lang['lug'] = _LANGUAGE_LUG; // Ganda
	$lang['lui'] = _LANGUAGE_LUI; // Luiseno
	$lang['lun'] = _LANGUAGE_LUN; // Lunda
	$lang['luo'] = _LANGUAGE_LUO; // Luo (Kenya and Tanzania)
	$lang['lus'] = _LANGUAGE_LUS; // lushai
	$lang['mad'] = _LANGUAGE_MAD; // Madurese
	$lang['mag'] = _LANGUAGE_MAG; // Magahi
	$lang['mah'] = _LANGUAGE_MAH; // Marshallese
	$lang['mai'] = _LANGUAGE_MAI; // Maithili
	$lang['mak'] = _LANGUAGE_MAK; // Makasar
	$lang['mal'] = _LANGUAGE_MAL; // Malayalam
	$lang['man'] = _LANGUAGE_MAN; // Mandingo
	$lang['map'] = _LANGUAGE_MAP; // Austronesian (Other)
	$lang['mar'] = _LANGUAGE_MAR; // Marathi
	$lang['mas'] = _LANGUAGE_MAS; // Masai
	$lang['mdf'] = _LANGUAGE_MDF; // Moksha
	$lang['mdr'] = _LANGUAGE_MDR; // Mandar
	$lang['men'] = _LANGUAGE_MEN; // Mende
	$lang['mga'] = _LANGUAGE_MGA; // Irish, Middle
	$lang['mic'] = _LANGUAGE_MIC; // Micmac
	$lang['min'] = _LANGUAGE_MIN; // Minangkabau
	$lang['mis'] = _LANGUAGE_MIS; // Miscellaneous languages
	$lang['mkd'] = _LANGUAGE_MKD; // Macedonian
	$lang['mkh'] = _LANGUAGE_MKH; // Mon-Khmer (Other)
	$lang['mlg'] = _LANGUAGE_MLG; // Malagasy
	$lang['mlt'] = _LANGUAGE_MLT; // Maltese
	$lang['mnc'] = _LANGUAGE_MNC; // Manchu
	$lang['mni'] = _LANGUAGE_MNI; // Manipuri
	$lang['mno'] = _LANGUAGE_MNO; // Manobo languages
	$lang['moh'] = _LANGUAGE_MOH; // Mohawk
	$lang['mol'] = _LANGUAGE_MOL; // Moldavian
	$lang['mon'] = _LANGUAGE_MON; // Mongolian
	$lang['mos'] = _LANGUAGE_MOS; // Mossi
	$lang['mri'] = _LANGUAGE_MRI; // Maori
	$lang['msa'] = _LANGUAGE_MSA; // Malay
	$lang['mul'] = _LANGUAGE_MUL; // Multiple languages
	$lang['mun'] = _LANGUAGE_MUN; // Munda languages
	$lang['mus'] = _LANGUAGE_MUS; // Creek
	$lang['mwr'] = _LANGUAGE_MWR; // Marwari
	$lang['mya'] = _LANGUAGE_MYA; // Burmese
	$lang['myn'] = _LANGUAGE_MYN; // Mayan languages
	$lang['myv'] = _LANGUAGE_MYV; // Erzya
	$lang['nah'] = _LANGUAGE_NAH; // Nahuatl
	$lang['nai'] = _LANGUAGE_NAI; // North American Indian
	$lang['nap'] = _LANGUAGE_NAP; // Neapolitan
	$lang['nau'] = _LANGUAGE_NAU; // Nauru
	$lang['nav'] = _LANGUAGE_NAV; // Navajo; Navaho
	$lang['nbl'] = _LANGUAGE_NBL; // Ndebele, South; South Ndebele
	$lang['nde'] = _LANGUAGE_NDE; // Ndebele, North; North Ndebele
	$lang['ndo'] = _LANGUAGE_NDO; // Ndonga
	$lang['nds'] = _LANGUAGE_NDS; // Low German; Low Saxon; German, Low; Saxon, Low
	$lang['nep'] = _LANGUAGE_NEP; // Nepali
	$lang['new'] = _LANGUAGE_NEW; // Newari; Nepal Bhasa
	$lang['nia'] = _LANGUAGE_NIA; // Nias
	$lang['nic'] = _LANGUAGE_NIC; // Niger-Kordofanian (Other)
	$lang['niu'] = _LANGUAGE_NIU; // Niuean
	$lang['nld'] = _LANGUAGE_NLD; // Dutch; Flemish
	$lang['nno'] = _LANGUAGE_NNO; // Norwegian Nynorsk; Nynorsk, Norwegian
	$lang['nob'] = _LANGUAGE_NOB; // Norwegian Bokm�l; Bokm�l, Norwegian
	$lang['nog'] = _LANGUAGE_NOG; // Nogai
	$lang['non'] = _LANGUAGE_NON; // Norse, Old
	$lang['nor'] = _LANGUAGE_NOR; // Norwegian
	$lang['nso'] = _LANGUAGE_NSO; // Sotho, Northern
	$lang['nub'] = _LANGUAGE_NUB; // Nubian languages
	$lang['nwc'] = _LANGUAGE_NWC; // Classical Newari; Old Newari; Classical Nepal Bhasa
	$lang['nya'] = _LANGUAGE_NYA; // Chichewa; Chewa; Nyanja
	$lang['nym'] = _LANGUAGE_NYM; // Nyamwezi
	$lang['nyn'] = _LANGUAGE_NYN; // Nyankole
	$lang['nyo'] = _LANGUAGE_NYO; // Nyoro
	$lang['nzi'] = _LANGUAGE_NZI; // Nzima
	$lang['oci'] = _LANGUAGE_OCI; // Occitan; Proven�al
	$lang['oji'] = _LANGUAGE_OJI; // Ojibwa
	$lang['ori'] = _LANGUAGE_ORI; // Oriya
	$lang['orm'] = _LANGUAGE_ORM; // Oromo
	$lang['osa'] = _LANGUAGE_OSA; // Osage
	$lang['oss'] = _LANGUAGE_OSS; // Ossetian; Ossetic
	$lang['ota'] = _LANGUAGE_OTA; // Turkish, Ottoman
	$lang['oto'] = _LANGUAGE_OTO; // Otomian languages
	$lang['paa'] = _LANGUAGE_PAA; // Papuan (Other)
	$lang['pag'] = _LANGUAGE_PAG; // Pangasinan
	$lang['pal'] = _LANGUAGE_PAL; // Pahlavi
	$lang['pam'] = _LANGUAGE_PAM; // Pampanga
	$lang['pan'] = _LANGUAGE_PAN; // Panjabi; Punjabi
	$lang['pap'] = _LANGUAGE_PAP; // Papiamento
	$lang['pau'] = _LANGUAGE_PAU; // Palauan
	$lang['peo'] = _LANGUAGE_PEO; // Persian, Old
	$lang['phi'] = _LANGUAGE_PHI; // Philippine (Other)
	$lang['phn'] = _LANGUAGE_PHN; // Phoenician
	$lang['pli'] = _LANGUAGE_PLI; // Pali
	$lang['pol'] = _LANGUAGE_POL; // Polish
	$lang['pon'] = _LANGUAGE_PON; // Pohnpeian
	$lang['por'] = _LANGUAGE_POR; // Portuguese
	$lang['pra'] = _LANGUAGE_PRA; // Prakrit languages
	$lang['pro'] = _LANGUAGE_PRO; // Proven�al, Old
	$lang['pus'] = _LANGUAGE_PUS; // Pushto
	$lang['qaa-qtz'] = _LANGUAGE_QAA_QTZ; // Reserved for local use
	$lang['que'] = _LANGUAGE_QUE; // Quechua
	$lang['raj'] = _LANGUAGE_RAJ; // Rajasthani
	$lang['rap'] = _LANGUAGE_RAP; // Rapanui
	$lang['rar'] = _LANGUAGE_RAR; // Rarotongan
	$lang['roa'] = _LANGUAGE_ROA; // Romance (Other)
	$lang['roh'] = _LANGUAGE_ROH; // Raeto-Romance
	$lang['rom'] = _LANGUAGE_ROM; // Romany
	$lang['ron'] = _LANGUAGE_RON; // Romanian
	$lang['run'] = _LANGUAGE_RUN; // Rundi
	$lang['rus'] = _LANGUAGE_RUS; // Russian
	$lang['sad'] = _LANGUAGE_SAD; // Sandawe
	$lang['sag'] = _LANGUAGE_SAG; // Sango
	$lang['sah'] = _LANGUAGE_SAH; // Yakut
	$lang['sai'] = _LANGUAGE_SAI; // South American Indian (Other)
	$lang['sal'] = _LANGUAGE_SAL; // Salishan languages
	$lang['sam'] = _LANGUAGE_SAM; // Samaritan Aramaic
	$lang['san'] = _LANGUAGE_SAN; // Sanskrit
	$lang['sas'] = _LANGUAGE_SAS; // Sasak
	$lang['sat'] = _LANGUAGE_SAT; // Santali
	$lang['sco'] = _LANGUAGE_SCO; // Scots
	$lang['sel'] = _LANGUAGE_SEL; // Selkup
	$lang['sem'] = _LANGUAGE_SEM; // Semitic (Other)
	$lang['sga'] = _LANGUAGE_SGA; // Irish, Old
	$lang['sgn'] = _LANGUAGE_SGN; // Sign Languages
	$lang['shn'] = _LANGUAGE_SHN; // Shan
	$lang['sid'] = _LANGUAGE_SID; // Sidamo
	$lang['sin'] = _LANGUAGE_SIN; // Sinhalese
	$lang['sio'] = _LANGUAGE_SIO; // Siouan languages
	$lang['sit'] = _LANGUAGE_SIT; // Sino-Tibetan (Other)
	$lang['sla'] = _LANGUAGE_SLA; // Slavic (Other)
	$lang['slk'] = _LANGUAGE_SLK; // Slovak
	$lang['slv'] = _LANGUAGE_SLV; // Slovenian
	$lang['sma'] = _LANGUAGE_SMA; // Southern Sami
	$lang['sme'] = _LANGUAGE_SME; // Northern Sami
	$lang['smi'] = _LANGUAGE_SMI; // Sami languages (Other)
	$lang['smj'] = _LANGUAGE_SMJ; // Lule Sami
	$lang['smn'] = _LANGUAGE_SMN; // Inari Sami
	$lang['smo'] = _LANGUAGE_SMO; // Samoan
	$lang['sms'] = _LANGUAGE_SMS; // Skolt Sami
	$lang['sna'] = _LANGUAGE_SNA; // Shona
	$lang['snd'] = _LANGUAGE_SND; // Sindhi
	$lang['snk'] = _LANGUAGE_SNK; // Soninke
	$lang['sog'] = _LANGUAGE_SOG; // Sogdian
	$lang['som'] = _LANGUAGE_SOM; // Somali
	$lang['son'] = _LANGUAGE_SON; // Songhai
	$lang['sot'] = _LANGUAGE_SOT; // Sotho, Southern
	$lang['spa'] = _LANGUAGE_SPA; // Spanish; Castilian
	$lang['sqi'] = _LANGUAGE_SQI; // Albanian
	$lang['srd'] = _LANGUAGE_SRD; // Sardinian
	$lang['srp'] = _LANGUAGE_SRP; // Serbian
	$lang['srr'] = _LANGUAGE_SRR; // Serer
	$lang['ssa'] = _LANGUAGE_SSA; // Nilo-Saharan (Other)
	$lang['ssw'] = _LANGUAGE_SSW; // Swati
	$lang['suk'] = _LANGUAGE_SUK; // Sukuma
	$lang['sun'] = _LANGUAGE_SUN; // Sundanese
	$lang['sus'] = _LANGUAGE_SUS; // Susu
	$lang['sux'] = _LANGUAGE_SUX; // Sumerian
	$lang['swa'] = _LANGUAGE_SWA; // Swahili
	$lang['swe'] = _LANGUAGE_SWE; // Swedish
	$lang['syr'] = _LANGUAGE_SYR; // Syriac
	$lang['tah'] = _LANGUAGE_TAH; // Tahitian
	$lang['tai'] = _LANGUAGE_TAI; // Tai (Other)
	$lang['tam'] = _LANGUAGE_TAM; // Tamil
	$lang['tat'] = _LANGUAGE_TAT; // Tatar
	$lang['tel'] = _LANGUAGE_TEL; // Telugu
	$lang['tem'] = _LANGUAGE_TEM; // Timne
	$lang['ter'] = _LANGUAGE_TER; // Tereno
	$lang['tet'] = _LANGUAGE_TET; // Tetum
	$lang['tgk'] = _LANGUAGE_TGK; // Tajik
	$lang['tgl'] = _LANGUAGE_TGL; // Tagalog
	$lang['tha'] = _LANGUAGE_THA; // Thai
	$lang['tig'] = _LANGUAGE_TIG; // Tigre
	$lang['tir'] = _LANGUAGE_TIR; // Tigrinya
	$lang['tiv'] = _LANGUAGE_TIV; // Tiv
	$lang['tkl'] = _LANGUAGE_TKL; // Tokelau
	$lang['tlh'] = _LANGUAGE_TLH; // Klingon; tlhlngan-Hol
	$lang['tli'] = _LANGUAGE_TLI; // Tlingit
	$lang['tmh'] = _LANGUAGE_TMH; // Tamashek
	$lang['tog'] = _LANGUAGE_TOG; // Tonga (Nyasa)
	$lang['ton'] = _LANGUAGE_TON; // Tonga (Tonga Islands)
	$lang['tpi'] = _LANGUAGE_TPI; // Tok Pisin
	$lang['tsi'] = _LANGUAGE_TSI; // Tsimshian
	$lang['tsn'] = _LANGUAGE_TSN; // Tswana
	$lang['tso'] = _LANGUAGE_TSO; // Tsonga
	$lang['tuk'] = _LANGUAGE_TUK; // Turkmen
	$lang['tum'] = _LANGUAGE_TUM; // Tumbuka
	$lang['tup'] = _LANGUAGE_TUP; // Tupi languages
	$lang['tur'] = _LANGUAGE_TUR; // Turkish
	$lang['tut'] = _LANGUAGE_TUT; // Altaic (Other)
	$lang['tvl'] = _LANGUAGE_TVL; // Tuvalu
	$lang['twi'] = _LANGUAGE_TWI; // Twi
	$lang['tyv'] = _LANGUAGE_TYV; // Tuvinian
	$lang['udm'] = _LANGUAGE_UDM; // Udmurt
	$lang['uga'] = _LANGUAGE_UGA; // Ugaritic
	$lang['uig'] = _LANGUAGE_UIG; // Uighur
	$lang['ukr'] = _LANGUAGE_UKR; // Ukrainian
	$lang['umb'] = _LANGUAGE_UMB; // Umbundu
	$lang['und'] = _LANGUAGE_UND; // Undetermined
	$lang['urd'] = _LANGUAGE_URD; // Urdu
	$lang['uzb'] = _LANGUAGE_UZB; // Uzbek
	$lang['vai'] = _LANGUAGE_VAI; // Vai
	$lang['ven'] = _LANGUAGE_VEN; // Venda
	$lang['vie'] = _LANGUAGE_VIE; // Vietnamese
	$lang['vol'] = _LANGUAGE_VOL; // Volap�k
	$lang['vot'] = _LANGUAGE_VOT; // Votic
	$lang['wak'] = _LANGUAGE_WAK; // Wakashan languages
	$lang['wal'] = _LANGUAGE_WAL; // Walamo
	$lang['war'] = _LANGUAGE_WAR; // Waray
	$lang['was'] = _LANGUAGE_WAS; // Washo
	$lang['wen'] = _LANGUAGE_WEN; // Sorbian languages
	$lang['wln'] = _LANGUAGE_WLN; // Walloon
	$lang['wol'] = _LANGUAGE_WOL; // Wolof
	$lang['xal'] = _LANGUAGE_XAL; // Kalmyk
	$lang['xho'] = _LANGUAGE_XHO; // Xhosa
	$lang['yao'] = _LANGUAGE_YAO; // Yao
	$lang['yap'] = _LANGUAGE_YAP; // Yapese
	$lang['yid'] = _LANGUAGE_YID; // Yiddish
	$lang['yor'] = _LANGUAGE_YOR; // Yoruba
	$lang['ypk'] = _LANGUAGE_YPK; // Yupik languages
	$lang['zap'] = _LANGUAGE_ZAP; // Zapotec
	$lang['zen'] = _LANGUAGE_ZEN; // Zenaga
	$lang['zha'] = _LANGUAGE_ZHA; // Zhuang; Chuang
	$lang['zho'] = _LANGUAGE_ZHO; // Chinese
	$lang['znd'] = _LANGUAGE_ZND; // Zande
	$lang['zul'] = _LANGUAGE_ZUL; // Zulu
	$lang['zun'] = _LANGUAGE_ZUN; // Zuni
	// Non-ISO entries are written as x_[language name]
	$lang['x_all'] = _ALL; // all languages
	$lang['x_brazilian_portuguese'] = _LANGUAGE_X_BRAZILIAN_PORTUGUESE; // Brazilian Portuguese
	$lang['x_rus_koi8r'] = _LANGUAGE_X_RUS_KOI8R; // Russian KOI8-R
	// end of list
	return $lang;
}

/*
 * sniff users language
 *
 */
function sniff_user_language()
{
	if (file_exists('system/Sniffer/pnincludes/phpSniff.class.php')) {
		include_once('system/Sniffer/pnincludes/phpSniff.class.php');
	} else if (file_exists('modules/Sniffer/pnincludes/phpSniff.class.php')) {
		include_once('modules/Sniffer/pnincludes/phpSniff.class.php');
	} else {
		return false;
	}

    // sniff process
    $client =& new phpSniff();
    $languages = explode(',', $client->property('language'));
    include_once 'includes/pnLang.php';
    $alllanguages = cnvlanguagelist();

    foreach($languages as $language) {
        if(array_key_exists($language, $alllanguages)) {
            return $alllanguages[$language];
        }
    }
    // nothing found - default is eng
    return 'eng';
}
?>