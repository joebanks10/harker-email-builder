<?php

/* elements/header.html */
class __TwigTemplate_8147081636232b99bffaf8d8ce693f518a3deb5b80c8566e7246666c922a4cfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("elements/element.html", "elements/header.html", 1);
        $this->blocks = array(
            'element_content' => array($this, 'block_element_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "elements/element.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["defaults"] = array("element_class" => "header", "text" => "Module Header", "type" => "header", "href" => "");
        // line 10
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 11
        $context["module"] = twig_array_merge((isset($context["module"]) ? $context["module"] : null), array("element_class" => ("header header-" . $this->getAttribute(        // line 12
(isset($context["module"]) ? $context["module"] : null), "type", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_element_content($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "href", array())) {
            // line 17
            echo "        <a href=\"";
            echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "href", array());
            echo "\">
    ";
        }
        // line 19
        echo "    ";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "text", array());
        echo "
    ";
        // line 20
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "href", array())) {
            // line 21
            echo "        </a>
    ";
        }
    }

    public function getTemplateName()
    {
        return "elements/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 21,  53 => 20,  48 => 19,  42 => 17,  39 => 16,  36 => 15,  32 => 1,  30 => 12,  29 => 11,  27 => 10,  25 => 3,  11 => 1,);
    }
}
/* {% extends "elements/element.html" %}*/
/* */
/* {% set defaults = {*/
/*     element_class: "header",*/
/*     text: "Module Header",*/
/*     type: "header",*/
/*     href: ""*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/* {% set module = module|merge({*/
/*     element_class: "header header-#{module.type}"*/
/* }) %}*/
/* */
/* {% block element_content %}*/
/*     {% if module.href %}*/
/*         <a href="{{ module.href }}">*/
/*     {% endif %}*/
/*     {{ module.text }}*/
/*     {% if module.href %}*/
/*         </a>*/
/*     {% endif %}*/
/* {% endblock element_content %}*/
/* */
