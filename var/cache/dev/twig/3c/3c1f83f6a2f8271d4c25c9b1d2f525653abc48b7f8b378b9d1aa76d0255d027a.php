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

/* common/_navbar.html.twig */
class __TwigTemplate_e9d220eb387b46f654d46aba216cb00f3a54cffaa97d37bc33d655dfb4f8a4b2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/_navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/_navbar.html.twig"));

        // line 2
        echo "
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">DevMemories</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil
                        <span class=\"visually-hidden\">(current)</span>
                    </a>
                </li>
            </ul>
            <form class=\"d-flex w-100 me-auto justify-center\">
                <input class=\"form-control me-sm-2 w-75\" type=\"text\" placeholder=\"Que recherchez-vous ?\">
                <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Rechercher</button>
            </form>
            ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
            // line 23
            echo "            <div class=\"nav-item dropdown btn btn-secondary profile-dropdown\">
                <a class=\"nav-link dropdown-toggle profile-button\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\">JP</a>
                <ul class=\"ml-5 dropdown-menu dropdown-menu-end font-main\">
                    <li class=\"dropdown-header disabled\">Jérôme Potié</li>
                    <li><hr class=\"dropdown-divider\" /></li>
                    <li><a class=\"dropdown-item disabled\" href=\"\">Profil</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_home");
            echo "\">Dashboard</a></li>
                    <li><hr class=\"dropdown-divider\" /></li>
                    <li>
                        <a class=\"dropdown-item dropdown-item-end\" href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                            <i class=\"fas fa-sign-out-alt\"></i>
                            Déconnexion
                        </a>
                    </li>
                </ul>
            </div>
            ";
        } else {
            // line 40
            echo "            <div class=\"nav-item visitor-button\">
                <a href=\"\">
                    <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/visitor.png", "app"), "html", null, true);
            echo "\" alt=\"\" class=\"rounded-img\" />
                </a>
            </div>
            ";
        }
        // line 46
        echo "        </div>
    </div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "common/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 46,  99 => 42,  95 => 40,  84 => 32,  78 => 29,  70 => 23,  68 => 22,  56 => 13,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/common/_navbar.html.twig #}

<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">DevMemories</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"{{ path('home') }}\">Accueil
                        <span class=\"visually-hidden\">(current)</span>
                    </a>
                </li>
            </ul>
            <form class=\"d-flex w-100 me-auto justify-center\">
                <input class=\"form-control me-sm-2 w-75\" type=\"text\" placeholder=\"Que recherchez-vous ?\">
                <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Rechercher</button>
            </form>
            {% if app.user %}
            <div class=\"nav-item dropdown btn btn-secondary profile-dropdown\">
                <a class=\"nav-link dropdown-toggle profile-button\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\">JP</a>
                <ul class=\"ml-5 dropdown-menu dropdown-menu-end font-main\">
                    <li class=\"dropdown-header disabled\">Jérôme Potié</li>
                    <li><hr class=\"dropdown-divider\" /></li>
                    <li><a class=\"dropdown-item disabled\" href=\"\">Profil</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('dashboard_home') }}\">Dashboard</a></li>
                    <li><hr class=\"dropdown-divider\" /></li>
                    <li>
                        <a class=\"dropdown-item dropdown-item-end\" href=\"{{ path('app_logout') }}\">
                            <i class=\"fas fa-sign-out-alt\"></i>
                            Déconnexion
                        </a>
                    </li>
                </ul>
            </div>
            {% else %}
            <div class=\"nav-item visitor-button\">
                <a href=\"\">
                    <img src=\"{{ asset('build/images/visitor.png', 'app') }}\" alt=\"\" class=\"rounded-img\" />
                </a>
            </div>
            {% endif %}
        </div>
    </div>
</nav>
", "common/_navbar.html.twig", "/home/jerkoder/dev_docs/projects/simplon_DWWM/symfony/devMemories/templates/common/_navbar.html.twig");
    }
}
