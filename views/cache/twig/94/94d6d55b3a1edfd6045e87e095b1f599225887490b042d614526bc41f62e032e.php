<?php

/* modules/grid.html */
class __TwigTemplate_1d6164ccf0bf3ca10eb791e85142084f376f4ba351b7dbbbe07692ecf0dbd166 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("modules/module.html", "modules/grid.html", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "modules/module.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["grid"] = $this;
        // line 4
        $context["defaults"] = array("module_class" => "module-grid", "column_count" => 1, "column_direction" => "ltr", "gutter_width" => 20, "gutter_height" => 40, "columns" => array());
        // line 13
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_container($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $context["column_align"] = call_user_func_array($this->env->getFunction('table_position')->getCallable(), array($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "column_direction", array())));
        // line 17
        echo "
    <table class=\"table-full\" align=\"center\" width=\"";
        // line 18
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "width", array());
        echo "\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "columns", array()), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "column_count", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 20
            echo "            <tr>
                <td class=\"row\" valign=\"top\">
                    ";
            // line 22
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
                // line 23
                echo "                        ";
                $context["column_width"] = call_user_func_array($this->env->getFunction('get_column_width')->getCallable(), array($context["column"], (isset($context["module"]) ? $context["module"] : null)));
                // line 24
                echo "
                        ";
                // line 25
                if (twig_in_filter($this->getAttribute($context["loop"], "index", array()), range(1, ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "column_count", array()) - 1)))) {
                    // line 26
                    echo "                            ";
                    if (($this->getAttribute($context["loop"], "index", array()) != 1)) {
                        // line 27
                        echo "                                <!--[if gte mso 12]>
                                   </td><td class=\"row\" valign=\"top\">
                                <![endif]-->
                            ";
                    }
                    // line 31
                    echo "                            <table class=\"table-full\" width=\"";
                    echo (isset($context["column_width"]) ? $context["column_width"] : null);
                    echo "\" border=\"0\" align=\"";
                    echo (isset($context["column_align"]) ? $context["column_align"] : null);
                    echo "\" cellpadding=\"0\" cellspacing=\"0\">
                                ";
                    // line 32
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "elements", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                        // line 33
                        echo "                                    ";
                        echo $context["grid"]->getelement($context["element"], (isset($context["column_width"]) ? $context["column_width"] : null));
                        echo "
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 35
                    echo "                            </table>
                            ";
                    // line 36
                    if (($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "column_count", array()) != 1)) {
                        // line 37
                        echo "                                <!--[if gte mso 12]>
                                   </td><td valign=\"top\">
                                <![endif]-->
                                <table width=\"1\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"";
                        // line 40
                        echo (isset($context["column_align"]) ? $context["column_align"] : null);
                        echo "\">
                                    <tr>
                                        <td height=\"";
                        // line 42
                        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "gutter_height", array());
                        echo "\" style=\"font-size: 0;line-height: 0;border-collapse: collapse;\">
                                            <p style=\"padding-left: ";
                        // line 43
                        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "gutter_width", array());
                        echo "px;\">&nbsp;</p>
                                        </td>
                                    </tr>
                                </table>
                            ";
                    }
                    // line 48
                    echo "                        ";
                } else {
                    // line 49
                    echo "                            <!--[if gte mso 12]>
                                </td><td class=\"row\" valign=\"top\">
                            <![endif]-->
                            <table class=\"table-full\" width=\"";
                    // line 52
                    echo (isset($context["column_width"]) ? $context["column_width"] : null);
                    echo "\" border=\"0\" align=\"";
                    echo call_user_func_array($this->env->getFunction('opposite_direction')->getCallable(), array((isset($context["column_align"]) ? $context["column_align"] : null)));
                    echo "\" cellpadding=\"0\" cellspacing=\"0\">
                                ";
                    // line 53
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "elements", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                        // line 54
                        echo "                                    ";
                        echo $context["grid"]->getelement($context["element"], (isset($context["column_width"]) ? $context["column_width"] : null));
                        echo "
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 56
                    echo "                            </table>
                        ";
                }
                // line 58
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
            // line 59
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    </table>
";
    }

    // line 65
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
            // line 66
            echo "    ";
            if (($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "template", array()) == "grid")) {
                // line 67
                echo "        ";
                $context["options"] = twig_array_merge(array("width" => (isset($context["column_width"]) ? $context["column_width"] : null)), (($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "options", array()), array())) : (array())));
                // line 68
                echo "    ";
            } else {
                // line 69
                echo "        ";
                $context["options"] = (($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "options", array()), array())) : (array()));
                // line 70
                echo "    ";
            }
            // line 71
            echo "
    <tr>
        ";
            // line 73
            $this->loadTemplate((("elements/" . $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "template", array())) . ".html"), "modules/grid.html", 73)->display(array_merge($context, array("module" => (isset($context["options"]) ? $context["options"] : null))));
            // line 74
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
        return "modules/grid.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 74,  227 => 73,  223 => 71,  220 => 70,  217 => 69,  214 => 68,  211 => 67,  208 => 66,  195 => 65,  190 => 62,  182 => 59,  168 => 58,  164 => 56,  155 => 54,  151 => 53,  145 => 52,  140 => 49,  137 => 48,  129 => 43,  125 => 42,  120 => 40,  115 => 37,  113 => 36,  110 => 35,  101 => 33,  97 => 32,  90 => 31,  84 => 27,  81 => 26,  79 => 25,  76 => 24,  73 => 23,  56 => 22,  52 => 20,  48 => 19,  44 => 18,  41 => 17,  38 => 16,  35 => 15,  31 => 1,  29 => 13,  27 => 4,  25 => 2,  11 => 1,);
    }
}
/* {% extends "modules/module.html" %}*/
/* {% import _self as grid %}*/
/* */
/* {% set defaults = {*/
/*     module_class: "module-grid",*/
/*     column_count: 1,*/
/*     column_direction: 'ltr',*/
/*     gutter_width: 20,*/
/*     gutter_height: 40,*/
/*     columns: []*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/* */
/* {% block container %}*/
/*     {% set column_align = table_position(module.column_direction) %}*/
/* */
/*     <table class="table-full" align="center" width="{{ module.width }}" border="0" cellspacing="0" cellpadding="0">*/
/*         {% for row in module.columns|batch(module.column_count) %}*/
/*             <tr>*/
/*                 <td class="row" valign="top">*/
/*                     {% for column in row %}*/
/*                         {% set column_width = get_column_width(column, module) %}*/
/* */
/*                         {% if loop.index in range(1, module.column_count - 1) %}*/
/*                             {% if loop.index != 1 %}*/
/*                                 <!--[if gte mso 12]>*/
/*                                    </td><td class="row" valign="top">*/
/*                                 <![endif]-->*/
/*                             {% endif %}*/
/*                             <table class="table-full" width="{{ column_width }}" border="0" align="{{ column_align }}" cellpadding="0" cellspacing="0">*/
/*                                 {% for element in column.elements %}*/
/*                                     {{ grid.element(element, column_width) }}*/
/*                                 {% endfor %}*/
/*                             </table>*/
/*                             {% if module.column_count != 1 %}*/
/*                                 <!--[if gte mso 12]>*/
/*                                    </td><td valign="top">*/
/*                                 <![endif]-->*/
/*                                 <table width="1" border="0" cellpadding="0" cellspacing="0" align="{{ column_align }}">*/
/*                                     <tr>*/
/*                                         <td height="{{ module.gutter_height }}" style="font-size: 0;line-height: 0;border-collapse: collapse;">*/
/*                                             <p style="padding-left: {{ module.gutter_width }}px;">&nbsp;</p>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 </table>*/
/*                             {% endif %}*/
/*                         {% else %}*/
/*                             <!--[if gte mso 12]>*/
/*                                 </td><td class="row" valign="top">*/
/*                             <![endif]-->*/
/*                             <table class="table-full" width="{{ column_width }}" border="0" align="{{ opposite_direction(column_align) }}" cellpadding="0" cellspacing="0">*/
/*                                 {% for element in column.elements %}*/
/*                                     {{ grid.element(element, column_width) }}*/
/*                                 {% endfor %}*/
/*                             </table>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* {% endblock container %}*/
/* */
/* {% macro element(element, column_width) %}*/
/*     {% if element.template == "grid" %}*/
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
