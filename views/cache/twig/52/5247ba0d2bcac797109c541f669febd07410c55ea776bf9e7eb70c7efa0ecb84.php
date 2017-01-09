<?php

/* elements/article-feature.html */
class __TwigTemplate_ba03555a33e0ac9bccc33577eeaee6d8dd29fe5ffc439c2d560b5d07747b056e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("elements/grid.html", "elements/article-feature.html", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "elements/grid.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["defaults"] = array("element_class" => "article-feature", "width" => 600, "gutter_height" => 15, "permalink" => "", "img" => array("href" => $this->getAttribute(        // line 9
(isset($context["module"]) ? $context["module"] : null), "permalink", array()), "img_width" => "100%", "img_class" => "img-full"), "header" => array("text" => "Article Header", "href" => $this->getAttribute(        // line 15
(isset($context["module"]) ? $context["module"] : null), "permalink", array())), "content" => array(), "button" => array("type" => "outline", "button_width" => "100%", "href" => $this->getAttribute(        // line 21
(isset($context["module"]) ? $context["module"] : null), "permalink", array())));
        // line 25
        $context["module"] = call_user_func_array($this->env->getFilter('merge_r')->getCallable(), array((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array()))));
        // line 26
        $context["elements"] = array();
        // line 28
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "header", array())) {
            // line 29
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : null), array(0 => array("template" => "header", "options" => $this->getAttribute(            // line 31
(isset($context["module"]) ? $context["module"] : null), "header", array()))));
        }
        // line 35
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "content", array())) {
            // line 36
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : null), array(0 => array("template" => "content", "options" => $this->getAttribute(            // line 38
(isset($context["module"]) ? $context["module"] : null), "content", array()))));
        }
        // line 42
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "button", array())) {
            // line 43
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : null), array(0 => array("template" => "button", "options" => $this->getAttribute(            // line 45
(isset($context["module"]) ? $context["module"] : null), "button", array()))));
        }
        // line 49
        $context["grid"] = array("column_count" => 2, "columns" => array(0 => array("width" => 186, "elements" => array(0 => array("template" => "img", "options" => $this->getAttribute(        // line 57
(isset($context["module"]) ? $context["module"] : null), "img", array())))), 1 => array("width" => 394, "elements" =>         // line 63
(isset($context["elements"]) ? $context["elements"] : null))));
        // line 68
        $context["module"] = twig_array_merge((isset($context["module"]) ? $context["module"] : null), (isset($context["grid"]) ? $context["grid"] : null));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "elements/article-feature.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 1,  55 => 68,  53 => 63,  52 => 57,  51 => 49,  48 => 45,  47 => 43,  45 => 42,  42 => 38,  41 => 36,  39 => 35,  36 => 31,  35 => 29,  33 => 28,  31 => 26,  29 => 25,  27 => 21,  26 => 15,  25 => 9,  24 => 3,  11 => 1,);
    }
}
/* {% extends "elements/grid.html" %}*/
/* */
/* {% set defaults = {*/
/*     element_class: "article-feature",*/
/*     width: 600,*/
/*     gutter_height: 15,*/
/*     permalink: "",*/
/*     img: {*/
/*         href: module.permalink,*/
/*         img_width: "100%",*/
/*         img_class: "img-full"*/
/*     },*/
/*     header: {*/
/*         text: "Article Header",*/
/*         href: module.permalink*/
/*     },*/
/*     content: {},*/
/*     button: {*/
/*         type: "outline",*/
/*         button_width: "100%",*/
/*         href: module.permalink*/
/*     }*/
/* } %}*/
/* */
/* {% set module = defaults|merge_r(module|default({})) %}*/
/* {% set elements = [] %}*/
/* */
/* {% if module.header %}*/
/*     {% set elements = elements|merge([{ */
/*         template: "header", */
/*         options: module.header */
/*     }]) %}*/
/* {% endif %}*/
/* */
/* {% if module.content %}*/
/*     {% set elements = elements|merge([{ */
/*         template: "content", */
/*         options: module.content */
/*     }]) %}*/
/* {% endif %}*/
/* */
/* {% if module.button %}*/
/*     {% set elements = elements|merge([{ */
/*         template: "button", */
/*         options: module.button */
/*     }]) %}*/
/* {% endif %}*/
/* */
/* {% set grid = {*/
/*     column_count: 2,*/
/*     columns: [*/
/*         {*/
/*             width: 186,*/
/*             elements: [*/
/*                 {*/
/*                     template: "img",*/
/*                     options: module.img*/
/*                 }*/
/*             ]*/
/*         },*/
/*         {*/
/*             width: 394,*/
/*             elements: elements*/
/*         }*/
/*     ]*/
/* } %}*/
/* */
/* {% set module = module|merge(grid) %}*/
/* */
