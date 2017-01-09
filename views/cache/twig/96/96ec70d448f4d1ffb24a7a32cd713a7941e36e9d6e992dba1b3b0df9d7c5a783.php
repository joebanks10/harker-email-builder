<?php

/* modules/two-columns.html */
class __TwigTemplate_331e608cc44f4eacb60a4c4b1516a5a68b5f906a4ac02b6032684c729bab9d68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("modules/grid.html", "modules/two-columns.html", 1);
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
        $context["defaults"] = array("column_count" => 2, "columns" => array(0 => array("elements" => (($this->getAttribute(        // line 7
(isset($context["module"]) ? $context["module"] : null), "content_1", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "content_1", array()), array())) : (array()))), 1 => array("elements" => (($this->getAttribute(        // line 10
(isset($context["module"]) ? $context["module"] : null), "content_2", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "content_2", array()), array())) : (array())))));
        // line 15
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "modules/two-columns.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,  28 => 15,  26 => 10,  25 => 7,  24 => 3,  11 => 1,);
    }
}
/* {% extends "modules/grid.html" %}*/
/* */
/* {% set defaults = {*/
/*     column_count: 2,*/
/*     columns: [*/
/*         {*/
/*             elements: module.content_1|default([])*/
/*         },*/
/*         {*/
/*             elements: module.content_2|default([])*/
/*         }*/
/*     ]*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/* */
