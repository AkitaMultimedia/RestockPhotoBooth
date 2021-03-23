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

/* admin/settings/emails_add.html.twig */
class __TwigTemplate_5172d34e99000e7e46e267da269b2b312ac87e78459dece5972cb812fe21ba13 extends Template
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
        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/settings/emails_add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<p class=\"title\">Add of modify emails for PO send</p>
  <table class=\"form_table\">
 ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["emailsForm"] ?? null), 'form_start');
        echo "
   
    <tr>
        <td>";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["emailsForm"] ?? null), "email", [], "any", false, false, false, 10), 'label');
        echo "</td>
        <td>
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["emailsForm"] ?? null), "email", [], "any", false, false, false, 12), 'widget');
        echo "
        </td>
    </tr>
    <tr>
        <td>";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["emailsForm"] ?? null), "active", [], "any", false, false, false, 16), 'label');
        echo "</td>
        <td>
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["emailsForm"] ?? null), "active", [], "any", false, false, false, 18), 'widget');
        echo "
        </td>
    </tr>


 ";
    }

    // line 25
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    <a href=\" ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("settings_menu");
        echo " \" class=\"btn btn-back\">Back</a>
    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["emailsForm"] ?? null), "submit", [], "any", false, false, false, 27), 'row', ["label" => "Confirm", "attr" => ["class" => "btn btn-option"]]);
        // line 30
        echo "  
    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["emailsForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/settings/emails_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 31,  100 => 30,  98 => 27,  93 => 26,  89 => 25,  79 => 18,  74 => 16,  67 => 12,  62 => 10,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/settings/emails_add.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/admin/settings/emails_add.html.twig");
    }
}
