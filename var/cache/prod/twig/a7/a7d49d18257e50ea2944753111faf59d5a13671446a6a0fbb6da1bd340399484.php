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
class __TwigTemplate_0819218cf457e8723331821bd9b1eca51d727e7910143187b1fb595a0c169bfe extends Template
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
        echo twig_escape_filter($this->env, ($context["dav_user_name"] ?? null), "html", null, true);
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
        return array (  66 => 22,  56 => 15,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/settings/dav_settings.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/admin/settings/dav_settings.html.twig");
    }
}
