<?php

/* elements/header.html */
class __TwigTemplate_51304a537e4c7669f52b77c87e3f9594057fed913869a89e353d600ef284e3c6 extends Twig_Template
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
        $context["defaults"] = array("element_class" => "header", "text" => "Module Header", "href" => "");
        // line 9
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_element_content($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "href", array())) {
            // line 13
            echo "        <a href=\"";
            echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "href", array());
            echo "\">
    ";
        }
        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "text", array());
        echo "
    ";
        // line 16
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "href", array())) {
            // line 17
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
        return array (  52 => 17,  50 => 16,  45 => 15,  39 => 13,  36 => 12,  33 => 11,  29 => 1,  27 => 9,  25 => 3,  11 => 1,);
    }
}
/* {% extends "elements/element.html" %}*/
/* */
/* {% set defaults = {*/
/*     element_class: "header",*/
/*     text: "Module Header",*/
/*     href: ""*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
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
