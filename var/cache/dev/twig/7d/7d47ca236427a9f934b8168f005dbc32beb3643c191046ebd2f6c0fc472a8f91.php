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

/* admin/lotlist.html.twig */
class __TwigTemplate_dfd7aaf236df818320a69cb72a5f7ff263bd02093149dbba7de69553949d1447 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/lotlist.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/lotlist.html.twig"));

        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/lotlist.html.twig", 1);
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
     <p class=\"title\">LOTS FOR PO";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["po"]) || array_key_exists("po", $context) ? $context["po"] : (function () { throw new RuntimeError('Variable "po" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "</p>

    ";
        // line 7
        if (twig_test_empty((isset($context["lot_data"]) || array_key_exists("lot_data", $context) ? $context["lot_data"] : (function () { throw new RuntimeError('Variable "lot_data" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "
        <div class=\"settings_container\">
            <p>No lots for PO ";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["po"]) || array_key_exists("po", $context) ? $context["po"] : (function () { throw new RuntimeError('Variable "po" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "</p>
        </div>

    ";
        } else {
            // line 14
            echo "        <table class=\"table\" cellspacing=\"0\" cellpadding=\"0\">
            <thead>
                <tr>
                <td>PO</td>
                <td>Format</td>
                <td>Weight</td>
                <td>Pictures</td>
                </tr>
            </thead>
            <tbody>           
                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lot_data"]) || array_key_exists("lot_data", $context) ? $context["lot_data"] : (function () { throw new RuntimeError('Variable "lot_data" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lot"]) {
                // line 25
                echo "                    <tr>
                    <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lot"], "lot", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                    <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lot"], "format", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
                    <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lot"], "weight", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                    <td>
                    ";
                // line 30
                $context["nb_photos"] = 0;
                // line 31
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["lot"], "photos", [], "any", false, false, false, 31));
                foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                    // line 32
                    if ($context["photo"]) {
                        // line 33
                        $context["nb_photos"] = ((isset($context["nb_photos"]) || array_key_exists("nb_photos", $context) ? $context["nb_photos"] : (function () { throw new RuntimeError('Variable "nb_photos" does not exist.', 33, $this->source); })()) + 1);
                    }
                    // line 35
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                        <span class=\"nb_pictures\">";
                echo twig_escape_filter($this->env, (isset($context["nb_photos"]) || array_key_exists("nb_photos", $context) ? $context["nb_photos"] : (function () { throw new RuntimeError('Variable "nb_photos" does not exist.', 36, $this->source); })()), "html", null, true);
                echo "</span>
                        <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_view_photos", ["lot" => twig_get_attribute($this->env, $this->source, $context["lot"], "lot", [], "any", false, false, false, 37), "state" => (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 37, $this->source); })())]), "html", null, true);
                echo "\" class=\"btn btn-table-left\">View photos</a>                                    
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lot'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            </tbody>
        </table>
    ";
        }
        // line 44
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "        <a href=\" ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_polist", ["active" => (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 48, $this->source); })())]), "html", null, true);
        echo " \" class=\"btn btn-back\">Back</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/lotlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 48,  171 => 47,  160 => 44,  155 => 41,  145 => 37,  140 => 36,  134 => 35,  131 => 33,  129 => 32,  124 => 31,  122 => 30,  117 => 28,  113 => 27,  109 => 26,  106 => 25,  102 => 24,  90 => 14,  83 => 10,  79 => 8,  77 => 7,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/index.html.twig' %}

{% block content %}

     <p class=\"title\">LOTS FOR PO{{ po }}</p>

    {% if lot_data is empty  %}

        <div class=\"settings_container\">
            <p>No lots for PO {{ po }}</p>
        </div>

    {% else %}
        <table class=\"table\" cellspacing=\"0\" cellpadding=\"0\">
            <thead>
                <tr>
                <td>PO</td>
                <td>Format</td>
                <td>Weight</td>
                <td>Pictures</td>
                </tr>
            </thead>
            <tbody>           
                {% for lot in lot_data %}
                    <tr>
                    <td>{{ lot.lot }}</td>
                    <td>{{ lot.format }}</td>
                    <td>{{ lot.weight }}</td>
                    <td>
                    {% set nb_photos = 0 %}
                    {% for photo in lot.photos %}
                        {%- if photo %}
                            {%- set nb_photos = nb_photos + 1 -%}
                        {%- endif %}
                    {% endfor %}
                        <span class=\"nb_pictures\">{{ nb_photos }}</span>
                        <a href=\"{{ path('admin_view_photos', {'lot': lot.lot, 'state': state }) }}\" class=\"btn btn-table-left\">View photos</a>                                    
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}

{% endblock %}

{% block footer %}
        <a href=\" {{ path('admin_polist', {'active': state}) }} \" class=\"btn btn-back\">Back</a>
{% endblock %}

", "admin/lotlist.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/admin/lotlist.html.twig");
    }
}
