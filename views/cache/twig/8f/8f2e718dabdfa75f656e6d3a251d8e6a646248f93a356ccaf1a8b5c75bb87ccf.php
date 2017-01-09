<?php

/* elements/article.html */
class __TwigTemplate_e7876fad65a5014bb84f356c0f811c6b66fa3b437e84c8ea1357abc1419fd1fb extends Twig_Template
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
        $context["defaults"] = array("element_class" => "article", "permalink" => "", "img" => array("href" => $this->getAttribute(        // line 7
(isset($context["module"]) ? $context["module"] : null), "permalink", array()), "img_width" => "100%", "img_class" => "img-full"), "header" => array("text" => "Article Header", "href" => $this->getAttribute(        // line 13
(isset($context["module"]) ? $context["module"] : null), "permalink", array())), "content" => array(), "button" => array("type" => "outline", "button_width" => "100%", "href" => $this->getAttribute(        // line 19
(isset($context["module"]) ? $context["module"] : null), "permalink", array())));
        // line 23
        $context["module"] = call_user_func_array($this->env->getFilter('merge_r')->getCallable(), array((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_element_content($context, array $blocks = array())
    {
        // line 26
        echo "    <table class=\"table-article\" width=\"100%\" border=\"0\" align=\"";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "align", array());
        echo "\" cellpadding=\"0\" cellspacing=\"0\">
        ";
        // line 27
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "img", array())) {
            // line 28
            echo "            <tr>
                ";
            // line 29
            $this->loadTemplate("elements/img.html", "elements/article.html", 29)->display(array_merge($context, array("module" => $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "img", array()))));
            // line 30
            echo "            </tr>
        ";
        }
        // line 32
        echo "        ";
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "header", array())) {
            // line 33
            echo "            <tr>
                ";
            // line 34
            $this->loadTemplate("elements/header.html", "elements/article.html", 34)->display(array_merge($context, array("module" => $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "header", array()))));
            // line 35
            echo "            </tr>
        ";
        }
        // line 37
        echo "        ";
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "content", array())) {
            // line 38
            echo "            <tr>
                ";
            // line 39
            $this->loadTemplate("elements/content.html", "elements/article.html", 39)->display(array_merge($context, array("module" => $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "content", array()))));
            // line 40
            echo "            </tr>
        ";
        }
        // line 42
        echo "        ";
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "button", array())) {
            // line 43
            echo "            <tr>
                ";
            // line 44
            $this->loadTemplate("elements/button.html", "elements/article.html", 44)->display(array_merge($context, array("module" => $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "button", array()))));
            // line 45
            echo "            </tr>
        ";
        }
        // line 47
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
        return array (  91 => 47,  87 => 45,  85 => 44,  82 => 43,  79 => 42,  75 => 40,  73 => 39,  70 => 38,  67 => 37,  63 => 35,  61 => 34,  58 => 33,  55 => 32,  51 => 30,  49 => 29,  46 => 28,  44 => 27,  39 => 26,  36 => 25,  32 => 1,  30 => 23,  28 => 19,  27 => 13,  26 => 7,  25 => 3,  11 => 1,);
    }
}
/* {% extends "elements/element.html" %}*/
/* */
/* {% set defaults = {*/
/*     element_class: "article",*/
/*     permalink: "",*/
/*     img: {*/
/*         href: module.permalink,*/
/*         img_width: "100%",*/
/*         img_class: "img-full"*/
/*     },*/
/*     header: {*/
/*         text: "Article Header",*/
/*         href: module.permalink*/
/*     },*/
/*     content: {},*/
/*     button: {*/
/*         type: "outline",*/
/*         button_width: "100%",*/
/*         href: module.permalink*/
/*     }*/
/* } %}*/
/* */
/* {% set module = defaults|merge_r(module|default({})) %}*/
/* */
/* {% block element_content %}*/
/*     <table class="table-article" width="100%" border="0" align="{{ module.align }}" cellpadding="0" cellspacing="0">*/
/*         {% if module.img %}*/
/*             <tr>*/
/*                 {% include "elements/img.html" with { module: module.img } %}*/
/*             </tr>*/
/*         {% endif %}*/
/*         {% if module.header %}*/
/*             <tr>*/
/*                 {% include "elements/header.html" with { module: module.header } %}*/
/*             </tr>*/
/*         {% endif %}*/
/*         {% if module.content %}*/
/*             <tr>*/
/*                 {% include "elements/content.html" with { module: module.content } %}*/
/*             </tr>*/
/*         {% endif %}*/
/*         {% if module.button %}*/
/*             <tr>*/
/*                 {% include "elements/button.html" with { module: module.button } %}*/
/*             </tr>*/
/*         {% endif %}*/
/*     </table>*/
/* {% endblock element_content %}*/
/* */
