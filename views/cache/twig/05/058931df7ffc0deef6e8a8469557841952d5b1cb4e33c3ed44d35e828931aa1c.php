<?php

/* modules/topbar.html */
class __TwigTemplate_de62887d99a4c775ddf78b58feaf3d091959a226644ceae7a9f6f7bf95919ff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("modules/grid.html", "modules/topbar.html", 1);
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
        $context["defaults"] = array("module_class" => "module-topbar", "columns" => array(0 => array("width" => "auto", "elements" => array(0 => array("template" => "img", "options" => array("class" => "logo-container", "src" => (($this->getAttribute($this->getAttribute(        // line 13
(isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "src", array()), "http://skylark.harker.org/email-builder/assets/img/img0.png")) : ("http://skylark.harker.org/email-builder/assets/img/img0.png")), "alt" => (($this->getAttribute($this->getAttribute(        // line 14
(isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "alt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "alt", array()), "Harker Logo")) : ("Harker Logo")), "width" => (($this->getAttribute($this->getAttribute(        // line 15
(isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "width", array()), 215)) : (215)), "img_class" => (($this->getAttribute($this->getAttribute(        // line 16
(isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "img", array(), "any", false, true), "class", array()), "")) : (""))))))));
        // line 24
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "modules/topbar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 1,  30 => 24,  28 => 16,  27 => 15,  26 => 14,  25 => 13,  24 => 3,  11 => 1,);
    }
}
/* {% extends "modules/grid.html" %}*/
/* */
/* {% set defaults = {*/
/*     module_class: "module-topbar",*/
/*     columns: [*/
/*         {*/
/*             width: "auto",*/
/*             elements: [*/
/*                 {*/
/*                     template: "img",*/
/*                     options: {*/
/*                         class: "logo-container",*/
/*                         src: module.img.src|default("http://skylark.harker.org/email-builder/assets/img/img0.png"),*/
/*                         alt: module.img.alt|default("Harker Logo"),*/
/*                         width: module.img.width|default(215),*/
/*                         img_class: module.img.class|default("")*/
/*                     }*/
/*                 }*/
/*             ]*/
/*         }*/
/*     ]*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/* */
