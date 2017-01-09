<?php

/* modules/topbar-text.html */
class __TwigTemplate_dd8ac87e9883639f016c7827166232485cb6e0d597c253552f903dd792a025f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("modules/grid.html", "modules/topbar-text.html", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "modules/grid.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["defaults"] = array("module_class" => "module-topbar module-topbar-text", "column_count" => 2, "gutter_height" => 1, "collapse_gutters" => true, "columns" => array(0 => array("width" => "231", "elements" => array(0 => array("template" => "img", "options" => array("class" => "logo-container", "src" => (($this->getAttribute($this->getAttribute(        // line 16
(isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "src", array()), ((isset($context["ROOT_IMG_DIR_URL"]) ? $context["ROOT_IMG_DIR_URL"] : null) . "/harker-logo.png"))) : (((isset($context["ROOT_IMG_DIR_URL"]) ? $context["ROOT_IMG_DIR_URL"] : null) . "/harker-logo.png"))), "alt" => (($this->getAttribute($this->getAttribute(        // line 17
(isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "alt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "alt", array()), "Harker Logo")) : ("Harker Logo")), "img_width" => (($this->getAttribute($this->getAttribute(        // line 18
(isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "width", array()), 183)) : (183)), "img_height" => (($this->getAttribute($this->getAttribute(        // line 19
(isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "height", array()), 32)) : (32)), "img_class" => (($this->getAttribute($this->getAttribute(        // line 20
(isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "class", array()), "")) : ("")), "align" => "center", "valign" => "middle")))), 1 => array("width" => "349", "elements" => array(0 => array("template" => "list", "options" => array("align" => "right", "type" => "inline", "list_width" => "", "items" => array(0 => "<a href=\"http://www.harker.org\">Home</a>", 1 => "<a href=\"http://news.harker.org\">News</a>", 2 => "<a href=\"https://www.harker.org/login\">Portal</a>")))))));
        // line 48
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "modules/topbar-text.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,  31 => 48,  29 => 20,  28 => 19,  27 => 18,  26 => 17,  25 => 16,  24 => 3,  11 => 1,);
    }
}
/* {% extends "modules/grid.html" %}*/
/* */
/* {% set defaults = {*/
/*     module_class: "module-topbar module-topbar-text",*/
/*     column_count: 2,*/
/*     gutter_height: 1,*/
/*     collapse_gutters: true,*/
/*     columns: [*/
/*         {*/
/*             width: "231",*/
/*             elements: [*/
/*                 {*/
/*                     template: "img",*/
/*                     options: {*/
/*                         class: "logo-container",*/
/*                         src: module.img.src|default("#{ROOT_IMG_DIR_URL}/harker-logo.png"),*/
/*                         alt: module.img.alt|default("Harker Logo"),*/
/*                         img_width: module.img.width|default(183),*/
/*                         img_height: module.img.height|default(32),*/
/*                         img_class: module.img.class|default(""),*/
/*                         align: "center",*/
/*                         valign: "middle"*/
/*                     }*/
/*                 }*/
/*             ]*/
/*         },*/
/*         {*/
/*             width: "349",*/
/*             elements: [*/
/*                 {*/
/*                     "template": "list",*/
/*                     "options": {*/
/*                         "align": "right",*/
/*                         "type": "inline",*/
/*                         "list_width": "",*/
/*                         "items": [*/
/*                             "<a href=\"http://www.harker.org\">Home</a>",*/
/*                             "<a href=\"http://news.harker.org\">News</a>",*/
/*                             "<a href=\"https://www.harker.org/login\">Portal</a>"*/
/*                         ]*/
/*                     }*/
/*                 }*/
/*             ]*/
/*         }*/
/*     ]*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/*                         */
