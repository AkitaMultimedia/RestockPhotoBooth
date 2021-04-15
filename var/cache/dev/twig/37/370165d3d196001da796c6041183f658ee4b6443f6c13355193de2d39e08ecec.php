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

/* security/login.html.twig */
class __TwigTemplate_5cbf85fc7adb5a7e7e46cfb270729368a4cacad0fc9e4af1087a0831d2196d09 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<title>Restock - Sign in</title>

\t\t<!-- Bootstrap core CSS -->
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl\" crossorigin=\"anonymous\">

\t


\t\t<!-- Custom styles for this template -->
\t\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t</head>
\t<body class=\"text-center\">

\t\t<main class=\"form-signin\">
\t\t\t<form>
\t\t\t\t<img class=\"mb-4\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_restock.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t<h1 class=\"h3 mb-3 fw-normal\">Veuillez vous connecter.</h1>

\t\t\t\t<div class=\"form-floating\">
\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"floatingInput\" placeholder=\"name@example.com\">
\t\t\t\t\t<label for=\"floatingInput\">Email address</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-floating\">
\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"floatingPassword\" placeholder=\"Password\">
\t\t\t\t\t<label for=\"floatingPassword\">Password</label>
\t\t\t\t</div>

\t\t\t\t<button class=\"w-100 btn btn-lg btn-primary\" type=\"submit\">Connexion</button>
\t\t\t\t<p class=\"mt-5 mb-3 text-muted\">&copy; Restock 2021</p>
\t\t\t</form>
\t\t</main>


\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 22,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<title>Restock - Sign in</title>

\t\t<!-- Bootstrap core CSS -->
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl\" crossorigin=\"anonymous\">

\t


\t\t<!-- Custom styles for this template -->
\t\t<link href=\"{{asset('css/main/signin.css')}}\" rel=\"stylesheet\">
\t</head>
\t<body class=\"text-center\">

\t\t<main class=\"form-signin\">
\t\t\t<form>
\t\t\t\t<img class=\"mb-4\" src=\"{{asset('img/logo_restock.jpg')}}\" alt=\"\">
\t\t\t\t<h1 class=\"h3 mb-3 fw-normal\">Veuillez vous connecter.</h1>

\t\t\t\t<div class=\"form-floating\">
\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"floatingInput\" placeholder=\"name@example.com\">
\t\t\t\t\t<label for=\"floatingInput\">Email address</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-floating\">
\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"floatingPassword\" placeholder=\"Password\">
\t\t\t\t\t<label for=\"floatingPassword\">Password</label>
\t\t\t\t</div>

\t\t\t\t<button class=\"w-100 btn btn-lg btn-primary\" type=\"submit\">Connexion</button>
\t\t\t\t<p class=\"mt-5 mb-3 text-muted\">&copy; Restock 2021</p>
\t\t\t</form>
\t\t</main>


\t</body>
</html>
", "security/login.html.twig", "/Users/sebastiendumont/Documents/Projets/restock/restockApp/templates/security/login.html.twig");
    }
}
