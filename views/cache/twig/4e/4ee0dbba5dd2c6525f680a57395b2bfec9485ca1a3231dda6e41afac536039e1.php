<?php

/* layouts/base.html */
class __TwigTemplate_e0af9de58e34057625066ecea545a4a40c14cf59f17a6eedbe2ff728605ebfab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 16
        echo "</head>
<body>
<table class=\"table-wrapper\" align=\"center\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
    <tr>
        <td align=\"center\">
            ";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 30
        echo "            
            ";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "            
            ";
        // line 37
        $this->displayBlock('footer', $context, $blocks);
        // line 47
        echo "        </td>
    </tr>
</table>
</body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <title>";
        echo (($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "title", array()), "Master Template")) : ("Master Template"));
        echo "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">
    <style type=\"text/css\" rel=\"theme\">
        ";
        // line 10
        echo call_user_func_array($this->env->getFunction('render_file')->getCallable(), array($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "stylesheet_url", array())));
        echo "
    </style>
    <style type=\"text/css\" rel=\"addons\">
        ";
        // line 13
        echo call_user_func_array($this->env->getFunction('render_file')->getCallable(), array($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "stylesheet_addons_url", array())));
        echo "
    </style>
";
    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        // line 22
        echo "                ";
        if ($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "header", array())) {
            // line 23
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "header", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 24
                echo "                        ";
                $this->loadTemplate((("modules/" . $this->getAttribute($context["module"], "template", array())) . ".html"), "layouts/base.html", 24)->display(array_merge($context, array("module" => (($this->getAttribute($context["module"], "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["module"], "options", array()), array())) : (array())))));
                // line 25
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                ";
        } else {
            // line 27
            echo "                    ";
            $this->loadTemplate("modules/topbar.html", "layouts/base.html", 27)->display($context);
            // line 28
            echo "                ";
        }
        // line 29
        echo "            ";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "content", array()), array())) : (array())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 33
            echo "                    ";
            $this->loadTemplate((("modules/" . $this->getAttribute($context["module"], "template", array())) . ".html"), "layouts/base.html", 33)->display(array_merge($context, array("module" => (($this->getAttribute($context["module"], "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["module"], "options", array()), array())) : (array())))));
            // line 34
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            ";
    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        // line 38
        echo "                ";
        if ($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "footer", array())) {
            // line 39
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "footer", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 40
                echo "                        ";
                $this->loadTemplate((("modules/" . $this->getAttribute($context["module"], "template", array())) . ".html"), "layouts/base.html", 40)->display(array_merge($context, array("module" => (($this->getAttribute($context["module"], "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["module"], "options", array()), array())) : (array())))));
                // line 41
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                ";
        } else {
            // line 43
            echo "                    ";
            $this->loadTemplate("modules/footer.html", "layouts/base.html", 43)->display($context);
            // line 44
            echo "                    ";
            $this->loadTemplate("modules/bottombar.html", "layouts/base.html", 44)->display($context);
            // line 45
            echo "                ";
        }
        // line 46
        echo "            ";
    }

    public function getTemplateName()
    {
        return "layouts/base.html";
    }

    public function getDebugInfo()
    {
        return array (  231 => 46,  228 => 45,  225 => 44,  222 => 43,  219 => 42,  205 => 41,  202 => 40,  184 => 39,  181 => 38,  178 => 37,  174 => 35,  160 => 34,  157 => 33,  139 => 32,  136 => 31,  132 => 29,  129 => 28,  126 => 27,  123 => 26,  109 => 25,  106 => 24,  88 => 23,  85 => 22,  82 => 21,  75 => 13,  69 => 10,  60 => 5,  57 => 4,  49 => 47,  47 => 37,  44 => 36,  42 => 31,  39 => 30,  37 => 21,  30 => 16,  28 => 4,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* {% block head %}*/
/*     <title>{{ email.title|default('Master Template') }}</title>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">*/
/*     <style type="text/css" rel="theme">*/
/*         {{ render_file(email.stylesheet_url) }}*/
/*     </style>*/
/*     <style type="text/css" rel="addons">*/
/*         {{ render_file(email.stylesheet_addons_url) }}*/
/*     </style>*/
/* {% endblock head %}*/
/* </head>*/
/* <body>*/
/* <table class="table-wrapper" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">*/
/*     <tr>*/
/*         <td align="center">*/
/*             {% block header %}*/
/*                 {% if email.header %}*/
/*                     {% for module in email.header %}*/
/*                         {% include "modules/#{module.template}.html" with { module: module.options|default({}) } %}*/
/*                     {% endfor %}*/
/*                 {% else %}*/
/*                     {% include "modules/topbar.html" %}*/
/*                 {% endif %}*/
/*             {% endblock header %}*/
/*             */
/*             {% block content %}*/
/*                 {% for module in email.content|default([]) %}*/
/*                     {% include "modules/#{module.template}.html" with { module: module.options|default({}) } %}*/
/*                 {% endfor %}*/
/*             {% endblock content %}*/
/*             */
/*             {% block footer %}*/
/*                 {% if email.footer %}*/
/*                     {% for module in email.footer %}*/
/*                         {% include "modules/#{module.template}.html" with { module: module.options|default({}) } %}*/
/*                     {% endfor %}*/
/*                 {% else %}*/
/*                     {% include "modules/footer.html" %}*/
/*                     {% include "modules/bottombar.html" %}*/
/*                 {% endif %}*/
/*             {% endblock footer %}*/
/*         </td>*/
/*     </tr>*/
/* </table>*/
/* </body>*/
/* </html>*/
