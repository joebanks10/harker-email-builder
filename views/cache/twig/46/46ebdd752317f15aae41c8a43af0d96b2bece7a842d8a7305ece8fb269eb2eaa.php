<?php

/* modules/topbar-icons.html */
class __TwigTemplate_b39aed96b5b29e6e27d2b58e7fab4d0ad4d0f5af80d03f506480e2d0f3828349 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("modules/grid.html", "modules/topbar-icons.html", 1);
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
        $context["defaults"] = array("module_class" => "module-topbar module-topbar-icons", "column_count" => 2, "gutter_height" => 1, "columns" => array(0 => array("width" => "231", "elements" => array(0 => array("template" => "img", "options" => array("class" => "logo-container", "src" => (($this->getAttribute($this->getAttribute(        // line 15
(isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "src", array()), ((isset($context["ROOT_IMG_DIR_URL"]) ? $context["ROOT_IMG_DIR_URL"] : null) . "/harker-logo.png"))) : (((isset($context["ROOT_IMG_DIR_URL"]) ? $context["ROOT_IMG_DIR_URL"] : null) . "/harker-logo.png"))), "alt" => (($this->getAttribute($this->getAttribute(        // line 16
(isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "alt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "alt", array()), "Harker Logo")) : ("Harker Logo")), "width" => (($this->getAttribute($this->getAttribute(        // line 17
(isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "width", array()), 183)) : (183)), "height" => (($this->getAttribute($this->getAttribute(        // line 18
(isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "height", array()), 32)) : (32)), "img_class" => (($this->getAttribute($this->getAttribute(        // line 19
(isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "class", array()), "")) : ("")))))), 1 => array("width" => "140", "elements" => array(0 => array("template" => "grid", "options" => array("class" => "topbar-links", "stack" => false, "fix_rounding" => false, "fix_outlook" => false, "column_count" => 3, "column_direction" => "rtl", "gutter_height" => 24, "columns" => array(0 => array("width" => 24, "elements" => array(0 => array("template" => "img", "options" => array("src" => "~/login-icon.png", "width" => 20, "height" => 22, "href" => "#", "img_class" => "")))), 1 => array("width" => 24, "elements" => array(0 => array("template" => "img", "options" => array("src" => "~/news-icon.png", "width" => 24, "height" => 22, "href" => "#", "img_class" => "")))), 2 => array("width" => 24, "elements" => array(0 => array("template" => "img", "options" => array("src" => "~/home-icon.png", "width" => 28, "height" => 22, "href" => "#", "img_class" => "")))))))))));
        // line 91
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "modules/topbar-icons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,  31 => 91,  29 => 19,  28 => 18,  27 => 17,  26 => 16,  25 => 15,  24 => 3,  11 => 1,);
    }
}
/* {% extends "modules/grid.html" %}*/
/* */
/* {% set defaults = {*/
/*     module_class: "module-topbar module-topbar-icons",*/
/*     column_count: 2,*/
/*     gutter_height: 1,*/
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
/*                         width: module.img.width|default(183),*/
/*                         height: module.img.height|default(32),*/
/*                         img_class: module.img.class|default("")*/
/*                     }*/
/*                 }*/
/*             ]*/
/*         },*/
/*         {*/
/*             width: "140",*/
/*             elements: [*/
/*                 {*/
/*                     template: "grid",*/
/*                     options: {*/
/*                         class: "topbar-links",*/
/*                         stack: false,*/
/*                         fix_rounding: false,*/
/*                         fix_outlook: false,*/
/*                         column_count: 3,*/
/*                         column_direction: "rtl",*/
/*                         gutter_height: 24,*/
/*                         columns: [*/
/*                             {*/
/*                                 width: 24,*/
/*                                 elements: [*/
/*                                     {*/
/*                                         template: "img",*/
/*                                         options: {*/
/*                                             src: "~/login-icon.png",*/
/*                                             width: 20,*/
/*                                             height: 22,*/
/*                                             href: "#",*/
/*                                             img_class: ""*/
/*                                         }*/
/*                                     }*/
/*                                 ]*/
/*                             },*/
/*                             {*/
/*                                 width: 24,*/
/*                                 elements: [*/
/*                                     {*/
/*                                         template: "img",*/
/*                                         options: {*/
/*                                             src: "~/news-icon.png",*/
/*                                             width: 24,*/
/*                                             height: 22,*/
/*                                             href: "#",*/
/*                                             img_class: ""*/
/*                                         }*/
/*                                     }*/
/*                                 ]*/
/*                             },*/
/*                             {*/
/*                                 width: 24,*/
/*                                 elements: [*/
/*                                     {*/
/*                                         template: "img",*/
/*                                         options: {*/
/*                                             src: "~/home-icon.png",*/
/*                                             width: 28,*/
/*                                             height: 22,*/
/*                                             href: "#",*/
/*                                             img_class: ""*/
/*                                         }*/
/*                                     }*/
/*                                 ]*/
/*                             }*/
/*                         ]*/
/*                     }*/
/*                 }   */
/*             ]*/
/*         }*/
/*     ]*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/* */
