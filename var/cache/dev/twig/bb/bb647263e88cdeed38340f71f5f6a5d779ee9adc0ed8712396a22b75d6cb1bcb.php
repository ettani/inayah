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

/* components/_header.html.twig */
class __TwigTemplate_bed2d76be8a1cc33440f28dbce2bcf42a4f99f0e06af9a4a6ff4b9b1fac61a94 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_header.html.twig"));

        // line 1
        echo "<!-- Header Start -->
<header class=\"position-absolute w-100\">
    <div class=\"container\">
        <div class=\"top-header d-none d-sm-flex justify-content-between align-items-center\">
";
        // line 18
        echo "        </div>
        <nav class=\"navbar navbar-expand-md navbar-light\">
            <a class=\"navbar-brand\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default_index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logooo.png"), "html", null, true);
        echo "\" alt=\"Multipurpose\"></a>
            <div class=\"group d-flex align-items-center\">
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                        data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                        aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span
                            class=\"navbar-toggler-icon\"></span></button>
                <a class=\"login-icon d-sm-none\" href=\"#\"><i class=\"fa fa-user\"></i></a>
            </div>
            <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Accueil</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Agir</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Demande d'aide</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Faire un don</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Contact</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Mon compte</a></li>
                </ul>

            </div>
        </nav>
    </div>
</header>
<!-- Header End -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 20,  49 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Header Start -->
<header class=\"position-absolute w-100\">
    <div class=\"container\">
        <div class=\"top-header d-none d-sm-flex justify-content-between align-items-center\">
{#            <div class=\"contact\">#}
{#                <a href=\"tel:+1234567890\" class=\"tel\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i>+1234567890</a>#}
{#                <a href=\"mailto:info@yourmail.com\"><i class=\"fa fa-envelope\"#}
{#                                                      aria-hidden=\"true\"></i>info@yourmail.com</a>#}
{#            </div>#}
{#            <nav class=\"d-flex aic\">#}
{#                <a href=\"#\" class=\"login\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>Login</a>#}
{#                <ul class=\"nav social d-none d-md-flex\">#}
{#                    <li><a href=\"https://www.facebook.com/fh5co\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>#}
{#                    <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>#}
{#                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>#}
{#                </ul>#}
{#            </nav>#}
        </div>
        <nav class=\"navbar navbar-expand-md navbar-light\">
            <a class=\"navbar-brand\" href=\"{{ path('default_index') }}\"><img src=\"{{ asset('assets/images/logooo.png') }}\" alt=\"Multipurpose\"></a>
            <div class=\"group d-flex align-items-center\">
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                        data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                        aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span
                            class=\"navbar-toggler-icon\"></span></button>
                <a class=\"login-icon d-sm-none\" href=\"#\"><i class=\"fa fa-user\"></i></a>
            </div>
            <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Accueil</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Agir</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Demande d'aide</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Faire un don</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Contact</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Mon compte</a></li>
                </ul>

            </div>
        </nav>
    </div>
</header>
<!-- Header End -->", "components/_header.html.twig", "C:\\xampp\\htdocs\\inayah\\templates\\components\\_header.html.twig");
    }
}
