<?php

/* elements/element.html */
class __TwigTemplate_ca6f9e284a2f71277f59b88997e8a04eb0add02761cf3331fdc5385deec502c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'element_content' => array($this, 'block_element_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["defaults"] = array("id" => "", "element_class" => "", "class" => "", "style" => "", "align" => "left", "valign" => "top", "width" => "", "attributes" => "", "text" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit.");
        // line 12
        echo "
";
        // line 13
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 14
        echo "
<td id=\"";
        // line 15
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "id", array());
        echo "\" class=\"element ";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "element_class", array());
        echo " ";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "class", array());
        echo "\" width=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "width", array());
        echo "\" style=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "style", array());
        echo "\" align=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "align", array());
        echo "\" valign=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "valign", array());
        echo "\" ";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array());
        echo ">
    ";
        // line 16
        $this->displayBlock('element_content', $context, $blocks);
        // line 19
        echo "</td>
";
    }

    // line 16
    public function block_element_content($context, array $blocks = array())
    {
        // line 17
        echo "        ";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "text", array());
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "elements/element.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  55 => 16,  50 => 19,  48 => 16,  30 => 15,  27 => 14,  25 => 13,  22 => 12,  20 => 1,);
    }
}
/* {% set defaults = {*/
/*     id: "",*/
/*     element_class: "",*/
/*     class: "",*/
/*     style: "",*/
/*     align: "left",*/
/*     valign: "top",*/
/*     width: "",*/
/*     attributes: "",*/
/*     text: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit."*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/* */
/* <td id="{{ module.id }}" class="element {{ module.element_class }} {{ module.class }}" width="{{ module.width }}" style="{{ module.style }}" align="{{ module.align }}" valign="{{ module.valign }}" {{ module.attributes }}>*/
/*     {% block element_content %}*/
/*         {{ module.text }}*/
/*     {% endblock element_content %}*/
/* </td>*/
/* */
