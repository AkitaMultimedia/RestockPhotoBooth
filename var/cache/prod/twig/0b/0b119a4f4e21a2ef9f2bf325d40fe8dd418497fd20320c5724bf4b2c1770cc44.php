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

/* base.html.twig */
class __TwigTemplate_8db80cadd2d4e9607800cf8fe1e9364453f2027f0d390b7a35d78e2111d1d9e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1\">
        <meta name=\"theme-color\" content=\"#476a30\">
        <meta name=\"mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">

        <link rel=\"stylesheet\" href=\" ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo " \">
        <link rel=\"stylesheet\" href=\" ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/display.css"), "html", null, true);
        echo " \">
        <link rel=\"stylesheet\" href=\" ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/buttons.css"), "html", null, true);
        echo " \">
        
        <link rel=\"manifest\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("manifest.json?v=3"), "html", null, true);
        echo "\"> 

        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
        <!--
        <link rel=\"manifest\" href=\"manifest.json\">
        -->
        <title>";
        // line 21
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    </head>
    <body>
        <div class=\"header\">
            ";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 27
        echo "        </div>
        <div class=\"container\">
            ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "        </div>
        <div class=\"footer\">
            ";
        // line 32
        $this->displayBlock('footer', $context, $blocks);
        // line 33
        echo "        </div>        
        <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\" integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\" crossorigin=\"anonymous\"></script>
        <!--
        ";
        // line 37
        echo "        -->
        <script src=\" ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/global.js"), "html", null, true);
        echo " \"></script>
        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "
    </body>

</html>
";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 21
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Restock App";
    }

    // line 26
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 32
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 39
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 39,  149 => 32,  143 => 29,  137 => 26,  130 => 21,  124 => 16,  116 => 40,  114 => 39,  110 => 38,  107 => 37,  102 => 33,  100 => 32,  96 => 30,  94 => 29,  90 => 27,  88 => 26,  80 => 21,  74 => 17,  72 => 16,  67 => 14,  62 => 12,  58 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/base.html.twig");
    }
}
