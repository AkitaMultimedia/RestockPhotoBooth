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

/* admin/settings/dav_settings.html.twig */
class __TwigTemplate_71f17983b0d81a766ad2d9729e4ff2505a200a36860429753d6c7b92635cf9b8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/settings/dav_settings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/settings/dav_settings.html.twig"));

        // line 1
        echo "<p class=\"title\">Webdav Infos</p>
    <table class=\"table\" cellspacing=\"0\" cellpadding=\"0\">
    <thead>
        <tr>
            <td>Key</td>
            <td>Value</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>Username: </td>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["dav_user_name"]) || array_key_exists("dav_user_name", $context) ? $context["dav_user_name"] : (function () { throw new RuntimeError('Variable "dav_user_name" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</td>
                <td>
                    <a href=\" ";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("settings_dav_change_configuration", ["name" => "dav_user_name"]);
        echo " \" class=\"btn btn-table-left\">Modify</a>
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td>&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;</td>
                <td>
                    <a href=\" ";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("settings_dav_change_configuration", ["name" => "dav_password"]);
        echo " \" class=\"btn btn-table-left\">Modify</a>
                </td>
            </tr>
    </tbody>
    </table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/settings/dav_settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  62 => 15,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"title\">Webdav Infos</p>
    <table class=\"table\" cellspacing=\"0\" cellpadding=\"0\">
    <thead>
        <tr>
            <td>Key</td>
            <td>Value</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>Username: </td>
                <td>{{ dav_user_name }}</td>
                <td>
                    <a href=\" {{ path(\"settings_dav_change_configuration\", {'name': 'dav_user_name'} ) }} \" class=\"btn btn-table-left\">Modify</a>
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td>&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;</td>
                <td>
                    <a href=\" {{ path(\"settings_dav_change_configuration\", {'name': 'dav_password'} ) }} \" class=\"btn btn-table-left\">Modify</a>
                </td>
            </tr>
    </tbody>
    </table>", "admin/settings/dav_settings.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/admin/settings/dav_settings.html.twig");
    }
}
