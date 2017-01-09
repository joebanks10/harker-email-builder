<?php

/* @email/email.html */
class __TwigTemplate_62b98eee657feaeeb0c14eab78fefad88462b26d66ccb281eda265f5ff76f662 extends Twig_Template
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
<html style=\"width: 100%;\">
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
            font-size: 20px; 
            line-height: 34.8px;
            font-weight: 100;
        }

        h3 {
            font-size: 16px; 
            line-height: 26px;
            font-weight: bold;
        }

        h4 {
            font-size: 16px; 
            line-height: 26px;
            font-weight: 100;
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

        .content {
            font-family: 'Open Sans', Arial, sans-serif; 
            font-size: 16px; 
            line-height: 26px;
            color: #676767; 
            text-align: left;
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
<body style=\"-ms-text-size-adjust: none; -webkit-text-size-adjust: none; margin: 0; padding: 0;\">
    <table class=\"table-wrapper\" align=\"center\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: fixed;\">
        <tr>
            <td align=\"center\" style=\"border-collapse: collapse;\">
                <table id=\"\" class=\"module module-topbar module-0 module-even \" style=\"border-spacing: 0; margin: 0 auto; table-layout: fixed; background-color: #044836;\" align=\"center\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                    <tr>
                        <td class=\"background\" align=\"center\" background=\"\" style=\"border-collapse: collapse; background-position: top center; background-size: cover; background-image: url();\">
                            <table align=\"center\" class=\"table-inner\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                <tr>
                                    <td class=\"container\" style=\"border-collapse: collapse; padding-bottom: 0; padding-top: 0;\">
                                        <table class=\"table-full\" align=\"center\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                            <tr>
                                                <td class=\"row\" valign=\"top\" style=\"border-collapse: collapse; padding-bottom: 0;\">
                                                    <table class=\"table-full\" width=\"\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                        <tr>
                                                            <td id=\"\" class=\"element element-img logo-container\" width=\"215\" style=\"border-collapse: collapse; padding-bottom: 10px; line-height: 0px; padding-top: 10px; background-color: #05533E; border-left: 4px solid #033e2f; border-right: 4px solid #033e2f; padding-left: 20px; padding-right: 20px;\" align=\"center\" valign=\"top\">
                                                                <img class=\"\" width=\"215\" height=\"38\" style=\"display: block !important; border: 0px; font-size: 0px; line-height: 0px;\" src=\"http://skylark.harker.org/email-builder/v2/assets/img/harker-logo.png\" alt=\"Harker Logo\"></td>
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
                <table id=\"\" class=\"module module-grid module-1 module-odd \" style=\"border-spacing: 0; margin: 0 auto; table-layout: fixed;\" align=\"center\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                    <tr>
                        <td class=\"background\" align=\"center\" background=\"\" style=\"border-collapse: collapse; background-position: top center; background-size: cover; background-image: url();\">
                            <table align=\"center\" class=\"table-inner\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                <tr>
                                    <td class=\"container\" style=\"border-collapse: collapse; padding-bottom: 40px; padding-top: 40px;\">
                                        <table class=\"table-full\" align=\"center\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                            <tr>
                                                <td class=\"row\" valign=\"top\" style=\"border-collapse: collapse; padding-bottom: 0;\">
                                                    <table class=\"table-full\" width=\"290\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                        <tr>
                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 24px; font-weight: bold; line-height: 34.8px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">Upcoming Events</td>
                                                        </tr>
                                                        <tr>
                                                            <td id=\"\" class=\"element content description\" width=\"\" style=\"border-collapse: collapse; padding-bottom: 15px; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;\" align=\"left\" valign=\"top\">
                                                                View all events in the
                                                                <a href=\"http://www.harker.org/page.cfm?p=2302\" style=\"color: #00809E;\">school calendar</a>
                                                                .
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td id=\"\" class=\"element calendar-list \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 30px;\" align=\"left\" valign=\"top\">
                                                                <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                    <tr>
                                                                        <td id=\"\" class=\"element calendar-item \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 30px; padding-top: 0;\" align=\"left\" valign=\"top\">
                                                                            <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-date \" width=\"68\" style=\"border-collapse: collapse; padding-bottom: 0; padding-top: 0;\" align=\"center\" valign=\"top\">
                                                                                        <table class=\"table-date\" width=\"68\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" background=\"http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto; background-color: #e6e6e6; background-position: 0 0; background-repeat: no-repeat; height: 70px; background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png);\">
                                                                                            <tr>
                                                                                                <td class=\"date\" style=\"border-collapse: collapse; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; height: 70px; line-height: 24px; overflow: hidden; text-align: center; vertical-align: middle;\">
                                                                                                    <div class=\"day-of-week\" style=\"color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 9px; font-weight: normal; line-height: 14px;\">MONDAY</div>
                                                                                                    <div class=\"month\" style=\"color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 16px; font-weight: bold; line-height: 16px;\">AUG</div>
                                                                                                    <div class=\"day\" style=\"color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 32px; font-weight: bold; line-height: 28px;\">15</div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                    <td class=\"events\" valign=\"top\" style=\"border-collapse: collapse; padding-left: 20px;\">
                                                                                        <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 0; padding-top: 0;\" align=\"left\" valign=\"top\">
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">DECA Launch and Banquet</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;\" align=\"left\" valign=\"top\">8:30 a.m. to 3 p.m. | Saratoga Campus</td>
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
                                                                        <td id=\"\" class=\"element calendar-item \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 30px;\" align=\"left\" valign=\"top\">
                                                                            <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-date \" width=\"68\" style=\"border-collapse: collapse; padding-bottom: 0; padding-top: 0;\" align=\"center\" valign=\"top\">
                                                                                        <table class=\"table-date\" width=\"68\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" background=\"http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto; background-color: #e6e6e6; background-position: 0 0; background-repeat: no-repeat; height: 70px; background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png);\">
                                                                                            <tr>
                                                                                                <td class=\"date\" style=\"border-collapse: collapse; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; height: 70px; line-height: 24px; overflow: hidden; text-align: center; vertical-align: middle;\">
                                                                                                    <div class=\"day-of-week\" style=\"color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 9px; font-weight: normal; line-height: 14px;\">TUESDAY</div>
                                                                                                    <div class=\"month\" style=\"color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 16px; font-weight: bold; line-height: 16px;\">AUG</div>
                                                                                                    <div class=\"day\" style=\"color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 32px; font-weight: bold; line-height: 28px;\">16</div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                    <td class=\"events\" valign=\"top\" style=\"border-collapse: collapse; padding-left: 20px;\">
                                                                                        <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 0; padding-top: 0;\" align=\"left\" valign=\"top\">
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">DECA Launch and Banquet</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;\" align=\"left\" valign=\"top\">8:30 a.m. to 8 p.m. | Saratoga Campus</td>
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
                                                                        <td id=\"\" class=\"element calendar-item \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 30px;\" align=\"left\" valign=\"top\">
                                                                            <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-date \" width=\"68\" style=\"border-collapse: collapse; padding-bottom: 0; padding-top: 0;\" align=\"center\" valign=\"top\">
                                                                                        <table class=\"table-date\" width=\"68\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" background=\"http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto; background-color: #e6e6e6; background-position: 0 0; background-repeat: no-repeat; height: 70px; background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png);\">
                                                                                            <tr>
                                                                                                <td class=\"date\" style=\"border-collapse: collapse; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; height: 70px; line-height: 24px; overflow: hidden; text-align: center; vertical-align: middle;\">
                                                                                                    <div class=\"day-of-week\" style=\"color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 9px; font-weight: normal; line-height: 14px;\">WEDNESDAY</div>
                                                                                                    <div class=\"month\" style=\"color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 16px; font-weight: bold; line-height: 16px;\">AUG</div>
                                                                                                    <div class=\"day\" style=\"color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 32px; font-weight: bold; line-height: 28px;\">17</div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                    <td class=\"events\" valign=\"top\" style=\"border-collapse: collapse; padding-left: 20px;\">
                                                                                        <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 15px; padding-top: 0;\" align=\"left\" valign=\"top\">
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">Grade 3 Buddy Party</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;\" align=\"left\" valign=\"top\">12 to 2 p.m. | Bucknall Campus</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 15px;\" align=\"left\" valign=\"top\">
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">Grades 4-5 Buddy &amp; New Student Training</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;\" align=\"left\" valign=\"top\">1 to 3 p.m. | Bucknall Campus</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 0;\" align=\"left\" valign=\"top\">
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">Grade 9 Parent Orientation Meeting</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;\" align=\"left\" valign=\"top\">
                                                                                                                6 to 7 p.m. | Saratoga Gym
                                                                                                                <span class=\"event-link\" style=\"display: block;\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&amp;verbose=246853\" style=\"color: #00809E;\">View details</a>
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
                                                                        <td id=\"\" class=\"element calendar-item \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 30px;\" align=\"left\" valign=\"top\">
                                                                            <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-date \" width=\"68\" style=\"border-collapse: collapse; padding-bottom: 0; padding-top: 0;\" align=\"center\" valign=\"top\">
                                                                                        <table class=\"table-date\" width=\"68\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" background=\"http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto; background-color: #e6e6e6; background-position: 0 0; background-repeat: no-repeat; height: 70px; background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png);\">
                                                                                            <tr>
                                                                                                <td class=\"date\" style=\"border-collapse: collapse; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; height: 70px; line-height: 24px; overflow: hidden; text-align: center; vertical-align: middle;\">
                                                                                                    <div class=\"day-of-week\" style=\"color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 9px; font-weight: normal; line-height: 14px;\">THURSDAY</div>
                                                                                                    <div class=\"month\" style=\"color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 16px; font-weight: bold; line-height: 16px;\">AUG</div>
                                                                                                    <div class=\"day\" style=\"color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 32px; font-weight: bold; line-height: 28px;\">18</div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                    <td class=\"events\" valign=\"top\" style=\"border-collapse: collapse; padding-left: 20px;\">
                                                                                        <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 15px; padding-top: 0;\" align=\"left\" valign=\"top\">
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">123rd Academic Year Begins (Grades 9-12)</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 15px;\" align=\"left\" valign=\"top\">
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">Grade 11: Junior Class Trip-Rafting</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;\" align=\"left\" valign=\"top\">
                                                                                                                6:15 a.m. to 9 p.m. | Pick-up and drop off at Blackford Campus
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 15px;\" align=\"left\" valign=\"top\">
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">Grade 10: Sophomore Class Trip-Ropes Course</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;\" align=\"left\" valign=\"top\">
                                                                                                                7:15 a.m. to 5:30 p.m. | Pick-up and drop off at Blackford Campus
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 0;\" align=\"left\" valign=\"top\">
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">Grade 9: Freshmen Orientation/Field Day</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;\" align=\"left\" valign=\"top\">10:15 a.m. to 3:15 p.m. | Saratoga Campus</td>
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
                                                                        <td id=\"\" class=\"element calendar-item \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0;\" align=\"left\" valign=\"top\">
                                                                            <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-date \" width=\"68\" style=\"border-collapse: collapse; padding-bottom: 0; padding-top: 0;\" align=\"center\" valign=\"top\">
                                                                                        <table class=\"table-date\" width=\"68\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" background=\"http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto; background-color: #e6e6e6; background-position: 0 0; background-repeat: no-repeat; height: 70px; background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png);\">
                                                                                            <tr>
                                                                                                <td class=\"date\" style=\"border-collapse: collapse; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; height: 70px; line-height: 24px; overflow: hidden; text-align: center; vertical-align: middle;\">
                                                                                                    <div class=\"day-of-week\" style=\"color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 9px; font-weight: normal; line-height: 14px;\">FRIDAY</div>
                                                                                                    <div class=\"month\" style=\"color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 16px; font-weight: bold; line-height: 16px;\">AUG</div>
                                                                                                    <div class=\"day\" style=\"color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 32px; font-weight: bold; line-height: 28px;\">19</div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                    <td class=\"events\" valign=\"top\" style=\"border-collapse: collapse; padding-left: 20px;\">
                                                                                        <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 15px; padding-top: 0;\" align=\"left\" valign=\"top\">
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">123rd Academic Year Begins (Grades 6-8)</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 15px;\" align=\"left\" valign=\"top\">
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">Middle School Parent/Student Welcome Breakfast</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;\" align=\"left\" valign=\"top\">8 to 9:30 a.m. | Blackford Gym</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 15px;\" align=\"left\" valign=\"top\">
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">Matriculation &amp; Photo Day Grade 9-12</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;\" align=\"left\" valign=\"top\">9 a.m. to 3 p.m. | Saratoga Quad</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 15px;\" align=\"left\" valign=\"top\">
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">Middle School Parent Orientation</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;\" align=\"left\" valign=\"top\">1:30 to 3:30 p.m. | Blackford Gym</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 15px;\" align=\"left\" valign=\"top\">
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">Middle School Performing Arts Kick-off</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;\" align=\"left\" valign=\"top\">3:30 p.m. | Blackford Gym</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 0;\" align=\"left\" valign=\"top\">
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">
                                                                                                                Lower &amp; Middle School Q1 BEST &amp; Athletic Sign-Ups End
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;\" align=\"left\" valign=\"top\">5 p.m.</td>
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
                                                            <td id=\"\" class=\"element element-list home-games\" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0;\" align=\"left\" valign=\"top\">
                                                                <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                    <tr>
                                                                        <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 24px; font-weight: bold; line-height: 34.8px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">Upcoming Home Games</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element list list-unstyled \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 0;\" align=\"left\" valign=\"top\">
                                                                            <table class=\"table-list\" align=\"left\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                <tr>
                                                                                    <td class=\"list-item\" style=\"border-collapse: collapse; border-bottom: 1px solid #dddddd; padding-bottom: 10px; padding-top: 10px; border: none;\">
                                                                                        <table width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                            <tr>
                                                                                                <!-- unstyled -->
                                                                                                <td class=\"list-item-text\" valign=\"top\" style=\"border-collapse: collapse; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; line-height: 26px; text-align: left; padding-left: 0;\">
                                                                                                    <a href=\"http://www.harker.org/page.cfm?p=4012\" style=\"color: #00809E;\">Upper School Home Games</a>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class=\"list-item\" style=\"border-collapse: collapse; border-bottom: 1px solid #dddddd; padding-bottom: 10px; padding-top: 10px; border: none;\">
                                                                                        <table width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                            <tr>
                                                                                                <!-- unstyled -->
                                                                                                <td class=\"list-item-text\" valign=\"top\" style=\"border-collapse: collapse; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; line-height: 26px; text-align: left; padding-left: 0;\">
                                                                                                    <a href=\"http://www.harker.org/page.cfm?p=4014\" style=\"color: #00809E;\">Middle School Home Games</a>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class=\"list-item\" style=\"border-collapse: collapse; border-bottom: 1px solid #dddddd; padding-bottom: 10px; padding-top: 10px; border: none;\">
                                                                                        <table width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                            <tr>
                                                                                                <!-- unstyled -->
                                                                                                <td class=\"list-item-text\" valign=\"top\" style=\"border-collapse: collapse; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; line-height: 26px; text-align: left; padding-left: 0;\">
                                                                                                    <a href=\"http://www.harker.org/page.cfm?p=4015\" style=\"color: #00809E;\">Lower School Home Games</a>
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
                                                    <table width=\"1\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"left\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                        <tr>
                                                            <td height=\"40\" style=\"border-collapse: collapse; font-size: 0; line-height: 0;\">
                                                                <p style=\"padding-left: 20px;\"></p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!--[if gte mso 12]> </td>
                                                <td class=\"row\" valign=\"top\">
                                                    <![endif]-->
                                                    <table class=\"table-full\" width=\"290\" border=\"0\" align=\"right\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                        <tr>
                                                            <td id=\"\" class=\"element element-list announcements\" width=\"\" style=\"border-collapse: collapse; padding-bottom: 30px; padding-top: 0;\" align=\"left\" valign=\"top\">
                                                                <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                    <tr>
                                                                        <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 24px; font-weight: bold; line-height: 34.8px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">Announcements</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element content description\" width=\"\" style=\"border-collapse: collapse; padding-bottom: 15px; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;\" align=\"left\" valign=\"top\">
                                                                            View all announcements in
                                                                            <a href=\"http://www.harker.org/page.cfm?p=3566\" style=\"color: #00809E;\">our archive</a>
                                                                            .
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element article \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 15px;\" align=\"left\" valign=\"top\">
                                                                            <table class=\"table-article\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #555; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; font-weight: bold; line-height: 24px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">
                                                                                        <a href=\"http://www.harker.org/page.cfm?p=3566&amp;newsid=1879\" style=\"color: #00809E; text-decoration: none;\">
                                                                                            Educator and Clinical Psychologist Chris Thurber Appearing on Sept. 11
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element article \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 15px;\" align=\"left\" valign=\"top\">
                                                                            <table class=\"table-article\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #555; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; font-weight: bold; line-height: 24px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">
                                                                                        <a href=\"http://www.harker.org/page.cfm?p=3566&amp;newsid=1880\" style=\"color: #00809E; text-decoration: none;\">IMPORTANT - Lower School Fall Sports Information</a>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element article \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 0;\" align=\"left\" valign=\"top\">
                                                                            <table class=\"table-article\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #555; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; font-weight: bold; line-height: 24px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">
                                                                                        <a href=\"http://www.harker.org/page.cfm?p=3566&amp;newsid=1881\" style=\"color: #00809E; text-decoration: none;\">Reminder: After School Registration Now Open</a>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td id=\"\" class=\"element element-list news\" width=\"\" style=\"border-collapse: collapse; padding-bottom: 30px;\" align=\"left\" valign=\"top\">
                                                                <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                    <tr>
                                                                        <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 24px; font-weight: bold; line-height: 34.8px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">News</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element content description\" width=\"\" style=\"border-collapse: collapse; padding-bottom: 15px; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;\" align=\"left\" valign=\"top\">
                                                                            View all stories at
                                                                            <a href=\"http://news.harker.org\" style=\"color: #00809E;\">Harker News</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element article \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 20px;\" align=\"left\" valign=\"top\">
                                                                            <table class=\"table-article\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 10px; color: #555; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; font-weight: bold; line-height: 24px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">
                                                                                        <a href=\"http://news.harker.org/senior-named-regional-finalist-in-google-science-fair-for-eye-diagnostic-app/\" style=\"color: #00809E; text-decoration: none;\">
                                                                                            [UPDATED] Senior Named Regional Finalist in Google Science Fair for Eye Diagnostic App
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element content \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 10px; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;\" align=\"left\" valign=\"top\">
                                                                                        Rishab Gargeya, rising senior and Saratoga resident, was recently named a regional finalist in the international Google Science Fair 2016!
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-button \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 0;\" align=\"left\" valign=\"top\">
                                                                                        <table class=\"table-button table-button-text\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto; background-color: transparent;\">
                                                                                            <tr>
                                                                                                <td class=\"button\" valign=\"middle\" align=\"center\" style=\"border-collapse: collapse; color: #00809E; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; line-height: 26px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; padding-top: 10px; text-align: left; vertical-align: middle; padding: 0;\">
                                                                                                    <a href=\"http://news.harker.org/senior-named-regional-finalist-in-google-science-fair-for-eye-diagnostic-app/\" style=\"color: #00809E; display: block; text-decoration: underline;\">Read More</a>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element article \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 20px;\" align=\"left\" valign=\"top\">
                                                                            <table class=\"table-article\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 10px; color: #555; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; font-weight: bold; line-height: 24px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">
                                                                                        <a href=\"http://news.harker.org/iyer-takes-national-title-at-junior-olympic-national-championships/\" style=\"color: #00809E; text-decoration: none;\">
                                                                                            Iyer Takes National Title at Junior Olympic National Championships
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element content \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 10px; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;\" align=\"left\" valign=\"top\">
                                                                                        Rising senior Niki Iyer won the women's age 17-18 3000-meter race in 10:05.08 at the USATF National Junior Olympic Track &amp; Field Championships at Sacramento State University in late July!
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-button \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 0;\" align=\"left\" valign=\"top\">
                                                                                        <table class=\"table-button table-button-text\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto; background-color: transparent;\">
                                                                                            <tr>
                                                                                                <td class=\"button\" valign=\"middle\" align=\"center\" style=\"border-collapse: collapse; color: #00809E; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; line-height: 26px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; padding-top: 10px; text-align: left; vertical-align: middle; padding: 0;\">
                                                                                                    <a href=\"http://news.harker.org/iyer-takes-national-title-at-junior-olympic-national-championships/\" style=\"color: #00809E; display: block; text-decoration: underline;\">Read More</a>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element article \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 0;\" align=\"left\" valign=\"top\">
                                                                            <table class=\"table-article\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 10px; color: #555; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; font-weight: bold; line-height: 24px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">
                                                                                        <a href=\"http://news.harker.org/students-visit-japan-bond-with-buddies-and-visit-cultural-landmarks/\" style=\"color: #00809E; text-decoration: none;\">
                                                                                            Students Visit Japan, Bond with Buddies and Tour Cultural Landmarks
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element content \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 10px; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;\" align=\"left\" valign=\"top\">
                                                                                        In mid-May, a group of Harker sixth graders traveled to Japan for the yearly visit to Tamagawa Academy. In addition to visiting their buddies, the trip gave students the opportunity to see many of Japan's most famous landmarks and learn about the country's rich culture.
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-button \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 0;\" align=\"left\" valign=\"top\">
                                                                                        <table class=\"table-button table-button-text\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto; background-color: transparent;\">
                                                                                            <tr>
                                                                                                <td class=\"button\" valign=\"middle\" align=\"center\" style=\"border-collapse: collapse; color: #00809E; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; line-height: 26px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; padding-top: 10px; text-align: left; vertical-align: middle; padding: 0;\">
                                                                                                    <a href=\"http://news.harker.org/students-visit-japan-bond-with-buddies-and-visit-cultural-landmarks/\" style=\"color: #00809E; display: block; text-decoration: underline;\">Read More</a>
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
                                                            <td id=\"\" class=\"element element-list photos\" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0;\" align=\"left\" valign=\"top\">
                                                                <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                    <tr>
                                                                        <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 24px; font-weight: bold; line-height: 34.8px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">Photos</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element content description\" width=\"\" style=\"border-collapse: collapse; padding-bottom: 15px; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;\" align=\"left\" valign=\"top\">
                                                                            View more photos in the
                                                                            <a href=\"http://9alskiel9sn2.photoshelter.com/\" style=\"color: #00809E;\">photo archive</a>
                                                                            .
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id=\"\" class=\"element article \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 0;\" align=\"left\" valign=\"top\">
                                                                            <table class=\"table-article\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-img \" width=\"290\" style=\"border-collapse: collapse; padding-bottom: 15px; line-height: 0px; padding-top: 0;\" align=\"center\" valign=\"top\">
                                                                                        <a href=\"http://9alskiel9sn2.photoshelter.com/gallery/2016-08-OOC-Playdate-in-the-Park/G00005hzhf4OclQU/C0000aRwpt5wHde4\" style=\"color: #00809E;\">
                                                                                            <img class=\"img-full\" width=\"290\" height=\"\" style=\"display: block !important; border: 0px; font-size: 0px; line-height: 0px;\" src=\"http://skylark.harker.org/email-builder/v2/emails/eweekly/08-15-2016/assets/img//2016-07_OOC_Playdate_LL_025.jpg\" alt=\"Playdate in the Park\"></a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 10px; color: #555; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; font-weight: bold; line-height: 24px; text-align: left;\" align=\"left\" valign=\"top\">
                                                                                        <a href=\"http://9alskiel9sn2.photoshelter.com/gallery/2016-08-OOC-Playdate-in-the-Park/G00005hzhf4OclQU/C0000aRwpt5wHde4\" style=\"color: #00809E; text-decoration: none;\">Playdate in the Park</a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element content \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 10px; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;\" align=\"left\" valign=\"top\">
                                                                                        View more photos in our
                                                                                        <a href=\"http://9alskiel9sn2.photoshelter.com/gallery-collection/2016-Summer-Programs/C0000Des.cpSOHLc\" style=\"color: #00809E;\">Summer galleries</a>
                                                                                        . You may also access the photos from the parent portal.
                                                                                        <br>
                                                                                        <br> <b>Note:</b>
                                                                                        To download free photos or order prints, you must have a PhotoShelter account.
                                                                                        <a href=\"https://9alskiel9sn2.photoshelter.com/signup/signup/free\" style=\"color: #00809E;\">Sign up for free</a>
                                                                                        .
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-button \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 0;\" align=\"left\" valign=\"top\">
                                                                                        <table class=\"table-button table-button-outline\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto; background-color: transparent;\">
                                                                                            <tr>
                                                                                                <td class=\"button\" valign=\"middle\" align=\"center\" style=\"border-collapse: collapse; color: #00809E; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; line-height: 26px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; padding-top: 10px; text-align: center; vertical-align: middle; border: 1px solid #00809e; font-weight: bold;\">
                                                                                                    <a href=\"http://9alskiel9sn2.photoshelter.com/gallery/2016-08-OOC-Playdate-in-the-Park/G00005hzhf4OclQU/C0000aRwpt5wHde4\" style=\"color: #00809E; display: block; text-decoration: none; font-weight: bold;\">View Photo Gallery</a>
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
                <table id=\"\" class=\"module module-footer module-2 module-even \" style=\"border-spacing: 0; margin: 0 auto; table-layout: fixed;\" align=\"center\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                    <tr>
                        <td class=\"background\" align=\"center\" background=\"\" style=\"border-collapse: collapse; background-position: top center; background-size: cover; background-color: #ecf0f1; background-image: url();\">
                            <table align=\"center\" class=\"table-inner\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                <tr>
                                    <td class=\"container\" style=\"border-collapse: collapse; padding-bottom: 40px; padding-top: 40px;\">
                                        <table class=\"table-full\" align=\"center\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                            <tr>
                                                <td class=\"row\" valign=\"top\" style=\"border-collapse: collapse; padding-bottom: 0;\">
                                                    <table class=\"table-full\" width=\"290\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                        <tr>
                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 24px; font-weight: bold; line-height: 34.8px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">Social Media</td>
                                                        </tr>
                                                        <tr>
                                                            <td id=\"\" class=\"element list list-unstyled \" width=\"100%\" style=\"border-collapse: collapse; padding-bottom: 0;\" align=\"left\" valign=\"top\">
                                                                <table class=\"table-list\" align=\"left\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                    <tr>
                                                                        <td class=\"list-item\" style=\"border-collapse: collapse; border-bottom: 1px solid #dddddd; padding-bottom: 10px; padding-top: 10px; border: none;\">
                                                                            <table width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                <tr>
                                                                                    <!-- unstyled -->
                                                                                    <td class=\"list-item-text\" valign=\"top\" style=\"border-collapse: collapse; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; line-height: 26px; text-align: left; padding-left: 0;\">
                                                                                        <a href=\"http://facebook.com/harkerschool\" style=\"color: #00809E;\">facebook.com/harkerschool</a>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class=\"list-item\" style=\"border-collapse: collapse; border-bottom: 1px solid #dddddd; padding-bottom: 10px; padding-top: 10px; border: none;\">
                                                                            <table width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                <tr>
                                                                                    <!-- unstyled -->
                                                                                    <td class=\"list-item-text\" valign=\"top\" style=\"border-collapse: collapse; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; line-height: 26px; text-align: left; padding-left: 0;\">
                                                                                        <a href=\"http://twitter.com/harkerschool\" style=\"color: #00809E;\">twitter.com/harkerschool</a>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class=\"list-item\" style=\"border-collapse: collapse; border-bottom: 1px solid #dddddd; padding-bottom: 10px; padding-top: 10px; border: none;\">
                                                                            <table width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                                                <tr>
                                                                                    <!-- unstyled -->
                                                                                    <td class=\"list-item-text\" valign=\"top\" style=\"border-collapse: collapse; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; line-height: 26px; text-align: left; padding-left: 0;\">
                                                                                        <a href=\"http://instagram.com/harkerschool\" style=\"color: #00809E;\">instagram.com/harkerschool</a>
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
                                                    <table width=\"1\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"left\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                        <tr>
                                                            <td height=\"40\" style=\"border-collapse: collapse; font-size: 0; line-height: 0;\">
                                                                <p style=\"padding-left: 20px;\"></p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!--[if gte mso 12]> </td>
                                                <td class=\"row\" valign=\"top\">
                                                    <![endif]-->
                                                    <table class=\"table-full\" width=\"290\" border=\"0\" align=\"right\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                        <tr>
                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 24px; font-weight: bold; line-height: 34.8px; text-align: left; padding-top: 0;\" align=\"left\" valign=\"top\">Contact Us</td>
                                                        </tr>
                                                        <tr>
                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; line-height: 26px; text-align: left;\" align=\"left\" valign=\"top\">
                                                                500 Saratoga Ave., San Jose 95129
                                                                <br>
                                                                <a href=\"mailto:communications@harker.org\" style=\"color: #00809E;\">communications@harker.org</a>
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
                <table id=\"\" class=\"module module-bottombar module-3 module-odd \" style=\"border-spacing: 0; margin: 0 auto; table-layout: fixed;\" align=\"center\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                    <tr>
                        <td class=\"background\" align=\"center\" background=\"\" style=\"border-collapse: collapse; background-position: top center; background-size: cover; background-color: #e2e6e7; background-image: url();\">
                            <table align=\"center\" class=\"table-inner\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                <tr>
                                    <td class=\"container\" style=\"border-collapse: collapse; padding-bottom: 15px; padding-top: 15px;\">
                                        <table class=\"table-full\" align=\"center\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                            <tr>
                                                <td class=\"row\" valign=\"top\" style=\"border-collapse: collapse; padding-bottom: 0;\">
                                                    <table class=\"table-full\" width=\"600\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing: 0; margin: 0 auto; table-layout: auto;\">
                                                        <tr>
                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; line-height: 26px; text-align: center; padding-top: 0;\" align=\"left\" valign=\"top\">Copyright © The Harker School 2016, All rights reserved.</td>
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
/* <html style="width: 100%;">*/
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
/*             font-size: 20px; */
/*             line-height: 34.8px;*/
/*             font-weight: 100;*/
/*         }*/
/* */
/*         h3 {*/
/*             font-size: 16px; */
/*             line-height: 26px;*/
/*             font-weight: bold;*/
/*         }*/
/* */
/*         h4 {*/
/*             font-size: 16px; */
/*             line-height: 26px;*/
/*             font-weight: 100;*/
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
/*         .content {*/
/*             font-family: 'Open Sans', Arial, sans-serif; */
/*             font-size: 16px; */
/*             line-height: 26px;*/
/*             color: #676767; */
/*             text-align: left;*/
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
/*     </style>*/
/*     <style type="text/css" rel="addons">*/
/*         /* styles here will be appended to main stylesheet (defined in index.php) *//* */
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
/* <body style="-ms-text-size-adjust: none; -webkit-text-size-adjust: none; margin: 0; padding: 0;">*/
/*     <table class="table-wrapper" align="center" width="100%" border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0; margin: 0 auto; table-layout: fixed;">*/
/*         <tr>*/
/*             <td align="center" style="border-collapse: collapse;">*/
/*                 <table id="" class="module module-topbar module-0 module-even " style="border-spacing: 0; margin: 0 auto; table-layout: fixed; background-color: #044836;" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">*/
/*                     <tr>*/
/*                         <td class="background" align="center" background="" style="border-collapse: collapse; background-position: top center; background-size: cover; background-image: url();">*/
/*                             <table align="center" class="table-inner" width="600" border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                 <tr>*/
/*                                     <td class="container" style="border-collapse: collapse; padding-bottom: 0; padding-top: 0;">*/
/*                                         <table class="table-full" align="center" width="600" border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                             <tr>*/
/*                                                 <td class="row" valign="top" style="border-collapse: collapse; padding-bottom: 0;">*/
/*                                                     <table class="table-full" width="" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                         <tr>*/
/*                                                             <td id="" class="element element-img logo-container" width="215" style="border-collapse: collapse; padding-bottom: 10px; line-height: 0px; padding-top: 10px; background-color: #05533E; border-left: 4px solid #033e2f; border-right: 4px solid #033e2f; padding-left: 20px; padding-right: 20px;" align="center" valign="top">*/
/*                                                                 <img class="" width="215" height="38" style="display: block !important; border: 0px; font-size: 0px; line-height: 0px;" src="http://skylark.harker.org/email-builder/v2/assets/img/harker-logo.png" alt="Harker Logo"></td>*/
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
/*                 <table id="" class="module module-grid module-1 module-odd " style="border-spacing: 0; margin: 0 auto; table-layout: fixed;" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">*/
/*                     <tr>*/
/*                         <td class="background" align="center" background="" style="border-collapse: collapse; background-position: top center; background-size: cover; background-image: url();">*/
/*                             <table align="center" class="table-inner" width="600" border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                 <tr>*/
/*                                     <td class="container" style="border-collapse: collapse; padding-bottom: 40px; padding-top: 40px;">*/
/*                                         <table class="table-full" align="center" width="600" border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                             <tr>*/
/*                                                 <td class="row" valign="top" style="border-collapse: collapse; padding-bottom: 0;">*/
/*                                                     <table class="table-full" width="290" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                         <tr>*/
/*                                                             <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 0; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 24px; font-weight: bold; line-height: 34.8px; text-align: left; padding-top: 0;" align="left" valign="top">Upcoming Events</td>*/
/*                                                         </tr>*/
/*                                                         <tr>*/
/*                                                             <td id="" class="element content description" width="" style="border-collapse: collapse; padding-bottom: 15px; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;" align="left" valign="top">*/
/*                                                                 View all events in the*/
/*                                                                 <a href="http://www.harker.org/page.cfm?p=2302" style="color: #00809E;">school calendar</a>*/
/*                                                                 .*/
/*                                                             </td>*/
/*                                                         </tr>*/
/*                                                         <tr>*/
/*                                                             <td id="" class="element calendar-list " width="" style="border-collapse: collapse; padding-bottom: 30px;" align="left" valign="top">*/
/*                                                                 <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element calendar-item " width="" style="border-collapse: collapse; padding-bottom: 30px; padding-top: 0;" align="left" valign="top">*/
/*                                                                             <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-date " width="68" style="border-collapse: collapse; padding-bottom: 0; padding-top: 0;" align="center" valign="top">*/
/*                                                                                         <table class="table-date" width="68" border="0" align="center" cellpadding="0" cellspacing="0" background="http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png" style="border-spacing: 0; margin: 0 auto; table-layout: auto; background-color: #e6e6e6; background-position: 0 0; background-repeat: no-repeat; height: 70px; background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png);">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="date" style="border-collapse: collapse; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; height: 70px; line-height: 24px; overflow: hidden; text-align: center; vertical-align: middle;">*/
/*                                                                                                     <div class="day-of-week" style="color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 9px; font-weight: normal; line-height: 14px;">MONDAY</div>*/
/*                                                                                                     <div class="month" style="color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 16px; font-weight: bold; line-height: 16px;">AUG</div>*/
/*                                                                                                     <div class="day" style="color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 32px; font-weight: bold; line-height: 28px;">15</div>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                     <td class="events" valign="top" style="border-collapse: collapse; padding-left: 20px;">*/
/*                                                                                         <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="border-collapse: collapse; padding-bottom: 0; padding-top: 0;" align="left" valign="top">*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;" align="left" valign="top">DECA Launch and Banquet</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;" align="left" valign="top">8:30 a.m. to 3 p.m. | Saratoga Campus</td>*/
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
/*                                                                         <td id="" class="element calendar-item " width="" style="border-collapse: collapse; padding-bottom: 30px;" align="left" valign="top">*/
/*                                                                             <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-date " width="68" style="border-collapse: collapse; padding-bottom: 0; padding-top: 0;" align="center" valign="top">*/
/*                                                                                         <table class="table-date" width="68" border="0" align="center" cellpadding="0" cellspacing="0" background="http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png" style="border-spacing: 0; margin: 0 auto; table-layout: auto; background-color: #e6e6e6; background-position: 0 0; background-repeat: no-repeat; height: 70px; background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png);">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="date" style="border-collapse: collapse; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; height: 70px; line-height: 24px; overflow: hidden; text-align: center; vertical-align: middle;">*/
/*                                                                                                     <div class="day-of-week" style="color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 9px; font-weight: normal; line-height: 14px;">TUESDAY</div>*/
/*                                                                                                     <div class="month" style="color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 16px; font-weight: bold; line-height: 16px;">AUG</div>*/
/*                                                                                                     <div class="day" style="color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 32px; font-weight: bold; line-height: 28px;">16</div>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                     <td class="events" valign="top" style="border-collapse: collapse; padding-left: 20px;">*/
/*                                                                                         <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="border-collapse: collapse; padding-bottom: 0; padding-top: 0;" align="left" valign="top">*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;" align="left" valign="top">DECA Launch and Banquet</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;" align="left" valign="top">8:30 a.m. to 8 p.m. | Saratoga Campus</td>*/
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
/*                                                                         <td id="" class="element calendar-item " width="" style="border-collapse: collapse; padding-bottom: 30px;" align="left" valign="top">*/
/*                                                                             <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-date " width="68" style="border-collapse: collapse; padding-bottom: 0; padding-top: 0;" align="center" valign="top">*/
/*                                                                                         <table class="table-date" width="68" border="0" align="center" cellpadding="0" cellspacing="0" background="http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png" style="border-spacing: 0; margin: 0 auto; table-layout: auto; background-color: #e6e6e6; background-position: 0 0; background-repeat: no-repeat; height: 70px; background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png);">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="date" style="border-collapse: collapse; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; height: 70px; line-height: 24px; overflow: hidden; text-align: center; vertical-align: middle;">*/
/*                                                                                                     <div class="day-of-week" style="color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 9px; font-weight: normal; line-height: 14px;">WEDNESDAY</div>*/
/*                                                                                                     <div class="month" style="color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 16px; font-weight: bold; line-height: 16px;">AUG</div>*/
/*                                                                                                     <div class="day" style="color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 32px; font-weight: bold; line-height: 28px;">17</div>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                     <td class="events" valign="top" style="border-collapse: collapse; padding-left: 20px;">*/
/*                                                                                         <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="border-collapse: collapse; padding-bottom: 15px; padding-top: 0;" align="left" valign="top">*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;" align="left" valign="top">Grade 3 Buddy Party</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;" align="left" valign="top">12 to 2 p.m. | Bucknall Campus</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="border-collapse: collapse; padding-bottom: 15px;" align="left" valign="top">*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;" align="left" valign="top">Grades 4-5 Buddy &amp; New Student Training</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;" align="left" valign="top">1 to 3 p.m. | Bucknall Campus</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="border-collapse: collapse; padding-bottom: 0;" align="left" valign="top">*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;" align="left" valign="top">Grade 9 Parent Orientation Meeting</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;" align="left" valign="top">*/
/*                                                                                                                 6 to 7 p.m. | Saratoga Gym*/
/*                                                                                                                 <span class="event-link" style="display: block;">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&amp;verbose=246853" style="color: #00809E;">View details</a>*/
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
/*                                                                         <td id="" class="element calendar-item " width="" style="border-collapse: collapse; padding-bottom: 30px;" align="left" valign="top">*/
/*                                                                             <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-date " width="68" style="border-collapse: collapse; padding-bottom: 0; padding-top: 0;" align="center" valign="top">*/
/*                                                                                         <table class="table-date" width="68" border="0" align="center" cellpadding="0" cellspacing="0" background="http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png" style="border-spacing: 0; margin: 0 auto; table-layout: auto; background-color: #e6e6e6; background-position: 0 0; background-repeat: no-repeat; height: 70px; background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png);">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="date" style="border-collapse: collapse; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; height: 70px; line-height: 24px; overflow: hidden; text-align: center; vertical-align: middle;">*/
/*                                                                                                     <div class="day-of-week" style="color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 9px; font-weight: normal; line-height: 14px;">THURSDAY</div>*/
/*                                                                                                     <div class="month" style="color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 16px; font-weight: bold; line-height: 16px;">AUG</div>*/
/*                                                                                                     <div class="day" style="color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 32px; font-weight: bold; line-height: 28px;">18</div>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                     <td class="events" valign="top" style="border-collapse: collapse; padding-left: 20px;">*/
/*                                                                                         <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="border-collapse: collapse; padding-bottom: 15px; padding-top: 0;" align="left" valign="top">*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 0; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;" align="left" valign="top">123rd Academic Year Begins (Grades 9-12)</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="border-collapse: collapse; padding-bottom: 15px;" align="left" valign="top">*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;" align="left" valign="top">Grade 11: Junior Class Trip-Rafting</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;" align="left" valign="top">*/
/*                                                                                                                 6:15 a.m. to 9 p.m. | Pick-up and drop off at Blackford Campus*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="border-collapse: collapse; padding-bottom: 15px;" align="left" valign="top">*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;" align="left" valign="top">Grade 10: Sophomore Class Trip-Ropes Course</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;" align="left" valign="top">*/
/*                                                                                                                 7:15 a.m. to 5:30 p.m. | Pick-up and drop off at Blackford Campus*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="border-collapse: collapse; padding-bottom: 0;" align="left" valign="top">*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;" align="left" valign="top">Grade 9: Freshmen Orientation/Field Day</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;" align="left" valign="top">10:15 a.m. to 3:15 p.m. | Saratoga Campus</td>*/
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
/*                                                                         <td id="" class="element calendar-item " width="" style="border-collapse: collapse; padding-bottom: 0;" align="left" valign="top">*/
/*                                                                             <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-date " width="68" style="border-collapse: collapse; padding-bottom: 0; padding-top: 0;" align="center" valign="top">*/
/*                                                                                         <table class="table-date" width="68" border="0" align="center" cellpadding="0" cellspacing="0" background="http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png" style="border-spacing: 0; margin: 0 auto; table-layout: auto; background-color: #e6e6e6; background-position: 0 0; background-repeat: no-repeat; height: 70px; background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png);">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="date" style="border-collapse: collapse; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; height: 70px; line-height: 24px; overflow: hidden; text-align: center; vertical-align: middle;">*/
/*                                                                                                     <div class="day-of-week" style="color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 9px; font-weight: normal; line-height: 14px;">FRIDAY</div>*/
/*                                                                                                     <div class="month" style="color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 16px; font-weight: bold; line-height: 16px;">AUG</div>*/
/*                                                                                                     <div class="day" style="color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; overflow: hidden; text-align: center; white-space: nowrap; width: 68px; font-size: 32px; font-weight: bold; line-height: 28px;">19</div>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                     <td class="events" valign="top" style="border-collapse: collapse; padding-left: 20px;">*/
/*                                                                                         <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="border-collapse: collapse; padding-bottom: 15px; padding-top: 0;" align="left" valign="top">*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 0; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;" align="left" valign="top">123rd Academic Year Begins (Grades 6-8)</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="border-collapse: collapse; padding-bottom: 15px;" align="left" valign="top">*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;" align="left" valign="top">Middle School Parent/Student Welcome Breakfast</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;" align="left" valign="top">8 to 9:30 a.m. | Blackford Gym</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="border-collapse: collapse; padding-bottom: 15px;" align="left" valign="top">*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;" align="left" valign="top">Matriculation &amp; Photo Day Grade 9-12</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;" align="left" valign="top">9 a.m. to 3 p.m. | Saratoga Quad</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="border-collapse: collapse; padding-bottom: 15px;" align="left" valign="top">*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;" align="left" valign="top">Middle School Parent Orientation</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;" align="left" valign="top">1:30 to 3:30 p.m. | Blackford Gym</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="border-collapse: collapse; padding-bottom: 15px;" align="left" valign="top">*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;" align="left" valign="top">Middle School Performing Arts Kick-off</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;" align="left" valign="top">3:30 p.m. | Blackford Gym</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="border-collapse: collapse; padding-bottom: 0;" align="left" valign="top">*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 3px; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold; line-height: 21px; text-align: left; padding-top: 0;" align="left" valign="top">*/
/*                                                                                                                 Lower &amp; Middle School Q1 BEST &amp; Athletic Sign-Ups End*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;" align="left" valign="top">5 p.m.</td>*/
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
/*                                                             <td id="" class="element element-list home-games" width="" style="border-collapse: collapse; padding-bottom: 0;" align="left" valign="top">*/
/*                                                                 <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 0; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 24px; font-weight: bold; line-height: 34.8px; text-align: left; padding-top: 0;" align="left" valign="top">Upcoming Home Games</td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element list list-unstyled " width="100%" style="border-collapse: collapse; padding-bottom: 0;" align="left" valign="top">*/
/*                                                                             <table class="table-list" align="left" width="100%" border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                 <tr>*/
/*                                                                                     <td class="list-item" style="border-collapse: collapse; border-bottom: 1px solid #dddddd; padding-bottom: 10px; padding-top: 10px; border: none;">*/
/*                                                                                         <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                             <tr>*/
/*                                                                                                 <!-- unstyled -->*/
/*                                                                                                 <td class="list-item-text" valign="top" style="border-collapse: collapse; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; line-height: 26px; text-align: left; padding-left: 0;">*/
/*                                                                                                     <a href="http://www.harker.org/page.cfm?p=4012" style="color: #00809E;">Upper School Home Games</a>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td class="list-item" style="border-collapse: collapse; border-bottom: 1px solid #dddddd; padding-bottom: 10px; padding-top: 10px; border: none;">*/
/*                                                                                         <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                             <tr>*/
/*                                                                                                 <!-- unstyled -->*/
/*                                                                                                 <td class="list-item-text" valign="top" style="border-collapse: collapse; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; line-height: 26px; text-align: left; padding-left: 0;">*/
/*                                                                                                     <a href="http://www.harker.org/page.cfm?p=4014" style="color: #00809E;">Middle School Home Games</a>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td class="list-item" style="border-collapse: collapse; border-bottom: 1px solid #dddddd; padding-bottom: 10px; padding-top: 10px; border: none;">*/
/*                                                                                         <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                             <tr>*/
/*                                                                                                 <!-- unstyled -->*/
/*                                                                                                 <td class="list-item-text" valign="top" style="border-collapse: collapse; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; line-height: 26px; text-align: left; padding-left: 0;">*/
/*                                                                                                     <a href="http://www.harker.org/page.cfm?p=4015" style="color: #00809E;">Lower School Home Games</a>*/
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
/*                                                     <table width="1" border="0" cellpadding="0" cellspacing="0" align="left" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                         <tr>*/
/*                                                             <td height="40" style="border-collapse: collapse; font-size: 0; line-height: 0;">*/
/*                                                                 <p style="padding-left: 20px;"></p>*/
/*                                                             </td>*/
/*                                                         </tr>*/
/*                                                     </table>*/
/*                                                     <!--[if gte mso 12]> </td>*/
/*                                                 <td class="row" valign="top">*/
/*                                                     <![endif]-->*/
/*                                                     <table class="table-full" width="290" border="0" align="right" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                         <tr>*/
/*                                                             <td id="" class="element element-list announcements" width="" style="border-collapse: collapse; padding-bottom: 30px; padding-top: 0;" align="left" valign="top">*/
/*                                                                 <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 0; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 24px; font-weight: bold; line-height: 34.8px; text-align: left; padding-top: 0;" align="left" valign="top">Announcements</td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element content description" width="" style="border-collapse: collapse; padding-bottom: 15px; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;" align="left" valign="top">*/
/*                                                                             View all announcements in*/
/*                                                                             <a href="http://www.harker.org/page.cfm?p=3566" style="color: #00809E;">our archive</a>*/
/*                                                                             .*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element article " width="100%" style="border-collapse: collapse; padding-bottom: 15px;" align="left" valign="top">*/
/*                                                                             <table class="table-article" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 0; color: #555; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; font-weight: bold; line-height: 24px; text-align: left; padding-top: 0;" align="left" valign="top">*/
/*                                                                                         <a href="http://www.harker.org/page.cfm?p=3566&amp;newsid=1879" style="color: #00809E; text-decoration: none;">*/
/*                                                                                             Educator and Clinical Psychologist Chris Thurber Appearing on Sept. 11*/
/*                                                                                         </a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element article " width="100%" style="border-collapse: collapse; padding-bottom: 15px;" align="left" valign="top">*/
/*                                                                             <table class="table-article" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 0; color: #555; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; font-weight: bold; line-height: 24px; text-align: left; padding-top: 0;" align="left" valign="top">*/
/*                                                                                         <a href="http://www.harker.org/page.cfm?p=3566&amp;newsid=1880" style="color: #00809E; text-decoration: none;">IMPORTANT - Lower School Fall Sports Information</a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element article " width="100%" style="border-collapse: collapse; padding-bottom: 0;" align="left" valign="top">*/
/*                                                                             <table class="table-article" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 0; color: #555; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; font-weight: bold; line-height: 24px; text-align: left; padding-top: 0;" align="left" valign="top">*/
/*                                                                                         <a href="http://www.harker.org/page.cfm?p=3566&amp;newsid=1881" style="color: #00809E; text-decoration: none;">Reminder: After School Registration Now Open</a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                 </table>*/
/*                                                             </td>*/
/*                                                         </tr>*/
/*                                                         <tr>*/
/*                                                             <td id="" class="element element-list news" width="" style="border-collapse: collapse; padding-bottom: 30px;" align="left" valign="top">*/
/*                                                                 <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 0; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 24px; font-weight: bold; line-height: 34.8px; text-align: left; padding-top: 0;" align="left" valign="top">News</td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element content description" width="" style="border-collapse: collapse; padding-bottom: 15px; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;" align="left" valign="top">*/
/*                                                                             View all stories at*/
/*                                                                             <a href="http://news.harker.org" style="color: #00809E;">Harker News</a>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element article " width="100%" style="border-collapse: collapse; padding-bottom: 20px;" align="left" valign="top">*/
/*                                                                             <table class="table-article" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 10px; color: #555; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; font-weight: bold; line-height: 24px; text-align: left; padding-top: 0;" align="left" valign="top">*/
/*                                                                                         <a href="http://news.harker.org/senior-named-regional-finalist-in-google-science-fair-for-eye-diagnostic-app/" style="color: #00809E; text-decoration: none;">*/
/*                                                                                             [UPDATED] Senior Named Regional Finalist in Google Science Fair for Eye Diagnostic App*/
/*                                                                                         </a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element content " width="" style="border-collapse: collapse; padding-bottom: 10px; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;" align="left" valign="top">*/
/*                                                                                         Rishab Gargeya, rising senior and Saratoga resident, was recently named a regional finalist in the international Google Science Fair 2016!*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-button " width="100%" style="border-collapse: collapse; padding-bottom: 0;" align="left" valign="top">*/
/*                                                                                         <table class="table-button table-button-text" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto; background-color: transparent;">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="button" valign="middle" align="center" style="border-collapse: collapse; color: #00809E; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; line-height: 26px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; padding-top: 10px; text-align: left; vertical-align: middle; padding: 0;">*/
/*                                                                                                     <a href="http://news.harker.org/senior-named-regional-finalist-in-google-science-fair-for-eye-diagnostic-app/" style="color: #00809E; display: block; text-decoration: underline;">Read More</a>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element article " width="100%" style="border-collapse: collapse; padding-bottom: 20px;" align="left" valign="top">*/
/*                                                                             <table class="table-article" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 10px; color: #555; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; font-weight: bold; line-height: 24px; text-align: left; padding-top: 0;" align="left" valign="top">*/
/*                                                                                         <a href="http://news.harker.org/iyer-takes-national-title-at-junior-olympic-national-championships/" style="color: #00809E; text-decoration: none;">*/
/*                                                                                             Iyer Takes National Title at Junior Olympic National Championships*/
/*                                                                                         </a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element content " width="" style="border-collapse: collapse; padding-bottom: 10px; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;" align="left" valign="top">*/
/*                                                                                         Rising senior Niki Iyer won the women's age 17-18 3000-meter race in 10:05.08 at the USATF National Junior Olympic Track &amp; Field Championships at Sacramento State University in late July!*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-button " width="100%" style="border-collapse: collapse; padding-bottom: 0;" align="left" valign="top">*/
/*                                                                                         <table class="table-button table-button-text" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto; background-color: transparent;">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="button" valign="middle" align="center" style="border-collapse: collapse; color: #00809E; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; line-height: 26px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; padding-top: 10px; text-align: left; vertical-align: middle; padding: 0;">*/
/*                                                                                                     <a href="http://news.harker.org/iyer-takes-national-title-at-junior-olympic-national-championships/" style="color: #00809E; display: block; text-decoration: underline;">Read More</a>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element article " width="100%" style="border-collapse: collapse; padding-bottom: 0;" align="left" valign="top">*/
/*                                                                             <table class="table-article" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 10px; color: #555; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; font-weight: bold; line-height: 24px; text-align: left; padding-top: 0;" align="left" valign="top">*/
/*                                                                                         <a href="http://news.harker.org/students-visit-japan-bond-with-buddies-and-visit-cultural-landmarks/" style="color: #00809E; text-decoration: none;">*/
/*                                                                                             Students Visit Japan, Bond with Buddies and Tour Cultural Landmarks*/
/*                                                                                         </a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element content " width="" style="border-collapse: collapse; padding-bottom: 10px; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;" align="left" valign="top">*/
/*                                                                                         In mid-May, a group of Harker sixth graders traveled to Japan for the yearly visit to Tamagawa Academy. In addition to visiting their buddies, the trip gave students the opportunity to see many of Japan's most famous landmarks and learn about the country's rich culture.*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-button " width="100%" style="border-collapse: collapse; padding-bottom: 0;" align="left" valign="top">*/
/*                                                                                         <table class="table-button table-button-text" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto; background-color: transparent;">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="button" valign="middle" align="center" style="border-collapse: collapse; color: #00809E; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; line-height: 26px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; padding-top: 10px; text-align: left; vertical-align: middle; padding: 0;">*/
/*                                                                                                     <a href="http://news.harker.org/students-visit-japan-bond-with-buddies-and-visit-cultural-landmarks/" style="color: #00809E; display: block; text-decoration: underline;">Read More</a>*/
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
/*                                                             <td id="" class="element element-list photos" width="" style="border-collapse: collapse; padding-bottom: 0;" align="left" valign="top">*/
/*                                                                 <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 0; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 24px; font-weight: bold; line-height: 34.8px; text-align: left; padding-top: 0;" align="left" valign="top">Photos</td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element content description" width="" style="border-collapse: collapse; padding-bottom: 15px; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;" align="left" valign="top">*/
/*                                                                             View more photos in the*/
/*                                                                             <a href="http://9alskiel9sn2.photoshelter.com/" style="color: #00809E;">photo archive</a>*/
/*                                                                             .*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element article " width="100%" style="border-collapse: collapse; padding-bottom: 0;" align="left" valign="top">*/
/*                                                                             <table class="table-article" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-img " width="290" style="border-collapse: collapse; padding-bottom: 15px; line-height: 0px; padding-top: 0;" align="center" valign="top">*/
/*                                                                                         <a href="http://9alskiel9sn2.photoshelter.com/gallery/2016-08-OOC-Playdate-in-the-Park/G00005hzhf4OclQU/C0000aRwpt5wHde4" style="color: #00809E;">*/
/*                                                                                             <img class="img-full" width="290" height="" style="display: block !important; border: 0px; font-size: 0px; line-height: 0px;" src="http://skylark.harker.org/email-builder/v2/emails/eweekly/08-15-2016/assets/img//2016-07_OOC_Playdate_LL_025.jpg" alt="Playdate in the Park"></a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 10px; color: #555; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; font-weight: bold; line-height: 24px; text-align: left;" align="left" valign="top">*/
/*                                                                                         <a href="http://9alskiel9sn2.photoshelter.com/gallery/2016-08-OOC-Playdate-in-the-Park/G00005hzhf4OclQU/C0000aRwpt5wHde4" style="color: #00809E; text-decoration: none;">Playdate in the Park</a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element content " width="" style="border-collapse: collapse; padding-bottom: 10px; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px; line-height: 18px; text-align: left;" align="left" valign="top">*/
/*                                                                                         View more photos in our*/
/*                                                                                         <a href="http://9alskiel9sn2.photoshelter.com/gallery-collection/2016-Summer-Programs/C0000Des.cpSOHLc" style="color: #00809E;">Summer galleries</a>*/
/*                                                                                         . You may also access the photos from the parent portal.*/
/*                                                                                         <br>*/
/*                                                                                         <br> <b>Note:</b>*/
/*                                                                                         To download free photos or order prints, you must have a PhotoShelter account.*/
/*                                                                                         <a href="https://9alskiel9sn2.photoshelter.com/signup/signup/free" style="color: #00809E;">Sign up for free</a>*/
/*                                                                                         .*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-button " width="100%" style="border-collapse: collapse; padding-bottom: 0;" align="left" valign="top">*/
/*                                                                                         <table class="table-button table-button-outline" width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto; background-color: transparent;">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="button" valign="middle" align="center" style="border-collapse: collapse; color: #00809E; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; line-height: 26px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; padding-top: 10px; text-align: center; vertical-align: middle; border: 1px solid #00809e; font-weight: bold;">*/
/*                                                                                                     <a href="http://9alskiel9sn2.photoshelter.com/gallery/2016-08-OOC-Playdate-in-the-Park/G00005hzhf4OclQU/C0000aRwpt5wHde4" style="color: #00809E; display: block; text-decoration: none; font-weight: bold;">View Photo Gallery</a>*/
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
/*                 <table id="" class="module module-footer module-2 module-even " style="border-spacing: 0; margin: 0 auto; table-layout: fixed;" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">*/
/*                     <tr>*/
/*                         <td class="background" align="center" background="" style="border-collapse: collapse; background-position: top center; background-size: cover; background-color: #ecf0f1; background-image: url();">*/
/*                             <table align="center" class="table-inner" width="600" border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                 <tr>*/
/*                                     <td class="container" style="border-collapse: collapse; padding-bottom: 40px; padding-top: 40px;">*/
/*                                         <table class="table-full" align="center" width="600" border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                             <tr>*/
/*                                                 <td class="row" valign="top" style="border-collapse: collapse; padding-bottom: 0;">*/
/*                                                     <table class="table-full" width="290" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                         <tr>*/
/*                                                             <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 0; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 24px; font-weight: bold; line-height: 34.8px; text-align: left; padding-top: 0;" align="left" valign="top">Social Media</td>*/
/*                                                         </tr>*/
/*                                                         <tr>*/
/*                                                             <td id="" class="element list list-unstyled " width="100%" style="border-collapse: collapse; padding-bottom: 0;" align="left" valign="top">*/
/*                                                                 <table class="table-list" align="left" width="100%" border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                     <tr>*/
/*                                                                         <td class="list-item" style="border-collapse: collapse; border-bottom: 1px solid #dddddd; padding-bottom: 10px; padding-top: 10px; border: none;">*/
/*                                                                             <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                 <tr>*/
/*                                                                                     <!-- unstyled -->*/
/*                                                                                     <td class="list-item-text" valign="top" style="border-collapse: collapse; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; line-height: 26px; text-align: left; padding-left: 0;">*/
/*                                                                                         <a href="http://facebook.com/harkerschool" style="color: #00809E;">facebook.com/harkerschool</a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td class="list-item" style="border-collapse: collapse; border-bottom: 1px solid #dddddd; padding-bottom: 10px; padding-top: 10px; border: none;">*/
/*                                                                             <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                 <tr>*/
/*                                                                                     <!-- unstyled -->*/
/*                                                                                     <td class="list-item-text" valign="top" style="border-collapse: collapse; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; line-height: 26px; text-align: left; padding-left: 0;">*/
/*                                                                                         <a href="http://twitter.com/harkerschool" style="color: #00809E;">twitter.com/harkerschool</a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                         </td>*/
/*                                                                     </tr>*/
/*                                                                     <tr>*/
/*                                                                         <td class="list-item" style="border-collapse: collapse; border-bottom: 1px solid #dddddd; padding-bottom: 10px; padding-top: 10px; border: none;">*/
/*                                                                             <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                                                 <tr>*/
/*                                                                                     <!-- unstyled -->*/
/*                                                                                     <td class="list-item-text" valign="top" style="border-collapse: collapse; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; line-height: 26px; text-align: left; padding-left: 0;">*/
/*                                                                                         <a href="http://instagram.com/harkerschool" style="color: #00809E;">instagram.com/harkerschool</a>*/
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
/*                                                     <table width="1" border="0" cellpadding="0" cellspacing="0" align="left" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                         <tr>*/
/*                                                             <td height="40" style="border-collapse: collapse; font-size: 0; line-height: 0;">*/
/*                                                                 <p style="padding-left: 20px;"></p>*/
/*                                                             </td>*/
/*                                                         </tr>*/
/*                                                     </table>*/
/*                                                     <!--[if gte mso 12]> </td>*/
/*                                                 <td class="row" valign="top">*/
/*                                                     <![endif]-->*/
/*                                                     <table class="table-full" width="290" border="0" align="right" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                         <tr>*/
/*                                                             <td id="" class="element header " width="" style="border-collapse: collapse; padding-bottom: 0; color: #3B3B3B; font-family: 'Open Sans', Arial, sans-serif; font-size: 24px; font-weight: bold; line-height: 34.8px; text-align: left; padding-top: 0;" align="left" valign="top">Contact Us</td>*/
/*                                                         </tr>*/
/*                                                         <tr>*/
/*                                                             <td id="" class="element content " width="" style="border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; line-height: 26px; text-align: left;" align="left" valign="top">*/
/*                                                                 500 Saratoga Ave., San Jose 95129*/
/*                                                                 <br>*/
/*                                                                 <a href="mailto:communications@harker.org" style="color: #00809E;">communications@harker.org</a>*/
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
/*                 <table id="" class="module module-bottombar module-3 module-odd " style="border-spacing: 0; margin: 0 auto; table-layout: fixed;" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">*/
/*                     <tr>*/
/*                         <td class="background" align="center" background="" style="border-collapse: collapse; background-position: top center; background-size: cover; background-color: #e2e6e7; background-image: url();">*/
/*                             <table align="center" class="table-inner" width="600" border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                 <tr>*/
/*                                     <td class="container" style="border-collapse: collapse; padding-bottom: 15px; padding-top: 15px;">*/
/*                                         <table class="table-full" align="center" width="600" border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                             <tr>*/
/*                                                 <td class="row" valign="top" style="border-collapse: collapse; padding-bottom: 0;">*/
/*                                                     <table class="table-full" width="600" border="0" align="left" cellpadding="0" cellspacing="0" style="border-spacing: 0; margin: 0 auto; table-layout: auto;">*/
/*                                                         <tr>*/
/*                                                             <td id="" class="element content " width="" style="border-collapse: collapse; padding-bottom: 0; color: #676767; font-family: 'Open Sans', Arial, sans-serif; font-size: 16px; line-height: 26px; text-align: center; padding-top: 0;" align="left" valign="top">Copyright © The Harker School 2016, All rights reserved.</td>*/
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
