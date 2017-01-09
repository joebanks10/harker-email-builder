<?php

/* elements/calendar-list.html */
class __TwigTemplate_1971a5e5698edd752734c51a61b8ae6e11da4517fe0569a5165bb7e431755b42 extends Twig_Template
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
        $context["defaults"] = array("element_class" => "calendar-list", "ical" => "", "start_date" => "", "end_date" => "", "events" => array(), "dates" => array());
        // line 12
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 13
        $context["dates"] = call_user_func_array($this->env->getFunction('ical')->getCallable(), array((isset($context["module"]) ? $context["module"] : null)));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_element_content($context, array $blocks = array())
    {
        // line 16
        echo "    <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
        ";
        // line 17
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
            // line 18
            echo "            <tr>
                ";
            // line 19
            $this->loadTemplate("elements/calendar-item.html", "elements/calendar-list.html", 19)->display(array_merge($context, array("module" => $context["item"])));
            // line 20
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
        // line 22
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
        return array (  78 => 22,  63 => 20,  61 => 19,  58 => 18,  41 => 17,  38 => 16,  35 => 15,  31 => 1,  29 => 13,  27 => 12,  25 => 3,  11 => 1,);
    }
}
/* {% extends "elements/element.html" %}*/
/* */
/* {% set defaults = {*/
/*     element_class: "calendar-list",*/
/*     ical: '',*/
/*     start_date: '',*/
/*     end_date: '',*/
/*     events: [],*/
/*     dates: []*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/* {% set dates = ical(module) %}*/
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
