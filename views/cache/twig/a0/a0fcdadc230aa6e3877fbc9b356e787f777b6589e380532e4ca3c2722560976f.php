<?php

/* elements/subheader.html */
class __TwigTemplate_5938f626592e3309e67d0f00b0b61788980499313086554d75d9bc7d1a5e8a41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("elements/element.html", "elements/subheader.html", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "elements/element.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["defaults"] = array("element_class" => "subheader", "text" => "Module Subheader");
        // line 8
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "elements/subheader.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 1,  26 => 8,  24 => 3,  11 => 1,);
    }
}
/* {% extends "elements/element.html" %}*/
/* */
/* {% set defaults = {*/
/*     element_class: "subheader",*/
/*     text: "Module Subheader"*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/* */
