<?php

/* elements/img.html */
class __TwigTemplate_6027eb5a2b40cf2f31851ad56719b9f2eac5f9c13214687ba47585c669b35741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("elements/element.html", "elements/img.html", 1);
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
        $context["defaults"] = array("element_class" => "element-img", "src" => "http://dummyimage.com/600x400/cccccc/333333.gif&text=placeholder+image", "alt" => "", "img_class" => "img-full", "img_style" => "", "align" => "center", "width" => "", "href" => "");
        // line 14
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_element_content($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "href", array())) {
            // line 18
            echo "        <a href=\"";
            echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "href", array());
            echo "\">
    ";
        }
        // line 20
        echo "    <img class=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "img_class", array());
        echo "\" width=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "width", array());
        echo "\" style=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "img_style", array());
        echo "\" src=\"";
        echo call_user_func_array($this->env->getFunction('get_image_url')->getCallable(), array($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "src", array())));
        echo "\" alt=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "alt", array());
        echo "\">
    ";
        // line 21
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "href", array())) {
            // line 22
            echo "        </a>
    ";
        }
    }

    public function getTemplateName()
    {
        return "elements/img.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 22,  58 => 21,  45 => 20,  39 => 18,  36 => 17,  33 => 16,  29 => 1,  27 => 14,  25 => 3,  11 => 1,);
    }
}
/* {% extends "elements/element.html" %}*/
/* */
/* {% set defaults = {*/
/*     element_class: "element-img",*/
/*     src: "http://dummyimage.com/600x400/cccccc/333333.gif&text=placeholder+image",*/
/*     alt: "",*/
/*     img_class: "img-full",*/
/*     img_style: "",*/
/*     align: "center",*/
/*     width: "",*/
/*     href: ""*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/* */
/* {% block element_content %}*/
/*     {% if module.href %}*/
/*         <a href="{{ module.href }}">*/
/*     {% endif %}*/
/*     <img class="{{ module.img_class }}" width="{{ module.width }}" style="{{ module.img_style }}" src="{{ get_image_url(module.src) }}" alt="{{ module.alt }}">*/
/*     {% if module.href %}*/
/*         </a>*/
/*     {% endif %}*/
/* {% endblock element_content %}*/
/* */
