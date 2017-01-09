<?php

/* modules/footer.html */
class __TwigTemplate_7ce8f6c4405d6d3e4e947519218fc8fafeee9e97dcbccbc768f64b34ab8e2c79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("modules/grid.html", "modules/footer.html", 1);
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
        $context["defaults"] = array("module_class" => "module-footer", "column_count" => 2, "columns" => array(0 => array("elements" => (($this->getAttribute(        // line 8
(isset($context["module"]) ? $context["module"] : null), "column_1", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "column_1", array()), array(0 => array("template" => "header", "options" => array("text" => "Social Media")), 1 => array("template" => "list", "options" => array("type" => "unstyled", "items" => array(0 => "<a href=\"http://facebook.com/harkerschool\">facebook.com/harkerschool</a>", 1 => "<a href=\"http://twitter.com/harkerschool\">twitter.com/harkerschool</a>", 2 => "<a href=\"http://instagram.com/harkerschool\">instagram.com/harkerschool</a>", 3 => "<a href=\"http://youtube.com/harkerschool\">youtube.com/harkerschool</a>")))))) : (array(0 => array("template" => "header", "options" => array("text" => "Social Media")), 1 => array("template" => "list", "options" => array("type" => "unstyled", "items" => array(0 => "<a href=\"http://facebook.com/harkerschool\">facebook.com/harkerschool</a>", 1 => "<a href=\"http://twitter.com/harkerschool\">twitter.com/harkerschool</a>", 2 => "<a href=\"http://instagram.com/harkerschool\">instagram.com/harkerschool</a>", 3 => "<a href=\"http://youtube.com/harkerschool\">youtube.com/harkerschool</a>"))))))), 1 => array("elements" => (($this->getAttribute(        // line 30
(isset($context["module"]) ? $context["module"] : null), "column_2", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "column_2", array()), array(0 => array("template" => "header", "options" => array("text" => "Contact Us")), 1 => array("template" => "content", "options" => array("text" => "500 Saratoga Ave., San Jose 95129<br>
                               <a href=\"mailto:communications@harker.org\">communications@harker.org</a>"))))) : (array(0 => array("template" => "header", "options" => array("text" => "Contact Us")), 1 => array("template" => "content", "options" => array("text" => "500 Saratoga Ave., San Jose 95129<br>
                               <a href=\"mailto:communications@harker.org\">communications@harker.org</a>"))))))));
        // line 49
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "modules/footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 1,  30 => 49,  26 => 30,  25 => 8,  24 => 3,  11 => 1,);
    }
}
/* {% extends "modules/grid.html" %}*/
/* */
/* {% set defaults = {*/
/*     module_class: "module-footer",*/
/*     column_count: 2,*/
/*     columns: [*/
/*         {*/
/*             elements: module.column_1|default([*/
/*                 {*/
/*                     template: "header",*/
/*                     options: {*/
/*                         text: "Social Media"*/
/*                     }*/
/*                 },*/
/*                 {*/
/*                     template: "list",*/
/*                     options: {*/
/*                         type: "unstyled",*/
/*                         items: [*/
/*                             '<a href="http://facebook.com/harkerschool">facebook.com/harkerschool</a>',*/
/*                             '<a href="http://twitter.com/harkerschool">twitter.com/harkerschool</a>',*/
/*                             '<a href="http://instagram.com/harkerschool">instagram.com/harkerschool</a>',*/
/*                             '<a href="http://youtube.com/harkerschool">youtube.com/harkerschool</a>'*/
/*                         ]*/
/*                     }*/
/*                 }*/
/*             ])*/
/*         },*/
/*         {*/
/*             elements: module.column_2|default([*/
/*                 {*/
/*                     template: "header",*/
/*                     options: {*/
/*                         text: "Contact Us"*/
/*                     }*/
/*                 },*/
/*                 {*/
/*                     template: "content",*/
/*                     options: {*/
/*                         text: '500 Saratoga Ave., San Jose 95129<br>*/
/*                                <a href="mailto:communications@harker.org">communications@harker.org</a>'*/
/*                     }*/
/*                 }*/
/*             ])*/
/*         }*/
/*     ]*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/* */
