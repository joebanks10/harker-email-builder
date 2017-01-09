<?php

/* elements/calendar-list.html */
class __TwigTemplate_72098350c7d2d3602c5eb8105657c720712eecf093699abfe1e47751fec8f5e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("elements/element.html", "elements/calendar-list.html", 1);
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
        $context["defaults"] = array("element_class" => "calendar-list", "ical" => "", "start_date" => "", "end_date" => "", "dates" => array());
        // line 11
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 13
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "ical", array())) {
            // line 14
            $context["dates"] = call_user_func_array($this->env->getFunction('ical')->getCallable(), array($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "ical", array()), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "start_date", array()), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "end_date", array())));
        } else {
            // line 16
            $context["dates"] = $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "dates", array());
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_element_content($context, array $blocks = array())
    {
        // line 20
        echo "    <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "            <tr>
                ";
            // line 23
            $this->loadTemplate("elements/calendar-item.html", "elements/calendar-list.html", 23)->display(array_merge($context, array("module" => $context["item"])));
            // line 24
            echo "            </tr>
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "elements/calendar-list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  69 => 24,  67 => 23,  64 => 22,  47 => 21,  44 => 20,  41 => 19,  37 => 1,  34 => 16,  31 => 14,  29 => 13,  27 => 11,  25 => 3,  11 => 1,);
    }
}
/* {% extends "elements/element.html" %}*/
/* */
/* {% set defaults = {*/
/*     element_class: "calendar-list",*/
/*     ical: '',*/
/*     start_date: '',*/
/*     end_date: '',*/
/*     dates: []*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/* */
/* {% if module.ical %}*/
/*     {% set dates = ical(module.ical, module.start_date, module.end_date) %}*/
/* {% else %}*/
/*     {% set dates = module.dates %}*/
/* {% endif %}*/
/* */
/* {% block element_content %}*/
/*     <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*         {% for item in dates %}*/
/*             <tr>*/
/*                 {% include "elements/calendar-item.html" with { module: item } %}*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* {% endblock %}*/
/* */
