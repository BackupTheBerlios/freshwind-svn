<?php
// File: $Id: pnAntiCracker.php 16632 2005-08-11 07:32:04Z larsneo $
// ----------------------------------------------------------------------
// PostNuke Content Management System
// Copyright (C) 2001 by the PostNuke Development Team.
// http://www.postnuke.com/
// ----------------------------------------------------------------------
// LICENSE
//
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License (GPL)
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// To read the license please visit http://www.gnu.org/copyleft/gpl.html
// ----------------------------------------------------------------------
/**
 * @package PostNuke_Core
 * @subpackage PostNuke_pnAntiCracker
 */

/*
    Protects better diverse attempts of Cross-Site Scripting
       attacks, thanks to webmedic, Timax, larsneo.
*/
function pnSecureInput()
{
    // Cross-Site Scripting attack defense - Sent by larsneo
    // some syntax checking against injected javascript
    // extended by Neo

    if (count($_GET) > 0) {
        //        Lets now sanitize the GET vars
        foreach ($_GET as $secvalue) {
            if (!is_array($secvalue)) {
                if ((eregi("<[^>]*script.*\"?[^>]*>", $secvalue)) ||
                        (eregi(".*[[:space:]](or|and)[[:space:]].*(=|like).*", $secvalue)) ||
                        (eregi("<[^>]*object.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*iframe.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*applet.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*meta.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*style.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*form.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*window.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*alert.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*img.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*document.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*cookie.*\"?[^>]*>", $secvalue)) ||
                        (eregi("\"", $secvalue))) {
                        pnMailHackAttempt('pnAntiCracker',__LINE__,'pnSecurity Alert','GET Intrusion detection.');
                        Header("Location: index.php");
                }
            }
        }
    }

    //        Lets now sanitize the POST vars
    if ( count($_POST) > 0) {
        foreach ($_POST as $secvalue) {
            if (!is_array($secvalue)) {
                if ((eregi("<[^>]*script.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*object.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*iframe.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*applet.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*window.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*alert.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*document.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*cookie.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*meta.*\"?[^>]*>", $secvalue))
                        ) {

                        pnMailHackAttempt('pnAntiCracker',__LINE__,'pnSecurity Alert','POST Intrusion detection.');
                        Header("Location: index.php");
                }
             }
        }
    }

    //        Lets now sanitize the COOKIE vars
    if ( count($_COOKIE) > 0) {
        foreach ($_COOKIE as $secvalue) {
            if (!is_array($secvalue)) {
                if ((eregi("<[^>]*script.*\"?[^>]*>", $secvalue)) ||
                        (eregi(".*[[:space:]](or|and)[[:space:]].*(=|like).*", $secvalue)) ||
                        (eregi("<[^>]*object.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*iframe.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*applet.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*meta.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*style.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*form.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*window.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*alert.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*document.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*cookie.*\"?[^>]*>", $secvalue)) ||
                        (eregi("<[^>]*img.*\"?[^>]*>", $secvalue))
                        ) {

                        pnMailHackAttempt('pnAntiCracker',__LINE__,'pnSecurity Alert','COOKIE Intrusion detection.');
                        Header("Location: index.php");
                }
            }
        }
    }
}

function pnMailHackAttempt( $detecting_file        =        "(no filename available)",
                            $detecting_line        =        "(no line number available)",
                            $hack_type             =        "(no type given)",
                            $message               =        "(no message given)" ) {

        $output         =        "Attention site admin of ".pnConfigGetVar('sitename').",\n";
        $output        .=        "On ".ml_ftime( _DATEBRIEF, (GetUserTime(time())));
        $output        .=        " at ". ml_ftime( _TIMEBRIEF, (GetUserTime(time())));
        $output        .=        " the PostNuke code has detected that somebody tried to"
                                ." send information to your site that may have been intended"
                                ." as a hack. Do not panic, it may be harmless: maybe this"
                                ." detection was triggered by something you did! Anyway, it"
                                ." was detected and blocked. \n";
        $output        .=        "The suspicious activity was recognized in $detecting_file "
                                ."on line $detecting_line, and is of the type $hack_type. \n";
        $output        .=        "Additional information given by the code which detected this: ".$message;
        $output        .=        "\n\nBelow you will find a lot of information obtained about "
                                ."this attempt, that may help you to find  what happened and "
                                ."maybe who did it.\n\n";

        $output        .=        "\n=====================================\n";
        $output        .=        "Information about this user:\n";
        $output        .=        "=====================================\n";

        if ( !pnUserLoggedIn() ) {
            $output        .=   "This person is not logged in.\n";
        } else {
            $output        .=   "PostNuke username:  ".pnUserGetVar('uname') ."\n"
                               ."Registered email of this PostNuke user: ". pnUserGetVar('email')."\n"
                               ."Registered real name of this PostNuke user: ".pnUserGetVar('name') ."\n";
        }

        $output        .=        "IP numbers: [note: when you are dealing with a real cracker "
                                ."these IP numbers might not be from the actual computer he is "
                                ."working on]"
                                ."\n\t IP according to HTTP_CLIENT_IP: ".pnServerGetVar( 'HTTP_CLIENT_IP' )
                                ."\n\t IP according to REMOTE_ADDR: ".pnServerGetVar( 'REMOTE_ADDR' )
                                ."\n\t IP according to GetHostByName(\$_SERVER['REMOTE_ADDR']): ".GetHostByName($_SERVER['REMOTE_ADDR'])
                                ."\n\n";

        $output        .=        "\n=====================================\n";
        $output        .=        "Browser information\n";
        $output        .=        "=====================================\n";

        $output        .=        "HTTP_USER_AGENT: ".$_SERVER['HTTP_USER_AGENT'] ."\n";

        $browser = (array) get_browser();
        while ( list ( $key, $value ) = each ( $browser ) ) {
                $output .= "BROWSER * $key : $value\n";
        }

        $output        .=        "\n=====================================\n";
        $output        .=        "Information in the \$_GET array\n";
        $output        .=        "This is about variables that may have been ";
        $output        .=        "in the URL string or in a 'GET' type form.\n";
        $output        .=        "=====================================\n";

        while ( list ( $key, $value ) = each ( $_GET ) ) {
                $output .= "GET * $key : $value\n";
        }

        $output        .=        "\n=====================================\n";
        $output        .=        "Information in the \$_POST array\n";
        $output        .=        "This is about visible and invisible form elements.\n";
        $output        .=        "=====================================\n";

        while ( list ( $key, $value ) = each ( $_POST ) ) {
                $output .= "POST * $key : $value\n";
        }

        $output        .=        "\n=====================================\n";
        $output        .=        "Information in the \$_COOKIE array\n";
        $output        .=        "=====================================\n";

        while ( list ( $key, $value ) = each ( $_COOKIE ) )  {
                $output .= "COOKIE * $key : $value\n";
        }

        $output        .=        "\n=====================================\n";
        $output        .=        "Information in the \$_FILES array\n";
        $output        .=        "=====================================\n";

        while ( list ( $key, $value ) = each ( $_FILES ) ) {
                $output .= "FILES * $key : $value\n";
        }

        $output        .=        "\n=====================================\n";
        $output        .=        "Information in the \$_SESSION array\n";
        $output        .=        "This is session info. The variables\n";
        $output        .=        "  starting with PNSV are PostNukeSessionVariables.\n";
        $output        .=        "=====================================\n";

        while ( list ( $key, $value ) = each ( $_SESSION ) ) {
                $output .= "SESSION * $key : $value\n";
        }

        $headers = "From: ".pnConfigGetVar('sitename')."<".pnConfigGetVar('adminmail').">\n";
        $headers.= "X-Priority: 1 (Highest)";
				
        pnMail(pnConfigGetVar('adminmail'), 'Attempted hack on your site? (type: '.$hack_type.')', $output, $headers );

        return;
}
?>