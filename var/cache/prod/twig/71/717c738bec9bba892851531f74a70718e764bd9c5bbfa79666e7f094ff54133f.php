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

/* main/index.html.twig */
class __TwigTemplate_235e510451ea6daeb712ce4b03df2135e80044c41364f4ad959b5139a4d8b7a8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Login page";
    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div id=\"lot_number\"></div>
    <div id=\"vue_name\"></div>
";
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <div id=\"main\" class=\"vue_wrapper\">
        ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "    </div>
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 16
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 16,  81 => 12,  76 => 13,  74 => 12,  71 => 11,  67 => 10,  61 => 6,  57 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/index.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/main/index.html.twig");
    }
}
