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

/* admin/polist.html.twig */
class __TwigTemplate_42bed0e7edff5a7aa5f46a09364ddba192922c1c8f84e8789844a8195f6f79e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/polist.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/polist.html.twig"));

        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/polist.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <p class=\"title\">";
        // line 5
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["state_name"]) || array_key_exists("state_name", $context) ? $context["state_name"] : (function () { throw new RuntimeError('Variable "state_name" does not exist.', 5, $this->source); })())), "html", null, true);
        echo " PO</p>

    ";
        // line 7
        if (twig_test_empty((isset($context["po_list"]) || array_key_exists("po_list", $context) ? $context["po_list"] : (function () { throw new RuntimeError('Variable "po_list" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "
        <div class=\"settings_container\">
            <p>No ";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["state_name"]) || array_key_exists("state_name", $context) ? $context["state_name"] : (function () { throw new RuntimeError('Variable "state_name" does not exist.', 10, $this->source); })()), "html", null, true);
            echo " PO</p>
        </div>

    ";
        } else {
            // line 14
            echo "        <table class=\"table\" cellspacing=\"0\" cellpadding=\"0\">
            <thead>
                <tr>
                <td>PO</td>
                <td>Number of lots</td>
                <td>Actions</td>
                </tr>
            </thead>
            <tbody>   
            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["po_list"]) || array_key_exists("po_list", $context) ? $context["po_list"] : (function () { throw new RuntimeError('Variable "po_list" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 24
                echo "                <tr>
                    <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "number", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
                    <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "lots", [], "any", false, false, false, 26)), "html", null, true);
                echo "</td>
                    <td>
                        ";
                // line 28
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, false, 28), 1))) {
                    // line 29
                    echo "                            <a href=\" ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mark_done", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                    echo " \" class=\"btn btn-table-left\">Mark as done</a>
                        ";
                } else {
                    // line 31
                    echo "                            COMPLETED
                        ";
                }
                // line 33
                echo "                        <a href=\" ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_view_lots", ["po_number" => twig_get_attribute($this->env, $this->source, $context["p"], "number", [], "any", false, false, false, 33), "state" => (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 33, $this->source); })())]), "html", null, true);
                echo " \" class=\"btn btn-table-left\">View lots</a>
                        <a href=\" ";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_get_csv", ["po_number" => twig_get_attribute($this->env, $this->source, $context["p"], "number", [], "any", false, false, false, 34), "state" => (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 34, $this->source); })())]), "html", null, true);
                echo " \" class=\"btn btn-table-left\">Get CSV</a>
                        <a href=\" ";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_csv", ["po_number" => twig_get_attribute($this->env, $this->source, $context["p"], "number", [], "any", false, false, false, 35), "state" => (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 35, $this->source); })())]), "html", null, true);
                echo " \" class=\"btn btn-table-left\">Mail CSV</a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        
            </tbody>
        </table>
    ";
        }
        // line 42
        echo "    <div class=\"footer\">
        <a href=\" ";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_menu");
        echo " \" class=\"btn\">Back to menu</a>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 49
        echo "        <a href=\" ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_menu");
        echo " \" class=\"btn btn-back\">Back</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/polist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 49,  171 => 48,  157 => 43,  154 => 42,  148 => 38,  138 => 35,  134 => 34,  129 => 33,  125 => 31,  119 => 29,  117 => 28,  112 => 26,  108 => 25,  105 => 24,  101 => 23,  90 => 14,  83 => 10,  79 => 8,  77 => 7,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/index.html.twig' %}

{% block content %}

    <p class=\"title\">{{ state_name|capitalize }} PO</p>

    {% if po_list is empty  %}

        <div class=\"settings_container\">
            <p>No {{ state_name }} PO</p>
        </div>

    {% else %}
        <table class=\"table\" cellspacing=\"0\" cellpadding=\"0\">
            <thead>
                <tr>
                <td>PO</td>
                <td>Number of lots</td>
                <td>Actions</td>
                </tr>
            </thead>
            <tbody>   
            {% for p in po_list %}
                <tr>
                    <td>{{ p.number }}</td>
                    <td>{{ p.lots|length }}</td>
                    <td>
                        {% if p.active == 1 %}
                            <a href=\" {{ path(\"admin_mark_done\", {'id': p.id }) }} \" class=\"btn btn-table-left\">Mark as done</a>
                        {% else %}
                            COMPLETED
                        {% endif %}
                        <a href=\" {{ path(\"admin_view_lots\", {'po_number': p.number, 'state': state }) }} \" class=\"btn btn-table-left\">View lots</a>
                        <a href=\" {{ path(\"admin_get_csv\", {'po_number': p.number, 'state': state }) }} \" class=\"btn btn-table-left\">Get CSV</a>
                        <a href=\" {{ path(\"admin_mail_csv\", {'po_number': p.number, 'state': state }) }} \" class=\"btn btn-table-left\">Mail CSV</a>
                    </td>
                </tr>
            {% endfor %}        
            </tbody>
        </table>
    {% endif %}
    <div class=\"footer\">
        <a href=\" {{ path('admin_menu') }} \" class=\"btn\">Back to menu</a>
    </div>

{% endblock %} 

{% block footer %}
        <a href=\" {{ path('admin_menu') }} \" class=\"btn btn-back\">Back</a>
{% endblock %}

", "admin/polist.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/admin/polist.html.twig");
    }
}
