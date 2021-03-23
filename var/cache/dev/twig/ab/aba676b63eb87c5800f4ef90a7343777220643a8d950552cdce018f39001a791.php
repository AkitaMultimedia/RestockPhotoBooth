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

/* admin/lot_images.html.twig */
class __TwigTemplate_0b54b4d171b23fa3adf0c34de40092349fa58ddcb72a5f00fa242c2b3186316e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/lot_images.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/lot_images.html.twig"));

        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/lot_images.html.twig", 1);
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
    <p class=\"title\">IMAGES FOR LOT ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lot_data"]) || array_key_exists("lot_data", $context) ? $context["lot_data"] : (function () { throw new RuntimeError('Variable "lot_data" does not exist.', 5, $this->source); })()), "lot", [], "any", false, false, false, 5), "html", null, true);
        echo "</p>

    <div class=\"lot_image_wrapper\">
      
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 10
            echo "   
            ";
            // line 11
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lot_data"]) || array_key_exists("lot_data", $context) ? $context["lot_data"] : (function () { throw new RuntimeError('Variable "lot_data" does not exist.', 11, $this->source); })()), "photos", [], "any", false, false, false, 11), $context["p"], [], "array", false, false, false, 11), ""))) {
                // line 12
                echo "            <div class=\"lot_image_infos\">
                <div>";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lot_data"]) || array_key_exists("lot_data", $context) ? $context["lot_data"] : (function () { throw new RuntimeError('Variable "lot_data" does not exist.', 13, $this->source); })()), "photos", [], "any", false, false, false, 13), $context["p"], [], "array", false, false, false, 13), "html", null, true);
                echo "</div><div><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_photo", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lot_data"]) || array_key_exists("lot_data", $context) ? $context["lot_data"] : (function () { throw new RuntimeError('Variable "lot_data" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lot_data"]) || array_key_exists("lot_data", $context) ? $context["lot_data"] : (function () { throw new RuntimeError('Variable "lot_data" does not exist.', 13, $this->source); })()), "photos", [], "any", false, false, false, 13), $context["p"], [], "array", false, false, false, 13), "state" => (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 13, $this->source); })())]), "html", null, true);
                echo "\" class=\"btn btn-delete\">Delete</a></div>
            </div>
            <div class=\"lot_image_holder\">
                <img style=\"lot_image\" src=\"";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new RuntimeError('Variable "photos" does not exist.', 16, $this->source); })()), $context["p"], [], "array", false, false, false, 16), "html", null, true);
                echo "\" width=\"100%\">
            </div>
            ";
            }
            // line 19
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 25
        echo "        <a href=\" ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_view_lots", ["po_number" => twig_get_attribute($this->env, $this->source, (isset($context["lot_data"]) || array_key_exists("lot_data", $context) ? $context["lot_data"] : (function () { throw new RuntimeError('Variable "lot_data" does not exist.', 25, $this->source); })()), "po", [], "any", false, false, false, 25), "state" => (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 25, $this->source); })())]), "html", null, true);
        echo " \" class=\"btn\">Back</a> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/lot_images.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 25,  123 => 24,  111 => 20,  105 => 19,  99 => 16,  91 => 13,  88 => 12,  86 => 11,  83 => 10,  79 => 9,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/index.html.twig' %}

{% block content %}

    <p class=\"title\">IMAGES FOR LOT {{ lot_data.lot }}</p>

    <div class=\"lot_image_wrapper\">
      
        {% for p in 0..9 %}
   
            {% if lot_data.photos[p] != \"\" %}
            <div class=\"lot_image_infos\">
                <div>{{ lot_data.photos[p] }}</div><div><a href=\"{{ path('admin_delete_photo', {'id': lot_data.id, 'name': lot_data.photos[p], 'state': state }) }}\" class=\"btn btn-delete\">Delete</a></div>
            </div>
            <div class=\"lot_image_holder\">
                <img style=\"lot_image\" src=\"{{ photos[p] }}\" width=\"100%\">
            </div>
            {% endif %}
        {% endfor %}
    </div>

{% endblock %}

{% block footer %}
        <a href=\" {{ path('admin_view_lots', {'po_number': lot_data.po, 'state': state}) }} \" class=\"btn\">Back</a> 
{% endblock %}", "admin/lot_images.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/admin/lot_images.html.twig");
    }
}
