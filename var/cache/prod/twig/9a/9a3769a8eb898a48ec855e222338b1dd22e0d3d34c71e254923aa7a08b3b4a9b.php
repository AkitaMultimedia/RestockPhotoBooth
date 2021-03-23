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

/* main/user_settings.html.twig */
class __TwigTemplate_a37f0aacf351f6fc232d124fc3603f2495aec2a30db9bb03ccb724d4c5f10cbc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
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
        $this->parent = $this->loadTemplate("main/index.html.twig", "main/user_settings.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Booth App Settings";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <link rel=\"stylesheet\" href=\" ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/admin.css"), "html", null, true);
        echo " \">
";
    }

    // line 10
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <div id=\"lot_number\"></div>
    <div id=\"vue_name\">Settings</div>
";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  

    <p class=\"title\">Box Size Presets</p>

    ";
        // line 19
        if (twig_test_empty(($context["box_presets"] ?? null))) {
            // line 20
            echo "
        <div class=\"settings_container\">
            <p>No box size presets are registered</p>
        </div>

    ";
        } else {
            // line 26
            echo "
        <table class=\"table\" cellspacing=\"0\" cellpadding=\"0\">
        <thead>
            <tr>
                <td>Name</td>
                <td>Width</td>
                <td>Wide</td>
                <td>Height</td>
                <td>Favorites</td>
            </tr>
        </thead>
        <tbody>
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["box_presets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["box"]) {
                // line 39
                echo "                <tr>
                    <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["box"], "name", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                    <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["box"], "length", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
                    <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["box"], "wide", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                    <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["box"], "height", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
                    <td>
                        <input type=\"checkbox\" class=\"user_favorites\" value=\"";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["box"], "id", [], "any", false, false, false, 45), "html", null, true);
                echo "\" l=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["box"], "length", [], "any", false, false, false, 45), "html", null, true);
                echo "\" w=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["box"], "wide", [], "any", false, false, false, 45), "html", null, true);
                echo "\"  h=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["box"], "height", [], "any", false, false, false, 45), "html", null, true);
                echo "\">
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['box'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "        </tbody>
        </table>

    ";
        }
        // line 53
        echo "
";
    }

    // line 56
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"btn btn-back\">Back</a>
    <a href=\"#\" id=\"confirm_presets\" class=\"btn btn-back confirm_presets\">Confirm</a>
";
    }

    // line 62
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "    <script src=\" ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/booth/user_settings.js"), "html", null, true);
        echo " \"></script>
";
    }

    public function getTemplateName()
    {
        return "main/user_settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 63,  175 => 62,  167 => 57,  163 => 56,  158 => 53,  152 => 49,  136 => 45,  131 => 43,  127 => 42,  123 => 41,  119 => 40,  116 => 39,  112 => 38,  98 => 26,  90 => 20,  88 => 19,  79 => 15,  73 => 11,  69 => 10,  62 => 7,  58 => 6,  51 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/user_settings.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/main/user_settings.html.twig");
    }
}
