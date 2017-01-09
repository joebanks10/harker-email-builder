<?php

/* elements/list.html */
class __TwigTemplate_4254d8859f3f6df42d4fae77bdf08d27479a89809830dfa8f399155a723def71 extends Twig_Template
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
        $context["defaults"] = array("element_class" => "list", "type" => "", "list_width" => "", "list_height" => "", "bullet" => array("url" => "http://skylark.harker.org/email-builder/assets/img/check.png", "width" => 17), "items" => array(0 => "An important point goes here", 1 => "Another point goes here", 2 => "And another!"));
        // line 19
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 20
        $context["module"] = twig_array_merge((isset($context["module"]) ? $context["module"] : null), array("element_class" => ("list list-" . (($this->getAttribute(        // line 21
(isset($context["module"]) ? $context["module"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "type", array()), "default")) : ("default")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_element_content($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "type", array()) == "inline")) {
            // line 26
            echo "        <table class=\"table-full\" align=\"";
            echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "align", array());
            echo "\" width=\"";
            echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "list_width", array());
            echo "\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
            <tr>
                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 29
                echo "                    <td class=\"list-item list-item-text\" height=\"";
                echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "list_height", array());
                echo "\">
                        ";
                // line 30
                echo $context["item"];
                echo "
                    </td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </tr>
        </table>
    ";
        } else {
            // line 36
            echo "        <table class=\"table-full\" align=\"";
            echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "align", array());
            echo "\" width=\"";
            echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "list_width", array());
            echo "\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
            ";
            // line 37
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
                // line 38
                echo "                <tr>
                    <td class=\"list-item\">
                        <table width=\"100%\" align=\"";
                // line 40
                echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "align", array());
                echo "\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                            <tr>
                                ";
                // line 42
                $this->displayBlock('bullet', $context, $blocks);
                // line 61
                echo "                                ";
                $this->displayBlock('list_item_text', $context, $blocks);
                // line 66
                echo "                            </tr>
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
            // line 71
            echo "        </table>
    ";
        }
    }

    // line 42
    public function block_bullet($context, array $blocks = array())
    {
        // line 43
        echo "                                    ";
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "bullet", array())) {
            // line 44
            echo "                                        ";
            if (($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "type", array()) == "ordered")) {
                // line 45
                echo "                                            <td width=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "bullet", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "bullet", array(), "any", false, true), "width", array()), 17)) : (17));
                echo "\" valign=\"top\" class=\"bullet bullet-text\">
                                                ";
                // line 46
                echo $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index", array());
                echo ".
                                            </td>
                                        ";
            } elseif (($this->getAttribute(            // line 48
(isset($context["module"]) ? $context["module"] : null), "type", array()) == "unordered")) {
                // line 49
                echo "                                            <td width=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "bullet", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "bullet", array(), "any", false, true), "width", array()), 17)) : (17));
                echo "\" valign=\"top\" class=\"bullet bullet-text\">
                                                &bull;
                                            </td>
                                        ";
            } elseif (($this->getAttribute(            // line 52
(isset($context["module"]) ? $context["module"] : null), "type", array()) == "unstyled")) {
                // line 53
                echo "                                            <!-- unstyled -->
                                        ";
            } else {
                // line 55
                echo "                                            <td width=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "bullet", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "bullet", array(), "any", false, true), "width", array()), 17)) : (17));
                echo "\" valign=\"top\" class=\"bullet bullet-img img-container\">
                                                <img src=\"";
                // line 56
                echo (($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "bullet", array(), "any", false, true), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "bullet", array(), "any", false, true), "url", array()), "http://skylark.harker.org/email-builder/assets/img/check.png")) : ("http://skylark.harker.org/email-builder/assets/img/check.png"));
                echo "\" width=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "bullet", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "bullet", array(), "any", false, true), "width", array()), 17)) : (17));
                echo "\" alt=\"bullet\">
                                            </td>
                                        ";
            }
            // line 59
            echo "                                    ";
        }
        // line 60
        echo "                                ";
    }

    // line 61
    public function block_list_item_text($context, array $blocks = array())
    {
        // line 62
        echo "                                <td class=\"list-item-text\" valign=\"top\">
                                    ";
        // line 63
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
        return array (  197 => 63,  194 => 62,  191 => 61,  187 => 60,  184 => 59,  176 => 56,  171 => 55,  167 => 53,  165 => 52,  158 => 49,  156 => 48,  151 => 46,  146 => 45,  143 => 44,  140 => 43,  137 => 42,  131 => 71,  113 => 66,  110 => 61,  108 => 42,  103 => 40,  99 => 38,  82 => 37,  75 => 36,  70 => 33,  61 => 30,  56 => 29,  52 => 28,  44 => 26,  41 => 25,  38 => 24,  34 => 1,  32 => 21,  31 => 20,  29 => 19,  27 => 3,  11 => 1,);
    }
}
/* {% extends "elements/element.html" %}*/
/* */
/* {% set defaults = {*/
/*     element_class: "list",*/
/*     type: "",*/
/*     list_width: "",*/
/*     list_height: "",*/
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
/*     {% if module.type == "inline" %}*/
/*         <table class="table-full" align="{{ module.align }}" width="{{ module.list_width }}" border="0" cellspacing="0" cellpadding="0">*/
/*             <tr>*/
/*                 {% for item in module.items %}*/
/*                     <td class="list-item list-item-text" height="{{ module.list_height }}">*/
/*                         {{ item }}*/
/*                     </td>*/
/*                 {% endfor %}*/
/*             </tr>*/
/*         </table>*/
/*     {% else %}*/
/*         <table class="table-full" align="{{ module.align }}" width="{{ module.list_width }}" border="0" cellspacing="0" cellpadding="0">*/
/*             {% for item in module.items %}*/
/*                 <tr>*/
/*                     <td class="list-item">*/
/*                         <table width="100%" align="{{ module.align }}" border="0" cellpadding="0" cellspacing="0">*/
/*                             <tr>*/
/*                                 {% block bullet %}*/
/*                                     {% if module.bullet %}*/
/*                                         {% if module.type == 'ordered' %}*/
/*                                             <td width="{{ module.bullet.width|default(17) }}" valign="top" class="bullet bullet-text">*/
/*                                                 {{ loop.index }}.*/
/*                                             </td>*/
/*                                         {% elseif module.type == 'unordered' %}*/
/*                                             <td width="{{ module.bullet.width|default(17) }}" valign="top" class="bullet bullet-text">*/
/*                                                 &bull;*/
/*                                             </td>*/
/*                                         {% elseif module.type == 'unstyled' %}*/
/*                                             <!-- unstyled -->*/
/*                                         {% else %}*/
/*                                             <td width="{{ module.bullet.width|default(17) }}" valign="top" class="bullet bullet-img img-container">*/
/*                                                 <img src="{{ module.bullet.url|default("http://skylark.harker.org/email-builder/assets/img/check.png") }}" width="{{ module.bullet.width|default(17) }}" alt="bullet">*/
/*                                             </td>*/
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/*                                 {% endblock bullet %}*/
/*                                 {% block list_item_text %}*/
/*                                 <td class="list-item-text" valign="top">*/
/*                                     {{ item }}*/
/*                                 </td>*/
/*                                 {% endblock list_item_text %}*/
/*                             </tr>*/
/*                         </table>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*     {% endif %}*/
/* {% endblock element_content %}*/
/* */
