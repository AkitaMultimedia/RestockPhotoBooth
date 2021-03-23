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

/* admin/settings/users.html.twig */
class __TwigTemplate_cf3030f8381b2c3ff9a0eb55f546a9bf20407056804a773ee919665b53da3c04 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/settings/users.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/settings/users.html.twig"));

        // line 1
        echo "<p class=\"title\">Users:</p>

";
        // line 3
        if (twig_test_empty((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 3, $this->source); })()))) {
            // line 4
            echo "
    <div class=\"settings_container\">
        <p>No users are registered</p>
    </div>

";
        } else {
            // line 10
            echo "
    <table class=\"table\" cellspacing=\"0\" cellpadding=\"0\">
    <thead>
        <tr>
            <td>Name</td>
            <td>Roles</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 21
                echo "            <tr>
                <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 22), "html", null, true);
                echo "</td>
                <td>
                    ";
                // line 24
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 24), 0, [], "array", false, false, false, 24), "ROLE_USER"))) {
                    // line 25
                    echo "                        User
                    ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 26
$context["user"], "roles", [], "any", false, false, false, 26), 0, [], "array", false, false, false, 26), "ROLE_ADMIN"))) {
                    // line 27
                    echo "                        Admin
                    ";
                }
                // line 28
                echo "                              
                </td>
                <td>
                    <a href=\" ";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_modify_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo " \" class=\"btn btn-table-left\">Modify</a>
                    <a href=\" ";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo " \" class=\"btn btn-table-left\">Delete</a>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "    </tbody>
    </table>
";
        }
        // line 39
        echo "
<a href=\" ";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_add_user");
        echo " \" class=\"btn btn-table-left\">Add user</a>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/settings/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  116 => 39,  111 => 36,  101 => 32,  97 => 31,  92 => 28,  88 => 27,  86 => 26,  83 => 25,  81 => 24,  76 => 22,  73 => 21,  69 => 20,  57 => 10,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"title\">Users:</p>

{% if users is empty  %}

    <div class=\"settings_container\">
        <p>No users are registered</p>
    </div>

{% else %}

    <table class=\"table\" cellspacing=\"0\" cellpadding=\"0\">
    <thead>
        <tr>
            <td>Name</td>
            <td>Roles</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        {% for user in users %}
            <tr>
                <td>{{ user.username }}</td>
                <td>
                    {% if user.roles[0] == \"ROLE_USER\" %}
                        User
                    {% elseif user.roles[0] == \"ROLE_ADMIN\" %}
                        Admin
                    {% endif %}                              
                </td>
                <td>
                    <a href=\" {{ path(\"admin_modify_user\", {'id': user.id }) }} \" class=\"btn btn-table-left\">Modify</a>
                    <a href=\" {{ path(\"admin_delete_user\", {'id': user.id }) }} \" class=\"btn btn-table-left\">Delete</a>
                </td>
            </tr>
        {% endfor %}
    </tbody>
    </table>
{% endif %}

<a href=\" {{ path(\"admin_add_user\") }} \" class=\"btn btn-table-left\">Add user</a>", "admin/settings/users.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/admin/settings/users.html.twig");
    }
}
