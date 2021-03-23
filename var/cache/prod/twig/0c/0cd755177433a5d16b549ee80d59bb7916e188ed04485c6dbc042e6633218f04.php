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
class __TwigTemplate_994e15f2116e4fdb496e76db8a398e7a3a232cf2ca3510b836b1c9c63b116788 extends Template
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
        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/lotlist.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
     <p class=\"title\">LOTS FOR PO";
        // line 5
        echo twig_escape_filter($this->env, ($context["po"] ?? null), "html", null, true);
        echo "</p>

    ";
        // line 7
        if (twig_test_empty(($context["lot_data"] ?? null))) {
            // line 8
            echo "
        <div class=\"settings_container\">
            <p>No lots for PO ";
            // line 10
            echo twig_escape_filter($this->env, ($context["po"] ?? null), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["lot_data"] ?? null));
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
                        $context["nb_photos"] = (($context["nb_photos"] ?? null) + 1);
                    }
                    // line 35
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                        <span class=\"nb_pictures\">";
                echo twig_escape_filter($this->env, ($context["nb_photos"] ?? null), "html", null, true);
                echo "</span>
                        <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_view_photos", ["lot" => twig_get_attribute($this->env, $this->source, $context["lot"], "lot", [], "any", false, false, false, 37), "state" => ($context["state"] ?? null)]), "html", null, true);
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
    }

    // line 47
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "        <a href=\" ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_polist", ["active" => ($context["state"] ?? null)]), "html", null, true);
        echo " \" class=\"btn btn-back\">Back</a>
";
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
        return array (  151 => 48,  147 => 47,  142 => 44,  137 => 41,  127 => 37,  122 => 36,  116 => 35,  113 => 33,  111 => 32,  106 => 31,  104 => 30,  99 => 28,  95 => 27,  91 => 26,  88 => 25,  84 => 24,  72 => 14,  65 => 10,  61 => 8,  59 => 7,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/lotlist.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/admin/lotlist.html.twig");
    }
}
