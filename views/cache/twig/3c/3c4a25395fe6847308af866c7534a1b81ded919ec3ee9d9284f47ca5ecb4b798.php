<?php

/* modules/module.html */
class __TwigTemplate_4fcc51e4b533a4b33473823b83f012a1ed0a15243cb267377709139f1b0bedda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["defaults"] = array("id" => "", "module_class" => "", "class" => "", "style" => "", "attributes" => "", "text" => "", "width" => 600, "collapse_gutters" => false, "table_style" => "", "background_img" => "", "background_style" => "");
        // line 14
        echo "
";
        // line 15
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 16
        echo "
";
        // line 17
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "collapse_gutters", array())) {
            // line 18
            echo "    ";
            $context["table_inner_class"] = "table-full";
        } else {
            // line 20
            echo "    ";
            $context["table_inner_class"] = "table-inner";
        }
        // line 22
        echo "
<table id=\"";
        // line 23
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "id", array());
        echo "\" class=\"module ";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "module_class", array());
        echo " ";
        echo call_user_func_array($this->env->getFunction('module_classes')->getCallable(), array($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "class", array())));
        echo "\" style=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "table_style", array());
        echo "\" align=\"center\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" ";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array());
        echo ">
    <tr>
        <td class=\"background\" align=\"center\" background=\"";
        // line 25
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "background_img", array());
        echo "\" style=\"background-image: url(";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "background_img", array());
        echo ") ";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "background_style", array());
        echo "\">
            <table align=\"center\" class=\"";
        // line 26
        echo (isset($context["table_inner_class"]) ? $context["table_inner_class"] : null);
        echo "\" width=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "width", array());
        echo "\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                <tr>
                    <td class=\"container\" style=\"";
        // line 28
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "style", array());
        echo "\">
                        ";
        // line 29
        $this->displayBlock('container', $context, $blocks);
        // line 38
        echo "                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>";
    }

    // line 29
    public function block_container($context, array $blocks = array())
    {
        // line 30
        echo "                            <table widht=\"100%\" align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                <tr>
                                    <td class=\"content\">
                                        ";
        // line 33
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "text", array());
        echo "
                                    </td>
                                </tr>
                            </table>
                        ";
    }

    public function getTemplateName()
    {
        return "modules/module.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 33,  89 => 30,  86 => 29,  77 => 38,  75 => 29,  71 => 28,  64 => 26,  56 => 25,  43 => 23,  40 => 22,  36 => 20,  32 => 18,  30 => 17,  27 => 16,  25 => 15,  22 => 14,  20 => 1,);
    }
}
/* {% set defaults = {*/
/*     id: "",*/
/*     module_class: "",*/
/*     class: "",*/
/*     style: "",*/
/*     attributes: "",*/
/*     text: "",*/
/*     width: 600,*/
/*     collapse_gutters: false,*/
/*     table_style: "",*/
/*     background_img: "",*/
/*     background_style: ""*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/* */
/* {% if module.collapse_gutters %}*/
/*     {% set table_inner_class = "table-full" %}*/
/* {% else %}*/
/*     {% set table_inner_class = "table-inner" %}*/
/* {% endif %}*/
/* */
/* <table id="{{ module.id }}" class="module {{ module.module_class }} {{ module_classes(module.class) }}" style="{{ module.table_style }}" align="center" width="100%" border="0" cellspacing="0" cellpadding="0" {{ module.attributes }}>*/
/*     <tr>*/
/*         <td class="background" align="center" background="{{ module.background_img }}" style="background-image: url({{ module.background_img }}) {{ module.background_style }}">*/
/*             <table align="center" class="{{ table_inner_class }}" width="{{ module.width }}" border="0" cellspacing="0" cellpadding="0">*/
/*                 <tr>*/
/*                     <td class="container" style="{{ module.style }}">*/
/*                         {% block container %}*/
/*                             <table widht="100%" align="center" border="0" cellspacing="0" cellpadding="0">*/
/*                                 <tr>*/
/*                                     <td class="content">*/
/*                                         {{ module.text }}*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             </table>*/
/*                         {% endblock container %}*/
/*                     </td>*/
/*                 </tr>*/
/*             </table>*/
/*         </td>*/
/*     </tr>*/
/* </table>*/
