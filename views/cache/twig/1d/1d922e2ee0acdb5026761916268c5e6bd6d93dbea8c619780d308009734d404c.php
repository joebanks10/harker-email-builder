<?php

/* elements/event.html */
class __TwigTemplate_ed2f47d5106bc604ad5b4e9007d2aff40841b0d063be11280f85dc0064d2ab1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("elements/element.html", "elements/event.html", 1);
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
        $context["defaults"] = array("element_class" => "event", "width" => "100%", "img" => array(), "header" => array("text" => "Event Header"), "content" => array("text" => "7 p.m. | Saratoga Campus"), "button" => array());
        // line 16
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 18
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "img", array())) {
            // line 19
            $context["img"] = twig_array_merge($this->getAttribute((isset($context["defaults"]) ? $context["defaults"] : null), "img", array()), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "img", array()));
        }
        // line 22
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "header", array())) {
            // line 23
            $context["header"] = twig_array_merge($this->getAttribute((isset($context["defaults"]) ? $context["defaults"] : null), "header", array()), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "header", array()));
        }
        // line 26
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "content", array())) {
            // line 27
            $context["content"] = twig_array_merge($this->getAttribute((isset($context["defaults"]) ? $context["defaults"] : null), "content", array()), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "content", array()));
        }
        // line 30
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "button", array())) {
            // line 31
            $context["button"] = twig_array_merge($this->getAttribute((isset($context["defaults"]) ? $context["defaults"] : null), "button", array()), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "button", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_element_content($context, array $blocks = array())
    {
        // line 35
        echo "    <table class=\"table-event\" width=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "width", array());
        echo "\" border=\"0\" align=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "align", array());
        echo "\" cellpadding=\"0\" cellspacing=\"0\">
        ";
        // line 36
        if ((isset($context["img"]) ? $context["img"] : null)) {
            // line 37
            echo "            <tr>
                ";
            // line 38
            $this->loadTemplate("elements/img.html", "elements/event.html", 38)->display(array_merge($context, array("module" => (isset($context["img"]) ? $context["img"] : null))));
            // line 39
            echo "            </tr>
        ";
        }
        // line 41
        echo "        ";
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 42
            echo "            <tr>
                ";
            // line 43
            $this->loadTemplate("elements/header.html", "elements/event.html", 43)->display(array_merge($context, array("module" => (isset($context["header"]) ? $context["header"] : null))));
            // line 44
            echo "            </tr>
        ";
        }
        // line 46
        echo "        ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 47
            echo "            <tr>
                ";
            // line 48
            $this->loadTemplate("elements/content.html", "elements/event.html", 48)->display(array_merge($context, array("module" => (isset($context["content"]) ? $context["content"] : null))));
            // line 49
            echo "            </tr>
        ";
        }
        // line 51
        echo "        ";
        if ((isset($context["button"]) ? $context["button"] : null)) {
            // line 52
            echo "            <tr>
                ";
            // line 53
            $this->loadTemplate("elements/button.html", "elements/event.html", 53)->display(array_merge($context, array("module" => (isset($context["button"]) ? $context["button"] : null))));
            // line 54
            echo "            </tr>
        ";
        }
        // line 56
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "elements/event.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 56,  106 => 54,  104 => 53,  101 => 52,  98 => 51,  94 => 49,  92 => 48,  89 => 47,  86 => 46,  82 => 44,  80 => 43,  77 => 42,  74 => 41,  70 => 39,  68 => 38,  65 => 37,  63 => 36,  56 => 35,  53 => 34,  49 => 1,  46 => 31,  44 => 30,  41 => 27,  39 => 26,  36 => 23,  34 => 22,  31 => 19,  29 => 18,  27 => 16,  25 => 3,  11 => 1,);
    }
}
/* {% extends "elements/element.html" %}*/
/* */
/* {% set defaults = {*/
/*     element_class: "event",*/
/*     width: "100%",*/
/*     img: {},*/
/*     header: {*/
/*         text: "Event Header"*/
/*     },*/
/*     content: {*/
/*         text: "7 p.m. | Saratoga Campus"*/
/*     },*/
/*     button: {}*/
/* } %}*/
/* */
/* {% set module = defaults|merge(module|default({})) %}*/
/* */
/* {% if module.img %}*/
/*     {% set img = defaults.img|merge(module.img) %}*/
/* {% endif %}*/
/* */
/* {% if module.header %}*/
/*     {% set header = defaults.header|merge(module.header) %}*/
/* {% endif %}*/
/* */
/* {% if module.content %}*/
/*     {% set content = defaults.content|merge(module.content) %}*/
/* {% endif %}*/
/* */
/* {% if module.button %}*/
/*     {% set button = defaults.button|merge(module.button) %}*/
/* {% endif %}*/
/* */
/* {% block element_content %}*/
/*     <table class="table-event" width="{{ module.width }}" border="0" align="{{ module.align }}" cellpadding="0" cellspacing="0">*/
/*         {% if img %}*/
/*             <tr>*/
/*                 {% include "elements/img.html" with { module: img } %}*/
/*             </tr>*/
/*         {% endif %}*/
/*         {% if header %}*/
/*             <tr>*/
/*                 {% include "elements/header.html" with { module: header } %}*/
/*             </tr>*/
/*         {% endif %}*/
/*         {% if content %}*/
/*             <tr>*/
/*                 {% include "elements/content.html" with { module: content } %}*/
/*             </tr>*/
/*         {% endif %}*/
/*         {% if button %}*/
/*             <tr>*/
/*                 {% include "elements/button.html" with { module: button } %}*/
/*             </tr>*/
/*         {% endif %}*/
/*     </table>*/
/* {% endblock element_content %}*/
/* */
