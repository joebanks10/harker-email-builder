<?php

/* modules/content-sidebar.html */
class __TwigTemplate_f419f8f263db9580ea8f7ace21b6a21b860499fe1d95d9b66bbc428c7dbb4913 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("modules/grid.html", "modules/content-sidebar.html", 1);
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
        $context["defaults"] = array("column_count" => 2, "columns" => array(0 => array("width" => "67%", "elements" => (($this->getAttribute(        // line 8
(isset($context["module"]) ? $context["module"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "content", array()), array())) : (array()))), 1 => array("width" => "33%", "elements" => (($this->getAttribute(        // line 12
(isset($context["module"]) ? $context["module"] : null), "sidebar", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "sidebar", array()), array())) : (array())))));
        // line 17
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "modules/content-sidebar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,  28 => 17,  26 => 12,  25 => 8,  24 => 3,  11 => 1,);
    }
}
/* {% extends "modules/grid.html" %}*/
/* */
/* {% set defaults = {*/
/*     column_count: 2,*/
/*     columns: [*/
/*         {*/
/*             width: "67%",*/
/*             elements: module.content|default([])*/
/*         },*/
/*         {*/
/*             width: "33%",*/
/*             elements: module.sidebar|default([])*/
/*         }*/
/*     ]*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/* */
