<?php

/* elements/article-list.html */
class __TwigTemplate_ae69beb672f1ecaee9fac8a79447a4b0c2f4cdf882014c474bb3c3cb2ab305e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("elements/element-list.html", "elements/article-list.html", 1);
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
        $context["defaults"] = array("element_class" => "article-list", "rss" => "", "articles" => array(), "article" => array("img" => array("include" => true, "link" => true), "header" => array("include" => true, "link" => true), "content" => array("include" => true), "button" => array("include" => true, "text" => "Read More")));
        // line 26
        $context["module"] = call_user_func_array($this->env->getFilter('merge_r')->getCallable(), array((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array()))));
        // line 27
        $context["module"] = twig_array_merge((isset($context["module"]) ? $context["module"] : null), array("elements" => call_user_func_array($this->env->getFunction('rss')->getCallable(), array((isset($context["module"]) ? $context["module"] : null)))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "elements/article-list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,  28 => 27,  26 => 26,  24 => 3,  11 => 1,);
    }
}
/* {% extends "elements/element-list.html" %}*/
/* */
/* {% set defaults = {*/
/*     element_class: "article-list",*/
/*     rss: '',*/
/*     articles: [],*/
/*     article: {*/
/*         img: {*/
/*             include: true,*/
/*             link: true*/
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
/* {% set module = defaults|merge_r(module|default({})) %}*/
/* {% set module = module|merge({elements: rss(module)}) %}*/
/* */
