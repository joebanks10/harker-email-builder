<?php

/* modules/three-columns.html */
class __TwigTemplate_12ab7cd704e30ef3f1f1d9889fe476e1671f10a6a6b628fa4dc34f4d410aa6a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("modules/grid.html", "modules/three-columns.html", 1);
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
        $context["defaults"] = array("column_count" => 3, "columns" => array(0 => array("elements" => (($this->getAttribute(        // line 7
(isset($context["module"]) ? $context["module"] : null), "content_1", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "content_1", array()), array())) : (array()))), 1 => array("elements" => (($this->getAttribute(        // line 10
(isset($context["module"]) ? $context["module"] : null), "content_2", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "content_2", array()), array())) : (array()))), 2 => array("elements" => (($this->getAttribute(        // line 13
(isset($context["module"]) ? $context["module"] : null), "content_3", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "content_3", array()), array())) : (array())))));
        // line 18
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "modules/three-columns.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 1,  29 => 18,  27 => 13,  26 => 10,  25 => 7,  24 => 3,  11 => 1,);
    }
}
/* {% extends "modules/grid.html" %}*/
/* */
/* {% set defaults = {*/
/*     column_count: 3,*/
/*     columns: [*/
/*         {*/
/*             elements: module.content_1|default([])*/
/*         },*/
/*         {*/
/*             elements: module.content_2|default([])*/
/*         },*/
/*         {*/
/*             elements: module.content_3|default([])*/
/*         }*/
/*     ]*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/* */
