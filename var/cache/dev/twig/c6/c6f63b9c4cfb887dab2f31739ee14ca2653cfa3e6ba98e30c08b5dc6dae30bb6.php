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

/* admin/settings/scan_method.html.twig */
class __TwigTemplate_d06a5fdf45306326125d4ccf50b11e1bfa5781b5780c149b9ec418d2027bae09 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/settings/scan_method.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/settings/scan_method.html.twig"));

        // line 1
        echo "<p class=\"title\">Scan method</p>
<div id=\"admin_settings_scan_method\">
    <div><input type='radio' id='interne' value='interne' name='scan_method'>
    <label for='int'>Internal scanner (picture)</label></div>
    <div><input type='radio' id='externe' value='externe' name='scan_method'>
    <label for='ext'>External scanner (live scan)</label></div>
</div>
<input id=\"btn_confirm_scanner_presets\" type='submit' value='Confirm scan method' class=\"btn btn-table-left\">";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/settings/scan_method.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"title\">Scan method</p>
<div id=\"admin_settings_scan_method\">
    <div><input type='radio' id='interne' value='interne' name='scan_method'>
    <label for='int'>Internal scanner (picture)</label></div>
    <div><input type='radio' id='externe' value='externe' name='scan_method'>
    <label for='ext'>External scanner (live scan)</label></div>
</div>
<input id=\"btn_confirm_scanner_presets\" type='submit' value='Confirm scan method' class=\"btn btn-table-left\">", "admin/settings/scan_method.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/admin/settings/scan_method.html.twig");
    }
}
