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

/* admin/settings/dav_settings_change.html.twig */
class __TwigTemplate_44673b8f42599d37883aa980390d947b067fdf21e97855adb5d2f855d78427de extends Template
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
        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/settings/dav_settings_change.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <p class=\"title\">Change configuration</p>

    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["configForm"] ?? null), 'form_start');
        echo "

    <table class=\"form_table\">

        <tr>
            <td>";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configForm"] ?? null), "name", [], "any", false, false, false, 12), 'widget');
        echo "</td>
            <td>
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configForm"] ?? null), "value", [], "any", false, false, false, 14), 'widget');
        echo "
            </td>
        </tr>

    </table>
  
";
    }

    // line 22
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <a href=\" ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("settings_menu");
        echo " \" class=\"btn btn-back\">Back</a>
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["configForm"] ?? null), "submit", [], "any", false, false, false, 24), 'row', ["label" => "Confirm", "attr" => ["class" => "btn btn-option"]]);
        // line 27
        echo "  
    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["configForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/settings/dav_settings_change.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 28,  91 => 27,  89 => 24,  84 => 23,  80 => 22,  69 => 14,  64 => 12,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/settings/dav_settings_change.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/admin/settings/dav_settings_change.html.twig");
    }
}
