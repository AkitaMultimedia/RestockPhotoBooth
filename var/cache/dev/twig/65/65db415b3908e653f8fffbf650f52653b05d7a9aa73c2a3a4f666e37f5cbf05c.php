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
class __TwigTemplate_2aa67f531671f1edfa60b68399162bf055dbbf51e6a509835ccd3a381b440993 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/settings/boxpresets_add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/settings/boxpresets_add.html.twig"));

        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/settings/boxpresets_add.html.twig", 1);
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
<p class=\"title\">Add of modify boxes presets</p>

 ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["boxForm"]) || array_key_exists("boxForm", $context) ? $context["boxForm"] : (function () { throw new RuntimeError('Variable "boxForm" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
  <table class=\"form_table\">

    <tr>
        <td>";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["boxForm"]) || array_key_exists("boxForm", $context) ? $context["boxForm"] : (function () { throw new RuntimeError('Variable "boxForm" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), 'label');
        echo "</td>
        <td>
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["boxForm"]) || array_key_exists("boxForm", $context) ? $context["boxForm"] : (function () { throw new RuntimeError('Variable "boxForm" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), 'widget');
        echo "
        </td>
    </tr>
    <tr>
        <td>";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["boxForm"]) || array_key_exists("boxForm", $context) ? $context["boxForm"] : (function () { throw new RuntimeError('Variable "boxForm" does not exist.', 17, $this->source); })()), "length", [], "any", false, false, false, 17), 'label');
        echo "</td>
        <td>
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["boxForm"]) || array_key_exists("boxForm", $context) ? $context["boxForm"] : (function () { throw new RuntimeError('Variable "boxForm" does not exist.', 19, $this->source); })()), "length", [], "any", false, false, false, 19), 'widget');
        echo "
        </td>
    </tr>
    <tr>
        <td>";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["boxForm"]) || array_key_exists("boxForm", $context) ? $context["boxForm"] : (function () { throw new RuntimeError('Variable "boxForm" does not exist.', 23, $this->source); })()), "wide", [], "any", false, false, false, 23), 'label');
        echo "</td>
        <td>
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["boxForm"]) || array_key_exists("boxForm", $context) ? $context["boxForm"] : (function () { throw new RuntimeError('Variable "boxForm" does not exist.', 25, $this->source); })()), "wide", [], "any", false, false, false, 25), 'widget');
        echo "
        </td>
    </tr>
    <tr>
        <td>";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["boxForm"]) || array_key_exists("boxForm", $context) ? $context["boxForm"] : (function () { throw new RuntimeError('Variable "boxForm" does not exist.', 29, $this->source); })()), "height", [], "any", false, false, false, 29), 'label');
        echo "</td>
        <td>
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["boxForm"]) || array_key_exists("boxForm", $context) ? $context["boxForm"] : (function () { throw new RuntimeError('Variable "boxForm" does not exist.', 31, $this->source); })()), "height", [], "any", false, false, false, 31), 'widget');
        echo "
        </td>
    </tr>   
  
  </table>
  
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 40
        echo "    <a href=\" ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("settings_menu");
        echo " \" class=\"btn btn-back\">Back</a>
    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["boxForm"]) || array_key_exists("boxForm", $context) ? $context["boxForm"] : (function () { throw new RuntimeError('Variable "boxForm" does not exist.', 41, $this->source); })()), "submit", [], "any", false, false, false, 41), 'row', ["label" => "Confirm", "attr" => ["class" => "btn btn-option"]]);
        // line 44
        echo "  
    ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["boxForm"]) || array_key_exists("boxForm", $context) ? $context["boxForm"] : (function () { throw new RuntimeError('Variable "boxForm" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  159 => 45,  156 => 44,  154 => 41,  149 => 40,  139 => 39,  122 => 31,  117 => 29,  110 => 25,  105 => 23,  98 => 19,  93 => 17,  86 => 13,  81 => 11,  74 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/index.html.twig' %}

{% block content %}

<p class=\"title\">Add of modify boxes presets</p>

 {{ form_start(boxForm) }}
  <table class=\"form_table\">

    <tr>
        <td>{{ form_label(boxForm.name) }}</td>
        <td>
        {{ form_widget(boxForm.name) }}
        </td>
    </tr>
    <tr>
        <td>{{ form_label(boxForm.length) }}</td>
        <td>
        {{ form_widget(boxForm.length) }}
        </td>
    </tr>
    <tr>
        <td>{{ form_label(boxForm.wide) }}</td>
        <td>
        {{ form_widget(boxForm.wide) }}
        </td>
    </tr>
    <tr>
        <td>{{ form_label(boxForm.height) }}</td>
        <td>
        {{ form_widget(boxForm.height) }}
        </td>
    </tr>   
  
  </table>
  
 {% endblock %}

  {% block footer %}
    <a href=\" {{ path('settings_menu') }} \" class=\"btn btn-back\">Back</a>
    {{ form_row(boxForm.submit, {
        label: 'Confirm',
        'attr': {'class': 'btn btn-option'}
    }) }}  
    {{ form_end(boxForm) }}
{% endblock %}

", "admin/settings/boxpresets_add.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/admin/settings/boxpresets_add.html.twig");
    }
}
