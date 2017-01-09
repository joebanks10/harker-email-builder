<?php

/* elements/button.html */
class __TwigTemplate_dc1274c82d048c18b1d9b9b0f3fd8a6e560aa8243b45b5377cc36af94f9f3856 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("elements/element.html", "elements/button.html", 1);
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
        $context["defaults"] = array("element_class" => "element-button", "type" => "primary", "text" => "Learn More", "href" => "#", "width" => "", "button_width" => "", "button_height" => "", "align" => "left");
        // line 14
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_element_content($context, array $blocks = array())
    {
        // line 17
        echo "    <table class=\"table-button table-button-";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "type", array());
        echo "\" width=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "button_width", array());
        echo "\" border=\"0\" align=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "align", array());
        echo "\" cellpadding=\"0\" cellspacing=\"0\">
        <tr>
            <td class=\"button\" valign=\"middle\" align=\"center\" height=\"";
        // line 19
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "button_height", array());
        echo "\">
                <a href=\"";
        // line 20
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "href", array());
        echo "\">";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "text", array());
        echo "</a>
            </td>
        </tr>
    </table>
";
    }

    public function getTemplateName()
    {
        return "elements/button.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 20,  46 => 19,  36 => 17,  33 => 16,  29 => 1,  27 => 14,  25 => 3,  11 => 1,);
    }
}
/* {% extends "elements/element.html" %}*/
/* */
/* {% set defaults = {*/
/*     element_class: "element-button",*/
/*     type: "primary",*/
/*     text: "Learn More",*/
/*     href: "#",*/
/*     width: "",*/
/*     button_width: "",*/
/*     button_height: "",*/
/*     align: "left"*/
/* } %}*/
/* */
/* {% set module = defaults|merge(module|default({})) %}*/
/* */
/* {% block element_content %}*/
/*     <table class="table-button table-button-{{ module.type }}" width="{{ module.button_width }}" border="0" align="{{ module.align }}" cellpadding="0" cellspacing="0">*/
/*         <tr>*/
/*             <td class="button" valign="middle" align="center" height="{{ module.button_height }}">*/
/*                 <a href="{{ module.href }}">{{ module.text }}</a>*/
/*             </td>*/
/*         </tr>*/
/*     </table>*/
/* {% endblock element_content %}*/
/* */
