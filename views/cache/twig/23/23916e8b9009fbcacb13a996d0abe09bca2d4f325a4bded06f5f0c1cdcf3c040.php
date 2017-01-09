<?php

/* modules/grid.html */
class __TwigTemplate_021526faeb29a1b15c8a0427e20cba569e531a1309978b279685f78f9918badc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("modules/module.html", "modules/grid.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "modules/module.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["defaults"] = array("module_class" => "module-grid", "column_count" => 1, "column_direction" => "ltr", "gutter_width" => 20, "gutter_height" => 40, "stack" => true, "fix_rounding" => true, "fix_outlook" => true, "columns" => array());
        // line 15
        $context["module"] = twig_array_merge((isset($context["defaults"]) ? $context["defaults"] : null), ((array_key_exists("module", $context)) ? (_twig_default_filter((isset($context["module"]) ? $context["module"] : null), array())) : (array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "    <tr>
        ";
        // line 19
        $this->loadTemplate("elements/grid.html", "modules/grid.html", 19)->display(array_merge($context, array("module" => array("width" => $this->getAttribute(        // line 20
(isset($context["module"]) ? $context["module"] : null), "width", array()), "column_count" => $this->getAttribute(        // line 21
(isset($context["module"]) ? $context["module"] : null), "column_count", array()), "column_direction" => $this->getAttribute(        // line 22
(isset($context["module"]) ? $context["module"] : null), "column_direction", array()), "gutter_width" => $this->getAttribute(        // line 23
(isset($context["module"]) ? $context["module"] : null), "gutter_width", array()), "gutter_height" => $this->getAttribute(        // line 24
(isset($context["module"]) ? $context["module"] : null), "gutter_height", array()), "stack" => $this->getAttribute(        // line 25
(isset($context["module"]) ? $context["module"] : null), "stack", array()), "fix_rounding" => $this->getAttribute(        // line 26
(isset($context["module"]) ? $context["module"] : null), "fix_rounding", array()), "fix_outlook" => $this->getAttribute(        // line 27
(isset($context["module"]) ? $context["module"] : null), "fix_outlook", array()), "columns" => $this->getAttribute(        // line 28
(isset($context["module"]) ? $context["module"] : null), "columns", array())))));
        // line 30
        echo "    </tr>
";
    }

    public function getTemplateName()
    {
        return "modules/grid.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 30,  48 => 28,  47 => 27,  46 => 26,  45 => 25,  44 => 24,  43 => 23,  42 => 22,  41 => 21,  40 => 20,  39 => 19,  36 => 18,  33 => 17,  29 => 1,  27 => 15,  25 => 3,  11 => 1,);
    }
}
/* {% extends "modules/module.html" %}*/
/* */
/* {% set defaults = {*/
/*     module_class: "module-grid",*/
/*     column_count: 1,*/
/*     column_direction: 'ltr',*/
/*     gutter_width: 20,*/
/*     gutter_height: 40,*/
/*     stack: true,*/
/*     fix_rounding: true,*/
/*     fix_outlook: true,*/
/*     columns: []*/
/* } %}*/
/* */
/* {% set module = defaults|merge( module|default({}) ) %}*/
/* */
/* {% block content %}*/
/*     <tr>*/
/*         {% include "elements/grid.html" with { module: {*/
/*             width: module.width,*/
/*             column_count: module.column_count,*/
/*             column_direction: module.column_direction,*/
/*             gutter_width: module.gutter_width,*/
/*             gutter_height: module.gutter_height,*/
/*             stack: module.stack,*/
/*             fix_rounding: module.fix_rounding,*/
/*             fix_outlook: module.fix_outlook,*/
/*             columns: module.columns*/
/*         } } %}*/
/*     </tr>*/
/* {% endblock content %}*/
/* */
