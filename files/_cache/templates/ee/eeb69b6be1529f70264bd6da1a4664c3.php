<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layout/page_card_notlogged.html.twig */
class __TwigTemplate_8e2d4183559ddba34e30518f491ed58b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content_block' => [$this, 'block_content_block'],
            'javascript_block' => [$this, 'block_javascript_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 34
        $context["theme"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("palette");
        // line 35
        if ( !array_key_exists("css_files", $context)) {
            // line 36
            echo "   ";
            $context["css_files"] = [0 => ["path" => "public/lib/base.css"], 1 => ["path" => (("css/palettes/" .             // line 38
($context["theme"] ?? null)) . ".scss")]];
            // line 40
            echo "   ";
        }
        // line 42
        if ( !array_key_exists("js_files", $context)) {
            // line 43
            echo "   ";
            $context["js_files"] = [0 => ["path" => "public/lib/base.js"], 1 => ["path" => "js/common.js"]];
        }
        // line 48
        echo "
";
        // line 49
        echo twig_include($this->env, $context, "layout/parts/head.html.twig");
        echo "
<body class=\"welcome-anonymous\">
<div class=\"login-wrapper\">

               ";
        // line 53
        $this->displayBlock('content_block', $context, $blocks);
        // line 54
        echo "<div class=\"login-banner\">
      
    </div>

</div>


   ";
        // line 61
        $this->displayBlock('javascript_block', $context, $blocks);
        // line 62
        echo "</body>
</html>
";
    }

    // line 53
    public function block_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 61
    public function block_javascript_block($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout/page_card_notlogged.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 61,  88 => 53,  82 => 62,  80 => 61,  71 => 54,  69 => 53,  62 => 49,  59 => 48,  55 => 43,  53 => 42,  50 => 40,  48 => 38,  46 => 36,  44 => 35,  42 => 34,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/page_card_notlogged.html.twig", "/var/www/html/glpi/templates/layout/page_card_notlogged.html.twig");
    }
}
