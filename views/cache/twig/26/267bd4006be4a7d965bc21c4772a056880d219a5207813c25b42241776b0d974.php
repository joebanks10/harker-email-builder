<?php

/* elements/article.html */
class __TwigTemplate_fe6de181f5a28e36f7cbc2bbb397fd45244571db859dc20cac5ed4363cc8602c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("elements/element.html", "elements/article.html", 1);
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
        $context["defaults"] = array("element_class" => "article", "width" => "100%", "permalink" => "", "img" => array("width" => "100%", "href" => $this->getAttribute(        // line 9
(isset($context["module"]) ? $context["module"] : null), "permalink", array())), "header" => array("text" => "Article Header", "href" => $this->getAttribute(        // line 13
(isset($context["module"]) ? $context["module"] : null), "permalink", array())), "content" => array(), "button" => array("type" => "outline", "width" => "100%", "href" => $this->getAttribute(        // line 19
(isset($context["module"]) ? $context["module"] : null), "permalink", array())));
        // line 23
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 25
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "img", array())) {
            // line 26
            $context["img"] = twig_array_merge($this->getAttribute((isset($context["defaults"]) ? $context["defaults"] : null), "img", array()), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "img", array()));
        }
        // line 29
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "header", array())) {
            // line 30
            $context["header"] = twig_array_merge($this->getAttribute((isset($context["defaults"]) ? $context["defaults"] : null), "header", array()), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "header", array()));
        }
        // line 33
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "content", array())) {
            // line 34
            $context["content"] = twig_array_merge($this->getAttribute((isset($context["defaults"]) ? $context["defaults"] : null), "content", array()), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "content", array()));
        }
        // line 37
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "button", array())) {
            // line 38
            $context["button"] = twig_array_merge($this->getAttribute((isset($context["defaults"]) ? $context["defaults"] : null), "button", array()), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "button", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 41
    public function block_element_content($context, array $blocks = array())
    {
        // line 42
        echo "    <table class=\"table-article\" width=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "width", array());
        echo "\" border=\"0\" align=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "align", array());
        echo "\" cellpadding=\"0\" cellspacing=\"0\">
        ";
        // line 43
        if ((isset($context["img"]) ? $context["img"] : null)) {
            // line 44
            echo "            <tr>
                ";
            // line 45
            $this->loadTemplate("elements/img.html", "elements/article.html", 45)->display(array_merge($context, array("module" => (isset($context["img"]) ? $context["img"] : null))));
            // line 46
            echo "            </tr>
        ";
        }
        // line 48
        echo "        ";
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 49
            echo "            <tr>
                ";
            // line 50
            $this->loadTemplate("elements/header.html", "elements/article.html", 50)->display(array_merge($context, array("module" => (isset($context["header"]) ? $context["header"] : null))));
            // line 51
            echo "            </tr>
        ";
        }
        // line 53
        echo "        ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 54
            echo "            <tr>
                ";
            // line 55
            $this->loadTemplate("elements/content.html", "elements/article.html", 55)->display(array_merge($context, array("module" => (isset($context["content"]) ? $context["content"] : null))));
            // line 56
            echo "            </tr>
        ";
        }
        // line 58
        echo "        ";
        if ((isset($context["button"]) ? $context["button"] : null)) {
            // line 59
            echo "            <tr>
                ";
            // line 60
            $this->loadTemplate("elements/button.html", "elements/article.html", 60)->display(array_merge($context, array("module" => (isset($context["button"]) ? $context["button"] : null))));
            // line 61
            echo "            </tr>
        ";
        }
        // line 63
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "elements/article.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 63,  109 => 61,  107 => 60,  104 => 59,  101 => 58,  97 => 56,  95 => 55,  92 => 54,  89 => 53,  85 => 51,  83 => 50,  80 => 49,  77 => 48,  73 => 46,  71 => 45,  68 => 44,  66 => 43,  59 => 42,  56 => 41,  52 => 1,  49 => 38,  47 => 37,  44 => 34,  42 => 33,  39 => 30,  37 => 29,  34 => 26,  32 => 25,  30 => 23,  28 => 19,  27 => 13,  26 => 9,  25 => 3,  11 => 1,);
    }
}
/* {% extends "elements/element.html" %}*/
/* */
/* {% set defaults = {*/
/*     element_class: "article",*/
/*     width: "100%",*/
/*     permalink: "",*/
/*     img: {*/
/*         width: "100%",*/
/*         href: module.permalink*/
/*     },*/
/*     header: {*/
/*         text: "Article Header",*/
/*         href: module.permalink*/
/*     },*/
/*     content: {},*/
/*     button: {*/
/*         type: "outline",*/
/*         width: "100%",*/
/*         href: module.permalink*/
/*     }*/
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
/*     <table class="table-article" width="{{ module.width }}" border="0" align="{{ module.align }}" cellpadding="0" cellspacing="0">*/
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
