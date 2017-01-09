<?php

/* modules/module.html */
class __TwigTemplate_0523ba50b16e5783dfc62515523e2a0c90fc8ba4a208ac7f79cffa9c3bc019a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["grid"] = $this->loadTemplate("elements/grid.html", "modules/module.html", 1);
        // line 2
        echo "
";
        // line 3
        $context["defaults"] = array("id" => "", "module_class" => "", "class" => "", "style" => "", "attributes" => "", "width" => 600, "collapse_gutters" => false, "table_style" => "", "background_img" => "", "background_style" => "", "header" => array(), "content" => array(), "footer" => array());
        // line 18
        echo "
";
        // line 19
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 20
        echo "
";
        // line 21
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "collapse_gutters", array())) {
            // line 22
            echo "    ";
            $context["table_inner_class"] = "table-full";
        } else {
            // line 24
            echo "    ";
            $context["table_inner_class"] = "table-inner";
        }
        // line 26
        echo "
";
        // line 27
        $context["bg_img"] = call_user_func_array($this->env->getFunction('get_image_url')->getCallable(), array($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "background_img", array())));
        // line 28
        echo "
<table id=\"";
        // line 29
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
        // line 31
        echo call_user_func_array($this->env->getFunction('get_image_url')->getCallable(), array($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "background_img", array())));
        echo "\" style=\"text-align: center;";
        if ((isset($context["bg_img"]) ? $context["bg_img"] : null)) {
            echo " background-image: url(";
            echo call_user_func_array($this->env->getFunction('get_image_url')->getCallable(), array($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "background_img", array())));
            echo ");";
        }
        echo " ";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "background_style", array());
        echo "\">
            <center>
                <table align=\"center\" class=\"";
        // line 33
        echo (isset($context["table_inner_class"]) ? $context["table_inner_class"] : null);
        echo "\" width=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "width", array());
        echo "\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                    <tr>
                        <td class=\"container\" style=\"";
        // line 35
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "style", array());
        echo "\">
                            ";
        // line 36
        $this->displayBlock('container', $context, $blocks);
        // line 53
        echo "                        </td>
                    </tr>
                </table>
            </center>
        </td>
    </tr>
</table>";
    }

    // line 36
    public function block_container($context, array $blocks = array())
    {
        // line 37
        echo "                                <table width=\"100%\" align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "header", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 39
            echo "                                        ";
            echo $context["grid"]->getelement($context["element"], $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "width", array()));
            echo "
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                                    
                                    ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "                                    
                                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "footer", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 49
            echo "                                        ";
            echo $context["grid"]->getelement($context["element"], $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "width", array()));
            echo "
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                                </table>
                            ";
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        // line 43
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "content", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 44
            echo "                                            ";
            echo $context["grid"]->getelement($context["element"], $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "width", array()));
            echo "
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                                    ";
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
        return array (  165 => 46,  156 => 44,  151 => 43,  148 => 42,  143 => 51,  134 => 49,  130 => 48,  127 => 47,  125 => 42,  122 => 41,  113 => 39,  109 => 38,  106 => 37,  103 => 36,  93 => 53,  91 => 36,  87 => 35,  80 => 33,  67 => 31,  54 => 29,  51 => 28,  49 => 27,  46 => 26,  42 => 24,  38 => 22,  36 => 21,  33 => 20,  31 => 19,  28 => 18,  26 => 3,  23 => 2,  21 => 1,);
    }
}
/* {% import "elements/grid.html" as grid %}*/
/* */
/* {% set defaults = {*/
/*     id: "",*/
/*     module_class: "",*/
/*     class: "",*/
/*     style: "",*/
/*     attributes: "",*/
/*     width: 600,*/
/*     collapse_gutters: false,*/
/*     table_style: "",*/
/*     background_img: "",*/
/*     background_style: "",*/
/*     header: [],*/
/*     content: [],*/
/*     footer: []*/
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
/* {% set bg_img = get_image_url(module.background_img) %}*/
/* */
/* <table id="{{ module.id }}" class="module {{ module.module_class }} {{ module_classes(module.class) }}" style="{{ module.table_style }}" align="center" width="100%" border="0" cellspacing="0" cellpadding="0" {{ module.attributes }}>*/
/*     <tr>*/
/*         <td class="background" align="center" background="{{ get_image_url(module.background_img) }}" style="text-align: center;{% if bg_img %} background-image: url({{ get_image_url(module.background_img) }});{% endif %} {{ module.background_style }}">*/
/*             <center>*/
/*                 <table align="center" class="{{ table_inner_class }}" width="{{ module.width }}" border="0" cellspacing="0" cellpadding="0">*/
/*                     <tr>*/
/*                         <td class="container" style="{{ module.style }}">*/
/*                             {% block container %}*/
/*                                 <table width="100%" align="center" border="0" cellspacing="0" cellpadding="0">*/
/*                                     {% for element in module.header %}*/
/*                                         {{ grid.element(element, module.width) }}*/
/*                                     {% endfor %}*/
/*                                     */
/*                                     {% block content %}*/
/*                                         {% for element in module.content %}*/
/*                                             {{ grid.element(element, module.width) }}*/
/*                                         {% endfor %}*/
/*                                     {% endblock content %}*/
/*                                     */
/*                                     {% for element in module.footer %}*/
/*                                         {{ grid.element(element, module.width) }}*/
/*                                     {% endfor %}*/
/*                                 </table>*/
/*                             {% endblock container %}*/
/*                         </td>*/
/*                     </tr>*/
/*                 </table>*/
/*             </center>*/
/*         </td>*/
/*     </tr>*/
/* </table>*/
