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

/* admin/settings/boxpresets.html.twig */
class __TwigTemplate_193431c8453d16115fbe9db9c6874e071d29c94acf6516153c7ce922cf65fd29 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<p class=\"title\">Box Size Presets:</p>
";
        // line 2
        if (twig_test_empty(($context["box_presets"] ?? null))) {
            // line 3
            echo "
    <div class=\"settings_container\">
        <p>No box size presets are registered</p>
    </div>

";
        } else {
            // line 9
            echo "
    <table class=\"table\" cellspacing=\"0\" cellpadding=\"0\">
    <thead>
        <tr>
            <td>Name</td>
            <td>Length</td>
            <td>Wide</td>
            <td>Height</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["box_presets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["box"]) {
                // line 22
                echo "            <tr>
                <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["box"], "name", [], "any", false, false, false, 23), "html", null, true);
                echo "</td>
                <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["box"], "length", [], "any", false, false, false, 24), "html", null, true);
                echo "</td>
                <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["box"], "wide", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
                <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["box"], "height", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                <td>
                    <a href=\" ";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("settings_modify_box", ["id" => twig_get_attribute($this->env, $this->source, $context["box"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo " \" class=\"btn btn-table-left\">Modify</a>
                    <a href=\" ";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("settings_delete_box", ["id" => twig_get_attribute($this->env, $this->source, $context["box"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo " \" class=\"btn btn-table-left\">Delete</a>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['box'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    </tbody>
    </table>

";
        }
        // line 37
        echo "<a href=\" ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("settings_add_box");
        echo " \" class=\"btn btn-table-left\">Add boxes</a>
";
    }

    public function getTemplateName()
    {
        return "admin/settings/boxpresets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 37,  102 => 33,  92 => 29,  88 => 28,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  68 => 22,  64 => 21,  50 => 9,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/settings/boxpresets.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/admin/settings/boxpresets.html.twig");
    }
}
