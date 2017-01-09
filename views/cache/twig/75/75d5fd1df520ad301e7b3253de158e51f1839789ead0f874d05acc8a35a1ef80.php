<?php

/* elements/grid.html */
class __TwigTemplate_239dd4c09ef40eee98c770f0bca4cc37f6fd9cc0e4151c4406c6710549af2f62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("elements/element.html", "elements/grid.html", 1);
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
        // line 2
        $context["grid"] = $this;
        // line 4
        $context["defaults"] = array("element_class" => "element-grid", "width" => 600, "column_count" => 1, "column_direction" => "ltr", "gutter_width" => 20, "gutter_height" => 30, "stack" => true, "fix_rounding" => true, "fix_outlook" => true, "columns" => array());
        // line 17
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_element_content($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $context["column_align"] = call_user_func_array($this->env->getFunction('table_position')->getCallable(), array($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "column_direction", array())));
        // line 21
        echo "
    ";
        // line 22
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "fix_rounding", array())) {
            // line 23
            echo "        ";
            $context["column_align_last"] = call_user_func_array($this->env->getFunction('opposite_direction')->getCallable(), array((isset($context["column_align"]) ? $context["column_align"] : null)));
            // line 24
            echo "    ";
        } else {
            // line 25
            echo "        ";
            $context["column_align_last"] = (isset($context["column_align"]) ? $context["column_align"] : null);
            // line 26
            echo "    ";
        }
        // line 27
        echo "
    ";
        // line 28
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "stack", array())) {
            // line 29
            echo "        ";
            $context["column_class"] = "table-full";
            // line 30
            echo "    ";
        } else {
            // line 31
            echo "        ";
            $context["column_class"] = "";
            // line 32
            echo "    ";
        }
        // line 33
        echo "
    <table class=\"table-full\" align=\"center\" width=\"";
        // line 34
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "width", array());
        echo "\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "columns", array()), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "column_count", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 36
            echo "            <tr>
                <td class=\"row\" valign=\"top\">
                    ";
            // line 38
            if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "fix_outlook", array())) {
                // line 39
                echo "                        <!--[if gte mso 12]>
                            <table align=\"center\" width=\"";
                // line 40
                echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "width", array());
                echo "\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                <tr>
                        <![endif]-->
                    ";
            }
            // line 44
            echo "
                    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 46
                echo "                        ";
                $context["column_width"] = call_user_func_array($this->env->getFunction('get_column_width')->getCallable(), array($context["column"], (isset($context["module"]) ? $context["module"] : null)));
                // line 47
                echo "
                        ";
                // line 48
                if (twig_in_filter($this->getAttribute($context["loop"], "index", array()), range(1, ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "column_count", array()) - 1)))) {
                    // line 49
                    echo "                            ";
                    if ((($this->getAttribute($context["loop"], "index", array()) == 1) && $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "fix_outlook", array()))) {
                        // line 50
                        echo "                                <!--[if gte mso 12]>
                                    <td valign=\"top\" width=\"";
                        // line 51
                        echo (isset($context["column_width"]) ? $context["column_width"] : null);
                        echo "\">
                                <![endif]-->
                            ";
                    } elseif ($this->getAttribute(                    // line 53
(isset($context["module"]) ? $context["module"] : null), "fix_outlook", array())) {
                        // line 54
                        echo "                                <!--[if gte mso 12]>
                                   </td><td valign=\"top\" width=\"";
                        // line 55
                        echo (isset($context["column_width"]) ? $context["column_width"] : null);
                        echo "\">
                                <![endif]-->
                            ";
                    }
                    // line 58
                    echo "
                            <table class=\"";
                    // line 59
                    echo (isset($context["column_class"]) ? $context["column_class"] : null);
                    echo "\" width=\"";
                    echo (isset($context["column_width"]) ? $context["column_width"] : null);
                    echo "\" border=\"0\" align=\"";
                    echo (isset($context["column_align"]) ? $context["column_align"] : null);
                    echo "\" cellpadding=\"0\" cellspacing=\"0\">
                                ";
                    // line 60
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "elements", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                        // line 61
                        echo "                                    ";
                        echo $context["grid"]->getelement($context["element"], (isset($context["column_width"]) ? $context["column_width"] : null));
                        echo "
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    echo "                            </table>
                            ";
                    // line 64
                    if (($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "column_count", array()) != 1)) {
                        // line 65
                        echo "                                ";
                        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "fix_outlook", array())) {
                            // line 66
                            echo "                                    <!--[if gte mso 12]>
                                       </td><td valign=\"top\" width=\"1\">
                                    <![endif]-->
                                ";
                        }
                        // line 70
                        echo "
                                <table width=\"1\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"";
                        // line 71
                        echo (isset($context["column_align"]) ? $context["column_align"] : null);
                        echo "\">
                                    <tr>
                                        <td height=\"";
                        // line 73
                        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "gutter_height", array());
                        echo "\" style=\"font-size: 0;line-height: 0;border-collapse: collapse;\">
                                            <p style=\"padding-left: ";
                        // line 74
                        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "gutter_width", array());
                        echo "px;\">&nbsp;</p>
                                        </td>
                                    </tr>
                                </table>
                            ";
                    }
                    // line 79
                    echo "                        ";
                } else {
                    // line 80
                    echo "                            ";
                    if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "fix_outlook", array())) {
                        // line 81
                        echo "                                <!--[if gte mso 12]>
                                   </td><td valign=\"top\" width=\"";
                        // line 82
                        echo (isset($context["column_width"]) ? $context["column_width"] : null);
                        echo "\">
                                <![endif]-->
                            ";
                    }
                    // line 85
                    echo "
                            <table class=\"";
                    // line 86
                    echo (isset($context["column_class"]) ? $context["column_class"] : null);
                    echo "\" width=\"";
                    echo (isset($context["column_width"]) ? $context["column_width"] : null);
                    echo "\" border=\"0\" align=\"";
                    echo (isset($context["column_align_last"]) ? $context["column_align_last"] : null);
                    echo "\" cellpadding=\"0\" cellspacing=\"0\">
                                ";
                    // line 87
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "elements", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                        // line 88
                        echo "                                    ";
                        echo $context["grid"]->getelement($context["element"], (isset($context["column_width"]) ? $context["column_width"] : null));
                        echo "
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 90
                    echo "                            </table>
                        ";
                }
                // line 92
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "
                    ";
            // line 94
            if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "fix_outlook", array())) {
                // line 95
                echo "                        <!--[if gte mso 12]>
                            </td></tr></table>
                        <![endif]-->
                    ";
            }
            // line 99
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "    </table>
";
    }

    // line 105
    public function getelement($__element__ = null, $__column_width__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "element" => $__element__,
            "column_width" => $__column_width__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 106
            echo "    ";
            $context["grid_templates"] = array(0 => "grid", 1 => "element-grid", 2 => "article-grid");
            // line 107
            echo "
    ";
            // line 108
            if (twig_in_filter($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "template", array()), (isset($context["grid_templates"]) ? $context["grid_templates"] : null))) {
                // line 109
                echo "        ";
                $context["options"] = twig_array_merge(array("width" => (isset($context["column_width"]) ? $context["column_width"] : null)), (($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "options", array()), array())) : (array())));
                // line 110
                echo "    ";
            } else {
                // line 111
                echo "        ";
                $context["options"] = (($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "options", array()), array())) : (array()));
                // line 112
                echo "    ";
            }
            // line 113
            echo "
    <tr>
        ";
            // line 115
            $this->loadTemplate((("elements/" . $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "template", array())) . ".html"), "elements/grid.html", 115)->display(array_merge($context, array("module" => (isset($context["options"]) ? $context["options"] : null))));
            // line 116
            echo "    </tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "elements/grid.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 116,  328 => 115,  324 => 113,  321 => 112,  318 => 111,  315 => 110,  312 => 109,  310 => 108,  307 => 107,  304 => 106,  291 => 105,  286 => 102,  278 => 99,  272 => 95,  270 => 94,  267 => 93,  253 => 92,  249 => 90,  240 => 88,  236 => 87,  228 => 86,  225 => 85,  219 => 82,  216 => 81,  213 => 80,  210 => 79,  202 => 74,  198 => 73,  193 => 71,  190 => 70,  184 => 66,  181 => 65,  179 => 64,  176 => 63,  167 => 61,  163 => 60,  155 => 59,  152 => 58,  146 => 55,  143 => 54,  141 => 53,  136 => 51,  133 => 50,  130 => 49,  128 => 48,  125 => 47,  122 => 46,  105 => 45,  102 => 44,  95 => 40,  92 => 39,  90 => 38,  86 => 36,  82 => 35,  78 => 34,  75 => 33,  72 => 32,  69 => 31,  66 => 30,  63 => 29,  61 => 28,  58 => 27,  55 => 26,  52 => 25,  49 => 24,  46 => 23,  44 => 22,  41 => 21,  38 => 20,  35 => 19,  31 => 1,  29 => 17,  27 => 4,  25 => 2,  11 => 1,);
    }
}
/* {% extends "elements/element.html" %}*/
/* {% import _self as grid %}*/
/* */
/* {% set defaults = {*/
/*     element_class: "element-grid",*/
/*     width: 600,*/
/*     column_count: 1,*/
/*     column_direction: 'ltr',*/
/*     gutter_width: 20,*/
/*     gutter_height: 30,*/
/*     stack: true,*/
/*     fix_rounding: true,*/
/*     fix_outlook: true,*/
/*     columns: []*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/* */
/* {% block element_content %}*/
/*     {% set column_align = table_position(module.column_direction) %}*/
/* */
/*     {% if module.fix_rounding %}*/
/*         {% set column_align_last = opposite_direction(column_align) %}*/
/*     {% else %}*/
/*         {% set column_align_last = column_align %}*/
/*     {% endif %}*/
/* */
/*     {% if module.stack %}*/
/*         {% set column_class = 'table-full' %}*/
/*     {% else %}*/
/*         {% set column_class = '' %}*/
/*     {% endif %}*/
/* */
/*     <table class="table-full" align="center" width="{{ module.width }}" border="0" cellspacing="0" cellpadding="0">*/
/*         {% for row in module.columns|batch(module.column_count) %}*/
/*             <tr>*/
/*                 <td class="row" valign="top">*/
/*                     {% if module.fix_outlook %}*/
/*                         <!--[if gte mso 12]>*/
/*                             <table align="center" width="{{ module.width }}" border="0" cellspacing="0" cellpadding="0">*/
/*                                 <tr>*/
/*                         <![endif]-->*/
/*                     {% endif %}*/
/* */
/*                     {% for column in row %}*/
/*                         {% set column_width = get_column_width(column, module) %}*/
/* */
/*                         {% if loop.index in range(1, module.column_count - 1) %}*/
/*                             {% if loop.index == 1 and module.fix_outlook %}*/
/*                                 <!--[if gte mso 12]>*/
/*                                     <td valign="top" width="{{ column_width }}">*/
/*                                 <![endif]-->*/
/*                             {% elseif module.fix_outlook %}*/
/*                                 <!--[if gte mso 12]>*/
/*                                    </td><td valign="top" width="{{ column_width }}">*/
/*                                 <![endif]-->*/
/*                             {% endif %}*/
/* */
/*                             <table class="{{ column_class }}" width="{{ column_width }}" border="0" align="{{ column_align }}" cellpadding="0" cellspacing="0">*/
/*                                 {% for element in column.elements %}*/
/*                                     {{ grid.element(element, column_width) }}*/
/*                                 {% endfor %}*/
/*                             </table>*/
/*                             {% if module.column_count != 1 %}*/
/*                                 {% if module.fix_outlook %}*/
/*                                     <!--[if gte mso 12]>*/
/*                                        </td><td valign="top" width="1">*/
/*                                     <![endif]-->*/
/*                                 {% endif %}*/
/* */
/*                                 <table width="1" border="0" cellpadding="0" cellspacing="0" align="{{ column_align }}">*/
/*                                     <tr>*/
/*                                         <td height="{{ module.gutter_height }}" style="font-size: 0;line-height: 0;border-collapse: collapse;">*/
/*                                             <p style="padding-left: {{ module.gutter_width }}px;">&nbsp;</p>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 </table>*/
/*                             {% endif %}*/
/*                         {% else %}*/
/*                             {% if module.fix_outlook %}*/
/*                                 <!--[if gte mso 12]>*/
/*                                    </td><td valign="top" width="{{ column_width }}">*/
/*                                 <![endif]-->*/
/*                             {% endif %}*/
/* */
/*                             <table class="{{ column_class }}" width="{{ column_width }}" border="0" align="{{ column_align_last }}" cellpadding="0" cellspacing="0">*/
/*                                 {% for element in column.elements %}*/
/*                                     {{ grid.element(element, column_width) }}*/
/*                                 {% endfor %}*/
/*                             </table>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                     {% if module.fix_outlook %}*/
/*                         <!--[if gte mso 12]>*/
/*                             </td></tr></table>*/
/*                         <![endif]-->*/
/*                     {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* {% endblock element_content %}*/
/* */
/* {% macro element(element, column_width) %}*/
/*     {% set grid_templates = ["grid", "element-grid", "article-grid"] %}*/
/* */
/*     {% if element.template in grid_templates %}*/
/*         {% set options = { width: column_width }|merge(element.options|default({})) %}*/
/*     {% else %}*/
/*         {% set options = element.options|default({}) %}*/
/*     {% endif %}*/
/* */
/*     <tr>*/
/*         {% include "elements/#{element.template}.html" with { module: options } %}*/
/*     </tr>*/
/* {% endmacro %}*/
/* */
