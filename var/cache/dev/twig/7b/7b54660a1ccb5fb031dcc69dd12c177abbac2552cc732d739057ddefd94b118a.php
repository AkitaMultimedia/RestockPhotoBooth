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
class __TwigTemplate_610949ead8ab0e80fbd782c89421a8732dbbea45bef30f71dc1346c66d81df2d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/settings/emails_add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/settings/emails_add.html.twig"));

        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/settings/emails_add.html.twig", 1);
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
<p class=\"title\">Add of modify emails for PO send</p>
  <table class=\"form_table\">
 ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["emailsForm"]) || array_key_exists("emailsForm", $context) ? $context["emailsForm"] : (function () { throw new RuntimeError('Variable "emailsForm" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
   
    <tr>
        <td>";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailsForm"]) || array_key_exists("emailsForm", $context) ? $context["emailsForm"] : (function () { throw new RuntimeError('Variable "emailsForm" does not exist.', 10, $this->source); })()), "email", [], "any", false, false, false, 10), 'label');
        echo "</td>
        <td>
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailsForm"]) || array_key_exists("emailsForm", $context) ? $context["emailsForm"] : (function () { throw new RuntimeError('Variable "emailsForm" does not exist.', 12, $this->source); })()), "email", [], "any", false, false, false, 12), 'widget');
        echo "
        </td>
    </tr>
    <tr>
        <td>";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailsForm"]) || array_key_exists("emailsForm", $context) ? $context["emailsForm"] : (function () { throw new RuntimeError('Variable "emailsForm" does not exist.', 16, $this->source); })()), "active", [], "any", false, false, false, 16), 'label');
        echo "</td>
        <td>
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailsForm"]) || array_key_exists("emailsForm", $context) ? $context["emailsForm"] : (function () { throw new RuntimeError('Variable "emailsForm" does not exist.', 18, $this->source); })()), "active", [], "any", false, false, false, 18), 'widget');
        echo "
        </td>
    </tr>


 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 26
        echo "    <a href=\" ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("settings_menu");
        echo " \" class=\"btn btn-back\">Back</a>
    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailsForm"]) || array_key_exists("emailsForm", $context) ? $context["emailsForm"] : (function () { throw new RuntimeError('Variable "emailsForm" does not exist.', 27, $this->source); })()), "submit", [], "any", false, false, false, 27), 'row', ["label" => "Confirm", "attr" => ["class" => "btn btn-option"]]);
        // line 30
        echo "  
    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["emailsForm"]) || array_key_exists("emailsForm", $context) ? $context["emailsForm"] : (function () { throw new RuntimeError('Variable "emailsForm" does not exist.', 31, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  133 => 31,  130 => 30,  128 => 27,  123 => 26,  113 => 25,  97 => 18,  92 => 16,  85 => 12,  80 => 10,  74 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/index.html.twig' %}

{% block content %}

<p class=\"title\">Add of modify emails for PO send</p>
  <table class=\"form_table\">
 {{ form_start(emailsForm) }}
   
    <tr>
        <td>{{ form_label(emailsForm.email) }}</td>
        <td>
        {{ form_widget(emailsForm.email) }}
        </td>
    </tr>
    <tr>
        <td>{{ form_label(emailsForm.active) }}</td>
        <td>
        {{ form_widget(emailsForm.active) }}
        </td>
    </tr>


 {% endblock %}

 {% block footer %}
    <a href=\" {{ path('settings_menu') }} \" class=\"btn btn-back\">Back</a>
    {{ form_row(emailsForm.submit, {
        label: 'Confirm',
        'attr': {'class': 'btn btn-option'}
    }) }}  
    {{ form_end(emailsForm) }}
{% endblock %}", "admin/settings/emails_add.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/admin/settings/emails_add.html.twig");
    }
}
