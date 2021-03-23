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
class __TwigTemplate_2816abac6df272ce08da531e396827529c42ac7441cd191188a1d8244c616692 extends Template
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
        echo "<p class=\"title\">Scan method</p>
<div id=\"admin_settings_scan_method\">
    <div><input type='radio' id='interne' value='interne' name='scan_method'>
    <label for='int'>Internal scanner (picture)</label></div>
    <div><input type='radio' id='externe' value='externe' name='scan_method'>
    <label for='ext'>External scanner (live scan)</label></div>
</div>
<input id=\"btn_confirm_scanner_presets\" type='submit' value='Confirm scan method' class=\"btn btn-table-left\">";
    }

    public function getTemplateName()
    {
        return "admin/settings/scan_method.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/settings/scan_method.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/admin/settings/scan_method.html.twig");
    }
}
