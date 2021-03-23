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

/* admin/settings.html.twig */
class __TwigTemplate_64e20c29393f6088ac64e427bfb4b8d65b3c23451377b5dc0cb65672314dbd0e extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/settings.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    ";
        // line 5
        $this->loadTemplate("admin/settings/users.html.twig", "admin/settings.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        $this->loadTemplate("admin/settings/emails.html.twig", "admin/settings.html.twig", 6)->display($context);
        // line 7
        echo "    ";
        $this->loadTemplate("admin/settings/boxpresets.html.twig", "admin/settings.html.twig", 7)->display($context);
        // line 8
        echo "    ";
        $this->loadTemplate("admin/settings/scan_method.html.twig", "admin/settings.html.twig", 8)->display($context);
        // line 9
        echo "    ";
        $this->loadTemplate("admin/settings/dav_settings.html.twig", "admin/settings.html.twig", 9)->display($context);
        // line 10
        echo "
";
    }

    // line 13
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "        <a href=\" ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_menu");
        echo " \" class=\"btn btn-back\">Back</a>
";
    }

    // line 17
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "     <script src=\" ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/admin//admin.js"), "html", null, true);
        echo " \"></script>
 ";
    }

    public function getTemplateName()
    {
        return "admin/settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 18,  85 => 17,  78 => 14,  74 => 13,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/settings.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/admin/settings.html.twig");
    }
}
