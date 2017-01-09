<?php

/* elements/article-grid.html */
class __TwigTemplate_6fe8f53008e1500aa8f8d2b192a1275f9003346f6105b7e986febba39ce47b60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("elements/element-list.html", "elements/article-grid.html", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "elements/element-list.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["defaults"] = array("element_class" => "article-grid", "rss" => "", "feature" => false, "articles" => array(), "article" => array("img" => array("include" => true, "link" => true, "img_width" => 186), "header" => array("include" => true, "link" => true), "content" => array("include" => true), "button" => array("include" => true, "button_width" => "100%", "text" => "Read More")), "feature_article" => array("img" => array("include" => true, "link" => true, "img_width" => 186), "header" => array("include" => true, "link" => true), "content" => array("include" => true), "button" => array("include" => true, "text" => "Read More")));
        // line 47
        $context["module"] = call_user_func_array($this->env->getFilter('merge_r')->getCallable(), array((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array()))));
        // line 48
        $context["feed"] = call_user_func_array($this->env->getFunction('rss')->getCallable(), array((isset($context["module"]) ? $context["module"] : null)));
        // line 50
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "feature", array())) {
            // line 51
            $context["elements"] = array(0 => twig_first($this->env,             // line 52
(isset($context["feed"]) ? $context["feed"] : null)), 1 => array("template" => "element-grid", "options" => array("elements" => twig_slice($this->env,             // line 56
(isset($context["feed"]) ? $context["feed"] : null), 1))));
        } else {
            // line 61
            $context["elements"] = array(0 => array("template" => "element-grid", "options" => array("elements" =>             // line 65
(isset($context["feed"]) ? $context["feed"] : null))));
        }
        // line 71
        $context["module"] = twig_array_merge((isset($context["module"]) ? $context["module"] : null), array("elements" => (isset($context["elements"]) ? $context["elements"] : null)));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "elements/article-grid.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,  41 => 71,  38 => 65,  37 => 61,  34 => 56,  33 => 52,  32 => 51,  30 => 50,  28 => 48,  26 => 47,  24 => 3,  11 => 1,);
    }
}
/* {% extends "elements/element-list.html" %}*/
/* */
/* {% set defaults = {*/
/*     element_class: "article-grid",*/
/*     rss: '',*/
/*     feature: false,*/
/*     articles: [],*/
/*     article: {*/
/*         img: {*/
/*             include: true,*/
/*             link: true,*/
/*             img_width: 186*/
/*         },*/
/*         header: {*/
/*             include: true,*/
/*             link: true*/
/*         },*/
/*         content: {*/
/*             include: true,*/
/*         },*/
/*         button: {*/
/*             include: true,*/
/*             button_width: "100%",*/
/*             text: "Read More"*/
/*         }*/
/*     },*/
/*     feature_article: {*/
/*         img: {*/
/*             include: true,*/
/*             link: true,*/
/*             img_width: 186*/
/*         },*/
/*         header: {*/
/*             include: true,*/
/*             link: true*/
/*         },*/
/*         content: {*/
/*             include: true,*/
/*         },*/
/*         button: {*/
/*             include: true,*/
/*             text: "Read More"*/
/*         }*/
/*     }*/
/* } %}*/
/* */
/* {% set module = defaults|merge_r( module|default({}) ) %}*/
/* {% set feed = rss(module) %}*/
/* */
/* {% if module.feature %}*/
/*     {% set elements = [*/
/*         feed|first,*/
/*         {*/
/*             template: "element-grid",*/
/*             options: {*/
/*                 elements: feed|slice(1)*/
/*             }*/
/*         }*/
/*     ] %}*/
/* {% else %}*/
/*     {% set elements = [*/
/*         {*/
/*             template: "element-grid",*/
/*             options: {*/
/*                 elements: feed*/
/*             }*/
/*         }*/
/*     ] %}*/
/* {% endif %}*/
/* */
/* {% set module = module|merge({elements: elements}) %}*/
/* */
