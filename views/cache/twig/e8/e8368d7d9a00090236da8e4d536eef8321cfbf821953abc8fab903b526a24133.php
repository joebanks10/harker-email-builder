<?php

/* @email/email.html */
class __TwigTemplate_9a87f6abebecfcfa15beef0b265cb11e36af8381eb37c7a7b13ead31118da2c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>eWeekly Template</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">
    <style type=\"text/css\" rel=\"theme\">
        /* Default Styles (desktop first)
        -------------------------------------------- */

        .ReadMsgBody { 
            width: 100%; background-color: #ffffff; 
        }
        .ExternalClass { 
            width: 100%; 
            background-color: #ffffff; 
        }
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }
        html { width: 100%; }
        body { 
            -webkit-text-size-adjust: none;
            -ms-text-size-adjust: none;
            margin: 0;
            padding: 0;
        }
        table { 
            border-spacing: 0; 
            table-layout: fixed; 
            margin: 0 auto; 
        }
        table table table { table-layout: auto; }
        img { display: block !important; }
        table td { border-collapse: collapse; }
        .yshortcuts a { border-bottom: none !important; }
        a { 
            color: #00809E; 
        }
        .textbutton a { 
            font-family: 'open sans', arial, sans-serif !important; 
            color: #ffffff !important; 
        }

        img {
            display: block; 
            line-height: 0px; 
            font-size: 0px; 
            border: 0px;
        }

        h2, h3, h4 {
            font-family: 'Open Sans', Arial, sans-serif; 
            color: #3B3B3B; 
            text-align: left;
            margin-top: 0;
            margin-bottom: 15px;
        }

        h2 {
            font-size: 24px; 
            line-height: 34.8px;
            font-weight: bold;
        }

        h3 {
            font-size: 20px; 
            line-height: 34.8px;
            font-weight: 100;
        }

        h4 {
            font-size: 16px; 
            line-height: 26px;
            font-weight: bold;
        }


        /* Element Wrappers
        -------------------------------------------- */

        tr:last-child > .element {
            padding-bottom: 0;
        }

        tr:first-child > .element {
            padding-top: 0;
        }


        /* Elements
        -------------------------------------------- */

        .element {
            padding-bottom: 15px;
        }

        .element-list {
            padding-bottom: 30px;
        }

        .title {
            font-family: 'Open Sans', Arial, sans-serif; 
            font-size: 28px;
            line-height: 34px;
            letter-spacing: 2px;
            color: #3B3B3B; 
            font-weight: bold; 
            text-align: center;
            padding-bottom: 15px;
        }

        .subtitle {
            font-family: 'Open Sans', Arial, sans-serif; 
            font-size: 16px;
            line-height: 26px; 
            letter-spacing: 2px;
            color: #676767;
            text-align: center;
            padding-bottom: 15px;
        }

        .subtitle-lg {
            font-size: 20px;
            line-height: 30px;
        }

        .header {
            font-family: 'Open Sans', Arial, sans-serif; 
            font-size: 24px; 
            line-height: 34.8px;
            color: #3B3B3B; 
            font-weight: bold; 
            text-align: left;
        }

        .header a {
            text-decoration: none;
        }

        .header a:hover, .header a:focus {
            text-decoration: underline;
        }

        .subheader {
            font-family: 'Open Sans', Arial, sans-serif; 
            font-size: 20px; 
            line-height: 34.8px;
            color: #3B3B3B; 
            font-weight: 100; 
            text-align: left;
        }

        p, .content {
            font-family: 'Open Sans', Arial, sans-serif; 
            font-size: 16px; 
            line-height: 26px;
            color: #676767; 
            text-align: left;
        }

        p {
            margin-top: 0;
            margin-bottom: 15px;
        }

        .content-intro {
            font-family: 'Open Sans', Arial, sans-serif;
            font-size: 23px;
            font-weight: 100;
            line-height: 36px;
            color: #333;
            text-align: left;
        }

        .element-img {
            line-height: 0px;
        }

        .table-button {
            background-color: #00809E;
        }

        .button {
            font-family: 'Open Sans', Arial, sans-serif;
            font-size: 16px;
            line-height: 26px;
            color: #ffffff;
            vertical-align: middle;
            text-align: center;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 20px;
            padding-right: 20px;
        }

        .button a {
            display: block;
            color: #ffffff;
            text-decoration: none; 
        }

        .table-button-secondary {
            background-color: #ffffff;
        }

        .table-button-secondary .button,
        .table-button-secondary .button a  {
            color: #676767;
        }

        .table-button-outline {
            background-color: transparent;
        }

        .table-button-outline .button {
            border: 1px solid #00809e;  
        }

        .table-button-outline .button,
        .table-button-outline .button a {
            color: #00809E;
            font-weight: bold;
        }

        .table-button-text {
            background-color: transparent;
        }

        .table-button-text .button,
        .table-button-text .button a {
            color: #00809E;
        }

        .table-button-text .button {
            text-align: left;
            padding: 0;
        }

        .table-button-text .button a {
            text-decoration: underline; 
        }

        .list-indent {
            padding-left: 15px;
        }

        .list-item {
            padding-top: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #dddddd; /* #ecf0f1*/
        }

        .list-collapse .list-item {
            padding-top: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .bullet.img-container {
            padding-top: 4px;
        }

        .bullet-text,
        .list-item-text {
            font-family: 'Open Sans', Arial, sans-serif; 
            font-size: 16px;
            line-height: 26px;
            color: #676767;
            text-align: left;
        }

        .list-item-text {
            padding-left: 15px;
        }

        .list-unstyled .list-item-text,
        .list-unordered .list-item-text {
            padding-left: 0;
        }

        .list-ordered .list-item-text {
            padding-left: 10px;
        }


        /* Module Wrappers
        -------------------------------------------- */

        .background {
            background-size: cover; 
            background-position: top center;
        }

        .container {
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .row {
            padding-bottom: 40px;
        }

        tr:last-child > .row {
            padding-bottom: 0;
        }


        /* Modules
        -------------------------------------------- */

        .module-topbar {
            background-color: #044836;
        }

        .module-topbar .container {
            padding-top: 0;
            padding-bottom: 0;
        }

        .module-topbar .container .logo-container {
            padding-right: 20px;
            padding-left: 20px;
            padding-top: 10px;
            padding-bottom: 10px;
            border-right: 4px solid #033e2f; 
            border-left: 4px solid #033e2f; 
            background-color: #05533E;
        }

        .article .img {
            width: 100%;
        }

        .article .header {
            color: #555; 
            font-size: 16px; 
            line-height: 24px;
            padding-bottom: 10px;
        }

        .article .content {
            font-size: 12px; 
            line-height: 18px;
            padding-bottom: 10px;
        }

        .article .button {
            font-size: 14px;
        }


        .calendar-item {
            padding-bottom: 30px;
        }

        .table-date {
            background-color: #e6e6e6; /* red: #9C0947 */
            background-position: 0 0;
            background-repeat: no-repeat;
            height: 70px;
        }

        .date {
            font-family: 'Open Sans', Arial, sans-serif; 
            font-size: 16px; 
            line-height: 24px;
            color: #3B3B3B; 
            text-align: center;
            vertical-align: middle;
            height: 70px;
            overflow: hidden;
        }

        .day-of-week, .month, .day {
            font-family: 'Open Sans', Arial, sans-serif; 
            color: #3B3B3B; 
            text-align: center;
            width: 68px;
            overflow: hidden;
            white-space: nowrap;
        }

        .day-of-week {
            font-size: 9px;
            line-height: 14px;
            font-weight: normal;
        }

        .month {
            font-size: 16px;
            line-height: 16px;
            font-weight: bold; 
        }

        .day {
            font-size: 32px;
            line-height: 28px;
            font-weight: bold; 
        }

        .events {
            padding-left: 20px;  
        }

        .event {
            padding-bottom: 15px;
        }

        .event .header {
            font-size: 14px; 
            line-height: 21px;
            padding-bottom: 3px;
        }

        .event .content {
            font-size: 12px;
            line-height: 18px;
        }

        .event-link {
            display: block;
        }


        .table-panel {
            background-color: #ecf0f1;
        }

        .table-profile .quote-icon {
            font-family: Arial, sans-serif, 'Century Gothic'; 
            font-size: 55px; 
            line-height: 35px; 
            color: #00809E;
            text-align: center;
        }

        .table-profile .quote {
            font-family: 'Open Sans', Arial, sans-serif;
            font-size: 14px;
            line-height: 28px;
            color: #3b3b3b;
            text-align: center;
        }

        .table-profile .cite-name {
            font-family: 'Open Sans', Arial, sans-serif;
            font-size: 18px;
            line-height: 28px;
            color: #3b3b3b;
            font-weight: bold;
            text-align: center;
        }

        .table-profile .cite-detail {
            font-family: 'Open Sans', Arial, sans-serif;
            font-size: 14px;
            line-height: 28px;
            color: #bdc3c7;
            text-align: center;
        }


        .module-footer .background {
            background-color: #ecf0f1;
        }

        .module-footer .list-item {
            border: none;
        }

        .module-bottombar .background {
            background-color: #e2e6e7;
        }

        .module-bottombar .container {
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .module-bottombar .content {
            text-align: center;
        }


        /* Utility Classes
        -------------------------------------------- */

        .white-text {
            background-color: #63A70A; /* green */
        }

        .gray-bg, .gray-bg .background {
            background-color: #eeeeee;
        }
        .white-bg, .white-bg .background {
            background-color: #ffffff;
        }
        .blue-bg, .blue-bg .table-button-outline, .blue-bg .background { 
            background-color: #00809E; 
        }
        .green-bg, .green-bg .table-button-outline, .green-bg .background { 
            background-color: #63A70A; 
        }
        .purple-bg, .purple-bg .table-button-outline, .purple-bg .background { 
            background-color: #A23BBC; 
        }
        .red-bg, .red-bg .table-button-outline, .red-bg .background { 
            background-color: #9C0947; 
        }
        .orange-bg, .orange-bg .table-button-outline, .orange-bg .background { 
            background-color: #CE5D27; 
        }
        .gold-bg, .gold-bg .table-button-outline, .gold-bg .background { 
            background-color: #DCAA00; 
        }
        .seafoam-green-bg, .seafoam-green-bg .background {
            background-color: #afd3c8;
        }

        .blue-bg .table-button-secondary .button,
        .blue-bg .table-button-secondary .button a {
            color: #00809E;
        }
        .green-bg .table-button-secondary .button,
        .green-bg .table-button-secondary .button a {
            color: #63A70A;
        }
        .purple-bg .table-button-secondary .button,
        .purple-bg .table-button-secondary .button a {
            color: #A23BBC;
        }
        .red-bg .table-button-secondary .button,
        .red-bg .table-button-secondary .button a {
            color: #9C0947;
        }
        .orange-bg .table-button-secondary .button,
        .orange-bg .table-button-secondary .button a {
            color: #CE5D27;
        }
        .gold-bg .table-button-secondary .button,
        .gold-bg .table-button-secondary .button a {
            color: #DCAA00;
        }
        .seafoam-green-bg .table-button-secondary .button,
        .seafoam-green-bg .table-button-secondary .button a {
            color: #afd3c8;
        }

        .white-text .table-button-outline .button {
            border: 1px solid #ffffff;
        }

        .white-text .element,
        .white-text .table-button-outline .button,
        .white-text .table-button-outline .button a,
        .white-text .table-button-text .button,
        .white-text .table-button-text .button a,
        .white-text .list-item-text,
        .white-text a  {
            color: #ffffff;
        }

        .padding-top { padding-top: 20px; }
        .padding-bottom { padding-bottom: 20px; }

        .padding-top-none { padding-top: 0; }
        .padding-bottom-none { padding-bottom: 0; }


        /* Medium Screen Styles 
        -------------------------------------------- */

        @media only screen and (max-width: 640px) {
            body { width: auto !important; 
            }
            table[class=\"table-inner\"] { width: 90% !important; }
            table[class=\"table-full\"] { width: 100% !important; }
            table[class=\"table-full-center\"] { 
                width: 100% !important; 
                text-align: center !important;
            }
            
            /* image */
            img[class=\"img-full\"] { 
                width: 100% !important; 
                height: auto !important; 
            }
        }

        /* overwrite media query */
        td[class=\"hide\"] { 
            max-height: 0px !important; 
            height: 0px !important; 
        }

        /* Small Screen Styles 
        -------------------------------------------- */

        @media only screen and (max-width: 479px) {
            body { width: auto !important; }
            table[class=\"table-inner\"] { width: 90% !important; }
            table[class=\"table-full\"] { width: 100% !important; }
            table[class=\"table-full-center\"] { 
                width: 100% !important; 
                text-align: center !important;
            }
            
            /* image */
            img[class=\"img-full\"] { width: 100% !important; }
            img[class=\"img-hide\"] { 
                line-height: 0px !important; 
                max-height: 0px !important; 
                max-width: 0px !important; 
            }
        }

        /* overwrite media query */
        td[class=\"hide\"] { 
            max-height: 0px !important; 
            height: 0px !important; 
        }

            </style>
            <style type=\"text/css\" rel=\"addons\">
                /* styles here will be appended to main stylesheet (defined in index.php) */

        .header {
            padding-bottom: 0;
        }
        .description {
            font-size: 12px;
            line-height: 18px;
        }

        .calendar-list {
            padding-bottom: 30px;
        }

        .home-games .list-item {
            border: none;
        }

        .news .article {
            padding-bottom: 20px;
        }

    </style>
    <!--[if gte mso 12 & lt mso 16]>
    <style type=\"text/css\">
        .element, .content-intro, .button, .bullet-text, .list-item-text, .date {
            font-family: Arial, sans-serif !important;
        }
    </style>
    <![endif]-->
</head>
<body>
    <table class=\"table-wrapper\" align=\"center\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
        <tr>
            <td align=\"center\">
                <table id=\"\" class=\"module module-topbar module-0 module-even \" style=\"\" align=\"center\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
                    <tr>
                        <td class=\"background\" align=\"center\" background=\"\" style=\"background-image: url() \">
                            <table align=\"center\" class=\"table-inner\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                <tr>
                                    <td class=\"container\" style=\"\">
                                        <table class=\"table-full\" align=\"center\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                            <tr>
                                                <td class=\"row\" valign=\"top\">
                                                    <table class=\"table-full\" width=\"\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                        <tr>
                                                            <td id=\"\" class=\"element element-img logo-container\" width=\"215\" style=\"\" align=\"center\" valign=\"top\" >
                                                                <img class=\"\" width=\"215\" height=\"38\" style=\"\" src=\"http://skylark.harker.org/email-builder/v2/assets/img/harker-logo.png\" alt=\"Harker Logo\"></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table id=\"\" class=\"module module-grid module-1 module-odd \" style=\"\" align=\"center\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
                    <tr>
                        <td class=\"background\" align=\"center\" background=\"\" style=\"background-image: url() \">
                            <table align=\"center\" class=\"table-inner\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                <tr>
                                    <td class=\"container\" style=\"\">
                                        <table class=\"table-full\" align=\"center\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                            <tr>
                                                <td class=\"row\" valign=\"top\">
                                                    <table class=\"table-full\" width=\"290\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                        <tr>
                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Upcoming Events</td>
                                                        </tr>
                                                        <tr>
                                                            <td id=\"\" class=\"element content description\" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                View all events in the
                                                                <a href=\"http://www.harker.org/page.cfm?p=2302\">school calendar</a>
                                                                .
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td id=\"\" class=\"element calendar-list \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                    <tr>
                                                                        <td id=\"\" class=\"element calendar-item \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                            <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-date \" width=\"68\" style=\"\" align=\"center\" valign=\"top\" >
                                                                                        <table class=\"table-date\" width=\"68\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" background=\"http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png\" style=\"background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) \">
                                                                                            <tr>
                                                                                                <td class=\"date\">
                                                                                                    <div class=\"day-of-week\">FRIDAY</div>
                                                                                                    <div class=\"month\">SEP</div>
                                                                                                    <div class=\"day\">16</div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                    <td class=\"events\" valign=\"top\">
                                                                                        <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Middle School House Day (wear your house colors)</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=252839\">View details</a>
                                                                                                                </span>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Middle School Special Schedule: Back-to-School Day</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=252840\">View details</a>
                                                                                                                </span>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Upper School Schedule C - Junior Class Meeting</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Grade 3 Parent Coffee</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                8 a.m. | Le Boulanger, 1390 El Paseo de Saratoga, San Jose, CA 95130
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Grade 8 Parent Coffee</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >8:15 a.m. | Paris Baguette- 685 Saratoga Avenue</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Grade 2 Parent Coffee</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                8:30 a.m. | Le Boulanger, 1390 El Paseo de Saratoga, San Jose, CA 95130
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Middle School Back-to-School and Family Bash!</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >3 to 7 p.m. | Blackford Multipurpose Room (MPR)</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element calendar-item \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                            <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-date \" width=\"68\" style=\"\" align=\"center\" valign=\"top\" >
                                                                                        <table class=\"table-date\" width=\"68\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" background=\"http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png\" style=\"background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) \">
                                                                                            <tr>
                                                                                                <td class=\"date\">
                                                                                                    <div class=\"day-of-week\">SATURDAY</div>
                                                                                                    <div class=\"month\">SEP</div>
                                                                                                    <div class=\"day\">17</div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                    <td class=\"events\" valign=\"top\">
                                                                                        <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Regional Honor Choir Auditions</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Dance Production Auditions</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >11 a.m. to 12:30 p.m. | Blackford Multipurpose Room (MPR)</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element calendar-item \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                            <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-date \" width=\"68\" style=\"\" align=\"center\" valign=\"top\" >
                                                                                        <table class=\"table-date\" width=\"68\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" background=\"http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png\" style=\"background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) \">
                                                                                            <tr>
                                                                                                <td class=\"date\">
                                                                                                    <div class=\"day-of-week\">MONDAY</div>
                                                                                                    <div class=\"month\">SEP</div>
                                                                                                    <div class=\"day\">19</div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                    <td class=\"events\" valign=\"top\">
                                                                                        <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Middle School Meeting</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Preschool 4Y Intake Conferences</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=251395\">View details</a>
                                                                                                                </span>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Upper School Schedule D</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Kindergarten Q&amp;A</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >8:30 to 9:30 a.m. | Bucknall Library</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >K-5 Field Trip Chaperone Training</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >9:50 to 10:15 a.m. | Bucknall Library</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Kindergarten Parent Conferences</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >1:15 to 6 p.m. | Bucknall Campus</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Middle School Costa Rica Application Meeting</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >5:30 to 6:30 p.m. | Blackford Multipurpose Room (MPR)</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element calendar-item \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                            <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-date \" width=\"68\" style=\"\" align=\"center\" valign=\"top\" >
                                                                                        <table class=\"table-date\" width=\"68\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" background=\"http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png\" style=\"background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) \">
                                                                                            <tr>
                                                                                                <td class=\"date\">
                                                                                                    <div class=\"day-of-week\">TUESDAY</div>
                                                                                                    <div class=\"month\">SEP</div>
                                                                                                    <div class=\"day\">20</div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                    <td class=\"events\" valign=\"top\">
                                                                                        <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                Middle School  2016 Picnic T-Shirt w/ Free Dress Pants, Shorts, or Skirts
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Middle School Advisory</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Middle School Fall Play Rehearsal Begins</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Preschool Fall Picture Day</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Preschool 4Y Intake Conferences</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=251396\">View details</a>
                                                                                                                </span>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Upper School Schedule A - Sophomore Class Meeting</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >K-5 Special Dress Day: Picnic T-Shirts</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=253269\">View details</a>
                                                                                                                </span>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Common Ground: &quot;The Myth of the Math Brain&quot;</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                9 a.m. | The Carey School, San Mateo
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=267397\">View details</a>
                                                                                                                </span>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Kindergarten Parent Conferences</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >1:15 to 6 p.m. | Bucknall Campus</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Grade 11 Q&amp;A</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >5:30 to 6:30 p.m. | Saratoga Nichols Hall Auditorium</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Common Ground: &quot;The Myth of the Math Brain&quot;</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                7 p.m. | Woodside Priory School, Portola Valley
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=267396\">View details</a>
                                                                                                                </span>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element calendar-item \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                            <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-date \" width=\"68\" style=\"\" align=\"center\" valign=\"top\" >
                                                                                        <table class=\"table-date\" width=\"68\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" background=\"http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png\" style=\"background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) \">
                                                                                            <tr>
                                                                                                <td class=\"date\">
                                                                                                    <div class=\"day-of-week\">WEDNESDAY</div>
                                                                                                    <div class=\"month\">SEP</div>
                                                                                                    <div class=\"day\">21</div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                    <td class=\"events\" valign=\"top\">
                                                                                        <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Middle School Wednesday</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Preschool 4Y Intake Conferences</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=251397\">View details</a>
                                                                                                                </span>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Upper School Schedule B</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Upper School Photo Make-Up Day</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                7:30 a.m. to 3:30 p.m. | Saratoga Nichols Rotunda
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=246952\">View details</a>
                                                                                                                </span>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Apprentice Workshop</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >11:15 a.m. to 12:40 p.m. | Ms. Lang-Ree&#039;s Room</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Grade 6 Trip Parent Information Meeting</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >5 to 6 p.m. | Blackford Multipurpose Room (MPR)</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element calendar-item \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                            <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-date \" width=\"68\" style=\"\" align=\"center\" valign=\"top\" >
                                                                                        <table class=\"table-date\" width=\"68\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" background=\"http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png\" style=\"background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) \">
                                                                                            <tr>
                                                                                                <td class=\"date\">
                                                                                                    <div class=\"day-of-week\">THURSDAY</div>
                                                                                                    <div class=\"month\">SEP</div>
                                                                                                    <div class=\"day\">22</div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                    <td class=\"events\" valign=\"top\">
                                                                                        <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Middle School Advisory</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Preschool 4Y Intake Conferences</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=251398\">View details</a>
                                                                                                                </span>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Upper School Schedule C - Freshman Class Meeting</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Preschool Parent Coffee</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >8:30 to 9:30 a.m. | Union</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Grade 7 National Parks Trip Parent Information Meeting</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >5 to 6 p.m. | Blackford Multipurpose Room (MPR)</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Grade 8 Washington, D.C. Trip Parent Information Meeting</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >5 to 6 p.m. | Blackford Multipurpose Room (MPR)</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                Upper School Preview Night for Grade 7 &amp; 8 Parent Information Meeting
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                5:45 to 7:15 p.m. | Blackford Gym
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=246958\">View details</a>
                                                                                                                </span>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Common Ground: &quot;The Myth of the Math Brain&quot;</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                7 p.m. | Saint Andrew&#039;s Episcopal School, Saratoga
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=267398\">View details</a>
                                                                                                                </span>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Grade 2 Mom&#039;s Night Out</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >7 p.m. | TBD</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element calendar-item \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                            <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-date \" width=\"68\" style=\"\" align=\"center\" valign=\"top\" >
                                                                                        <table class=\"table-date\" width=\"68\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" background=\"http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png\" style=\"background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) \">
                                                                                            <tr>
                                                                                                <td class=\"date\">
                                                                                                    <div class=\"day-of-week\">FRIDAY</div>
                                                                                                    <div class=\"month\">SEP</div>
                                                                                                    <div class=\"day\">23</div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                    <td class=\"events\" valign=\"top\">
                                                                                        <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Middle School Assembly</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=252846\">View details</a>
                                                                                                                </span>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Preschool 4Y Intake Conferences</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=251399\">View details</a>
                                                                                                                </span>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Upper School Schedule D</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >K-5 Free Dress</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Preschool Picnic Project Day</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                2:30 to 3:30 p.m. | Union Campus
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=246960\">View details</a>
                                                                                                                </span>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >K-5 Picnic Party</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >2:50 to 3:30 p.m. | Bucknall Campus</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Grade 7-8 Social Dance</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >7:30 to 10:30 p.m. | Blackford Multipurpose Room (MPR)</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element calendar-item \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                            <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-date \" width=\"68\" style=\"\" align=\"center\" valign=\"top\" >
                                                                                        <table class=\"table-date\" width=\"68\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" background=\"http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png\" style=\"background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) \">
                                                                                            <tr>
                                                                                                <td class=\"date\">
                                                                                                    <div class=\"day-of-week\">SATURDAY</div>
                                                                                                    <div class=\"month\">SEP</div>
                                                                                                    <div class=\"day\">24</div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                    <td class=\"events\" valign=\"top\">
                                                                                        <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Regional Honor Choir Auditions</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Lower School Swim Party - Grades 2, 4 and 5</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >11 a.m. to 4 p.m. | Bucknall Pool</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element calendar-item \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                            <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-date \" width=\"68\" style=\"\" align=\"center\" valign=\"top\" >
                                                                                        <table class=\"table-date\" width=\"68\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" background=\"http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png\" style=\"background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) \">
                                                                                            <tr>
                                                                                                <td class=\"date\">
                                                                                                    <div class=\"day-of-week\">SUNDAY</div>
                                                                                                    <div class=\"month\">SEP</div>
                                                                                                    <div class=\"day\">25</div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                    <td class=\"events\" valign=\"top\">
                                                                                        <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Annual Giving Phone-A-Thon</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >6:30 to 9:30 p.m. | Nichols Hall</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td id=\"\" class=\"element element-list home-games\" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                    <tr>
                                                                        <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Upcoming Home Games</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element list list-unstyled \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                            <table class=\"table-list\" align=\"left\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                                <tr>
                                                                                    <td class=\"list-item\">
                                                                                        <table width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                            <tr>
                                                                                                <!-- unstyled -->
                                                                                                <td class=\"list-item-text\" valign=\"top\">
                                                                                                    <a href=\"http://www.harker.org/page.cfm?p=4012\">Upper School Home Games</a>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class=\"list-item\">
                                                                                        <table width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                            <tr>
                                                                                                <!-- unstyled -->
                                                                                                <td class=\"list-item-text\" valign=\"top\">
                                                                                                    <a href=\"http://www.harker.org/page.cfm?p=4014\">Middle School Home Games</a>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class=\"list-item\">
                                                                                        <table width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                            <tr>
                                                                                                <!-- unstyled -->
                                                                                                <td class=\"list-item-text\" valign=\"top\">
                                                                                                    <a href=\"http://www.harker.org/page.cfm?p=4015\">Lower School Home Games</a>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!--[if gte mso 12]> </td>
                                                <td valign=\"top\">
                                                    <![endif]-->
                                                    <table width=\"1\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"left\">
                                                        <tr>
                                                            <td height=\"40\" style=\"font-size: 0;line-height: 0;border-collapse: collapse;\">
                                                                <p style=\"padding-left: 20px; font-size: inherit;\">&nbsp;</p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!--[if gte mso 12]> </td>
                                                <td class=\"row\" valign=\"top\">
                                                    <![endif]-->
                                                    <table class=\"table-full\" width=\"290\" border=\"0\" align=\"right\" cellpadding=\"0\" cellspacing=\"0\">
                                                        <tr>
                                                            <td id=\"\" class=\"element element-list announcements\" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                    <tr>
                                                                        <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Announcements</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element content description\" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                            View all announcements in
                                                                            <a href=\"http://www.harker.org/page.cfm?p=3566\">our archive</a>
                                                                            .
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element article \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                            <table class=\"table-article\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        <a href=\"http://www.harker.org/page.cfm?p=3566&newsid=1893\">Sports Report Sept. 13, 2016</a>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element article \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                            <table class=\"table-article\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        <a href=\"http://www.harker.org/page.cfm?p=3566&newsid=1886\">Common Ground Speaker Lineup for 2016-17</a>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element article \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                            <table class=\"table-article\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        <a href=\"http://www.harker.org/page.cfm?p=3566&newsid=1890\">Fruttero Tennis Academy</a>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td id=\"\" class=\"element element-list news\" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                    <tr>
                                                                        <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >News</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element content description\" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                            View all stories at
                                                                            <a href=\"http://news.harker.org\">Harker News</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element article \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                            <table class=\"table-article\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        <a href=\"http://wp.me/pOeLQ-7MS\">Three Students Named Broadcom MASTERS Semifinalists</a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        Last week, the Society for Science & the Public announced that three Harker freshmen were named semifinalists in this year’s Broadcom MASTERS competition.
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-button \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        <table class=\"table-button table-button-text\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                            <tr>
                                                                                                <td class=\"button\" valign=\"middle\" align=\"center\">
                                                                                                    <a href=\"http://wp.me/pOeLQ-7MS\">Read More</a>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element article \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                            <table class=\"table-article\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        <a href=\"http://wp.me/pOeLQ-7Mt\">Harker Team Wins Best in Nation at TEAMS Competition</a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        In June, Harker’s team was named the best team in the country at the Test of Engineering, Aptitude, Mathematics and Science (TEAMS) National Conference in Nashville.
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-button \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        <table class=\"table-button table-button-text\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                            <tr>
                                                                                                <td class=\"button\" valign=\"middle\" align=\"center\">
                                                                                                    <a href=\"http://wp.me/pOeLQ-7Mt\">Read More</a>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element article \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                            <table class=\"table-article\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        <a href=\"http://wp.me/pOeLQ-7Mb\">
                                                                                            Girls Tennis Tournament Championship Highlights the Harker Week in Sports
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        The girls tennis team opened its season at the California Tennis Classic and dominated the competition on the way to a Division 6 championship.
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-button \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        <table class=\"table-button table-button-text\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                            <tr>
                                                                                                <td class=\"button\" valign=\"middle\" align=\"center\">
                                                                                                    <a href=\"http://wp.me/pOeLQ-7Mb\">Read More</a>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td id=\"\" class=\"element element-list photos\" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                    <tr>
                                                                        <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Photos</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element content description\" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                            View more photos in the
                                                                            <a href=\"http://9alskiel9sn2.photoshelter.com/\">photo archive</a>
                                                                            .
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element article \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                            <table class=\"table-article\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-img \" width=\"290\" style=\"\" align=\"center\" valign=\"top\" >
                                                                                        <a href=\"http://9alskiel9sn2.photoshelter.com/gallery/2016-09-US-Varsity-Football/G0000Wd_ichAq3rk/C0000MgCbUWp._KY\">
                                                                                            <img class=\"img-full\" width=\"290\" height=\"\" style=\"\" src=\"http://skylark.harker.org/email-builder/v2/emails/eweekly/09-19-2016/assets/img//us-cheerleaders.jpg\" alt=\"Upper School Varsity Football\"></a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        <a href=\"http://9alskiel9sn2.photoshelter.com/gallery/2016-09-US-Varsity-Football/G0000Wd_ichAq3rk/C0000MgCbUWp._KY\">Upper School Varsity Football</a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        View more photos in our
                                                                                        <a href=\"http://9alskiel9sn2.photoshelter.com/gallery-collection/2016-09-September/C0000MgCbUWp._KY\">September galleries</a>
                                                                                        . You may also access the photos from the parent portal.
                                                                                        <br>
                                                                                        <br> <b>Note:</b>
                                                                                        To download free photos or order prints, you must have a PhotoShelter account.
                                                                                        <a href=\"https://9alskiel9sn2.photoshelter.com/signup/signup/free\">Sign up for free</a>
                                                                                        .
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-button \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        <table class=\"table-button table-button-outline\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                            <tr>
                                                                                                <td class=\"button\" valign=\"middle\" align=\"center\">
                                                                                                    <a href=\"http://9alskiel9sn2.photoshelter.com/gallery/2016-09-US-Varsity-Football/G0000Wd_ichAq3rk/C0000MgCbUWp._KY\">View Photo Gallery</a>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table id=\"\" class=\"module module-footer module-2 module-even \" style=\"\" align=\"center\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
                    <tr>
                        <td class=\"background\" align=\"center\" background=\"\" style=\"background-image: url() \">
                            <table align=\"center\" class=\"table-inner\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                <tr>
                                    <td class=\"container\" style=\"\">
                                        <table class=\"table-full\" align=\"center\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                            <tr>
                                                <td class=\"row\" valign=\"top\">
                                                    <table class=\"table-full\" width=\"290\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                        <tr>
                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Social Media</td>
                                                        </tr>
                                                        <tr>
                                                            <td id=\"\" class=\"element list list-unstyled \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                <table class=\"table-list\" align=\"left\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                    <tr>
                                                                        <td class=\"list-item\">
                                                                            <table width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <!-- unstyled -->
                                                                                    <td class=\"list-item-text\" valign=\"top\">
                                                                                        <a href=\"http://facebook.com/harkerschool\">facebook.com/harkerschool</a>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class=\"list-item\">
                                                                            <table width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <!-- unstyled -->
                                                                                    <td class=\"list-item-text\" valign=\"top\">
                                                                                        <a href=\"http://twitter.com/harkerschool\">twitter.com/harkerschool</a>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class=\"list-item\">
                                                                            <table width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <!-- unstyled -->
                                                                                    <td class=\"list-item-text\" valign=\"top\">
                                                                                        <a href=\"http://instagram.com/harkerschool\">instagram.com/harkerschool</a>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!--[if gte mso 12]> </td>
                                                <td valign=\"top\">
                                                    <![endif]-->
                                                    <table width=\"1\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"left\">
                                                        <tr>
                                                            <td height=\"40\" style=\"font-size: 0;line-height: 0;border-collapse: collapse;\">
                                                                <p style=\"padding-left: 20px; font-size: inherit;\">&nbsp;</p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!--[if gte mso 12]> </td>
                                                <td class=\"row\" valign=\"top\">
                                                    <![endif]-->
                                                    <table class=\"table-full\" width=\"290\" border=\"0\" align=\"right\" cellpadding=\"0\" cellspacing=\"0\">
                                                        <tr>
                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Contact Us</td>
                                                        </tr>
                                                        <tr>
                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                500 Saratoga Ave., San Jose 95129
                                                                <br>
                                                                <a href=\"mailto:communications@harker.org\">communications@harker.org</a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table id=\"\" class=\"module module-bottombar module-3 module-odd \" style=\"\" align=\"center\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
                    <tr>
                        <td class=\"background\" align=\"center\" background=\"\" style=\"background-image: url() \">
                            <table align=\"center\" class=\"table-inner\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                <tr>
                                    <td class=\"container\" style=\"\">
                                        <table class=\"table-full\" align=\"center\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                            <tr>
                                                <td class=\"row\" valign=\"top\">
                                                    <table class=\"table-full\" width=\"600\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                        <tr>
                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Copyright © The Harker School 2016, All rights reserved.</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "@email/email.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title>eWeekly Template</title>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">*/
/*     <style type="text/css" rel="theme">*/
/*         /* Default Styles (desktop first)*/
/*         -------------------------------------------- *//* */
/* */
/*         .ReadMsgBody { */
/*             width: 100%; background-color: #ffffff; */
/*         }*/
/*         .ExternalClass { */
/*             width: 100%; */
/*             background-color: #ffffff; */
/*         }*/
/*         .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }*/
/*         html { width: 100%; }*/
/*         body { */
/*             -webkit-text-size-adjust: none;*/
/*             -ms-text-size-adjust: none;*/
/*             margin: 0;*/
/*             padding: 0;*/
/*         }*/
/*         table { */
/*             border-spacing: 0; */
/*             table-layout: fixed; */
/*             margin: 0 auto; */
/*         }*/
/*         table table table { table-layout: auto; }*/
/*         img { display: block !important; }*/
/*         table td { border-collapse: collapse; }*/
/*         .yshortcuts a { border-bottom: none !important; }*/
/*         a { */
/*             color: #00809E; */
/*         }*/
/*         .textbutton a { */
/*             font-family: 'open sans', arial, sans-serif !important; */
/*             color: #ffffff !important; */
/*         }*/
/* */
/*         img {*/
/*             display: block; */
/*             line-height: 0px; */
/*             font-size: 0px; */
/*             border: 0px;*/
/*         }*/
/* */
/*         h2, h3, h4 {*/
/*             font-family: 'Open Sans', Arial, sans-serif; */
/*             color: #3B3B3B; */
/*             text-align: left;*/
/*             margin-top: 0;*/
/*             margin-bottom: 15px;*/
/*         }*/
/* */
/*         h2 {*/
/*             font-size: 24px; */
/*             line-height: 34.8px;*/
/*             font-weight: bold;*/
/*         }*/
/* */
/*         h3 {*/
/*             font-size: 20px; */
/*             line-height: 34.8px;*/
/*             font-weight: 100;*/
/*         }*/
/* */
/*         h4 {*/
/*             font-size: 16px; */
/*             line-height: 26px;*/
/*             font-weight: bold;*/
/*         }*/
/* */
/* */
/*         /* Element Wrappers*/
/*         -------------------------------------------- *//* */
/* */
/*         tr:last-child > .element {*/
/*             padding-bottom: 0;*/
/*         }*/
/* */
/*         tr:first-child > .element {*/
/*             padding-top: 0;*/
/*         }*/
/* */
/* */
/*         /* Elements*/
/*         -------------------------------------------- *//* */
/* */
/*         .element {*/
/*             padding-bottom: 15px;*/
/*         }*/
/* */
/*         .element-list {*/
/*             padding-bottom: 30px;*/
/*         }*/
/* */
/*         .title {*/
/*             font-family: 'Open Sans', Arial, sans-serif; */
/*             font-size: 28px;*/
/*             line-height: 34px;*/
/*             letter-spacing: 2px;*/
/*             color: #3B3B3B; */
/*             font-weight: bold; */
/*             text-align: center;*/
/*             padding-bottom: 15px;*/
/*         }*/
/* */
/*         .subtitle {*/
/*             font-family: 'Open Sans', Arial, sans-serif; */
/*             font-size: 16px;*/
/*             line-height: 26px; */
/*             letter-spacing: 2px;*/
/*             color: #676767;*/
/*             text-align: center;*/
/*             padding-bottom: 15px;*/
/*         }*/
/* */
/*         .subtitle-lg {*/
/*             font-size: 20px;*/
/*             line-height: 30px;*/
/*         }*/
/* */
/*         .header {*/
/*             font-family: 'Open Sans', Arial, sans-serif; */
/*             font-size: 24px; */
/*             line-height: 34.8px;*/
/*             color: #3B3B3B; */
/*             font-weight: bold; */
/*             text-align: left;*/
/*         }*/
/* */
/*         .header a {*/
/*             text-decoration: none;*/
/*         }*/
/* */
/*         .header a:hover, .header a:focus {*/
/*             text-decoration: underline;*/
/*         }*/
/* */
/*         .subheader {*/
/*             font-family: 'Open Sans', Arial, sans-serif; */
/*             font-size: 20px; */
/*             line-height: 34.8px;*/
/*             color: #3B3B3B; */
/*             font-weight: 100; */
/*             text-align: left;*/
/*         }*/
/* */
/*         p, .content {*/
/*             font-family: 'Open Sans', Arial, sans-serif; */
/*             font-size: 16px; */
/*             line-height: 26px;*/
/*             color: #676767; */
/*             text-align: left;*/
/*         }*/
/* */
/*         p {*/
/*             margin-top: 0;*/
/*             margin-bottom: 15px;*/
/*         }*/
/* */
/*         .content-intro {*/
/*             font-family: 'Open Sans', Arial, sans-serif;*/
/*             font-size: 23px;*/
/*             font-weight: 100;*/
/*             line-height: 36px;*/
/*             color: #333;*/
/*             text-align: left;*/
/*         }*/
/* */
/*         .element-img {*/
/*             line-height: 0px;*/
/*         }*/
/* */
/*         .table-button {*/
/*             background-color: #00809E;*/
/*         }*/
/* */
/*         .button {*/
/*             font-family: 'Open Sans', Arial, sans-serif;*/
/*             font-size: 16px;*/
/*             line-height: 26px;*/
/*             color: #ffffff;*/
/*             vertical-align: middle;*/
/*             text-align: center;*/
/*             padding-top: 10px;*/
/*             padding-bottom: 10px;*/
/*             padding-left: 20px;*/
/*             padding-right: 20px;*/
/*         }*/
/* */
/*         .button a {*/
/*             display: block;*/
/*             color: #ffffff;*/
/*             text-decoration: none; */
/*         }*/
/* */
/*         .table-button-secondary {*/
/*             background-color: #ffffff;*/
/*         }*/
/* */
/*         .table-button-secondary .button,*/
/*         .table-button-secondary .button a  {*/
/*             color: #676767;*/
/*         }*/
/* */
/*         .table-button-outline {*/
/*             background-color: transparent;*/
/*         }*/
/* */
/*         .table-button-outline .button {*/
/*             border: 1px solid #00809e;  */
/*         }*/
/* */
/*         .table-button-outline .button,*/
/*         .table-button-outline .button a {*/
/*             color: #00809E;*/
/*             font-weight: bold;*/
/*         }*/
/* */
/*         .table-button-text {*/
/*             background-color: transparent;*/
/*         }*/
/* */
/*         .table-button-text .button,*/
/*         .table-button-text .button a {*/
/*             color: #00809E;*/
/*         }*/
/* */
/*         .table-button-text .button {*/
/*             text-align: left;*/
/*             padding: 0;*/
/*         }*/
/* */
/*         .table-button-text .button a {*/
/*             text-decoration: underline; */
/*         }*/
/* */
/*         .list-indent {*/
/*             padding-left: 15px;*/
/*         }*/
/* */
/*         .list-item {*/
/*             padding-top: 10px;*/
/*             padding-bottom: 10px;*/
/*             border-bottom: 1px solid #dddddd; /* #ecf0f1*//* */
/*         }*/
/* */
/*         .list-collapse .list-item {*/
/*             padding-top: 0;*/
/*             padding-bottom: 0;*/
/*             border-bottom: none;*/
/*         }*/
/* */
/*         .bullet.img-container {*/
/*             padding-top: 4px;*/
/*         }*/
/* */
/*         .bullet-text,*/
/*         .list-item-text {*/
/*             font-family: 'Open Sans', Arial, sans-serif; */
/*             font-size: 16px;*/
/*             line-height: 26px;*/
/*             color: #676767;*/
/*             text-align: left;*/
/*         }*/
/* */
/*         .list-item-text {*/
/*             padding-left: 15px;*/
/*         }*/
/* */
/*         .list-unstyled .list-item-text,*/
/*         .list-unordered .list-item-text {*/
/*             padding-left: 0;*/
/*         }*/
/* */
/*         .list-ordered .list-item-text {*/
/*             padding-left: 10px;*/
/*         }*/
/* */
/* */
/*         /* Module Wrappers*/
/*         -------------------------------------------- *//* */
/* */
/*         .background {*/
/*             background-size: cover; */
/*             background-position: top center;*/
/*         }*/
/* */
/*         .container {*/
/*             padding-top: 40px;*/
/*             padding-bottom: 40px;*/
/*         }*/
/* */
/*         .row {*/
/*             padding-bottom: 40px;*/
/*         }*/
/* */
/*         tr:last-child > .row {*/
/*             padding-bottom: 0;*/
/*         }*/
/* */
/* */
/*         /* Modules*/
/*         -------------------------------------------- *//* */
/* */
/*         .module-topbar {*/
/*             background-color: #044836;*/
/*         }*/
/* */
/*         .module-topbar .container {*/
/*             padding-top: 0;*/
/*             padding-bottom: 0;*/
/*         }*/
/* */
/*         .module-topbar .container .logo-container {*/
/*             padding-right: 20px;*/
/*             padding-left: 20px;*/
/*             padding-top: 10px;*/
/*             padding-bottom: 10px;*/
/*             border-right: 4px solid #033e2f; */
/*             border-left: 4px solid #033e2f; */
/*             background-color: #05533E;*/
/*         }*/
/* */
/*         .article .img {*/
/*             width: 100%;*/
/*         }*/
/* */
/*         .article .header {*/
/*             color: #555; */
/*             font-size: 16px; */
/*             line-height: 24px;*/
/*             padding-bottom: 10px;*/
/*         }*/
/* */
/*         .article .content {*/
/*             font-size: 12px; */
/*             line-height: 18px;*/
/*             padding-bottom: 10px;*/
/*         }*/
/* */
/*         .article .button {*/
/*             font-size: 14px;*/
/*         }*/
/* */
/* */
/*         .calendar-item {*/
/*             padding-bottom: 30px;*/
/*         }*/
/* */
/*         .table-date {*/
/*             background-color: #e6e6e6; /* red: #9C0947 *//* */
/*             background-position: 0 0;*/
/*             background-repeat: no-repeat;*/
/*             height: 70px;*/
/*         }*/
/* */
/*         .date {*/
/*             font-family: 'Open Sans', Arial, sans-serif; */
/*             font-size: 16px; */
/*             line-height: 24px;*/
/*             color: #3B3B3B; */
/*             text-align: center;*/
/*             vertical-align: middle;*/
/*             height: 70px;*/
/*             overflow: hidden;*/
/*         }*/
/* */
/*         .day-of-week, .month, .day {*/
/*             font-family: 'Open Sans', Arial, sans-serif; */
/*             color: #3B3B3B; */
/*             text-align: center;*/
/*             width: 68px;*/
/*             overflow: hidden;*/
/*             white-space: nowrap;*/
/*         }*/
/* */
/*         .day-of-week {*/
/*             font-size: 9px;*/
/*             line-height: 14px;*/
/*             font-weight: normal;*/
/*         }*/
/* */
/*         .month {*/
/*             font-size: 16px;*/
/*             line-height: 16px;*/
/*             font-weight: bold; */
/*         }*/
/* */
/*         .day {*/
/*             font-size: 32px;*/
/*             line-height: 28px;*/
/*             font-weight: bold; */
/*         }*/
/* */
/*         .events {*/
/*             padding-left: 20px;  */
/*         }*/
/* */
/*         .event {*/
/*             padding-bottom: 15px;*/
/*         }*/
/* */
/*         .event .header {*/
/*             font-size: 14px; */
/*             line-height: 21px;*/
/*             padding-bottom: 3px;*/
/*         }*/
/* */
/*         .event .content {*/
/*             font-size: 12px;*/
/*             line-height: 18px;*/
/*         }*/
/* */
/*         .event-link {*/
/*             display: block;*/
/*         }*/
/* */
/* */
/*         .table-panel {*/
/*             background-color: #ecf0f1;*/
/*         }*/
/* */
/*         .table-profile .quote-icon {*/
/*             font-family: Arial, sans-serif, 'Century Gothic'; */
/*             font-size: 55px; */
/*             line-height: 35px; */
/*             color: #00809E;*/
/*             text-align: center;*/
/*         }*/
/* */
/*         .table-profile .quote {*/
/*             font-family: 'Open Sans', Arial, sans-serif;*/
/*             font-size: 14px;*/
/*             line-height: 28px;*/
/*             color: #3b3b3b;*/
/*             text-align: center;*/
/*         }*/
/* */
/*         .table-profile .cite-name {*/
/*             font-family: 'Open Sans', Arial, sans-serif;*/
/*             font-size: 18px;*/
/*             line-height: 28px;*/
/*             color: #3b3b3b;*/
/*             font-weight: bold;*/
/*             text-align: center;*/
/*         }*/
/* */
/*         .table-profile .cite-detail {*/
/*             font-family: 'Open Sans', Arial, sans-serif;*/
/*             font-size: 14px;*/
/*             line-height: 28px;*/
/*             color: #bdc3c7;*/
/*             text-align: center;*/
/*         }*/
/* */
/* */
/*         .module-footer .background {*/
/*             background-color: #ecf0f1;*/
/*         }*/
/* */
/*         .module-footer .list-item {*/
/*             border: none;*/
/*         }*/
/* */
/*         .module-bottombar .background {*/
/*             background-color: #e2e6e7;*/
/*         }*/
/* */
/*         .module-bottombar .container {*/
/*             padding-top: 15px;*/
/*             padding-bottom: 15px;*/
/*         }*/
/* */
/*         .module-bottombar .content {*/
/*             text-align: center;*/
/*         }*/
/* */
/* */
/*         /* Utility Classes*/
/*         -------------------------------------------- *//* */
/* */
/*         .white-text {*/
/*             background-color: #63A70A; /* green *//* */
/*         }*/
/* */
/*         .gray-bg, .gray-bg .background {*/
/*             background-color: #eeeeee;*/
/*         }*/
/*         .white-bg, .white-bg .background {*/
/*             background-color: #ffffff;*/
/*         }*/
/*         .blue-bg, .blue-bg .table-button-outline, .blue-bg .background { */
/*             background-color: #00809E; */
/*         }*/
/*         .green-bg, .green-bg .table-button-outline, .green-bg .background { */
/*             background-color: #63A70A; */
/*         }*/
/*         .purple-bg, .purple-bg .table-button-outline, .purple-bg .background { */
/*             background-color: #A23BBC; */
/*         }*/
/*         .red-bg, .red-bg .table-button-outline, .red-bg .background { */
/*             background-color: #9C0947; */
/*         }*/
/*         .orange-bg, .orange-bg .table-button-outline, .orange-bg .background { */
/*             background-color: #CE5D27; */
/*         }*/
/*         .gold-bg, .gold-bg .table-button-outline, .gold-bg .background { */
/*             background-color: #DCAA00; */
/*         }*/
/*         .seafoam-green-bg, .seafoam-green-bg .background {*/
/*             background-color: #afd3c8;*/
/*         }*/
/* */
/*         .blue-bg .table-button-secondary .button,*/
/*         .blue-bg .table-button-secondary .button a {*/
/*             color: #00809E;*/
/*         }*/
/*         .green-bg .table-button-secondary .button,*/
/*         .green-bg .table-button-secondary .button a {*/
/*             color: #63A70A;*/
/*         }*/
/*         .purple-bg .table-button-secondary .button,*/
/*         .purple-bg .table-button-secondary .button a {*/
/*             color: #A23BBC;*/
/*         }*/
/*         .red-bg .table-button-secondary .button,*/
/*         .red-bg .table-button-secondary .button a {*/
/*             color: #9C0947;*/
/*         }*/
/*         .orange-bg .table-button-secondary .button,*/
/*         .orange-bg .table-button-secondary .button a {*/
/*             color: #CE5D27;*/
/*         }*/
/*         .gold-bg .table-button-secondary .button,*/
/*         .gold-bg .table-button-secondary .button a {*/
/*             color: #DCAA00;*/
/*         }*/
/*         .seafoam-green-bg .table-button-secondary .button,*/
/*         .seafoam-green-bg .table-button-secondary .button a {*/
/*             color: #afd3c8;*/
/*         }*/
/* */
/*         .white-text .table-button-outline .button {*/
/*             border: 1px solid #ffffff;*/
/*         }*/
/* */
/*         .white-text .element,*/
/*         .white-text .table-button-outline .button,*/
/*         .white-text .table-button-outline .button a,*/
/*         .white-text .table-button-text .button,*/
/*         .white-text .table-button-text .button a,*/
/*         .white-text .list-item-text,*/
/*         .white-text a  {*/
/*             color: #ffffff;*/
/*         }*/
/* */
/*         .padding-top { padding-top: 20px; }*/
/*         .padding-bottom { padding-bottom: 20px; }*/
/* */
/*         .padding-top-none { padding-top: 0; }*/
/*         .padding-bottom-none { padding-bottom: 0; }*/
/* */
/* */
/*         /* Medium Screen Styles */
/*         -------------------------------------------- *//* */
/* */
/*         @media only screen and (max-width: 640px) {*/
/*             body { width: auto !important; */
/*             }*/
/*             table[class="table-inner"] { width: 90% !important; }*/
/*             table[class="table-full"] { width: 100% !important; }*/
/*             table[class="table-full-center"] { */
/*                 width: 100% !important; */
/*                 text-align: center !important;*/
/*             }*/
/*             */
/*             /* image *//* */
/*             img[class="img-full"] { */
/*                 width: 100% !important; */
/*                 height: auto !important; */
/*             }*/
/*         }*/
/* */
/*         /* overwrite media query *//* */
/*         td[class="hide"] { */
/*             max-height: 0px !important; */
/*             height: 0px !important; */
/*         }*/
/* */
/*         /* Small Screen Styles */
/*         -------------------------------------------- *//* */
/* */
/*         @media only screen and (max-width: 479px) {*/
/*             body { width: auto !important; }*/
/*             table[class="table-inner"] { width: 90% !important; }*/
/*             table[class="table-full"] { width: 100% !important; }*/
/*             table[class="table-full-center"] { */
/*                 width: 100% !important; */
/*                 text-align: center !important;*/
/*             }*/
/*             */
/*             /* image *//* */
/*             img[class="img-full"] { width: 100% !important; }*/
/*             img[class="img-hide"] { */
/*                 line-height: 0px !important; */
/*                 max-height: 0px !important; */
/*                 max-width: 0px !important; */
/*             }*/
/*         }*/
/* */
/*         /* overwrite media query *//* */
/*         td[class="hide"] { */
/*             max-height: 0px !important; */
/*             height: 0px !important; */
/*         }*/
/* */
/*             </style>*/
/*             <style type="text/css" rel="addons">*/
/*                 /* styles here will be appended to main stylesheet (defined in index.php) *//* */
/* */
/*         .header {*/
/*             padding-bottom: 0;*/
/*         }*/
/*         .description {*/
/*             font-size: 12px;*/
/*             line-height: 18px;*/
/*         }*/
/* */
/*         .calendar-list {*/
/*             padding-bottom: 30px;*/
/*         }*/
/* */
/*         .home-games .list-item {*/
/*             border: none;*/
/*         }*/
/* */
/*         .news .article {*/
/*             padding-bottom: 20px;*/
/*         }*/
/* */
/*     </style>*/
/*     <!--[if gte mso 12 & lt mso 16]>*/
/*     <style type="text/css">*/
/*         .element, .content-intro, .button, .bullet-text, .list-item-text, .date {*/
/*             font-family: Arial, sans-serif !important;*/
/*         }*/
/*     </style>*/
/*     <![endif]-->*/
/* </head>*/
/* <body>*/
/*     <table class="table-wrapper" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">*/
/*         <tr>*/
/*             <td align="center">*/
/*                 <table id="" class="module module-topbar module-0 module-even " style="" align="center" width="100%" border="0" cellspacing="0" cellpadding="0" >*/
/*                     <tr>*/
/*                         <td class="background" align="center" background="" style="background-image: url() ">*/
/*                             <table align="center" class="table-inner" width="600" border="0" cellspacing="0" cellpadding="0">*/
/*                                 <tr>*/
/*                                     <td class="container" style="">*/
/*                                         <table class="table-full" align="center" width="600" border="0" cellspacing="0" cellpadding="0">*/
/*                                             <tr>*/
/*                                                 <td class="row" valign="top">*/
/*                                                     <table class="table-full" width="" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                         <tr>*/
/*                                                             <td id="" class="element element-img logo-container" width="215" style="" align="center" valign="top" >*/
/*                                                                 <img class="" width="215" height="38" style="" src="http://skylark.harker.org/email-builder/v2/assets/img/harker-logo.png" alt="Harker Logo"></td>*/
/*                                                         </tr>*/
/*                                                     </table>*/
/*                                                 </td>*/
/*                                             </tr>*/
/*                                         </table>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             </table>*/
/*                         </td>*/
/*                     </tr>*/
/*                 </table>*/
/*                 <table id="" class="module module-grid module-1 module-odd " style="" align="center" width="100%" border="0" cellspacing="0" cellpadding="0" >*/
/*                     <tr>*/
/*                         <td class="background" align="center" background="" style="background-image: url() ">*/
/*                             <table align="center" class="table-inner" width="600" border="0" cellspacing="0" cellpadding="0">*/
/*                                 <tr>*/
/*                                     <td class="container" style="">*/
/*                                         <table class="table-full" align="center" width="600" border="0" cellspacing="0" cellpadding="0">*/
/*                                             <tr>*/
/*                                                 <td class="row" valign="top">*/
/*                                                     <table class="table-full" width="290" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                         <tr>*/
/*                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Upcoming Events</td>*/
/*                                                         </tr>*/
/*                                                         <tr>*/
/*                                                             <td id="" class="element content description" width="" style="" align="left" valign="top" >*/
/*                                                                 View all events in the*/
/*                                                                 <a href="http://www.harker.org/page.cfm?p=2302">school calendar</a>*/
/*                                                                 .*/
/*                                                             </td>*/
/*                                                         </tr>*/
/*                                                         <tr>*/
/*                                                             <td id="" class="element calendar-list " width="" style="" align="left" valign="top" >*/
/*                                                                 <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element calendar-item " width="" style="" align="left" valign="top" >*/
/*                                                                             <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-date " width="68" style="" align="center" valign="top" >*/
/*                                                                                         <table class="table-date" width="68" border="0" align="center" cellpadding="0" cellspacing="0" background="http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png" style="background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) ">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="date">*/
/*                                                                                                     <div class="day-of-week">FRIDAY</div>*/
/*                                                                                                     <div class="month">SEP</div>*/
/*                                                                                                     <div class="day">16</div>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                     <td class="events" valign="top">*/
/*                                                                                         <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Middle School House Day (wear your house colors)</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=252839">View details</a>*/
/*                                                                                                                 </span>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Middle School Special Schedule: Back-to-School Day</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=252840">View details</a>*/
/*                                                                                                                 </span>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Upper School Schedule C - Junior Class Meeting</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Grade 3 Parent Coffee</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 8 a.m. | Le Boulanger, 1390 El Paseo de Saratoga, San Jose, CA 95130*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Grade 8 Parent Coffee</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >8:15 a.m. | Paris Baguette- 685 Saratoga Avenue</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Grade 2 Parent Coffee</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 8:30 a.m. | Le Boulanger, 1390 El Paseo de Saratoga, San Jose, CA 95130*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Middle School Back-to-School and Family Bash!</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >3 to 7 p.m. | Blackford Multipurpose Room (MPR)</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element calendar-item " width="" style="" align="left" valign="top" >*/
/*                                                                             <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-date " width="68" style="" align="center" valign="top" >*/
/*                                                                                         <table class="table-date" width="68" border="0" align="center" cellpadding="0" cellspacing="0" background="http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png" style="background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) ">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="date">*/
/*                                                                                                     <div class="day-of-week">SATURDAY</div>*/
/*                                                                                                     <div class="month">SEP</div>*/
/*                                                                                                     <div class="day">17</div>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                     <td class="events" valign="top">*/
/*                                                                                         <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Regional Honor Choir Auditions</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Dance Production Auditions</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >11 a.m. to 12:30 p.m. | Blackford Multipurpose Room (MPR)</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element calendar-item " width="" style="" align="left" valign="top" >*/
/*                                                                             <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-date " width="68" style="" align="center" valign="top" >*/
/*                                                                                         <table class="table-date" width="68" border="0" align="center" cellpadding="0" cellspacing="0" background="http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png" style="background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) ">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="date">*/
/*                                                                                                     <div class="day-of-week">MONDAY</div>*/
/*                                                                                                     <div class="month">SEP</div>*/
/*                                                                                                     <div class="day">19</div>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                     <td class="events" valign="top">*/
/*                                                                                         <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Middle School Meeting</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Preschool 4Y Intake Conferences</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=251395">View details</a>*/
/*                                                                                                                 </span>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Upper School Schedule D</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Kindergarten Q&amp;A</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >8:30 to 9:30 a.m. | Bucknall Library</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >K-5 Field Trip Chaperone Training</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >9:50 to 10:15 a.m. | Bucknall Library</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Kindergarten Parent Conferences</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >1:15 to 6 p.m. | Bucknall Campus</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Middle School Costa Rica Application Meeting</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >5:30 to 6:30 p.m. | Blackford Multipurpose Room (MPR)</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element calendar-item " width="" style="" align="left" valign="top" >*/
/*                                                                             <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-date " width="68" style="" align="center" valign="top" >*/
/*                                                                                         <table class="table-date" width="68" border="0" align="center" cellpadding="0" cellspacing="0" background="http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png" style="background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) ">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="date">*/
/*                                                                                                     <div class="day-of-week">TUESDAY</div>*/
/*                                                                                                     <div class="month">SEP</div>*/
/*                                                                                                     <div class="day">20</div>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                     <td class="events" valign="top">*/
/*                                                                                         <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 Middle School  2016 Picnic T-Shirt w/ Free Dress Pants, Shorts, or Skirts*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Middle School Advisory</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Middle School Fall Play Rehearsal Begins</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Preschool Fall Picture Day</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Preschool 4Y Intake Conferences</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=251396">View details</a>*/
/*                                                                                                                 </span>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Upper School Schedule A - Sophomore Class Meeting</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >K-5 Special Dress Day: Picnic T-Shirts</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=253269">View details</a>*/
/*                                                                                                                 </span>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Common Ground: &quot;The Myth of the Math Brain&quot;</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 9 a.m. | The Carey School, San Mateo*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=267397">View details</a>*/
/*                                                                                                                 </span>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Kindergarten Parent Conferences</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >1:15 to 6 p.m. | Bucknall Campus</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Grade 11 Q&amp;A</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >5:30 to 6:30 p.m. | Saratoga Nichols Hall Auditorium</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Common Ground: &quot;The Myth of the Math Brain&quot;</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 7 p.m. | Woodside Priory School, Portola Valley*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=267396">View details</a>*/
/*                                                                                                                 </span>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element calendar-item " width="" style="" align="left" valign="top" >*/
/*                                                                             <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-date " width="68" style="" align="center" valign="top" >*/
/*                                                                                         <table class="table-date" width="68" border="0" align="center" cellpadding="0" cellspacing="0" background="http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png" style="background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) ">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="date">*/
/*                                                                                                     <div class="day-of-week">WEDNESDAY</div>*/
/*                                                                                                     <div class="month">SEP</div>*/
/*                                                                                                     <div class="day">21</div>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                     <td class="events" valign="top">*/
/*                                                                                         <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Middle School Wednesday</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Preschool 4Y Intake Conferences</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=251397">View details</a>*/
/*                                                                                                                 </span>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Upper School Schedule B</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Upper School Photo Make-Up Day</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 7:30 a.m. to 3:30 p.m. | Saratoga Nichols Rotunda*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=246952">View details</a>*/
/*                                                                                                                 </span>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Apprentice Workshop</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >11:15 a.m. to 12:40 p.m. | Ms. Lang-Ree&#039;s Room</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Grade 6 Trip Parent Information Meeting</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >5 to 6 p.m. | Blackford Multipurpose Room (MPR)</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element calendar-item " width="" style="" align="left" valign="top" >*/
/*                                                                             <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-date " width="68" style="" align="center" valign="top" >*/
/*                                                                                         <table class="table-date" width="68" border="0" align="center" cellpadding="0" cellspacing="0" background="http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png" style="background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) ">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="date">*/
/*                                                                                                     <div class="day-of-week">THURSDAY</div>*/
/*                                                                                                     <div class="month">SEP</div>*/
/*                                                                                                     <div class="day">22</div>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                     <td class="events" valign="top">*/
/*                                                                                         <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Middle School Advisory</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Preschool 4Y Intake Conferences</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=251398">View details</a>*/
/*                                                                                                                 </span>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Upper School Schedule C - Freshman Class Meeting</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Preschool Parent Coffee</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >8:30 to 9:30 a.m. | Union</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Grade 7 National Parks Trip Parent Information Meeting</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >5 to 6 p.m. | Blackford Multipurpose Room (MPR)</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Grade 8 Washington, D.C. Trip Parent Information Meeting</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >5 to 6 p.m. | Blackford Multipurpose Room (MPR)</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 Upper School Preview Night for Grade 7 &amp; 8 Parent Information Meeting*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 5:45 to 7:15 p.m. | Blackford Gym*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=246958">View details</a>*/
/*                                                                                                                 </span>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Common Ground: &quot;The Myth of the Math Brain&quot;</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 7 p.m. | Saint Andrew&#039;s Episcopal School, Saratoga*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=267398">View details</a>*/
/*                                                                                                                 </span>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Grade 2 Mom&#039;s Night Out</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >7 p.m. | TBD</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element calendar-item " width="" style="" align="left" valign="top" >*/
/*                                                                             <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-date " width="68" style="" align="center" valign="top" >*/
/*                                                                                         <table class="table-date" width="68" border="0" align="center" cellpadding="0" cellspacing="0" background="http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png" style="background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) ">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="date">*/
/*                                                                                                     <div class="day-of-week">FRIDAY</div>*/
/*                                                                                                     <div class="month">SEP</div>*/
/*                                                                                                     <div class="day">23</div>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                     <td class="events" valign="top">*/
/*                                                                                         <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Middle School Assembly</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=252846">View details</a>*/
/*                                                                                                                 </span>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Preschool 4Y Intake Conferences</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=251399">View details</a>*/
/*                                                                                                                 </span>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Upper School Schedule D</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >K-5 Free Dress</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Preschool Picnic Project Day</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 2:30 to 3:30 p.m. | Union Campus*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=246960">View details</a>*/
/*                                                                                                                 </span>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >K-5 Picnic Party</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >2:50 to 3:30 p.m. | Bucknall Campus</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Grade 7-8 Social Dance</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >7:30 to 10:30 p.m. | Blackford Multipurpose Room (MPR)</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element calendar-item " width="" style="" align="left" valign="top" >*/
/*                                                                             <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-date " width="68" style="" align="center" valign="top" >*/
/*                                                                                         <table class="table-date" width="68" border="0" align="center" cellpadding="0" cellspacing="0" background="http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png" style="background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) ">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="date">*/
/*                                                                                                     <div class="day-of-week">SATURDAY</div>*/
/*                                                                                                     <div class="month">SEP</div>*/
/*                                                                                                     <div class="day">24</div>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                     <td class="events" valign="top">*/
/*                                                                                         <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Regional Honor Choir Auditions</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Lower School Swim Party - Grades 2, 4 and 5</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >11 a.m. to 4 p.m. | Bucknall Pool</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element calendar-item " width="" style="" align="left" valign="top" >*/
/*                                                                             <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-date " width="68" style="" align="center" valign="top" >*/
/*                                                                                         <table class="table-date" width="68" border="0" align="center" cellpadding="0" cellspacing="0" background="http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png" style="background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) ">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="date">*/
/*                                                                                                     <div class="day-of-week">SUNDAY</div>*/
/*                                                                                                     <div class="month">SEP</div>*/
/*                                                                                                     <div class="day">25</div>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                     <td class="events" valign="top">*/
/*                                                                                         <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Annual Giving Phone-A-Thon</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >6:30 to 9:30 p.m. | Nichols Hall</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                 </table>*/
/*                                                             </td>*/
/*                                                         </tr>*/
/*                                                         <tr>*/
/*                                                             <td id="" class="element element-list home-games" width="" style="" align="left" valign="top" >*/
/*                                                                 <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element header " width="" style="" align="left" valign="top" >Upcoming Home Games</td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element list list-unstyled " width="100%" style="" align="left" valign="top" >*/
/*                                                                             <table class="table-list" align="left" width="100%" border="0" cellspacing="0" cellpadding="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <td class="list-item">*/
/*                                                                                         <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <!-- unstyled -->*/
/*                                                                                                 <td class="list-item-text" valign="top">*/
/*                                                                                                     <a href="http://www.harker.org/page.cfm?p=4012">Upper School Home Games</a>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td class="list-item">*/
/*                                                                                         <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <!-- unstyled -->*/
/*                                                                                                 <td class="list-item-text" valign="top">*/
/*                                                                                                     <a href="http://www.harker.org/page.cfm?p=4014">Middle School Home Games</a>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td class="list-item">*/
/*                                                                                         <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <!-- unstyled -->*/
/*                                                                                                 <td class="list-item-text" valign="top">*/
/*                                                                                                     <a href="http://www.harker.org/page.cfm?p=4015">Lower School Home Games</a>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                 </table>*/
/*                                                             </td>*/
/*                                                         </tr>*/
/*                                                     </table>*/
/*                                                     <!--[if gte mso 12]> </td>*/
/*                                                 <td valign="top">*/
/*                                                     <![endif]-->*/
/*                                                     <table width="1" border="0" cellpadding="0" cellspacing="0" align="left">*/
/*                                                         <tr>*/
/*                                                             <td height="40" style="font-size: 0;line-height: 0;border-collapse: collapse;">*/
/*                                                                 <p style="padding-left: 20px; font-size: inherit;">&nbsp;</p>*/
/*                                                             </td>*/
/*                                                         </tr>*/
/*                                                     </table>*/
/*                                                     <!--[if gte mso 12]> </td>*/
/*                                                 <td class="row" valign="top">*/
/*                                                     <![endif]-->*/
/*                                                     <table class="table-full" width="290" border="0" align="right" cellpadding="0" cellspacing="0">*/
/*                                                         <tr>*/
/*                                                             <td id="" class="element element-list announcements" width="" style="" align="left" valign="top" >*/
/*                                                                 <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element header " width="" style="" align="left" valign="top" >Announcements</td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element content description" width="" style="" align="left" valign="top" >*/
/*                                                                             View all announcements in*/
/*                                                                             <a href="http://www.harker.org/page.cfm?p=3566">our archive</a>*/
/*                                                                             .*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element article " width="100%" style="" align="left" valign="top" >*/
/*                                                                             <table class="table-article" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element header " width="" style="" align="left" valign="top" >*/
/*                                                                                         <a href="http://www.harker.org/page.cfm?p=3566&newsid=1893">Sports Report Sept. 13, 2016</a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element article " width="100%" style="" align="left" valign="top" >*/
/*                                                                             <table class="table-article" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element header " width="" style="" align="left" valign="top" >*/
/*                                                                                         <a href="http://www.harker.org/page.cfm?p=3566&newsid=1886">Common Ground Speaker Lineup for 2016-17</a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element article " width="100%" style="" align="left" valign="top" >*/
/*                                                                             <table class="table-article" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element header " width="" style="" align="left" valign="top" >*/
/*                                                                                         <a href="http://www.harker.org/page.cfm?p=3566&newsid=1890">Fruttero Tennis Academy</a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                 </table>*/
/*                                                             </td>*/
/*                                                         </tr>*/
/*                                                         <tr>*/
/*                                                             <td id="" class="element element-list news" width="" style="" align="left" valign="top" >*/
/*                                                                 <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element header " width="" style="" align="left" valign="top" >News</td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element content description" width="" style="" align="left" valign="top" >*/
/*                                                                             View all stories at*/
/*                                                                             <a href="http://news.harker.org">Harker News</a>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element article " width="100%" style="" align="left" valign="top" >*/
/*                                                                             <table class="table-article" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element header " width="" style="" align="left" valign="top" >*/
/*                                                                                         <a href="http://wp.me/pOeLQ-7MS">Three Students Named Broadcom MASTERS Semifinalists</a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                         Last week, the Society for Science & the Public announced that three Harker freshmen were named semifinalists in this year’s Broadcom MASTERS competition.*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-button " width="100%" style="" align="left" valign="top" >*/
/*                                                                                         <table class="table-button table-button-text" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="button" valign="middle" align="center">*/
/*                                                                                                     <a href="http://wp.me/pOeLQ-7MS">Read More</a>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element article " width="100%" style="" align="left" valign="top" >*/
/*                                                                             <table class="table-article" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element header " width="" style="" align="left" valign="top" >*/
/*                                                                                         <a href="http://wp.me/pOeLQ-7Mt">Harker Team Wins Best in Nation at TEAMS Competition</a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                         In June, Harker’s team was named the best team in the country at the Test of Engineering, Aptitude, Mathematics and Science (TEAMS) National Conference in Nashville.*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-button " width="100%" style="" align="left" valign="top" >*/
/*                                                                                         <table class="table-button table-button-text" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="button" valign="middle" align="center">*/
/*                                                                                                     <a href="http://wp.me/pOeLQ-7Mt">Read More</a>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element article " width="100%" style="" align="left" valign="top" >*/
/*                                                                             <table class="table-article" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element header " width="" style="" align="left" valign="top" >*/
/*                                                                                         <a href="http://wp.me/pOeLQ-7Mb">*/
/*                                                                                             Girls Tennis Tournament Championship Highlights the Harker Week in Sports*/
/*                                                                                         </a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                         The girls tennis team opened its season at the California Tennis Classic and dominated the competition on the way to a Division 6 championship.*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-button " width="100%" style="" align="left" valign="top" >*/
/*                                                                                         <table class="table-button table-button-text" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="button" valign="middle" align="center">*/
/*                                                                                                     <a href="http://wp.me/pOeLQ-7Mb">Read More</a>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                 </table>*/
/*                                                             </td>*/
/*                                                         </tr>*/
/*                                                         <tr>*/
/*                                                             <td id="" class="element element-list photos" width="" style="" align="left" valign="top" >*/
/*                                                                 <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element header " width="" style="" align="left" valign="top" >Photos</td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element content description" width="" style="" align="left" valign="top" >*/
/*                                                                             View more photos in the*/
/*                                                                             <a href="http://9alskiel9sn2.photoshelter.com/">photo archive</a>*/
/*                                                                             .*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element article " width="100%" style="" align="left" valign="top" >*/
/*                                                                             <table class="table-article" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-img " width="290" style="" align="center" valign="top" >*/
/*                                                                                         <a href="http://9alskiel9sn2.photoshelter.com/gallery/2016-09-US-Varsity-Football/G0000Wd_ichAq3rk/C0000MgCbUWp._KY">*/
/*                                                                                             <img class="img-full" width="290" height="" style="" src="http://skylark.harker.org/email-builder/v2/emails/eweekly/09-19-2016/assets/img//us-cheerleaders.jpg" alt="Upper School Varsity Football"></a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element header " width="" style="" align="left" valign="top" >*/
/*                                                                                         <a href="http://9alskiel9sn2.photoshelter.com/gallery/2016-09-US-Varsity-Football/G0000Wd_ichAq3rk/C0000MgCbUWp._KY">Upper School Varsity Football</a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                         View more photos in our*/
/*                                                                                         <a href="http://9alskiel9sn2.photoshelter.com/gallery-collection/2016-09-September/C0000MgCbUWp._KY">September galleries</a>*/
/*                                                                                         . You may also access the photos from the parent portal.*/
/*                                                                                         <br>*/
/*                                                                                         <br> <b>Note:</b>*/
/*                                                                                         To download free photos or order prints, you must have a PhotoShelter account.*/
/*                                                                                         <a href="https://9alskiel9sn2.photoshelter.com/signup/signup/free">Sign up for free</a>*/
/*                                                                                         .*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-button " width="100%" style="" align="left" valign="top" >*/
/*                                                                                         <table class="table-button table-button-outline" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="button" valign="middle" align="center">*/
/*                                                                                                     <a href="http://9alskiel9sn2.photoshelter.com/gallery/2016-09-US-Varsity-Football/G0000Wd_ichAq3rk/C0000MgCbUWp._KY">View Photo Gallery</a>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                 </table>*/
/*                                                             </td>*/
/*                                                         </tr>*/
/*                                                     </table>*/
/*                                                 </td>*/
/*                                             </tr>*/
/*                                         </table>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             </table>*/
/*                         </td>*/
/*                     </tr>*/
/*                 </table>*/
/*                 <table id="" class="module module-footer module-2 module-even " style="" align="center" width="100%" border="0" cellspacing="0" cellpadding="0" >*/
/*                     <tr>*/
/*                         <td class="background" align="center" background="" style="background-image: url() ">*/
/*                             <table align="center" class="table-inner" width="600" border="0" cellspacing="0" cellpadding="0">*/
/*                                 <tr>*/
/*                                     <td class="container" style="">*/
/*                                         <table class="table-full" align="center" width="600" border="0" cellspacing="0" cellpadding="0">*/
/*                                             <tr>*/
/*                                                 <td class="row" valign="top">*/
/*                                                     <table class="table-full" width="290" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                         <tr>*/
/*                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Social Media</td>*/
/*                                                         </tr>*/
/*                                                         <tr>*/
/*                                                             <td id="" class="element list list-unstyled " width="100%" style="" align="left" valign="top" >*/
/*                                                                 <table class="table-list" align="left" width="100%" border="0" cellspacing="0" cellpadding="0">*/
/*                                                                     <tr>*/
/*                                                                         <td class="list-item">*/
/*                                                                             <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <!-- unstyled -->*/
/*                                                                                     <td class="list-item-text" valign="top">*/
/*                                                                                         <a href="http://facebook.com/harkerschool">facebook.com/harkerschool</a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td class="list-item">*/
/*                                                                             <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <!-- unstyled -->*/
/*                                                                                     <td class="list-item-text" valign="top">*/
/*                                                                                         <a href="http://twitter.com/harkerschool">twitter.com/harkerschool</a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td class="list-item">*/
/*                                                                             <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <!-- unstyled -->*/
/*                                                                                     <td class="list-item-text" valign="top">*/
/*                                                                                         <a href="http://instagram.com/harkerschool">instagram.com/harkerschool</a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                 </table>*/
/*                                                             </td>*/
/*                                                         </tr>*/
/*                                                     </table>*/
/*                                                     <!--[if gte mso 12]> </td>*/
/*                                                 <td valign="top">*/
/*                                                     <![endif]-->*/
/*                                                     <table width="1" border="0" cellpadding="0" cellspacing="0" align="left">*/
/*                                                         <tr>*/
/*                                                             <td height="40" style="font-size: 0;line-height: 0;border-collapse: collapse;">*/
/*                                                                 <p style="padding-left: 20px; font-size: inherit;">&nbsp;</p>*/
/*                                                             </td>*/
/*                                                         </tr>*/
/*                                                     </table>*/
/*                                                     <!--[if gte mso 12]> </td>*/
/*                                                 <td class="row" valign="top">*/
/*                                                     <![endif]-->*/
/*                                                     <table class="table-full" width="290" border="0" align="right" cellpadding="0" cellspacing="0">*/
/*                                                         <tr>*/
/*                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Contact Us</td>*/
/*                                                         </tr>*/
/*                                                         <tr>*/
/*                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                 500 Saratoga Ave., San Jose 95129*/
/*                                                                 <br>*/
/*                                                                 <a href="mailto:communications@harker.org">communications@harker.org</a>*/
/*                                                             </td>*/
/*                                                         </tr>*/
/*                                                     </table>*/
/*                                                 </td>*/
/*                                             </tr>*/
/*                                         </table>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             </table>*/
/*                         </td>*/
/*                     </tr>*/
/*                 </table>*/
/*                 <table id="" class="module module-bottombar module-3 module-odd " style="" align="center" width="100%" border="0" cellspacing="0" cellpadding="0" >*/
/*                     <tr>*/
/*                         <td class="background" align="center" background="" style="background-image: url() ">*/
/*                             <table align="center" class="table-inner" width="600" border="0" cellspacing="0" cellpadding="0">*/
/*                                 <tr>*/
/*                                     <td class="container" style="">*/
/*                                         <table class="table-full" align="center" width="600" border="0" cellspacing="0" cellpadding="0">*/
/*                                             <tr>*/
/*                                                 <td class="row" valign="top">*/
/*                                                     <table class="table-full" width="600" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                         <tr>*/
/*                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >Copyright © The Harker School 2016, All rights reserved.</td>*/
/*                                                         </tr>*/
/*                                                     </table>*/
/*                                                 </td>*/
/*                                             </tr>*/
/*                                         </table>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             </table>*/
/*                         </td>*/
/*                     </tr>*/
/*                 </table>*/
/*             </td>*/
/*         </tr>*/
/*     </table>*/
/* </body>*/
/* </html>*/
