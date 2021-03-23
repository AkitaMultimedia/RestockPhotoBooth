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

/* main/booth.html.twig */
class __TwigTemplate_fbd6b1534a2fc629751fe7be89c0375b041d08f051b84133b4c6ba8eb12942f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "main/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/booth.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/booth.html.twig"));

        $this->parent = $this->loadTemplate("main/index.html.twig", "main/booth.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Booth App
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
\t<div id=\"scan_step\" class=\"booth_wrapper\">
\t\t<div class=\"flex_column_centered\">
\t\t\t<input id='scan_file_input' type=\"file\" accept=\"image/*\" capture=\"environment\">
\t\t\t<button class=\"btn btn-giant scan-type\" id=\"btn_scancode_interne\">Scan barcode</button>
\t\t\t";
        // line 13
        echo "\t\t\t<a class=\"btn btn-giant scan-type\" id=\"btn_scancode_externe\" href=\"zxing://scan/?ret=/booth/scan/{CODE}\">Scan barcode</a>
\t\t\t\t\t\t\t\t\t            ";
        // line 15
        echo "\t\t\t\t\t\t\t\t\t          

\t\t\t";
        // line 17
        if ((0 !== twig_compare((isset($context["scan"]) || array_key_exists("scan", $context) ? $context["scan"] : (function () { throw new RuntimeError('Variable "scan" does not exist.', 17, $this->source); })()), "null"))) {
            // line 18
            echo "\t\t\t\t<div id=\"scanner-container\" class=\"scaned\">
\t\t\t\t\t";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["scan"]) || array_key_exists("scan", $context) ? $context["scan"] : (function () { throw new RuntimeError('Variable "scan" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 22
            echo "\t\t\t\t<div id=\"scanner-container\">
\t\t\t\t\tNo code scaned
\t\t\t\t</div>
\t\t\t";
        }
        // line 26
        echo "

\t\t</div>
\t</div>

\t<div id=\"picture_step\" class=\"booth_wrapper\">
\t\t<div class=\"flex_column_centered\">
\t\t\t<input type=\"file\" id=\"camera\" accept=\"image/*\" capture=\"camera\"/>
\t\t\t<button class=\"btn btn-giant\" id=\"shutter\">Take main picture</button>
\t\t\t<div id=\"number_of_pictures\">Number of additional pictures taken so far : 0</div>
\t\t\t<div id=\"showcase\"></div>
\t\t</div>
\t</div>

\t<div id=\"lot_format_step\" class=\"booth_wrapper\">
\t\t<div class=\"flex_column_centered\">
\t\t\t<div class=\"number\">
\t\t\t\t<h2>Box</h2>
\t\t\t\t<button class=\"btn minus lot_format_box\">-</button>
\t\t\t\t<input id=\"lot_format_box\" class=\"lot_format\" type=\"text\" value=\"0\"/>
\t\t\t\t<button class=\"btn plus lot_format_box\">+</button>
\t\t\t</div>
\t\t\t<div class=\"number\">
\t\t\t\t<h2>Pallet</h2>
\t\t\t\t<button class=\"btn minus lot_format_pallet\">-</button>
\t\t\t\t<input id=\"lot_format_pallet\" class=\"lot_format\" type=\"text\" value=\"0\"/>
\t\t\t\t<button class=\"btn plus lot_format_pallet\">+</button>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div id=\"size_page\" class=\"booth_wrapper\">
\t\t<div class=\"flex_wrapper\">
\t\t\t<div class=\"flex_column_centered\">
\t\t\t\t<div class=\"flex_column_left\">
\t\t\t\t\t<h2 id=\"size_current_item\">Box number</h2>
\t\t\t\t\t<div class=\"fields_wrapper\">
\t\t\t\t\t\t<div class=\"size_field\">
\t\t\t\t\t\t\t<p>Length</p>
\t\t\t\t\t\t\t<div id=\"length\" class=\"value_field\">0</div>
\t\t\t\t\t\t\t<p class=\"field_detail\">inches</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"size_field\">
\t\t\t\t\t\t\t<p>Wide</p>
\t\t\t\t\t\t\t<div id=\"wide\" class=\"value_field\">0</div>
\t\t\t\t\t\t\t<p class=\"field_detail\">inches</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"size_field\">
\t\t\t\t\t\t\t<p>Height</p>
\t\t\t\t\t\t\t<div id=\"height\" class=\"value_field\">0</div>
\t\t\t\t\t\t\t<p id=\"size_height_detail\" class=\"field_detail\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"favorites_wrapper\">
\t\t\t\t\t\t<p>Favorites:
\t\t\t\t\t\t\t<select name=\"favorites_select\" id=\"favorites_select\" class=\"reg_fields\">
\t\t\t\t\t\t\t\t<option value=\"0\">Select...</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"flex_column_centered\">
\t\t\t\t";
        // line 89
        $this->loadTemplate("main/numeric_pad.html.twig", "main/booth.html.twig", 89)->display($context);
        // line 90
        echo "\t\t\t</div>

\t\t</div>

\t</div>

\t<div id=\"weight_page\" class=\"booth_wrapper\">
\t\t<div class=\"flex_wrapper\">
\t\t\t<div class=\"flex_column_centered\">
\t\t\t\t<div class=\"flex_column_left\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<p>Suggestion for weight:
\t\t\t\t\t\t\t<span id=\"weight_suggestion\">0</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<button id=\"use_suggested_weight\" class=\"btn btn-back\">Use</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"fields_wrapper\">
\t\t\t\t\t\t<div class=\"size_field\">
\t\t\t\t\t\t\t<p>Actual weight:</p>
\t\t\t\t\t\t\t<div id=\"weight\" class=\"value_field\">0</div>
\t\t\t\t\t\t\t<p id=\"size_height_detail\" class=\"field_detail\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"flex_column_centered\">
\t\t\t\t";
        // line 116
        $this->loadTemplate("main/numeric_pad.html.twig", "main/booth.html.twig", 116)->display($context);
        // line 117
        echo "\t\t\t</div>
\t\t</div>
\t</div>

\t<div id=\"final_confirmation_page\" class=\"booth_wrapper\">
\t\t<div class=\"flex_column_centered\">
\t\t\t<div>
\t\t\t\t<h2>Current lot format:
\t\t\t\t\t<span id=\"final_format\"></span>
\t\t\t\t</h2>
\t\t\t\t<h2>Current lot weight:
\t\t\t\t\t<span id=\"final_weight\"></span>
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<div id=\"final_showcase\"></div>
\t\t</div>
\t</div>

\t<div id=\"saving_confirmation\" class=\"booth_wrapper\">
\t\t<div class=\"flex_column_centered\">
\t\t\t<h1>Saving data...</h2>
\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 143
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 144
        echo "\t<a href=\"#\" dest=\"back\" class=\"btn btn-back\">Back</a>
\t<a href=\"#\" id=\"discard_button\" dest=\"discard\" class=\"btn btn-back\">Discard</a>
\t<a href=\"#\" id=\"confirm_button\" dest=\"confirm\" class=\"btn btn-back\">Confirm</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 149
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 150
        echo "\t<script src=\" ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/booth/quagga2.min.js"), "html", null, true);
        echo " \"></script>
\t<script src=\" ";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/booth/barcode.js"), "html", null, true);
        echo " \"></script>
\t<script src=\" ";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/booth/scancode.js"), "html", null, true);
        echo " \"></script>
\t<script src=\" ";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/booth/picture.js"), "html", null, true);
        echo " \"></script>
\t<script src=\" ";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/booth/lot_size_weight.js"), "html", null, true);
        echo " \"></script>
\t<script src=\" ";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/booth/numeric_pad.js"), "html", null, true);
        echo " \"></script>
\t<script src=\" ";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/booth/upload_data.js"), "html", null, true);
        echo " \"></script>
\t<script src=\" ";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/booth/user_settings.js"), "html", null, true);
        echo " \"></script>
\t<script src=\" ";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/booth/booth.js"), "html", null, true);
        echo " \"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/booth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 158,  315 => 157,  311 => 156,  307 => 155,  303 => 154,  299 => 153,  295 => 152,  291 => 151,  286 => 150,  276 => 149,  263 => 144,  253 => 143,  219 => 117,  217 => 116,  189 => 90,  187 => 89,  122 => 26,  116 => 22,  110 => 19,  107 => 18,  105 => 17,  101 => 15,  98 => 13,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'main/index.html.twig' %}

{% block title %}Booth App
{% endblock %}

{% block content %}

\t<div id=\"scan_step\" class=\"booth_wrapper\">
\t\t<div class=\"flex_column_centered\">
\t\t\t<input id='scan_file_input' type=\"file\" accept=\"image/*\" capture=\"environment\">
\t\t\t<button class=\"btn btn-giant scan-type\" id=\"btn_scancode_interne\">Scan barcode</button>
\t\t\t{# <a class=\"btn btn-giant scan-type\" id=\"btn_scancode_externe\" href=\"zxing://scan/?ret=https://restock.akitamultimedia.com/booth/{CODE}\">Scan barcode</a> #}
\t\t\t<a class=\"btn btn-giant scan-type\" id=\"btn_scancode_externe\" href=\"zxing://scan/?ret=/booth/scan/{CODE}\">Scan barcode</a>
\t\t\t\t\t\t\t\t\t            {# <button class=\"btn btn-giant scan-type\" id=\"btn_scancode_externe2\">Scan barcode 2</button> #}
\t\t\t\t\t\t\t\t\t          

\t\t\t{% if scan != \"null\" %}
\t\t\t\t<div id=\"scanner-container\" class=\"scaned\">
\t\t\t\t\t{{ scan }}
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t<div id=\"scanner-container\">
\t\t\t\t\tNo code scaned
\t\t\t\t</div>
\t\t\t{% endif %}


\t\t</div>
\t</div>

\t<div id=\"picture_step\" class=\"booth_wrapper\">
\t\t<div class=\"flex_column_centered\">
\t\t\t<input type=\"file\" id=\"camera\" accept=\"image/*\" capture=\"camera\"/>
\t\t\t<button class=\"btn btn-giant\" id=\"shutter\">Take main picture</button>
\t\t\t<div id=\"number_of_pictures\">Number of additional pictures taken so far : 0</div>
\t\t\t<div id=\"showcase\"></div>
\t\t</div>
\t</div>

\t<div id=\"lot_format_step\" class=\"booth_wrapper\">
\t\t<div class=\"flex_column_centered\">
\t\t\t<div class=\"number\">
\t\t\t\t<h2>Box</h2>
\t\t\t\t<button class=\"btn minus lot_format_box\">-</button>
\t\t\t\t<input id=\"lot_format_box\" class=\"lot_format\" type=\"text\" value=\"0\"/>
\t\t\t\t<button class=\"btn plus lot_format_box\">+</button>
\t\t\t</div>
\t\t\t<div class=\"number\">
\t\t\t\t<h2>Pallet</h2>
\t\t\t\t<button class=\"btn minus lot_format_pallet\">-</button>
\t\t\t\t<input id=\"lot_format_pallet\" class=\"lot_format\" type=\"text\" value=\"0\"/>
\t\t\t\t<button class=\"btn plus lot_format_pallet\">+</button>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div id=\"size_page\" class=\"booth_wrapper\">
\t\t<div class=\"flex_wrapper\">
\t\t\t<div class=\"flex_column_centered\">
\t\t\t\t<div class=\"flex_column_left\">
\t\t\t\t\t<h2 id=\"size_current_item\">Box number</h2>
\t\t\t\t\t<div class=\"fields_wrapper\">
\t\t\t\t\t\t<div class=\"size_field\">
\t\t\t\t\t\t\t<p>Length</p>
\t\t\t\t\t\t\t<div id=\"length\" class=\"value_field\">0</div>
\t\t\t\t\t\t\t<p class=\"field_detail\">inches</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"size_field\">
\t\t\t\t\t\t\t<p>Wide</p>
\t\t\t\t\t\t\t<div id=\"wide\" class=\"value_field\">0</div>
\t\t\t\t\t\t\t<p class=\"field_detail\">inches</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"size_field\">
\t\t\t\t\t\t\t<p>Height</p>
\t\t\t\t\t\t\t<div id=\"height\" class=\"value_field\">0</div>
\t\t\t\t\t\t\t<p id=\"size_height_detail\" class=\"field_detail\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"favorites_wrapper\">
\t\t\t\t\t\t<p>Favorites:
\t\t\t\t\t\t\t<select name=\"favorites_select\" id=\"favorites_select\" class=\"reg_fields\">
\t\t\t\t\t\t\t\t<option value=\"0\">Select...</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"flex_column_centered\">
\t\t\t\t{% include 'main/numeric_pad.html.twig' %}
\t\t\t</div>

\t\t</div>

\t</div>

\t<div id=\"weight_page\" class=\"booth_wrapper\">
\t\t<div class=\"flex_wrapper\">
\t\t\t<div class=\"flex_column_centered\">
\t\t\t\t<div class=\"flex_column_left\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<p>Suggestion for weight:
\t\t\t\t\t\t\t<span id=\"weight_suggestion\">0</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<button id=\"use_suggested_weight\" class=\"btn btn-back\">Use</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"fields_wrapper\">
\t\t\t\t\t\t<div class=\"size_field\">
\t\t\t\t\t\t\t<p>Actual weight:</p>
\t\t\t\t\t\t\t<div id=\"weight\" class=\"value_field\">0</div>
\t\t\t\t\t\t\t<p id=\"size_height_detail\" class=\"field_detail\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"flex_column_centered\">
\t\t\t\t{% include 'main/numeric_pad.html.twig' %}
\t\t\t</div>
\t\t</div>
\t</div>

\t<div id=\"final_confirmation_page\" class=\"booth_wrapper\">
\t\t<div class=\"flex_column_centered\">
\t\t\t<div>
\t\t\t\t<h2>Current lot format:
\t\t\t\t\t<span id=\"final_format\"></span>
\t\t\t\t</h2>
\t\t\t\t<h2>Current lot weight:
\t\t\t\t\t<span id=\"final_weight\"></span>
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<div id=\"final_showcase\"></div>
\t\t</div>
\t</div>

\t<div id=\"saving_confirmation\" class=\"booth_wrapper\">
\t\t<div class=\"flex_column_centered\">
\t\t\t<h1>Saving data...</h2>
\t\t</div>
\t</div>

{% endblock %}

{% block footer %}
\t<a href=\"#\" dest=\"back\" class=\"btn btn-back\">Back</a>
\t<a href=\"#\" id=\"discard_button\" dest=\"discard\" class=\"btn btn-back\">Discard</a>
\t<a href=\"#\" id=\"confirm_button\" dest=\"confirm\" class=\"btn btn-back\">Confirm</a>
{% endblock %}

{% block javascripts %}
\t<script src=\" {{ asset(\"js/booth/quagga2.min.js\") }} \"></script>
\t<script src=\" {{ asset(\"js/booth/barcode.js\") }} \"></script>
\t<script src=\" {{ asset(\"js/booth/scancode.js\") }} \"></script>
\t<script src=\" {{ asset(\"js/booth/picture.js\") }} \"></script>
\t<script src=\" {{ asset(\"js/booth/lot_size_weight.js\") }} \"></script>
\t<script src=\" {{ asset(\"js/booth/numeric_pad.js\") }} \"></script>
\t<script src=\" {{ asset(\"js/booth/upload_data.js\") }} \"></script>
\t<script src=\" {{ asset(\"js/booth/user_settings.js\") }} \"></script>
\t<script src=\" {{ asset(\"js/booth/booth.js\") }} \"></script>
{% endblock %}
", "main/booth.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/main/booth.html.twig");
    }
}
