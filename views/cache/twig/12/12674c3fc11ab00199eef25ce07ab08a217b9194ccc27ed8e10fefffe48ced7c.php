<?php

/* layouts/base.html */
class __TwigTemplate_b76d661978c8100126634089e35616ee5ae321d8c9341c52cf5b43f5e7ca4edd extends Twig_Template
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
        // line 29
        echo "</head>
<body>
<table class=\"table-wrapper\" align=\"center\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
    <tr>
        <td align=\"center\">
            ";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 41
        echo "            
            ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "            
            ";
        // line 48
        $this->displayBlock('footer', $context, $blocks);
        // line 55
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
        echo $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "stylesheet", array());
        echo "
    </style>
    <style type=\"text/css\" rel=\"addons\">
        ";
        // line 13
        echo $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "stylesheet_addons", array());
        echo "
    </style>
    <!--[if gte mso 12]>
    <style type=\"text/css\">
        .element, .content-intro, .button, .bullet-text, .list-item-text, .date {
            font-family: Arial, sans-serif !important;
        }
    </style>
    <![endif]-->
    <!--[if gte mso 9]><xml>
     <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
     </o:OfficeDocumentSettings>
    </xml><![endif]-->
";
    }

    // line 34
    public function block_header($context, array $blocks = array())
    {
        // line 35
        echo "                ";
        if ($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "header", array())) {
            // line 36
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
                // line 37
                echo "                        ";
                $this->loadTemplate((("modules/" . $this->getAttribute($context["module"], "template", array())) . ".html"), "layouts/base.html", 37)->display(array_merge($context, array("module" => (($this->getAttribute($context["module"], "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["module"], "options", array()), array())) : (array())))));
                // line 38
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
            // line 39
            echo "                ";
        }
        // line 40
        echo "            ";
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        // line 43
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
            // line 44
            echo "                    ";
            $this->loadTemplate((("modules/" . $this->getAttribute($context["module"], "template", array())) . ".html"), "layouts/base.html", 44)->display(array_merge($context, array("module" => (($this->getAttribute($context["module"], "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["module"], "options", array()), array())) : (array())))));
            // line 45
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
        // line 46
        echo "            ";
    }

    // line 48
    public function block_footer($context, array $blocks = array())
    {
        // line 49
        echo "                ";
        if ($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "footer", array())) {
            // line 50
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
                // line 51
                echo "                        ";
                $this->loadTemplate((("modules/" . $this->getAttribute($context["module"], "template", array())) . ".html"), "layouts/base.html", 51)->display(array_merge($context, array("module" => (($this->getAttribute($context["module"], "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["module"], "options", array()), array())) : (array())))));
                // line 52
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
            // line 53
            echo "                ";
        }
        // line 54
        echo "            ";
    }

    public function getTemplateName()
    {
        return "layouts/base.html";
    }

    public function getDebugInfo()
    {
        return array (  229 => 54,  226 => 53,  212 => 52,  209 => 51,  191 => 50,  188 => 49,  185 => 48,  181 => 46,  167 => 45,  164 => 44,  146 => 43,  143 => 42,  139 => 40,  136 => 39,  122 => 38,  119 => 37,  101 => 36,  98 => 35,  95 => 34,  75 => 13,  69 => 10,  60 => 5,  57 => 4,  49 => 55,  47 => 48,  44 => 47,  42 => 42,  39 => 41,  37 => 34,  30 => 29,  28 => 4,  23 => 1,);
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
/*         {{ email.stylesheet }}*/
/*     </style>*/
/*     <style type="text/css" rel="addons">*/
/*         {{ email.stylesheet_addons }}*/
/*     </style>*/
/*     <!--[if gte mso 12]>*/
/*     <style type="text/css">*/
/*         .element, .content-intro, .button, .bullet-text, .list-item-text, .date {*/
/*             font-family: Arial, sans-serif !important;*/
/*         }*/
/*     </style>*/
/*     <![endif]-->*/
/*     <!--[if gte mso 9]><xml>*/
/*      <o:OfficeDocumentSettings>*/
/*       <o:AllowPNG/>*/
/*       <o:PixelsPerInch>96</o:PixelsPerInch>*/
/*      </o:OfficeDocumentSettings>*/
/*     </xml><![endif]-->*/
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
/*                 {% endif %}*/
/*             {% endblock footer %}*/
/*         </td>*/
/*     </tr>*/
/* </table>*/
/* </body>*/
/* </html>*/
