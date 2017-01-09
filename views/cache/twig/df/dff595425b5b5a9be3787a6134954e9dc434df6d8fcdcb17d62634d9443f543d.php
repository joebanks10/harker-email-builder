<?php

/* elements/element-grid.html */
class __TwigTemplate_24e6e113b0fbee00835b78dc1a8f2b55e982d189590634bdcec2b4f5e55c5564 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("elements/grid.html", "elements/element-grid.html", 1);
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
        $context["defaults"] = array("column_count" => 3, "columns" => call_user_func_array($this->env->getFunction('convert_elements_to_columns')->getCallable(), array((($this->getAttribute(        // line 5
(isset($context["module"]) ? $context["module"] : null), "elements", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "elements", array()), array())) : (array())))));
        // line 8
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "elements/element-grid.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,  27 => 8,  25 => 5,  24 => 3,  11 => 1,);
    }
}
/* {% extends "elements/grid.html" %}*/
/* */
/* {% set defaults = {*/
/*     column_count: 3,*/
/*     columns: convert_elements_to_columns(module.elements|default([]))*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/* */
