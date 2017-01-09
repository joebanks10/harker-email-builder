<?php

/* modules/bottombar.html */
class __TwigTemplate_d0b7f7e265d617cb4c7735ba900056e090e9d0e5d66746dff672dcfb12acf99e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("modules/grid.html", "modules/bottombar.html", 1);
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
        $context["defaults"] = array("module_class" => "module-bottombar", "columns" => array(0 => array("elements" => array(0 => array("template" => "content", "options" => array("text" => "Copyright © The Harker School 2016, All rights reserved."))))));
        // line 19
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "modules/bottombar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 1,  26 => 19,  24 => 3,  11 => 1,);
    }
}
/* {% extends "modules/grid.html" %}*/
/* */
/* {% set defaults = {*/
/*     module_class: "module-bottombar",*/
/*     columns: [*/
/*         {*/
/*             elements: [*/
/*                 {*/
/*                     template: "content",*/
/*                     options: {*/
/*                         text: "Copyright © The Harker School 2016, All rights reserved."*/
/*                     }*/
/*                 }*/
/*             ]*/
/*         }*/
/*     ]*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/* */
