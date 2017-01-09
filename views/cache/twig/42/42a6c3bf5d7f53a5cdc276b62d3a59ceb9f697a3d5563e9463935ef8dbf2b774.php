<?php

/* @email/email.html */
class __TwigTemplate_dbec012771dc5b08afede164aafbc2cbe2006a14f02bc83e6e32a257281df66a extends Twig_Template
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
            border: 0px;
        }

        h2, h3, h4 {
            font-family: 'Open Sans', Arial, sans-serif; 
            color: #3B3B3B; 
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
            padding-bottom: 15px;
        }

        .subtitle {
            font-family: 'Open Sans', Arial, sans-serif; 
            font-size: 16px;
            line-height: 26px; 
            letter-spacing: 2px;
            color: #676767;
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
        }

        .content {
            font-family: 'Open Sans', Arial, sans-serif; 
            font-size: 16px; 
            line-height: 26px;
            color: #676767; 
        }

        .content-intro {
            font-family: 'Open Sans', Arial, sans-serif;
            font-size: 23px;
            font-weight: 100;
            line-height: 36px;
            color: #333;
        }

        .table-button {
            background-color: #00809E;
        }

        .button {
            font-family: 'Open Sans', Arial, sans-serif;
            font-size: 16px;
            line-height: normal;
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
            padding: 0;
            text-align: left;
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
            padding-top: 8px;
            padding-bottom: 8px;
            border-right: 4px solid #033e2f; 
            border-left: 4px solid #033e2f; 
            background-color: #05533E;
        }

        .module-topbar-icons .topbar-links .row {
            padding-top: 13px;
            padding-bottom: 13px;
        }

        .module-topbar-text .topbar-links .row {
            padding-top: 12px;
            padding-bottom: 12px;
        }

        .module-topbar .topbar-links img {
            display: block;
        }

        .module-topbar .topbar-links .content,
        .module-topbar .topbar-links .content a {
            color: #ffffff;
            font-size: 14px;
            line-height: normal;
            text-decoration: none;
        }

        .module-topbar .topbar-links .content {
            padding-left: 8px;
            padding-right: 8px;
        }

        .article, .article-feature {
            padding-bottom: 40px;
        }

        .article .img,
        .article-feature img {
            width: 100%;
        }

        .article .header,
        .article-feature .header {
            color: #555; 
            font-size: 16px; 
            line-height: 24px;
            padding-bottom: 10px;
        }

        .article .content,
        .article-feature .content {
            font-size: 12px; 
            line-height: 18px;
            padding-bottom: 10px;
        }

        .article .button,
        .article-feature .button {
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
            background-color: #dddddd;
        }

        .module-footer .list-item {
            border: none;
        }

        .module-bottombar .background {
            background-color: #05533E;
        }

        .module-bottombar .container {
            padding-top: 15px;
            padding-bottom: 15px;
            color: #ffffff;
        }

        .module-bottombar .content {
            text-align: center;
            color: #ffffff;
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
            .module-topbar .container .logo-container {
                border-right-width: 0 !important;
                border-left-width: 0 !important;
                border-bottom: 1px solid #033e2f;
            }
            .topbar-links .content { text-align: center; }
            
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
            .module-topbar .container .logo-container {
                border-right-width: 0 !important;
                border-left-width: 0 !important;;
                border-bottom: 1px solid #033e2f;
            }
            .topbar-links .content { text-align: center; }
            
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

        .announcements .article {
            padding-bottom: 10px;
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
                <table id=\"\" class=\"module module-topbar module-topbar-icons module-0 module-even \" style=\"\" align=\"center\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
                    <tr>
                        <td class=\"background\" align=\"center\" background=\"\" style=\"background-image: url() \">
                            <table align=\"center\" class=\"table-inner\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                <tr>
                                    <td class=\"container\" style=\"\">
                                        <table widht=\"100%\" align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                            <tr>
                                                <td id=\"\" class=\"element element-grid \" width=\"600\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                    <table class=\"table-full\" align=\"center\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                        <tr>
                                                            <td class=\"row\" valign=\"top\">
                                                                <!--[if gte mso 12]>
                                                                <table align=\"center\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                    <tr>
                                                                        <![endif]-->
                                                                        <!--[if gte mso 12]>
                                                                        <td valign=\"top\" width=\"231\">
                                                                            <![endif]-->
                                                                            <table class=\"table-full\" width=\"231\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-img logo-container\" width=\"183\" height=\"32\" style=\"\" align=\"center\" valign=\"top\" >
                                                                                        <img class=\"\" width=\"183\" height=\"32\" style=\"\" src=\"http://skylark.harker.org/email-builder/v2/assets/img/harker-logo.png\" alt=\"Harker Logo\"></td>
                                                                                </tr>
                                                                            </table>
                                                                            <!--[if gte mso 12]> </td>
                                                                    </tr>
                                                                </table>
                                                                <![endif]--> </td>
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
                                        <table widht=\"100%\" align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                            <tr>
                                                <td id=\"\" class=\"element element-grid \" width=\"600\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                    <table class=\"table-full\" align=\"center\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                        <tr>
                                                            <td class=\"row\" valign=\"top\">
                                                                <!--[if gte mso 12]>
                                                                <table align=\"center\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                    <tr>
                                                                        <![endif]-->
                                                                        <!--[if gte mso 12]>
                                                                        <td valign=\"top\" width=\"290\">
                                                                            <![endif]-->
                                                                            <table class=\"table-full\" width=\"290\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Upcoming Events</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element content description\" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        View all events in the
                                                                                        <a href=\"http://www.harker.org/page.cfm?p=2302\">school calendar</a>
                                                                                        .
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element calendar-list \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element calendar-item \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element element-date \" width=\"68\" height=\"\" style=\"\" align=\"center\" valign=\"top\" >
                                                                                                                <table class=\"table-date\" width=\"68\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" background=\"http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png\" style=\"background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) \">
                                                                                                                    <tr>
                                                                                                                        <td class=\"date\">
                                                                                                                            <div class=\"day-of-week\">FRIDAY</div>
                                                                                                                            <div class=\"month\">SEP</div>
                                                                                                                            <div class=\"day\">30</div>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </table>
                                                                                                            </td>
                                                                                                            <td class=\"events\" valign=\"top\">
                                                                                                                <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Fall Break Day #1</td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Middle School JCL Induction</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >10:40 a.m. to 1 p.m. | Laser Quest San Jose</td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Nichols Debate Tournament</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >3:30 to 9 p.m. | Saratoga Campus</td>
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
                                                                                                <td id=\"\" class=\"element calendar-item \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element element-date \" width=\"68\" height=\"\" style=\"\" align=\"center\" valign=\"top\" >
                                                                                                                <table class=\"table-date\" width=\"68\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" background=\"http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png\" style=\"background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) \">
                                                                                                                    <tr>
                                                                                                                        <td class=\"date\">
                                                                                                                            <div class=\"day-of-week\">SATURDAY</div>
                                                                                                                            <div class=\"month\">OCT</div>
                                                                                                                            <div class=\"day\">1</div>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </table>
                                                                                                            </td>
                                                                                                            <td class=\"events\" valign=\"top\">
                                                                                                                <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Nichols Debate Tournament</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >7:30 a.m. to 9 p.m. | Saratoga Campus</td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Upper School Community Service Opportunity</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                                        8:10 to 11:45 a.m. | The Historic Orchard in San Jose (depart from Saratoga campus)
                                                                                                                                        <span class=\"event-link\">
                                                                                                                                            <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=271211\">View details</a>
                                                                                                                                        </span>
                                                                                                                                    </td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Grade 7 &amp; 8 Flag Football Tournament</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >9 a.m. | Saratoga Davis Field</td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Picnic Preparations &amp; Set-Up</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >1 to 5 p.m. | Blackford Campus</td>
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
                                                                                                <td id=\"\" class=\"element calendar-item \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element element-date \" width=\"68\" height=\"\" style=\"\" align=\"center\" valign=\"top\" >
                                                                                                                <table class=\"table-date\" width=\"68\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" background=\"http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png\" style=\"background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) \">
                                                                                                                    <tr>
                                                                                                                        <td class=\"date\">
                                                                                                                            <div class=\"day-of-week\">SUNDAY</div>
                                                                                                                            <div class=\"month\">OCT</div>
                                                                                                                            <div class=\"day\">2</div>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </table>
                                                                                                            </td>
                                                                                                            <td class=\"events\" valign=\"top\">
                                                                                                                <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Nichols Debate Tournament</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >7:30 a.m. to 9 p.m. | Saratoga Campus</td>
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
                                                                                                <td id=\"\" class=\"element calendar-item \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element element-date \" width=\"68\" height=\"\" style=\"\" align=\"center\" valign=\"top\" >
                                                                                                                <table class=\"table-date\" width=\"68\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" background=\"http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png\" style=\"background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) \">
                                                                                                                    <tr>
                                                                                                                        <td class=\"date\">
                                                                                                                            <div class=\"day-of-week\">MONDAY</div>
                                                                                                                            <div class=\"month\">OCT</div>
                                                                                                                            <div class=\"day\">3</div>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </table>
                                                                                                            </td>
                                                                                                            <td class=\"events\" valign=\"top\">
                                                                                                                <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Middle School Special Schedule</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                                        <span class=\"event-link\">
                                                                                                                                            <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=252852\">View details</a>
                                                                                                                                        </span>
                                                                                                                                    </td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Upper School Schedule A - Sophomore Class Meeting</td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Student Directed Showcase Auditions</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Lunch | Ms. Lang-Ree&#039;s Room</td>
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
                                                                                                <td id=\"\" class=\"element calendar-item \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element element-date \" width=\"68\" height=\"\" style=\"\" align=\"center\" valign=\"top\" >
                                                                                                                <table class=\"table-date\" width=\"68\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" background=\"http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png\" style=\"background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) \">
                                                                                                                    <tr>
                                                                                                                        <td class=\"date\">
                                                                                                                            <div class=\"day-of-week\">TUESDAY</div>
                                                                                                                            <div class=\"month\">OCT</div>
                                                                                                                            <div class=\"day\">4</div>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </table>
                                                                                                            </td>
                                                                                                            <td class=\"events\" valign=\"top\">
                                                                                                                <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Middle School Advisory</td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                                        Middle School 2016 Picnic T-Shirt w/ Free Dress Pants, Shorts, or Skirts
                                                                                                                                    </td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Upper School Schedule B</td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >K-5 Special Dress Day: Picnic T-Shirts</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                                        <span class=\"event-link\">
                                                                                                                                            <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=253273\">View details</a>
                                                                                                                                        </span>
                                                                                                                                    </td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Upper School Parent Coffee Picnic Prep</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >8:15 to 10:15 a.m. | Blackford Multipurpose Room (MPR)</td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Student Directed Showcase Auditions</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Lunch | Ms. Lang-Ree&#039;s Room</td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >National Honor Society Induction</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >6 to 8 p.m. | Saratoga Nichols Hall Auditorium</td>
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
                                                                                                <td id=\"\" class=\"element calendar-item \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element element-date \" width=\"68\" height=\"\" style=\"\" align=\"center\" valign=\"top\" >
                                                                                                                <table class=\"table-date\" width=\"68\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" background=\"http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png\" style=\"background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) \">
                                                                                                                    <tr>
                                                                                                                        <td class=\"date\">
                                                                                                                            <div class=\"day-of-week\">WEDNESDAY</div>
                                                                                                                            <div class=\"month\">OCT</div>
                                                                                                                            <div class=\"day\">5</div>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </table>
                                                                                                            </td>
                                                                                                            <td class=\"events\" valign=\"top\">
                                                                                                                <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Middle School Wednesday</td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Upper School Schedule C - Freshman Class Meeting</td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Preschool and Lower School Parent Coffee Picnic Prep</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >8 to 10 a.m. | Blackford Multipurpose Room (MPR)</td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Student Directed Showcase Auditions</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Lunch | Ms. Lang-Ree&#039;s Room</td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                                        Lower &amp; Middle School Q2 BEST &amp; Athletic Sign-Ups Begin
                                                                                                                                    </td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >12 p.m.</td>
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
                                                                                                <td id=\"\" class=\"element calendar-item \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element element-date \" width=\"68\" height=\"\" style=\"\" align=\"center\" valign=\"top\" >
                                                                                                                <table class=\"table-date\" width=\"68\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" background=\"http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png\" style=\"background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) \">
                                                                                                                    <tr>
                                                                                                                        <td class=\"date\">
                                                                                                                            <div class=\"day-of-week\">THURSDAY</div>
                                                                                                                            <div class=\"month\">OCT</div>
                                                                                                                            <div class=\"day\">6</div>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </table>
                                                                                                            </td>
                                                                                                            <td class=\"events\" valign=\"top\">
                                                                                                                <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Middle School Advisory</td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Upper School Special Schedule D</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                                        <span class=\"event-link\">
                                                                                                                                            <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=252518\">View details</a>
                                                                                                                                        </span>
                                                                                                                                    </td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Middle School Parent Coffee Picnic Prep</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                                        8 to 10 a.m. | Blackford Multipurpose Room (MPR) - after drop off
                                                                                                                                    </td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Grade 2 Q&amp;A</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >8:15 to 9:15 a.m. | Bucknall Library</td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Grade 5 Eagle Buddies visit 12th grade</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                                        10:50 a.m. to 1:25 p.m. | Saratoga Campus
                                                                                                                                        <span class=\"event-link\">
                                                                                                                                            <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=253314\">View details</a>
                                                                                                                                        </span>
                                                                                                                                    </td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >10th Grade Eagle Buddies visit 3rd Grade Buddies</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                                        11:10 a.m. to 1:25 p.m. | Bucknall Campus
                                                                                                                                        <span class=\"event-link\">
                                                                                                                                            <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=253317\">View details</a>
                                                                                                                                        </span>
                                                                                                                                    </td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Apprentice Workshop</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >11:15 a.m. to 12:40 p.m. | Saratoga Rehearsal Room</td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Student Directed Showcase Auditions</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >3 to 6:30 p.m. | Ms. Lang-Ree&#039;s Room</td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Grade 9 Q&amp;A</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >5:30 to 6:30 p.m. | Blackford, Multi Purpose Room</td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Grade 12 College Financial Aid Night</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >7 to 8 p.m. | Saratoga Nichols Hall Auditorium</td>
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
                                                                                                <td id=\"\" class=\"element calendar-item \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element element-date \" width=\"68\" height=\"\" style=\"\" align=\"center\" valign=\"top\" >
                                                                                                                <table class=\"table-date\" width=\"68\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" background=\"http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png\" style=\"background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) \">
                                                                                                                    <tr>
                                                                                                                        <td class=\"date\">
                                                                                                                            <div class=\"day-of-week\">FRIDAY</div>
                                                                                                                            <div class=\"month\">OCT</div>
                                                                                                                            <div class=\"day\">7</div>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </table>
                                                                                                            </td>
                                                                                                            <td class=\"events\" valign=\"top\">
                                                                                                                <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Middle School Advisory</td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Middle School Fall Sports End</td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Upper School Schedule A - Senior Class Meeting</td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >K-5 Free Dress</td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Harvest Festival Preparations Preschool-12</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >8:15 to 10:15 a.m. | Blackford Volunteer Room #42</td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Picnic Student Tech</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >11 a.m. to 3:30 p.m. | Blackford Campus</td>
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Grade 1 Mom&#039;s Night Out</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                                        7 p.m. | Wine Bar 107 @ Testarossa Winery, 300 College Ave., Los Gatos | Parent-Organized Event
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
                                                                                                <td id=\"\" class=\"element calendar-item \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element element-date \" width=\"68\" height=\"\" style=\"\" align=\"center\" valign=\"top\" >
                                                                                                                <table class=\"table-date\" width=\"68\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" background=\"http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png\" style=\"background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) \">
                                                                                                                    <tr>
                                                                                                                        <td class=\"date\">
                                                                                                                            <div class=\"day-of-week\">SATURDAY</div>
                                                                                                                            <div class=\"month\">OCT</div>
                                                                                                                            <div class=\"day\">8</div>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </table>
                                                                                                            </td>
                                                                                                            <td class=\"events\" valign=\"top\">
                                                                                                                <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Picnic Prep &amp; Set-Up</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >10 a.m. to 6 p.m. | Blackford Campus</td>
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
                                                                                                <td id=\"\" class=\"element calendar-item \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element element-date \" width=\"68\" height=\"\" style=\"\" align=\"center\" valign=\"top\" >
                                                                                                                <table class=\"table-date\" width=\"68\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" background=\"http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png\" style=\"background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) \">
                                                                                                                    <tr>
                                                                                                                        <td class=\"date\">
                                                                                                                            <div class=\"day-of-week\">SUNDAY</div>
                                                                                                                            <div class=\"month\">OCT</div>
                                                                                                                            <div class=\"day\">9</div>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </table>
                                                                                                            </td>
                                                                                                            <td class=\"events\" valign=\"top\">
                                                                                                                <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                    <tr>
                                                                                                                        <td id=\"\" class=\"element event \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                            <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >66th Family and Alumni Picnic</td>
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >10 a.m. to 3:30 p.m. | Blackford Campus</td>
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
                                                                                    <td id=\"\" class=\"element element-list home-games\" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Upcoming Home Games</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element list list-unstyled \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
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
                                                                        <td valign=\"top\" width=\"1\">
                                                                            <![endif]-->
                                                                            <table width=\"1\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"left\">
                                                                                <tr>
                                                                                    <td height=\"40\" style=\"font-size: 0;line-height: 0;border-collapse: collapse;\">
                                                                                        <p style=\"padding-left: 20px;\">&nbsp;</p>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <!--[if gte mso 12]> </td>
                                                                        <td valign=\"top\" width=\"290\">
                                                                            <![endif]-->
                                                                            <table class=\"table-full\" width=\"290\" border=\"0\" align=\"right\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-list announcements\" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Announcements</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element content description\" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    View all announcements in
                                                                                                    <a href=\"http://www.harker.org/page.cfm?p=3566\">our archive</a>
                                                                                                    .
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element article \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-article\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <a href=\"http://www.harker.org/page.cfm?p=3566&newsid=1898\">Photo Galleries – New Password Added</a>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element article \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-article\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <a href=\"http://www.harker.org/page.cfm?p=3566&newsid=1895\">Special Edition Homecoming Sweatshirts!</a>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element article \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-article\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <a href=\"http://www.harker.org/page.cfm?p=3566&newsid=1897\">Sports Report Sept. 27, 2016</a>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-list news\" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >News</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element content description\" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    View all stories at
                                                                                                    <a href=\"http://news.harker.org\">Harker News</a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element article \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-article\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <a href=\"http://wp.me/pOeLQ-7Od\">WFLMS Teacher Travels from Shanghai for Yearly Exchange</a>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                In mid-September, a teacher at the World Foreign Language Middle School in Shanghai, visited Harker as part of the Global Education annual  teacher exchange between the two schools.
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element element-button \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <table class=\"table-button table-button-text\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                    <tr>
                                                                                                                        <td class=\"button\" valign=\"middle\" align=\"center\">
                                                                                                                            <a href=\"http://wp.me/pOeLQ-7Od\">Read More</a>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </table>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element article \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-article\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <a href=\"http://wp.me/pOeLQ-7Ol\">
                                                                                                                    Football Returns to its Winning Ways, Boys Water Polo Keeps on Rolling and Girls Golf Sets School Record
                                                                                                                </a>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >The Eagles rack up victories.</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element element-button \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <table class=\"table-button table-button-text\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                    <tr>
                                                                                                                        <td class=\"button\" valign=\"middle\" align=\"center\">
                                                                                                                            <a href=\"http://wp.me/pOeLQ-7Ol\">Read More</a>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </table>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element article \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-article\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <a href=\"http://wp.me/pOeLQ-7LP\">Paper Airplanes Enhanced at Middle School Innovation Lab</a>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                Grade 7 science students put their engineering skills to the test by building airplanes in the middle school campus’ innovation lab.
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element element-button \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <table class=\"table-button table-button-text\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                    <tr>
                                                                                                                        <td class=\"button\" valign=\"middle\" align=\"center\">
                                                                                                                            <a href=\"http://wp.me/pOeLQ-7LP\">Read More</a>
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
                                                                                    <td id=\"\" class=\"element element-list photos\" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"padding-bottom: 15px\" align=\"left\" valign=\"top\" >Photos</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element article \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-article\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element element-img \" width=\"290\" height=\"\" style=\"\" align=\"center\" valign=\"top\" >
                                                                                                                <a href=\"http://www.harker.org/parents\">
                                                                                                                    <img class=\"img-full\" width=\"290\" height=\"\" style=\"\" src=\"http://skylark.harker.org/email-builder/v2/emails/eweekly/10-02-2016/assets/img//ls-football.jpg\" alt=\"Lower School Football\"></a>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <a href=\"http://www.harker.org/parents\">Lower School Football</a>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                View this photo gallery by going to the parent portal.
                                                                                                                <br>
                                                                                                                <br> <b>Note:</b>
                                                                                                                To download free photos or order prints, you must have a PhotoShelter account.
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element element-button \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <table class=\"table-button table-button-outline\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                                    <tr>
                                                                                                                        <td class=\"button\" valign=\"middle\" align=\"center\">
                                                                                                                            <a href=\"http://www.harker.org/parents\">View Photo Gallery</a>
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
                                                                    </tr>
                                                                </table>
                                                                <![endif]--> </td>
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
                                        <table widht=\"100%\" align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                            <tr>
                                                <td id=\"\" class=\"element element-grid \" width=\"600\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                    <table class=\"table-full\" align=\"center\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                        <tr>
                                                            <td class=\"row\" valign=\"top\">
                                                                <!--[if gte mso 12]>
                                                                <table align=\"center\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                    <tr>
                                                                        <![endif]-->
                                                                        <!--[if gte mso 12]>
                                                                        <td valign=\"top\" width=\"290\">
                                                                            <![endif]-->
                                                                            <table class=\"table-full\" width=\"290\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Social Media</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element list list-unstyled \" width=\"100%\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
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
                                                                                            <tr>
                                                                                                <td class=\"list-item\">
                                                                                                    <table width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <!-- unstyled -->
                                                                                                            <td class=\"list-item-text\" valign=\"top\">
                                                                                                                <a href=\"http://youtube.com/harkerschool\">youtube.com/harkerschool</a>
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
                                                                        <td valign=\"top\" width=\"1\">
                                                                            <![endif]-->
                                                                            <table width=\"1\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"left\">
                                                                                <tr>
                                                                                    <td height=\"40\" style=\"font-size: 0;line-height: 0;border-collapse: collapse;\">
                                                                                        <p style=\"padding-left: 20px;\">&nbsp;</p>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <!--[if gte mso 12]> </td>
                                                                        <td valign=\"top\" width=\"290\">
                                                                            <![endif]-->
                                                                            <table class=\"table-full\" width=\"290\" border=\"0\" align=\"right\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element header \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Contact Us</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        500 Saratoga Ave., San Jose 95129
                                                                                        <br>
                                                                                        <a href=\"mailto:communications@harker.org\">communications@harker.org</a>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <!--[if gte mso 12]> </td>
                                                                    </tr>
                                                                </table>
                                                                <![endif]--> </td>
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
                                        <table widht=\"100%\" align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                            <tr>
                                                <td id=\"\" class=\"element element-grid \" width=\"600\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                    <table class=\"table-full\" align=\"center\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                        <tr>
                                                            <td class=\"row\" valign=\"top\">
                                                                <!--[if gte mso 12]>
                                                                <table align=\"center\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                    <tr>
                                                                        <![endif]-->
                                                                        <!--[if gte mso 12]>
                                                                        <td valign=\"top\" width=\"600\">
                                                                            <![endif]-->
                                                                            <table class=\"table-full\" width=\"600\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element content \" width=\"\" height=\"\" style=\"\" align=\"left\" valign=\"top\" >Copyright © The Harker School 2016. All Rights Reserved.</td>
                                                                                </tr>
                                                                            </table>
                                                                            <!--[if gte mso 12]> </td>
                                                                    </tr>
                                                                </table>
                                                                <![endif]--> </td>
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
/*             border: 0px;*/
/*         }*/
/* */
/*         h2, h3, h4 {*/
/*             font-family: 'Open Sans', Arial, sans-serif; */
/*             color: #3B3B3B; */
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
/*             padding-bottom: 15px;*/
/*         }*/
/* */
/*         .subtitle {*/
/*             font-family: 'Open Sans', Arial, sans-serif; */
/*             font-size: 16px;*/
/*             line-height: 26px; */
/*             letter-spacing: 2px;*/
/*             color: #676767;*/
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
/*         }*/
/* */
/*         .content {*/
/*             font-family: 'Open Sans', Arial, sans-serif; */
/*             font-size: 16px; */
/*             line-height: 26px;*/
/*             color: #676767; */
/*         }*/
/* */
/*         .content-intro {*/
/*             font-family: 'Open Sans', Arial, sans-serif;*/
/*             font-size: 23px;*/
/*             font-weight: 100;*/
/*             line-height: 36px;*/
/*             color: #333;*/
/*         }*/
/* */
/*         .table-button {*/
/*             background-color: #00809E;*/
/*         }*/
/* */
/*         .button {*/
/*             font-family: 'Open Sans', Arial, sans-serif;*/
/*             font-size: 16px;*/
/*             line-height: normal;*/
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
/*             padding: 0;*/
/*             text-align: left;*/
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
/*             padding-top: 8px;*/
/*             padding-bottom: 8px;*/
/*             border-right: 4px solid #033e2f; */
/*             border-left: 4px solid #033e2f; */
/*             background-color: #05533E;*/
/*         }*/
/* */
/*         .module-topbar-icons .topbar-links .row {*/
/*             padding-top: 13px;*/
/*             padding-bottom: 13px;*/
/*         }*/
/* */
/*         .module-topbar-text .topbar-links .row {*/
/*             padding-top: 12px;*/
/*             padding-bottom: 12px;*/
/*         }*/
/* */
/*         .module-topbar .topbar-links img {*/
/*             display: block;*/
/*         }*/
/* */
/*         .module-topbar .topbar-links .content,*/
/*         .module-topbar .topbar-links .content a {*/
/*             color: #ffffff;*/
/*             font-size: 14px;*/
/*             line-height: normal;*/
/*             text-decoration: none;*/
/*         }*/
/* */
/*         .module-topbar .topbar-links .content {*/
/*             padding-left: 8px;*/
/*             padding-right: 8px;*/
/*         }*/
/* */
/*         .article, .article-feature {*/
/*             padding-bottom: 40px;*/
/*         }*/
/* */
/*         .article .img,*/
/*         .article-feature img {*/
/*             width: 100%;*/
/*         }*/
/* */
/*         .article .header,*/
/*         .article-feature .header {*/
/*             color: #555; */
/*             font-size: 16px; */
/*             line-height: 24px;*/
/*             padding-bottom: 10px;*/
/*         }*/
/* */
/*         .article .content,*/
/*         .article-feature .content {*/
/*             font-size: 12px; */
/*             line-height: 18px;*/
/*             padding-bottom: 10px;*/
/*         }*/
/* */
/*         .article .button,*/
/*         .article-feature .button {*/
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
/*             background-color: #dddddd;*/
/*         }*/
/* */
/*         .module-footer .list-item {*/
/*             border: none;*/
/*         }*/
/* */
/*         .module-bottombar .background {*/
/*             background-color: #05533E;*/
/*         }*/
/* */
/*         .module-bottombar .container {*/
/*             padding-top: 15px;*/
/*             padding-bottom: 15px;*/
/*             color: #ffffff;*/
/*         }*/
/* */
/*         .module-bottombar .content {*/
/*             text-align: center;*/
/*             color: #ffffff;*/
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
/*             .module-topbar .container .logo-container {*/
/*                 border-right-width: 0 !important;*/
/*                 border-left-width: 0 !important;*/
/*                 border-bottom: 1px solid #033e2f;*/
/*             }*/
/*             .topbar-links .content { text-align: center; }*/
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
/*             .module-topbar .container .logo-container {*/
/*                 border-right-width: 0 !important;*/
/*                 border-left-width: 0 !important;;*/
/*                 border-bottom: 1px solid #033e2f;*/
/*             }*/
/*             .topbar-links .content { text-align: center; }*/
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
/*         .announcements .article {*/
/*             padding-bottom: 10px;*/
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
/*                 <table id="" class="module module-topbar module-topbar-icons module-0 module-even " style="" align="center" width="100%" border="0" cellspacing="0" cellpadding="0" >*/
/*                     <tr>*/
/*                         <td class="background" align="center" background="" style="background-image: url() ">*/
/*                             <table align="center" class="table-inner" width="600" border="0" cellspacing="0" cellpadding="0">*/
/*                                 <tr>*/
/*                                     <td class="container" style="">*/
/*                                         <table widht="100%" align="center" border="0" cellspacing="0" cellpadding="0">*/
/*                                             <tr>*/
/*                                                 <td id="" class="element element-grid " width="600" height="" style="" align="left" valign="top" >*/
/*                                                     <table class="table-full" align="center" width="600" border="0" cellspacing="0" cellpadding="0">*/
/*                                                         <tr>*/
/*                                                             <td class="row" valign="top">*/
/*                                                                 <!--[if gte mso 12]>*/
/*                                                                 <table align="center" width="600" border="0" cellspacing="0" cellpadding="0">*/
/*                                                                     <tr>*/
/*                                                                         <![endif]-->*/
/*                                                                         <!--[if gte mso 12]>*/
/*                                                                         <td valign="top" width="231">*/
/*                                                                             <![endif]-->*/
/*                                                                             <table class="table-full" width="231" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-img logo-container" width="183" height="32" style="" align="center" valign="top" >*/
/*                                                                                         <img class="" width="183" height="32" style="" src="http://skylark.harker.org/email-builder/v2/assets/img/harker-logo.png" alt="Harker Logo"></td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                             <!--[if gte mso 12]> </td>*/
/*                                                                     </tr>*/
/*                                                                 </table>*/
/*                                                                 <![endif]--> </td>*/
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
/*                                         <table widht="100%" align="center" border="0" cellspacing="0" cellpadding="0">*/
/*                                             <tr>*/
/*                                                 <td id="" class="element element-grid " width="600" height="" style="" align="left" valign="top" >*/
/*                                                     <table class="table-full" align="center" width="600" border="0" cellspacing="0" cellpadding="0">*/
/*                                                         <tr>*/
/*                                                             <td class="row" valign="top">*/
/*                                                                 <!--[if gte mso 12]>*/
/*                                                                 <table align="center" width="600" border="0" cellspacing="0" cellpadding="0">*/
/*                                                                     <tr>*/
/*                                                                         <![endif]-->*/
/*                                                                         <!--[if gte mso 12]>*/
/*                                                                         <td valign="top" width="290">*/
/*                                                                             <![endif]-->*/
/*                                                                             <table class="table-full" width="290" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Upcoming Events</td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element content description" width="" height="" style="" align="left" valign="top" >*/
/*                                                                                         View all events in the*/
/*                                                                                         <a href="http://www.harker.org/page.cfm?p=2302">school calendar</a>*/
/*                                                                                         .*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element calendar-list " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                         <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element calendar-item " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element element-date " width="68" height="" style="" align="center" valign="top" >*/
/*                                                                                                                 <table class="table-date" width="68" border="0" align="center" cellpadding="0" cellspacing="0" background="http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png" style="background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) ">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td class="date">*/
/*                                                                                                                             <div class="day-of-week">FRIDAY</div>*/
/*                                                                                                                             <div class="month">SEP</div>*/
/*                                                                                                                             <div class="day">30</div>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                             <td class="events" valign="top">*/
/*                                                                                                                 <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Fall Break Day #1</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Middle School JCL Induction</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >10:40 a.m. to 1 p.m. | Laser Quest San Jose</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Nichols Debate Tournament</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >3:30 to 9 p.m. | Saratoga Campus</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element calendar-item " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element element-date " width="68" height="" style="" align="center" valign="top" >*/
/*                                                                                                                 <table class="table-date" width="68" border="0" align="center" cellpadding="0" cellspacing="0" background="http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png" style="background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) ">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td class="date">*/
/*                                                                                                                             <div class="day-of-week">SATURDAY</div>*/
/*                                                                                                                             <div class="month">OCT</div>*/
/*                                                                                                                             <div class="day">1</div>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                             <td class="events" valign="top">*/
/*                                                                                                                 <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Nichols Debate Tournament</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >7:30 a.m. to 9 p.m. | Saratoga Campus</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Upper School Community Service Opportunity</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                                                         8:10 to 11:45 a.m. | The Historic Orchard in San Jose (depart from Saratoga campus)*/
/*                                                                                                                                         <span class="event-link">*/
/*                                                                                                                                             <a href="http://www.harker.org/page.cfm?id=3624&verbose=271211">View details</a>*/
/*                                                                                                                                         </span>*/
/*                                                                                                                                     </td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Grade 7 &amp; 8 Flag Football Tournament</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >9 a.m. | Saratoga Davis Field</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Picnic Preparations &amp; Set-Up</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >1 to 5 p.m. | Blackford Campus</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element calendar-item " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element element-date " width="68" height="" style="" align="center" valign="top" >*/
/*                                                                                                                 <table class="table-date" width="68" border="0" align="center" cellpadding="0" cellspacing="0" background="http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png" style="background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) ">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td class="date">*/
/*                                                                                                                             <div class="day-of-week">SUNDAY</div>*/
/*                                                                                                                             <div class="month">OCT</div>*/
/*                                                                                                                             <div class="day">2</div>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                             <td class="events" valign="top">*/
/*                                                                                                                 <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Nichols Debate Tournament</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >7:30 a.m. to 9 p.m. | Saratoga Campus</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element calendar-item " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element element-date " width="68" height="" style="" align="center" valign="top" >*/
/*                                                                                                                 <table class="table-date" width="68" border="0" align="center" cellpadding="0" cellspacing="0" background="http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png" style="background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) ">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td class="date">*/
/*                                                                                                                             <div class="day-of-week">MONDAY</div>*/
/*                                                                                                                             <div class="month">OCT</div>*/
/*                                                                                                                             <div class="day">3</div>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                             <td class="events" valign="top">*/
/*                                                                                                                 <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Middle School Special Schedule</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                                                         <span class="event-link">*/
/*                                                                                                                                             <a href="http://www.harker.org/page.cfm?id=3624&verbose=252852">View details</a>*/
/*                                                                                                                                         </span>*/
/*                                                                                                                                     </td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Upper School Schedule A - Sophomore Class Meeting</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Student Directed Showcase Auditions</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >Lunch | Ms. Lang-Ree&#039;s Room</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element calendar-item " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element element-date " width="68" height="" style="" align="center" valign="top" >*/
/*                                                                                                                 <table class="table-date" width="68" border="0" align="center" cellpadding="0" cellspacing="0" background="http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png" style="background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) ">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td class="date">*/
/*                                                                                                                             <div class="day-of-week">TUESDAY</div>*/
/*                                                                                                                             <div class="month">OCT</div>*/
/*                                                                                                                             <div class="day">4</div>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                             <td class="events" valign="top">*/
/*                                                                                                                 <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Middle School Advisory</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                                                         Middle School 2016 Picnic T-Shirt w/ Free Dress Pants, Shorts, or Skirts*/
/*                                                                                                                                     </td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Upper School Schedule B</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >K-5 Special Dress Day: Picnic T-Shirts</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                                                         <span class="event-link">*/
/*                                                                                                                                             <a href="http://www.harker.org/page.cfm?id=3624&verbose=253273">View details</a>*/
/*                                                                                                                                         </span>*/
/*                                                                                                                                     </td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Upper School Parent Coffee Picnic Prep</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >8:15 to 10:15 a.m. | Blackford Multipurpose Room (MPR)</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Student Directed Showcase Auditions</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >Lunch | Ms. Lang-Ree&#039;s Room</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >National Honor Society Induction</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >6 to 8 p.m. | Saratoga Nichols Hall Auditorium</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element calendar-item " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element element-date " width="68" height="" style="" align="center" valign="top" >*/
/*                                                                                                                 <table class="table-date" width="68" border="0" align="center" cellpadding="0" cellspacing="0" background="http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png" style="background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) ">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td class="date">*/
/*                                                                                                                             <div class="day-of-week">WEDNESDAY</div>*/
/*                                                                                                                             <div class="month">OCT</div>*/
/*                                                                                                                             <div class="day">5</div>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                             <td class="events" valign="top">*/
/*                                                                                                                 <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Middle School Wednesday</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Upper School Schedule C - Freshman Class Meeting</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Preschool and Lower School Parent Coffee Picnic Prep</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >8 to 10 a.m. | Blackford Multipurpose Room (MPR)</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Student Directed Showcase Auditions</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >Lunch | Ms. Lang-Ree&#039;s Room</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                                                         Lower &amp; Middle School Q2 BEST &amp; Athletic Sign-Ups Begin*/
/*                                                                                                                                     </td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >12 p.m.</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element calendar-item " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element element-date " width="68" height="" style="" align="center" valign="top" >*/
/*                                                                                                                 <table class="table-date" width="68" border="0" align="center" cellpadding="0" cellspacing="0" background="http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png" style="background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) ">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td class="date">*/
/*                                                                                                                             <div class="day-of-week">THURSDAY</div>*/
/*                                                                                                                             <div class="month">OCT</div>*/
/*                                                                                                                             <div class="day">6</div>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                             <td class="events" valign="top">*/
/*                                                                                                                 <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Middle School Advisory</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Upper School Special Schedule D</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                                                         <span class="event-link">*/
/*                                                                                                                                             <a href="http://www.harker.org/page.cfm?id=3624&verbose=252518">View details</a>*/
/*                                                                                                                                         </span>*/
/*                                                                                                                                     </td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Middle School Parent Coffee Picnic Prep</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                                                         8 to 10 a.m. | Blackford Multipurpose Room (MPR) - after drop off*/
/*                                                                                                                                     </td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Grade 2 Q&amp;A</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >8:15 to 9:15 a.m. | Bucknall Library</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Grade 5 Eagle Buddies visit 12th grade</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                                                         10:50 a.m. to 1:25 p.m. | Saratoga Campus*/
/*                                                                                                                                         <span class="event-link">*/
/*                                                                                                                                             <a href="http://www.harker.org/page.cfm?id=3624&verbose=253314">View details</a>*/
/*                                                                                                                                         </span>*/
/*                                                                                                                                     </td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >10th Grade Eagle Buddies visit 3rd Grade Buddies</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                                                         11:10 a.m. to 1:25 p.m. | Bucknall Campus*/
/*                                                                                                                                         <span class="event-link">*/
/*                                                                                                                                             <a href="http://www.harker.org/page.cfm?id=3624&verbose=253317">View details</a>*/
/*                                                                                                                                         </span>*/
/*                                                                                                                                     </td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Apprentice Workshop</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >11:15 a.m. to 12:40 p.m. | Saratoga Rehearsal Room</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Student Directed Showcase Auditions</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >3 to 6:30 p.m. | Ms. Lang-Ree&#039;s Room</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Grade 9 Q&amp;A</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >5:30 to 6:30 p.m. | Blackford, Multi Purpose Room</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Grade 12 College Financial Aid Night</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >7 to 8 p.m. | Saratoga Nichols Hall Auditorium</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element calendar-item " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element element-date " width="68" height="" style="" align="center" valign="top" >*/
/*                                                                                                                 <table class="table-date" width="68" border="0" align="center" cellpadding="0" cellspacing="0" background="http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png" style="background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) ">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td class="date">*/
/*                                                                                                                             <div class="day-of-week">FRIDAY</div>*/
/*                                                                                                                             <div class="month">OCT</div>*/
/*                                                                                                                             <div class="day">7</div>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                             <td class="events" valign="top">*/
/*                                                                                                                 <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Middle School Advisory</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Middle School Fall Sports End</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Upper School Schedule A - Senior Class Meeting</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >K-5 Free Dress</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Harvest Festival Preparations Preschool-12</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >8:15 to 10:15 a.m. | Blackford Volunteer Room #42</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Picnic Student Tech</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >11 a.m. to 3:30 p.m. | Blackford Campus</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Grade 1 Mom&#039;s Night Out</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                                                         7 p.m. | Wine Bar 107 @ Testarossa Winery, 300 College Ave., Los Gatos | Parent-Organized Event*/
/*                                                                                                                                     </td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element calendar-item " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element element-date " width="68" height="" style="" align="center" valign="top" >*/
/*                                                                                                                 <table class="table-date" width="68" border="0" align="center" cellpadding="0" cellspacing="0" background="http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png" style="background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) ">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td class="date">*/
/*                                                                                                                             <div class="day-of-week">SATURDAY</div>*/
/*                                                                                                                             <div class="month">OCT</div>*/
/*                                                                                                                             <div class="day">8</div>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                             <td class="events" valign="top">*/
/*                                                                                                                 <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Picnic Prep &amp; Set-Up</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >10 a.m. to 6 p.m. | Blackford Campus</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element calendar-item " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element element-date " width="68" height="" style="" align="center" valign="top" >*/
/*                                                                                                                 <table class="table-date" width="68" border="0" align="center" cellpadding="0" cellspacing="0" background="http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png" style="background-image: url(http://skylark.harker.org/email-builder/v2/assets/img/date-bg.png) ">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td class="date">*/
/*                                                                                                                             <div class="day-of-week">SUNDAY</div>*/
/*                                                                                                                             <div class="month">OCT</div>*/
/*                                                                                                                             <div class="day">9</div>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                             <td class="events" valign="top">*/
/*                                                                                                                 <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td id="" class="element event " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                             <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >66th Family and Alumni Picnic</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                                 <tr>*/
/*                                                                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >10 a.m. to 3:30 p.m. | Blackford Campus</td>*/
/*                                                                                                                                 </tr>*/
/*                                                                                                                             </table>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-list home-games" width="" height="" style="" align="left" valign="top" >*/
/*                                                                                         <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Upcoming Home Games</td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element list list-unstyled " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-list" align="left" width="100%" border="0" cellspacing="0" cellpadding="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td class="list-item">*/
/*                                                                                                                 <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <!-- unstyled -->*/
/*                                                                                                                         <td class="list-item-text" valign="top">*/
/*                                                                                                                             <a href="http://www.harker.org/page.cfm?p=4012">Upper School Home Games</a>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td class="list-item">*/
/*                                                                                                                 <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <!-- unstyled -->*/
/*                                                                                                                         <td class="list-item-text" valign="top">*/
/*                                                                                                                             <a href="http://www.harker.org/page.cfm?p=4014">Middle School Home Games</a>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td class="list-item">*/
/*                                                                                                                 <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <!-- unstyled -->*/
/*                                                                                                                         <td class="list-item-text" valign="top">*/
/*                                                                                                                             <a href="http://www.harker.org/page.cfm?p=4015">Lower School Home Games</a>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                             <!--[if gte mso 12]> </td>*/
/*                                                                         <td valign="top" width="1">*/
/*                                                                             <![endif]-->*/
/*                                                                             <table width="1" border="0" cellpadding="0" cellspacing="0" align="left">*/
/*                                                                                 <tr>*/
/*                                                                                     <td height="40" style="font-size: 0;line-height: 0;border-collapse: collapse;">*/
/*                                                                                         <p style="padding-left: 20px;">&nbsp;</p>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                             <!--[if gte mso 12]> </td>*/
/*                                                                         <td valign="top" width="290">*/
/*                                                                             <![endif]-->*/
/*                                                                             <table class="table-full" width="290" border="0" align="right" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-list announcements" width="" height="" style="" align="left" valign="top" >*/
/*                                                                                         <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Announcements</td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element content description" width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                     View all announcements in*/
/*                                                                                                     <a href="http://www.harker.org/page.cfm?p=3566">our archive</a>*/
/*                                                                                                     .*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element article " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-article" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                                 <a href="http://www.harker.org/page.cfm?p=3566&newsid=1898">Photo Galleries – New Password Added</a>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element article " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-article" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                                 <a href="http://www.harker.org/page.cfm?p=3566&newsid=1895">Special Edition Homecoming Sweatshirts!</a>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element article " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-article" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                                 <a href="http://www.harker.org/page.cfm?p=3566&newsid=1897">Sports Report Sept. 27, 2016</a>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-list news" width="" height="" style="" align="left" valign="top" >*/
/*                                                                                         <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element header " width="" height="" style="" align="left" valign="top" >News</td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element content description" width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                     View all stories at*/
/*                                                                                                     <a href="http://news.harker.org">Harker News</a>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element article " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-article" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                                 <a href="http://wp.me/pOeLQ-7Od">WFLMS Teacher Travels from Shanghai for Yearly Exchange</a>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                                 In mid-September, a teacher at the World Foreign Language Middle School in Shanghai, visited Harker as part of the Global Education annual  teacher exchange between the two schools.*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element element-button " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                 <table class="table-button table-button-text" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td class="button" valign="middle" align="center">*/
/*                                                                                                                             <a href="http://wp.me/pOeLQ-7Od">Read More</a>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element article " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-article" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                                 <a href="http://wp.me/pOeLQ-7Ol">*/
/*                                                                                                                     Football Returns to its Winning Ways, Boys Water Polo Keeps on Rolling and Girls Golf Sets School Record*/
/*                                                                                                                 </a>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" height="" style="" align="left" valign="top" >The Eagles rack up victories.</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element element-button " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                 <table class="table-button table-button-text" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td class="button" valign="middle" align="center">*/
/*                                                                                                                             <a href="http://wp.me/pOeLQ-7Ol">Read More</a>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element article " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-article" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                                 <a href="http://wp.me/pOeLQ-7LP">Paper Airplanes Enhanced at Middle School Innovation Lab</a>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                                 Grade 7 science students put their engineering skills to the test by building airplanes in the middle school campus’ innovation lab.*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element element-button " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                 <table class="table-button table-button-text" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td class="button" valign="middle" align="center">*/
/*                                                                                                                             <a href="http://wp.me/pOeLQ-7LP">Read More</a>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-list photos" width="" height="" style="" align="left" valign="top" >*/
/*                                                                                         <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element header " width="" height="" style="padding-bottom: 15px" align="left" valign="top" >Photos</td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element article " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-article" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element element-img " width="290" height="" style="" align="center" valign="top" >*/
/*                                                                                                                 <a href="http://www.harker.org/parents">*/
/*                                                                                                                     <img class="img-full" width="290" height="" style="" src="http://skylark.harker.org/email-builder/v2/emails/eweekly/10-02-2016/assets/img//ls-football.jpg" alt="Lower School Football"></a>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                                 <a href="http://www.harker.org/parents">Lower School Football</a>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                                                 View this photo gallery by going to the parent portal.*/
/*                                                                                                                 <br>*/
/*                                                                                                                 <br> <b>Note:</b>*/
/*                                                                                                                 To download free photos or order prints, you must have a PhotoShelter account.*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element element-button " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                                                 <table class="table-button table-button-outline" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                                     <tr>*/
/*                                                                                                                         <td class="button" valign="middle" align="center">*/
/*                                                                                                                             <a href="http://www.harker.org/parents">View Photo Gallery</a>*/
/*                                                                                                                         </td>*/
/*                                                                                                                     </tr>*/
/*                                                                                                                 </table>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                             <!--[if gte mso 12]> </td>*/
/*                                                                     </tr>*/
/*                                                                 </table>*/
/*                                                                 <![endif]--> </td>*/
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
/*                                         <table widht="100%" align="center" border="0" cellspacing="0" cellpadding="0">*/
/*                                             <tr>*/
/*                                                 <td id="" class="element element-grid " width="600" height="" style="" align="left" valign="top" >*/
/*                                                     <table class="table-full" align="center" width="600" border="0" cellspacing="0" cellpadding="0">*/
/*                                                         <tr>*/
/*                                                             <td class="row" valign="top">*/
/*                                                                 <!--[if gte mso 12]>*/
/*                                                                 <table align="center" width="600" border="0" cellspacing="0" cellpadding="0">*/
/*                                                                     <tr>*/
/*                                                                         <![endif]-->*/
/*                                                                         <!--[if gte mso 12]>*/
/*                                                                         <td valign="top" width="290">*/
/*                                                                             <![endif]-->*/
/*                                                                             <table class="table-full" width="290" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Social Media</td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element list list-unstyled " width="100%" height="" style="" align="left" valign="top" >*/
/*                                                                                         <table class="table-list" align="left" width="100%" border="0" cellspacing="0" cellpadding="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="list-item">*/
/*                                                                                                     <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <!-- unstyled -->*/
/*                                                                                                             <td class="list-item-text" valign="top">*/
/*                                                                                                                 <a href="http://facebook.com/harkerschool">facebook.com/harkerschool</a>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="list-item">*/
/*                                                                                                     <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <!-- unstyled -->*/
/*                                                                                                             <td class="list-item-text" valign="top">*/
/*                                                                                                                 <a href="http://twitter.com/harkerschool">twitter.com/harkerschool</a>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="list-item">*/
/*                                                                                                     <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <!-- unstyled -->*/
/*                                                                                                             <td class="list-item-text" valign="top">*/
/*                                                                                                                 <a href="http://instagram.com/harkerschool">instagram.com/harkerschool</a>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="list-item">*/
/*                                                                                                     <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <!-- unstyled -->*/
/*                                                                                                             <td class="list-item-text" valign="top">*/
/*                                                                                                                 <a href="http://youtube.com/harkerschool">youtube.com/harkerschool</a>*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                         </table>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                             <!--[if gte mso 12]> </td>*/
/*                                                                         <td valign="top" width="1">*/
/*                                                                             <![endif]-->*/
/*                                                                             <table width="1" border="0" cellpadding="0" cellspacing="0" align="left">*/
/*                                                                                 <tr>*/
/*                                                                                     <td height="40" style="font-size: 0;line-height: 0;border-collapse: collapse;">*/
/*                                                                                         <p style="padding-left: 20px;">&nbsp;</p>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                             <!--[if gte mso 12]> </td>*/
/*                                                                         <td valign="top" width="290">*/
/*                                                                             <![endif]-->*/
/*                                                                             <table class="table-full" width="290" border="0" align="right" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element header " width="" height="" style="" align="left" valign="top" >Contact Us</td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >*/
/*                                                                                         500 Saratoga Ave., San Jose 95129*/
/*                                                                                         <br>*/
/*                                                                                         <a href="mailto:communications@harker.org">communications@harker.org</a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                             <!--[if gte mso 12]> </td>*/
/*                                                                     </tr>*/
/*                                                                 </table>*/
/*                                                                 <![endif]--> </td>*/
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
/*                                         <table widht="100%" align="center" border="0" cellspacing="0" cellpadding="0">*/
/*                                             <tr>*/
/*                                                 <td id="" class="element element-grid " width="600" height="" style="" align="left" valign="top" >*/
/*                                                     <table class="table-full" align="center" width="600" border="0" cellspacing="0" cellpadding="0">*/
/*                                                         <tr>*/
/*                                                             <td class="row" valign="top">*/
/*                                                                 <!--[if gte mso 12]>*/
/*                                                                 <table align="center" width="600" border="0" cellspacing="0" cellpadding="0">*/
/*                                                                     <tr>*/
/*                                                                         <![endif]-->*/
/*                                                                         <!--[if gte mso 12]>*/
/*                                                                         <td valign="top" width="600">*/
/*                                                                             <![endif]-->*/
/*                                                                             <table class="table-full" width="600" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element content " width="" height="" style="" align="left" valign="top" >Copyright © The Harker School 2016. All Rights Reserved.</td>*/
/*                                                                                 </tr>*/
/*                                                                             </table>*/
/*                                                                             <!--[if gte mso 12]> </td>*/
/*                                                                     </tr>*/
/*                                                                 </table>*/
/*                                                                 <![endif]--> </td>*/
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
