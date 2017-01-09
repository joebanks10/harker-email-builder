<?php

/* elements/button.html */
class __TwigTemplate_eb365cbbddce8a445be60ab6d6bda15be536f1ca0d35dcbe114f9b5ffbfbfd87 extends Twig_Template
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
        $context["defaults"] = array("element_class" => "element-button", "type" => "primary", "text" => "CTA GOES HERE", "href" => "#", "width" => "", "align" => "left");
        // line 12
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_element_content($context, array $blocks = array())
    {
        // line 15
        echo "    <table class=\"table-button table-button-";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "type", array());
        echo "\" width=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "width", array());
        echo "\" border=\"0\" align=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "align", array());
        echo "\" cellpadding=\"0\" cellspacing=\"0\">
        <tr>
            <td class=\"button\" valign=\"middle\" align=\"center\">
                <a href=\"";
        // line 18
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
        return array (  47 => 18,  36 => 15,  33 => 14,  29 => 1,  27 => 12,  25 => 3,  11 => 1,);
    }
}
/* {% extends "elements/element.html" %}*/
/* */
/* {% set defaults = {*/
/*     element_class: "element-button",*/
/*     type: "primary",*/
/*     text: "CTA GOES HERE",*/
/*     href: "#",*/
/*     width: "",*/
/*     align: "left"*/
/* } %}*/
/* */
/* {% set module = defaults|merge(module|default({})) %}*/
/* */
/* {% block element_content %}*/
/*     <table class="table-button table-button-{{ module.type }}" width="{{ module.width }}" border="0" align="{{ module.align }}" cellpadding="0" cellspacing="0">*/
/*         <tr>*/
/*             <td class="button" valign="middle" align="center">*/
/*                 <a href="{{ module.href }}">{{ module.text }}</a>*/
/*             </td>*/
/*         </tr>*/
/*     </table>*/
/* {% endblock element_content %}*/
/* */
