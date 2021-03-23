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

/* main/main_menu.html.twig */
class __TwigTemplate_846ad2323492a71737d173fb9772e541c4f14ca01bbe6e0f3885e6e6237f0698 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "main/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("main/index.html.twig", "main/main_menu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 4)) {
            // line 5
            echo "        <a id=\"logout\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">LOG OUT</a>
        <span>";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6), "username", [], "any", false, false, false, 6), "html", null, true);
            echo "</span>     
    ";
        } else {
            // line 8
            echo "        <a id=\"logout\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">LOG IN</a>
    ";
        }
        // line 10
        echo "
";
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "    
    
    <div class=\"flex_column_centered\">
        <h2 class=\"main_title\">Restock Booth App</h2>
            <a href=\" ";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booth_start");
        echo " \" class=\"btn btn-option\" id=\"btn_admin\">Start</a>
            <a href=\" ";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_settings");
        echo " \" class=\"btn btn-option\" id=\"btn_admin\">Settings</a>
           ";
        // line 19
        if ((0 === twig_compare(($context["user_is_admin"] ?? null), 1))) {
            // line 20
            echo "            <a href=\" ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_menu");
            echo " \" class=\"btn btn-option\" id=\"btn_admin\">Admin</a>
           ";
        }
        // line 22
        echo "        <div>SYNC - Lots to upload: <span class=\"sync_icon\">0</span></div>
    </div>

";
    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    <script>
         document.getElementById(\"vue_name\").innerText = \"Version 0.0.61\";
         let queue = testLocalStorage();
         document.querySelector(\".sync_icon\").innetText = queue;
    </script>
";
    }

    public function getTemplateName()
    {
        return "main/main_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 28,  108 => 27,  101 => 22,  95 => 20,  93 => 19,  89 => 18,  85 => 17,  76 => 13,  71 => 10,  65 => 8,  60 => 6,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/main_menu.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/main/main_menu.html.twig");
    }
}
