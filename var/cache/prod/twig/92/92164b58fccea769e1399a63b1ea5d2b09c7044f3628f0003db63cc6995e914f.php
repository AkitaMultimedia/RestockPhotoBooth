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

/* admin/settings/boxpresets_add.html.twig */
class __TwigTemplate_9a0d889d59a348c6877ab79269e990f5e10143ebd0ae6c9e1985583355f2961c extends Template
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
        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/settings/boxpresets_add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<p class=\"title\">Add of modify boxes presets</p>

 ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["boxForm"] ?? null), 'form_start');
        echo "
  <table class=\"form_table\">

    <tr>
        <td>";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["boxForm"] ?? null), "name", [], "any", false, false, false, 11), 'label');
        echo "</td>
        <td>
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["boxForm"] ?? null), "name", [], "any", false, false, false, 13), 'widget');
        echo "
        </td>
    </tr>
    <tr>
        <td>";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["boxForm"] ?? null), "length", [], "any", false, false, false, 17), 'label');
        echo "</td>
        <td>
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["boxForm"] ?? null), "length", [], "any", false, false, false, 19), 'widget');
        echo "
        </td>
    </tr>
    <tr>
        <td>";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["boxForm"] ?? null), "wide", [], "any", false, false, false, 23), 'label');
        echo "</td>
        <td>
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["boxForm"] ?? null), "wide", [], "any", false, false, false, 25), 'widget');
        echo "
        </td>
    </tr>
    <tr>
        <td>";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["boxForm"] ?? null), "height", [], "any", false, false, false, 29), 'label');
        echo "</td>
        <td>
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["boxForm"] ?? null), "height", [], "any", false, false, false, 31), 'widget');
        echo "
        </td>
    </tr>   
  
  </table>
  
 ";
    }

    // line 39
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "    <a href=\" ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("settings_menu");
        echo " \" class=\"btn btn-back\">Back</a>
    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["boxForm"] ?? null), "submit", [], "any", false, false, false, 41), 'row', ["label" => "Confirm", "attr" => ["class" => "btn btn-option"]]);
        // line 44
        echo "  
    ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["boxForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/settings/boxpresets_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 45,  126 => 44,  124 => 41,  119 => 40,  115 => 39,  104 => 31,  99 => 29,  92 => 25,  87 => 23,  80 => 19,  75 => 17,  68 => 13,  63 => 11,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/settings/boxpresets_add.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/admin/settings/boxpresets_add.html.twig");
    }
}
