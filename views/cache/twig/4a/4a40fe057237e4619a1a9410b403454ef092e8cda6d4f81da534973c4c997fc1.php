<?php

/* elements/element.html */
class __TwigTemplate_c58f37fbf72addf1134dbf6cfe1d35c0ca4af4f48f0e9f09442dddba1a4be4cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'element' => array($this, 'block_element'),
            'element_content' => array($this, 'block_element_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["defaults"] = array("id" => "", "element_class" => "", "class" => "", "style" => "", "align" => "left", "valign" => "top", "width" => "100%", "height" => "", "attributes" => "", "text" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit.");
        // line 13
        echo "
";
        // line 14
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('element', $context, $blocks);
    }

    public function block_element($context, array $blocks = array())
    {
        // line 17
        echo "    <td id=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "id", array());
        echo "\" class=\"element ";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "element_class", array());
        echo " ";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "class", array());
        echo "\" width=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "width", array());
        echo "\" height=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "height", array());
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
        // line 18
        $this->displayBlock('element_content', $context, $blocks);
        // line 21
        echo "    </td>
";
    }

    // line 18
    public function block_element_content($context, array $blocks = array())
    {
        // line 19
        echo "            ";
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
        return array (  68 => 19,  65 => 18,  60 => 21,  58 => 18,  37 => 17,  31 => 16,  28 => 15,  26 => 14,  23 => 13,  21 => 1,);
    }
}
/* {% set defaults = {*/
/*     id: "",*/
/*     element_class: "",*/
/*     class: "",*/
/*     style: "",*/
/*     align: "left",*/
/*     valign: "top",*/
/*     width: "100%",*/
/*     height: "",*/
/*     attributes: "",*/
/*     text: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit."*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/* */
/* {% block element %}*/
/*     <td id="{{ module.id }}" class="element {{ module.element_class }} {{ module.class }}" width="{{ module.width }}" height="{{ module.height }}" style="{{ module.style }}" align="{{ module.align }}" valign="{{ module.valign }}" {{ module.attributes }}>*/
/*         {% block element_content %}*/
/*             {{ module.text }}*/
/*         {% endblock element_content %}*/
/*     </td>*/
/* {% endblock element %}*/
/* */
