<?php

/* modules/one-column.html */
class __TwigTemplate_590971fb4401351864b16935b972760116be7efc6b63ed8e8a04d2c38cdae2c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("modules/grid.html", "modules/one-column.html", 1);
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
        $context["defaults"] = array("columns" => array(0 => array("elements" => (($this->getAttribute(        // line 6
(isset($context["module"]) ? $context["module"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "content", array()), array())) : (array())))));
        // line 11
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "modules/one-column.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,  27 => 11,  25 => 6,  24 => 3,  11 => 1,);
    }
}
/* {% extends "modules/grid.html" %}*/
/* */
/* {% set defaults = {*/
/*     columns: [*/
/*         {*/
/*             elements: module.content|default([])*/
/*         }*/
/*     ]*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/* */
