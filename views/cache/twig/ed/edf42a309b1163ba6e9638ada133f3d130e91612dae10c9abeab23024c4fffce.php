<?php

/* elements/element-list.html */
class __TwigTemplate_11af08b0c331f53485d44b87268359e6af7f258c2868a6c6b2f29af7d9f67b0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("elements/element.html", "elements/element-list.html", 1);
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
        $context["defaults"] = array("element_class" => "element-list", "header" => array(), "elements" => array(), "footer" => array());
        // line 10
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_element_content($context, array $blocks = array())
    {
        // line 13
        echo "    <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "header", array()));
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
            // line 15
            echo "            <tr>
                ";
            // line 16
            $this->loadTemplate((("elements/" . $this->getAttribute($context["element"], "template", array())) . ".html"), "elements/element-list.html", 16)->display(array_merge($context, array("module" => $this->getAttribute($context["element"], "options", array()))));
            // line 17
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        ";
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
            // line 20
            echo "            <tr>
                ";
            // line 21
            $this->loadTemplate((("elements/" . $this->getAttribute($context["element"], "template", array())) . ".html"), "elements/element-list.html", 21)->display(array_merge($context, array("module" => $this->getAttribute($context["element"], "options", array()))));
            // line 22
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "footer", array()));
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
            // line 25
            echo "            <tr>
                ";
            // line 26
            $this->loadTemplate((("elements/" . $this->getAttribute($context["element"], "template", array())) . ".html"), "elements/element-list.html", 26)->display(array_merge($context, array("module" => $this->getAttribute($context["element"], "options", array()))));
            // line 27
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "elements/element-list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 29,  137 => 27,  135 => 26,  132 => 25,  114 => 24,  99 => 22,  97 => 21,  94 => 20,  76 => 19,  61 => 17,  59 => 16,  56 => 15,  39 => 14,  36 => 13,  33 => 12,  29 => 1,  27 => 10,  25 => 3,  11 => 1,);
    }
}
/* {% extends "elements/element.html" %}*/
/* */
/* {% set defaults = {*/
/*     element_class: "element-list",*/
/*     header: [],*/
/*     elements: [],*/
/*     footer: []*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/* */
/* {% block element_content %}*/
/*     <table width="100%" border="0" cellpadding="0" cellspacing="0">*/
/*         {% for element in module.header %}*/
/*             <tr>*/
/*                 {% include "elements/#{element.template}.html" with { module: element.options } %}*/
/*             </tr>*/
/*         {% endfor %}*/
/*         {% for element in module.elements %}*/
/*             <tr>*/
/*                 {% include "elements/#{element.template}.html" with { module: element.options } %}*/
/*             </tr>*/
/*         {% endfor %}*/
/*         {% for element in module.footer %}*/
/*             <tr>*/
/*                 {% include "elements/#{element.template}.html" with { module: element.options } %}*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* {% endblock %}*/
/* */
