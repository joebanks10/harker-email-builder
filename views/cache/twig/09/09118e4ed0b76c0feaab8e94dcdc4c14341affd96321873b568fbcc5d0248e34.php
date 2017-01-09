<?php

/* elements/list.html */
class __TwigTemplate_e7a8082b81087d2e6cbd9c3dcf9455614dc2a22e75a0d6654cc926716d55d674 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("elements/element.html", "elements/list.html", 1);
        $this->blocks = array(
            'element_content' => array($this, 'block_element_content'),
            'bullet' => array($this, 'block_bullet'),
            'list_item_text' => array($this, 'block_list_item_text'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "elements/element.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["defaults"] = array("element_class" => "list", "type" => "", "width" => "100%", "bullet" => array("url" => "http://skylark.harker.org/email-builder/assets/img/check.png", "width" => 17), "items" => array(0 => "An important point goes here", 1 => "Another point goes here", 2 => "And another!"));
        // line 18
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 19
        $context["module"] = twig_array_merge((isset($context["module"]) ? $context["module"] : null), array("element_class" => ("list list-" . (($this->getAttribute(        // line 20
(isset($context["module"]) ? $context["module"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "type", array()), "default")) : ("default")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_element_content($context, array $blocks = array())
    {
        // line 24
        echo "    <table class=\"table-list\" align=\"left\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "items", array()));
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
            // line 26
            echo "            <tr>
                <td class=\"list-item\">
                    <table width=\"";
            // line 28
            echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "width", array());
            echo "\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
                        <tr>
                            ";
            // line 30
            $this->displayBlock('bullet', $context, $blocks);
            // line 49
            echo "                            ";
            $this->displayBlock('list_item_text', $context, $blocks);
            // line 54
            echo "                        </tr>
                    </table>
                </td>
            </tr>
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
        // line 59
        echo "    </table>
";
    }

    // line 30
    public function block_bullet($context, array $blocks = array())
    {
        // line 31
        echo "                                ";
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "bullet", array())) {
            // line 32
            echo "                                    ";
            if (($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "type", array()) == "ordered")) {
                // line 33
                echo "                                        <td width=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "bullet", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "bullet", array(), "any", false, true), "width", array()), 17)) : (17));
                echo "\" valign=\"top\" class=\"bullet bullet-text\">
                                            ";
                // line 34
                echo $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index", array());
                echo ".
                                        </td>
                                    ";
            } elseif (($this->getAttribute(            // line 36
(isset($context["module"]) ? $context["module"] : null), "type", array()) == "unordered")) {
                // line 37
                echo "                                        <td width=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "bullet", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "bullet", array(), "any", false, true), "width", array()), 17)) : (17));
                echo "\" valign=\"top\" class=\"bullet bullet-text\">
                                            &bull;
                                        </td>
                                    ";
            } elseif (($this->getAttribute(            // line 40
(isset($context["module"]) ? $context["module"] : null), "type", array()) == "unstyled")) {
                // line 41
                echo "                                        <!-- unstyled -->
                                    ";
            } else {
                // line 43
                echo "                                        <td width=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "bullet", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "bullet", array(), "any", false, true), "width", array()), 17)) : (17));
                echo "\" valign=\"top\" class=\"bullet bullet-img img-container\">
                                            <img src=\"";
                // line 44
                echo (($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "bullet", array(), "any", false, true), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "bullet", array(), "any", false, true), "url", array()), "http://skylark.harker.org/email-builder/assets/img/check.png")) : ("http://skylark.harker.org/email-builder/assets/img/check.png"));
                echo "\" width=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "bullet", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "bullet", array(), "any", false, true), "width", array()), 17)) : (17));
                echo "\" alt=\"bullet\">
                                        </td>
                                    ";
            }
            // line 47
            echo "                                ";
        }
        // line 48
        echo "                            ";
    }

    // line 49
    public function block_list_item_text($context, array $blocks = array())
    {
        // line 50
        echo "                            <td class=\"list-item-text\" valign=\"top\">
                                ";
        // line 51
        echo (isset($context["item"]) ? $context["item"] : null);
        echo "
                            </td>
                            ";
    }

    public function getTemplateName()
    {
        return "elements/list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 51,  155 => 50,  152 => 49,  148 => 48,  145 => 47,  137 => 44,  132 => 43,  128 => 41,  126 => 40,  119 => 37,  117 => 36,  112 => 34,  107 => 33,  104 => 32,  101 => 31,  98 => 30,  93 => 59,  75 => 54,  72 => 49,  70 => 30,  65 => 28,  61 => 26,  44 => 25,  41 => 24,  38 => 23,  34 => 1,  32 => 20,  31 => 19,  29 => 18,  27 => 3,  11 => 1,);
    }
}
/* {% extends "elements/element.html" %}*/
/* */
/* {% set defaults = {*/
/*     element_class: "list",*/
/*     type: "",*/
/*     width: "100%",*/
/*     bullet: {*/
/*         url: "http://skylark.harker.org/email-builder/assets/img/check.png",*/
/*         width: 17*/
/*     },*/
/*     items: [*/
/*         "An important point goes here",*/
/*         "Another point goes here",*/
/*         "And another!"*/
/*     ]*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/* {% set module = module|merge({*/
/*     element_class: "list list-#{module.type|default("default")}"*/
/* }) %}*/
/* */
/* {% block element_content %}*/
/*     <table class="table-list" align="left" width="100%" border="0" cellspacing="0" cellpadding="0">*/
/*         {% for item in module.items %}*/
/*             <tr>*/
/*                 <td class="list-item">*/
/*                     <table width="{{ module.width }}" border="0" align="left" cellpadding="0" cellspacing="0">*/
/*                         <tr>*/
/*                             {% block bullet %}*/
/*                                 {% if module.bullet %}*/
/*                                     {% if module.type == 'ordered' %}*/
/*                                         <td width="{{ module.bullet.width|default(17) }}" valign="top" class="bullet bullet-text">*/
/*                                             {{ loop.index }}.*/
/*                                         </td>*/
/*                                     {% elseif module.type == 'unordered' %}*/
/*                                         <td width="{{ module.bullet.width|default(17) }}" valign="top" class="bullet bullet-text">*/
/*                                             &bull;*/
/*                                         </td>*/
/*                                     {% elseif module.type == 'unstyled' %}*/
/*                                         <!-- unstyled -->*/
/*                                     {% else %}*/
/*                                         <td width="{{ module.bullet.width|default(17) }}" valign="top" class="bullet bullet-img img-container">*/
/*                                             <img src="{{ module.bullet.url|default("http://skylark.harker.org/email-builder/assets/img/check.png") }}" width="{{ module.bullet.width|default(17) }}" alt="bullet">*/
/*                                         </td>*/
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/*                             {% endblock bullet %}*/
/*                             {% block list_item_text %}*/
/*                             <td class="list-item-text" valign="top">*/
/*                                 {{ item }}*/
/*                             </td>*/
/*                             {% endblock list_item_text %}*/
/*                         </tr>*/
/*                     </table>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* {% endblock element_content %}*/
/* */
