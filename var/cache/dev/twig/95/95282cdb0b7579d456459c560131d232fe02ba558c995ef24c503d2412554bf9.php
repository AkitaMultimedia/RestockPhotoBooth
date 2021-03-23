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
class __TwigTemplate_81f175f9b3823882e561b2a3f10c27b3ce1b0e8013e8a8abb84e561702afeba6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/settings/boxpresets.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/settings/boxpresets.html.twig"));

        // line 1
        echo "<p class=\"title\">Box Size Presets:</p>
";
        // line 2
        if (twig_test_empty((isset($context["box_presets"]) || array_key_exists("box_presets", $context) ? $context["box_presets"] : (function () { throw new RuntimeError('Variable "box_presets" does not exist.', 2, $this->source); })()))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["box_presets"]) || array_key_exists("box_presets", $context) ? $context["box_presets"] : (function () { throw new RuntimeError('Variable "box_presets" does not exist.', 21, $this->source); })()));
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  114 => 37,  108 => 33,  98 => 29,  94 => 28,  89 => 26,  85 => 25,  81 => 24,  77 => 23,  74 => 22,  70 => 21,  56 => 9,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"title\">Box Size Presets:</p>
{% if box_presets is empty  %}

    <div class=\"settings_container\">
        <p>No box size presets are registered</p>
    </div>

{% else %}

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
        {% for box in box_presets %}
            <tr>
                <td>{{ box.name }}</td>
                <td>{{ box.length }}</td>
                <td>{{ box.wide }}</td>
                <td>{{ box.height }}</td>
                <td>
                    <a href=\" {{ path(\"settings_modify_box\", {'id': box.id }) }} \" class=\"btn btn-table-left\">Modify</a>
                    <a href=\" {{ path(\"settings_delete_box\", {'id': box.id }) }} \" class=\"btn btn-table-left\">Delete</a>
                </td>
            </tr>
        {% endfor %}
    </tbody>
    </table>

{% endif %}
<a href=\" {{ path(\"settings_add_box\") }} \" class=\"btn btn-table-left\">Add boxes</a>
", "admin/settings/boxpresets.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/admin/settings/boxpresets.html.twig");
    }
}
