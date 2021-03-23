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
class __TwigTemplate_bc1533fff6d2c5ca4bcda83c2c23ef3663a86c57597f755adbed7b842c8e5e39 extends Template
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
        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/polist.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <p class=\"title\">";
        // line 5
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["state_name"] ?? null)), "html", null, true);
        echo " PO</p>

    ";
        // line 7
        if (twig_test_empty(($context["po_list"] ?? null))) {
            // line 8
            echo "
        <div class=\"settings_container\">
            <p>No ";
            // line 10
            echo twig_escape_filter($this->env, ($context["state_name"] ?? null), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["po_list"] ?? null));
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_view_lots", ["po_number" => twig_get_attribute($this->env, $this->source, $context["p"], "number", [], "any", false, false, false, 33), "state" => ($context["state"] ?? null)]), "html", null, true);
                echo " \" class=\"btn btn-table-left\">View lots</a>
                        <a href=\" ";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_get_csv", ["po_number" => twig_get_attribute($this->env, $this->source, $context["p"], "number", [], "any", false, false, false, 34), "state" => ($context["state"] ?? null)]), "html", null, true);
                echo " \" class=\"btn btn-table-left\">Get CSV</a>
                        <a href=\" ";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_csv", ["po_number" => twig_get_attribute($this->env, $this->source, $context["p"], "number", [], "any", false, false, false, 35), "state" => ($context["state"] ?? null)]), "html", null, true);
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
    }

    // line 48
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "        <a href=\" ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_menu");
        echo " \" class=\"btn btn-back\">Back</a>
";
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
        return array (  151 => 49,  147 => 48,  139 => 43,  136 => 42,  130 => 38,  120 => 35,  116 => 34,  111 => 33,  107 => 31,  101 => 29,  99 => 28,  94 => 26,  90 => 25,  87 => 24,  83 => 23,  72 => 14,  65 => 10,  61 => 8,  59 => 7,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/polist.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/admin/polist.html.twig");
    }
}
