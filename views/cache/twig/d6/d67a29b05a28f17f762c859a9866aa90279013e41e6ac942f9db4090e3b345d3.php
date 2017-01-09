<?php

/* elements/date.html */
class __TwigTemplate_5313227ad35058eb1a21f0fffc16775718a917c95962dcefddd64c8c96de50ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("elements/element.html", "elements/date.html", 1);
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
        $context["defaults"] = array("element_class" => "element-date", "text" => "Jan. 1", "width" => "100%", "align" => "center");
        // line 10
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_element_content($context, array $blocks = array())
    {
        // line 13
        echo "    <table class=\"table-date\" width=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "width", array());
        echo "\" border=\"0\" align=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "align", array());
        echo "\" cellpadding=\"0\" cellspacing=\"0\">
        <tr>
            <td class=\"date\">
                ";
        // line 16
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "text", array());
        echo "
            </td>
        </tr>
    </table>
";
    }

    public function getTemplateName()
    {
        return "elements/date.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 16,  36 => 13,  33 => 12,  29 => 1,  27 => 10,  25 => 3,  11 => 1,);
    }
}
/* {% extends "elements/element.html" %}*/
/* */
/* {% set defaults = {*/
/*     element_class: "element-date",*/
/*     text: "Jan. 1",*/
/*     width: "100%",*/
/*     align: "center"*/
/* } %}*/
/* */
/* {% set module = defaults|merge(module|default({})) %}*/
/* */
/* {% block element_content %}*/
/*     <table class="table-date" width="{{ module.width }}" border="0" align="{{ module.align }}" cellpadding="0" cellspacing="0">*/
/*         <tr>*/
/*             <td class="date">*/
/*                 {{ module.text }}*/
/*             </td>*/
/*         </tr>*/
/*     </table>*/
/* {% endblock element_content %}*/
/* */
