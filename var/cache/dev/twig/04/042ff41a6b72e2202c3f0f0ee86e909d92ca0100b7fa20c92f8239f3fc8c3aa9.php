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

/* admin/settings/emails.html.twig */
class __TwigTemplate_98a13cfffb14a774944aa8f4d2c51b6b8e5d0fade44918af2f1a165efd871168 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/settings/emails.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/settings/emails.html.twig"));

        // line 1
        echo " <p class=\"title\">Email addresses for done PO:</p>

 ";
        // line 3
        if (twig_test_empty((isset($context["emails"]) || array_key_exists("emails", $context) ? $context["emails"] : (function () { throw new RuntimeError('Variable "emails" does not exist.', 3, $this->source); })()))) {
            // line 4
            echo "
    <div class=\"settings_container\">
        <p>No emails are registered</p>
    </div>

";
        } else {
            // line 10
            echo "
    <table class=\"table\" cellspacing=\"0\" cellpadding=\"0\">
    <thead>
        <tr>
            <td>Email</td>
            <td>Active</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["emails"]) || array_key_exists("emails", $context) ? $context["emails"] : (function () { throw new RuntimeError('Variable "emails" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["email"]) {
                // line 21
                echo "            <tr>
                <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "email", [], "any", false, false, false, 22), "html", null, true);
                echo "</td>
                <td>
                    ";
                // line 24
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["email"], "active", [], "any", false, false, false, 24), true))) {
                    // line 25
                    echo "                        Yes
                    ";
                } else {
                    // line 27
                    echo "                        No
                    ";
                }
                // line 29
                echo "                </td>
                <td>
                    <a href=\" ";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("settings_modify_email", ["id" => twig_get_attribute($this->env, $this->source, $context["email"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo " \" class=\"btn btn-table-left\">Modify</a>
                    <a href=\" ";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("settings_delete_email", ["id" => twig_get_attribute($this->env, $this->source, $context["email"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo " \" class=\"btn btn-table-left\">Delete</a>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['email'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "    </tbody>
    </table>

";
        }
        // line 40
        echo "<a href=\" ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("settings_add_email");
        echo " \" class=\"btn btn-table-left\">Add email</a>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/settings/emails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 40,  109 => 36,  99 => 32,  95 => 31,  91 => 29,  87 => 27,  83 => 25,  81 => 24,  76 => 22,  73 => 21,  69 => 20,  57 => 10,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <p class=\"title\">Email addresses for done PO:</p>

 {% if emails is empty  %}

    <div class=\"settings_container\">
        <p>No emails are registered</p>
    </div>

{% else %}

    <table class=\"table\" cellspacing=\"0\" cellpadding=\"0\">
    <thead>
        <tr>
            <td>Email</td>
            <td>Active</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        {% for email in emails %}
            <tr>
                <td>{{ email.email }}</td>
                <td>
                    {% if email.active == true %}
                        Yes
                    {% else %}
                        No
                    {% endif %}
                </td>
                <td>
                    <a href=\" {{ path(\"settings_modify_email\", {'id': email.id }) }} \" class=\"btn btn-table-left\">Modify</a>
                    <a href=\" {{ path(\"settings_delete_email\", {'id': email.id }) }} \" class=\"btn btn-table-left\">Delete</a>
                </td>
            </tr>
        {% endfor %}
    </tbody>
    </table>

{% endif %}
<a href=\" {{ path(\"settings_add_email\") }} \" class=\"btn btn-table-left\">Add email</a>
", "admin/settings/emails.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/admin/settings/emails.html.twig");
    }
}
