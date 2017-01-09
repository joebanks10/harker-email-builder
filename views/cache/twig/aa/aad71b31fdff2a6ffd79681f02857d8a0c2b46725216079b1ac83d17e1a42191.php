<?php

/* elements/element-list-inline.html */
class __TwigTemplate_9c95ce27f779247e20ffb59943e1d65a3ea654e1ada0fa5038da9120318a5920 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("elements/element.html", "elements/element-list-inline.html", 1);
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
        $context["defaults"] = array("element_class" => "element-list-inline", "elements" => array());
        // line 8
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_element_content($context, array $blocks = array())
    {
        // line 11
        echo "    <table class=\"table-full\" align=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "align", array());
        echo "\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
        <tr>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "elements", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 14
            echo "                ";
            $this->loadTemplate((("elements/" . $this->getAttribute($context["element"], "template", array())) . ".html"), "elements/element-list-inline.html", 14)->display(array_merge($context, array("module" => $this->getAttribute($context["element"], "options", array()))));
            // line 15
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </tr>
    </table>
";
    }

    public function getTemplateName()
    {
        return "elements/element-list-inline.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  62 => 15,  59 => 14,  42 => 13,  36 => 11,  33 => 10,  29 => 1,  27 => 8,  25 => 3,  11 => 1,);
    }
}
/* {% extends "elements/element.html" %}*/
/* */
/* {% set defaults = {*/
/*     element_class: "element-list-inline",*/
/*     elements: []*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/* */
/* {% block element_content %}*/
/*     <table class="table-full" align="{{ module.align }}" border="0" cellpadding="0" cellspacing="0">*/
/*         <tr>*/
/*             {% for element in module.elements %}*/
/*                 {% include "elements/#{element.template}.html" with { module: element.options } %}*/
/*             {% endfor %}*/
/*         </tr>*/
/*     </table>*/
/* {% endblock %}*/
/* */
