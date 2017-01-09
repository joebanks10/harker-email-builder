<?php

/* @email/email.html */
class __TwigTemplate_356cb830d918c486b4b50c0f3310d465da4ee93a482d31cb29bdfc6bd36d4f2b extends Twig_Template
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
                                                                                                    <div class=\"day\">2</div>
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
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Grades 4-5 Full Dress Uniform</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Grades 4-5 School Pictures</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Middle School Advisory: Club Day</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=252826\">View details</a>
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
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Preschool 3Y / TK Intake Conferences</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=251375\">View details</a>
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
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Upper School Parent Welcome and Volunteer Breakfast</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >7:30 to 9:30 a.m. | Blackford Campus</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Grade 5 Parent Coffee</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                8 a.m. | Le Boulanger, 1390 El Paseo de Saratoga, San Jose, CA 95130 | Parent-Organized Event
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Grade 2 Dads&#039; Bowling Night</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                8 p.m. | Bowlmor Lanes at Vallco Mall, 10123 N Wolfe Rd Unit 20 Cupertino, CA 95014
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
                                                                                                    <div class=\"day-of-week\">MONDAY</div>
                                                                                                    <div class=\"month\">SEP</div>
                                                                                                    <div class=\"day\">5</div>
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
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >LABOR DAY - No Classes</td>
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
                                                                                                    <div class=\"day\">6</div>
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
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >2016 Picnic T-Shirt w/ Free Dress Pants, Shorts, or Skirts</td>
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
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Preschool 3Y / TK Intake Conferences</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=251382\">View details</a>
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
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >K-5 Special Dress Day: Picnic T-Shirts</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=253264\">View details</a>
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
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >PDC Meeting - New Members</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >6 p.m. | Saratoga Nichols Hall</td>
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
                                                                                                    <div class=\"day\">7</div>
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
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Grade 6-8 School Pictures</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Picture Day (Navy Harker Sweater, White Polo)</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=252829\">View details</a>
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
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Preschool 3Y / TK Intake Conferences</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=251383\">View details</a>
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
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Headshots for Conservatory Certificate Seniors</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >11:15 a.m. to 12:40 p.m. | Saratoga Ledge</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Upper School Club Fair</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >12:30 to 1:30 p.m. | Saratoga Nichols Atrium</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Grade 12 Parent College Night</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >6 p.m. | Blackford Multipurpose Room (MPR)</td>
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
                                                                                                    <div class=\"day\">8</div>
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
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Preschool 3Y / TK Intake Conferences</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=251384\">View details</a>
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
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Grade 1 Parent Coffee</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                8:30 a.m. | Le Boulanger, 1390 El Paseo de Saratoga, San Jose, CA 95130 | Parent-Organized Event
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Upper School Speech &amp; Debate Parent Meeting</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                5:45 to 6:45 p.m. | Saratoga Nichols Hall Auditorium
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
                                                                                                    <div class=\"day-of-week\">FRIDAY</div>
                                                                                                    <div class=\"month\">SEP</div>
                                                                                                    <div class=\"day\">9</div>
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
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >K-5 Free Dress</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Middle School Assembly</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=252832\">View details</a>
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
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Middle School Free Dress</td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Preschool 3Y / TK Intake Conferences</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=251385\">View details</a>
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
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Grade 4 Parent Coffee</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                8 a.m. | Le Boulanger, 1390 El Paseo de Saratoga, San Jose, CA 95130 | Parent-Organized Event
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td id=\"\" class=\"element event \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                    <table class=\"table-event\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Grades 1-5 Family Welcome Back BBQ</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >5 to 7 p.m. | Bucknall Campus</td>
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
                                                                                                    <div class=\"day\">10</div>
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
                                                                                                            <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >Upper School Back-to-School Day</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                9:30 a.m. to 12:55 p.m. | Saratoga Campus
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=246925\">View details</a>
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
                                                                                                    <div class=\"day-of-week\">SUNDAY</div>
                                                                                                    <div class=\"month\">SEP</div>
                                                                                                    <div class=\"day\">11</div>
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
                                                                                                                Parent Education Talk: Achieving Great Mental Health, Dr. Chris Thurber
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                                                5 to 7:30 p.m. | Saratoga Nichols Hall Auditorium
                                                                                                                <span class=\"event-link\">
                                                                                                                    <a href=\"http://www.harker.org/page.cfm?id=3624&verbose=252597\">View details</a>
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
                                                                                        <a href=\"http://www.harker.org/page.cfm?p=3566&newsid=1887\">
                                                                                            Required This Year: Submitting Health Information for Your Child
                                                                                        </a>
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
                                                                    <tr>
                                                                        <td id=\"\" class=\"element article \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                            <table class=\"table-article\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        <a href=\"http://www.harker.org/page.cfm?p=3566&newsid=1889\">Sports Report Aug. 30, 2016</a>
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
                                                                                        <a href=\"http://wp.me/pOeLQ-7Kz\">
                                                                                            2016 Grad Wins Gold Medal at International Olympiad in Informatics
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        Lawrence Li ’16 received a gold medal at the International Olympiad in Informatics, held this year in Kazan, Russia.
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-button \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        <table class=\"table-button table-button-text\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                            <tr>
                                                                                                <td class=\"button\" valign=\"middle\" align=\"center\">
                                                                                                    <a href=\"http://wp.me/pOeLQ-7Kz\">Read More</a>
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
                                                                                        <a href=\"http://wp.me/pOeLQ-7KH\">
                                                                                            Harker Senior a Finalist for Positive Coaching Alliance Scholarship
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        Maile Chung, grade 12, is one of 20 Bay Area high school student athletes vying for a Positive Coaching Alliance (PCA) Triple-Impact Competitor Scholarship.
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-button \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        <table class=\"table-button table-button-text\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                            <tr>
                                                                                                <td class=\"button\" valign=\"middle\" align=\"center\">
                                                                                                    <a href=\"http://wp.me/pOeLQ-7KH\">Read More</a>
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
                                                                                        <a href=\"http://wp.me/pOeLQ-7Kk\">
                                                                                            Two Harker Students Represent California at National Classics Convention
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        Senior Venkat Sankar and Arohee Bhoja, grade 8, had excellent runs at this summer’s National Junior Classical League Convention at Indiana University.
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element element-button \" width=\"100%\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        <table class=\"table-button table-button-text\" width=\"100%\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                                                                                            <tr>
                                                                                                <td class=\"button\" valign=\"middle\" align=\"center\">
                                                                                                    <a href=\"http://wp.me/pOeLQ-7Kk\">Read More</a>
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
                                                                                        <a href=\"http://9alskiel9sn2.photoshelter.com/gallery/2016-08-US-Spirit-Kickoff/G00004kAMI8lSvKE/C0000aRwpt5wHde4\">
                                                                                            <img class=\"img-full\" width=\"290\" height=\"\" style=\"\" src=\"http://skylark.harker.org/email-builder/v2/emails/eweekly/09-05-2016/assets/img//spirit-kickoff.jpg\" alt=\"Spirit Kickoff\"></a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element header \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        <a href=\"http://9alskiel9sn2.photoshelter.com/gallery/2016-08-US-Spirit-Kickoff/G00004kAMI8lSvKE/C0000aRwpt5wHde4\">Spirit Kickoff</a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td id=\"\" class=\"element content \" width=\"\" style=\"\" align=\"left\" valign=\"top\" >
                                                                                        View more photos in our
                                                                                        <a href=\"http://9alskiel9sn2.photoshelter.com/gallery-collection/2016-08-August/C0000aRwpt5wHde4\">August galleries</a>
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
                                                                                                    <a href=\"http://9alskiel9sn2.photoshelter.com/gallery/2016-08-US-Spirit-Kickoff/G00004kAMI8lSvKE/C0000aRwpt5wHde4\">View Photo Gallery</a>
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
/*                                                                                                     <div class="day">2</div>*/
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
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Grades 4-5 Full Dress Uniform</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Grades 4-5 School Pictures</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Middle School Advisory: Club Day</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=252826">View details</a>*/
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
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Preschool 3Y / TK Intake Conferences</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=251375">View details</a>*/
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
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Upper School Parent Welcome and Volunteer Breakfast</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >7:30 to 9:30 a.m. | Blackford Campus</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Grade 5 Parent Coffee</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 8 a.m. | Le Boulanger, 1390 El Paseo de Saratoga, San Jose, CA 95130 | Parent-Organized Event*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Grade 2 Dads&#039; Bowling Night</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 8 p.m. | Bowlmor Lanes at Vallco Mall, 10123 N Wolfe Rd Unit 20 Cupertino, CA 95014*/
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
/*                                                                                                     <div class="day-of-week">MONDAY</div>*/
/*                                                                                                     <div class="month">SEP</div>*/
/*                                                                                                     <div class="day">5</div>*/
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
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >LABOR DAY - No Classes</td>*/
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
/*                                                                                                     <div class="day">6</div>*/
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
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >2016 Picnic T-Shirt w/ Free Dress Pants, Shorts, or Skirts</td>*/
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
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Preschool 3Y / TK Intake Conferences</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=251382">View details</a>*/
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
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >K-5 Special Dress Day: Picnic T-Shirts</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=253264">View details</a>*/
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
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >PDC Meeting - New Members</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >6 p.m. | Saratoga Nichols Hall</td>*/
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
/*                                                                                                     <div class="day">7</div>*/
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
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Grade 6-8 School Pictures</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Picture Day (Navy Harker Sweater, White Polo)</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=252829">View details</a>*/
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
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Preschool 3Y / TK Intake Conferences</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=251383">View details</a>*/
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
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Headshots for Conservatory Certificate Seniors</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >11:15 a.m. to 12:40 p.m. | Saratoga Ledge</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Upper School Club Fair</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >12:30 to 1:30 p.m. | Saratoga Nichols Atrium</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Grade 12 Parent College Night</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >6 p.m. | Blackford Multipurpose Room (MPR)</td>*/
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
/*                                                                                                     <div class="day">8</div>*/
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
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Preschool 3Y / TK Intake Conferences</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=251384">View details</a>*/
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
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Grade 1 Parent Coffee</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 8:30 a.m. | Le Boulanger, 1390 El Paseo de Saratoga, San Jose, CA 95130 | Parent-Organized Event*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Upper School Speech &amp; Debate Parent Meeting</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 5:45 to 6:45 p.m. | Saratoga Nichols Hall Auditorium*/
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
/*                                                                                                     <div class="day-of-week">FRIDAY</div>*/
/*                                                                                                     <div class="month">SEP</div>*/
/*                                                                                                     <div class="day">9</div>*/
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
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >K-5 Free Dress</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Middle School Assembly</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=252832">View details</a>*/
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
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Middle School Free Dress</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Preschool 3Y / TK Intake Conferences</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=251385">View details</a>*/
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
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Grade 4 Parent Coffee</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 8 a.m. | Le Boulanger, 1390 El Paseo de Saratoga, San Jose, CA 95130 | Parent-Organized Event*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                     </table>*/
/*                                                                                                 </td>*/
/*                                                                                             </tr>*/
/*                                                                                             <tr>*/
/*                                                                                                 <td id="" class="element event " width="100%" style="" align="left" valign="top" >*/
/*                                                                                                     <table class="table-event" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Grades 1-5 Family Welcome Back BBQ</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >5 to 7 p.m. | Bucknall Campus</td>*/
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
/*                                                                                                     <div class="day">10</div>*/
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
/*                                                                                                             <td id="" class="element header " width="" style="" align="left" valign="top" >Upper School Back-to-School Day</td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 9:30 a.m. to 12:55 p.m. | Saratoga Campus*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=246925">View details</a>*/
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
/*                                                                                                     <div class="day-of-week">SUNDAY</div>*/
/*                                                                                                     <div class="month">SEP</div>*/
/*                                                                                                     <div class="day">11</div>*/
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
/*                                                                                                                 Parent Education Talk: Achieving Great Mental Health, Dr. Chris Thurber*/
/*                                                                                                             </td>*/
/*                                                                                                         </tr>*/
/*                                                                                                         <tr>*/
/*                                                                                                             <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                                                 5 to 7:30 p.m. | Saratoga Nichols Hall Auditorium*/
/*                                                                                                                 <span class="event-link">*/
/*                                                                                                                     <a href="http://www.harker.org/page.cfm?id=3624&verbose=252597">View details</a>*/
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
/*                                                                                         <a href="http://www.harker.org/page.cfm?p=3566&newsid=1887">*/
/*                                                                                             Required This Year: Submitting Health Information for Your Child*/
/*                                                                                         </a>*/
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
/*                                                                     <tr>*/
/*                                                                         <td id="" class="element article " width="100%" style="" align="left" valign="top" >*/
/*                                                                             <table class="table-article" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element header " width="" style="" align="left" valign="top" >*/
/*                                                                                         <a href="http://www.harker.org/page.cfm?p=3566&newsid=1889">Sports Report Aug. 30, 2016</a>*/
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
/*                                                                                         <a href="http://wp.me/pOeLQ-7Kz">*/
/*                                                                                             2016 Grad Wins Gold Medal at International Olympiad in Informatics*/
/*                                                                                         </a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                         Lawrence Li ’16 received a gold medal at the International Olympiad in Informatics, held this year in Kazan, Russia.*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-button " width="100%" style="" align="left" valign="top" >*/
/*                                                                                         <table class="table-button table-button-text" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="button" valign="middle" align="center">*/
/*                                                                                                     <a href="http://wp.me/pOeLQ-7Kz">Read More</a>*/
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
/*                                                                                         <a href="http://wp.me/pOeLQ-7KH">*/
/*                                                                                             Harker Senior a Finalist for Positive Coaching Alliance Scholarship*/
/*                                                                                         </a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                         Maile Chung, grade 12, is one of 20 Bay Area high school student athletes vying for a Positive Coaching Alliance (PCA) Triple-Impact Competitor Scholarship.*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-button " width="100%" style="" align="left" valign="top" >*/
/*                                                                                         <table class="table-button table-button-text" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="button" valign="middle" align="center">*/
/*                                                                                                     <a href="http://wp.me/pOeLQ-7KH">Read More</a>*/
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
/*                                                                                         <a href="http://wp.me/pOeLQ-7Kk">*/
/*                                                                                             Two Harker Students Represent California at National Classics Convention*/
/*                                                                                         </a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                         Senior Venkat Sankar and Arohee Bhoja, grade 8, had excellent runs at this summer’s National Junior Classical League Convention at Indiana University.*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element element-button " width="100%" style="" align="left" valign="top" >*/
/*                                                                                         <table class="table-button table-button-text" width="100%" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                                                                                             <tr>*/
/*                                                                                                 <td class="button" valign="middle" align="center">*/
/*                                                                                                     <a href="http://wp.me/pOeLQ-7Kk">Read More</a>*/
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
/*                                                                                         <a href="http://9alskiel9sn2.photoshelter.com/gallery/2016-08-US-Spirit-Kickoff/G00004kAMI8lSvKE/C0000aRwpt5wHde4">*/
/*                                                                                             <img class="img-full" width="290" height="" style="" src="http://skylark.harker.org/email-builder/v2/emails/eweekly/09-05-2016/assets/img//spirit-kickoff.jpg" alt="Spirit Kickoff"></a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element header " width="" style="" align="left" valign="top" >*/
/*                                                                                         <a href="http://9alskiel9sn2.photoshelter.com/gallery/2016-08-US-Spirit-Kickoff/G00004kAMI8lSvKE/C0000aRwpt5wHde4">Spirit Kickoff</a>*/
/*                                                                                     </td>*/
/*                                                                                 </tr>*/
/*                                                                                 <tr>*/
/*                                                                                     <td id="" class="element content " width="" style="" align="left" valign="top" >*/
/*                                                                                         View more photos in our*/
/*                                                                                         <a href="http://9alskiel9sn2.photoshelter.com/gallery-collection/2016-08-August/C0000aRwpt5wHde4">August galleries</a>*/
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
/*                                                                                                     <a href="http://9alskiel9sn2.photoshelter.com/gallery/2016-08-US-Spirit-Kickoff/G00004kAMI8lSvKE/C0000aRwpt5wHde4">View Photo Gallery</a>*/
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
