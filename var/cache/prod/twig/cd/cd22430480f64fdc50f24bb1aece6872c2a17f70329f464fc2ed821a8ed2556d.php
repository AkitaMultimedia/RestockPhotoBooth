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
class __TwigTemplate_54b794f971e6ad349a4665827d0c13408ca4c3f786f08f29cb0962b3a9ab74cf extends Template
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
        echo " <p class=\"title\">Email addresses for done PO:</p>

 ";
        // line 3
        if (twig_test_empty(($context["emails"] ?? null))) {
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
            $context['_seq'] = twig_ensure_traversable(($context["emails"] ?? null));
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
        return array (  109 => 40,  103 => 36,  93 => 32,  89 => 31,  85 => 29,  81 => 27,  77 => 25,  75 => 24,  70 => 22,  67 => 21,  63 => 20,  51 => 10,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/settings/emails.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/admin/settings/emails.html.twig");
    }
}
