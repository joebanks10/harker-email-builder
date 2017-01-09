<?php

/* elements/calendar-item.html */
class __TwigTemplate_03991c870544ec57cf9de80d3ea9b8c323d2be34a2d694e6c9cef545f36e9d49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("elements/element.html", "elements/calendar-item.html", 1);
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
        $context["defaults"] = array("element_class" => "calendar-item", "date" => "Jan. 1", "date_width" => 68, "events" => array());
        // line 10
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_element_content($context, array $blocks = array())
    {
        // line 13
        echo "    <table class=\"table-calendar-item\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
        <tr>
            ";
        // line 15
        $this->loadTemplate("elements/date.html", "elements/calendar-item.html", 15)->display(array_merge($context, array("module" => array("text" => $this->getAttribute(        // line 16
(isset($context["module"]) ? $context["module"] : null), "date", array()), "width" => $this->getAttribute(        // line 17
(isset($context["module"]) ? $context["module"] : null), "date_width", array())))));
        // line 19
        echo "            <td class=\"events\" valign=\"top\">
                <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "events", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 22
            echo "                        <tr>
                            ";
            // line 23
            $this->loadTemplate("elements/event.html", "elements/calendar-item.html", 23)->display(array_merge($context, array("module" => $context["event"])));
            // line 24
            echo "                        </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                </table>
            </td>    
        </tr>
    </table>
";
    }

    public function getTemplateName()
    {
        return "elements/calendar-item.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 26,  70 => 24,  68 => 23,  65 => 22,  48 => 21,  44 => 19,  42 => 17,  41 => 16,  40 => 15,  36 => 13,  33 => 12,  29 => 1,  27 => 10,  25 => 3,  11 => 1,);
    }
}
/* {% extends "elements/element.html" %}*/
/* */
/* {% set defaults = {*/
/*     element_class: "calendar-item",*/
/*     date: "Jan. 1",*/
/*     date_width: 68,*/
/*     events: []*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/* */
/* {% block element_content %}*/
/*     <table class="table-calendar-item" width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*         <tr>*/
/*             {% include "elements/date.html" with { module: {*/
/*                 text: module.date,*/
/*                 width: module.date_width*/
/*             } } %}*/
/*             <td class="events" valign="top">*/
/*                 <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*                     {% for event in module.events %}*/
/*                         <tr>*/
/*                             {% include "elements/event.html" with { module: event } %}*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </table>*/
/*             </td>    */
/*         </tr>*/
/*     </table>*/
/* {% endblock element_content %}*/
/* */
