<?php

/* elements/date.html */
class __TwigTemplate_e0b457b9274ee44ea19e1c96e118ae22249ee1cdf7d576b02015921a78719bc1 extends Twig_Template
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
        $context["defaults"] = array("element_class" => "element-date", "text" => "Jan. 1", "width" => "100%", "align" => "center", "background_img" => "~/date-bg.png", "background_style" => "");
        // line 12
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_element_content($context, array $blocks = array())
    {
        // line 15
        echo "    <table class=\"table-date\" width=\"100%\" border=\"0\" align=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "align", array());
        echo "\" cellpadding=\"0\" cellspacing=\"0\" background=\"";
        echo call_user_func_array($this->env->getFunction('get_image_url')->getCallable(), array($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "background_img", array())));
        echo "\" style=\"background-image: url(";
        echo call_user_func_array($this->env->getFunction('get_image_url')->getCallable(), array($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "background_img", array())));
        echo ") ";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "background_style", array());
        echo "\">
        <tr>
            <td class=\"date\">
                ";
        // line 18
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
        return array (  49 => 18,  36 => 15,  33 => 14,  29 => 1,  27 => 12,  25 => 3,  11 => 1,);
    }
}
/* {% extends "elements/element.html" %}*/
/* */
/* {% set defaults = {*/
/*     element_class: "element-date",*/
/*     text: "Jan. 1",*/
/*     width: "100%",*/
/*     align: "center",*/
/*     background_img: "~/date-bg.png",*/
/*     background_style: ""*/
/* } %}*/
/* */
/* {% set module = defaults|merge(module|default({})) %}*/
/* */
/* {% block element_content %}*/
/*     <table class="table-date" width="100%" border="0" align="{{ module.align }}" cellpadding="0" cellspacing="0" background="{{ get_image_url(module.background_img) }}" style="background-image: url({{ get_image_url(module.background_img) }}) {{ module.background_style }}">*/
/*         <tr>*/
/*             <td class="date">*/
/*                 {{ module.text }}*/
/*             </td>*/
/*         </tr>*/
/*     </table>*/
/* {% endblock element_content %}*/
/* */
