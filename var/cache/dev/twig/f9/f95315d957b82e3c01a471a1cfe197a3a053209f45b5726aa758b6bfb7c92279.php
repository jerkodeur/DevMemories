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

/* dashboard/common/_sidebar.html.twig */
class __TwigTemplate_ad015b5fb3d6aff4030384fac7ec1011871c88383ad95a6977ada8c78b53a6be extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/common/_sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/common/_sidebar.html.twig"));

        // line 2
        $context["route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "get", [0 => "_route"], "method", false, false, false, 2);
        // line 3
        echo "
<aside>
    <div id=\"sidebar\" class=\"nav-collapse \">
        <!-- sidebar menu start-->
        <ul class=\"sidebar-menu\" id=\"nav-accordion\">
            ";
        // line 9
        echo "            ";
        // line 11
        echo "            <li class=\"sub-menu\">
                <a class=\"";
        // line 12
        echo ((((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 12, $this->source); })()) == "dashboard_home") || ((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 12, $this->source); })()) == "#")) ||  !array_key_exists("route", $context))) ? ("active") : (""));
        echo " sidebar-top\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_home");
        echo "\">
                    <i class=\"fa fa-home\"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class=\"sub-menu\">
                <a class=\"";
        // line 18
        echo ((twig_in_filter("dashboard_content", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 18, $this->source); })()))) ? ("active") : (""));
        echo "\"  href=\"javascript:;\">
                    <i class=\"fa fa-list-alt\"></i>
                    <span>";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mes contenus", [], "messages");
        echo "</span>
                </a>
                <ul class=\"sub\">
                    <li>
                        <a class=\"";
        // line 24
        echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 24, $this->source); })()) == "dashboard_content_list")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_content_list");
        echo "\">
                            <i class=\"fas fa-archive\"></i>
                            ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tous les contenus", [], "messages");
        // line 27
        echo "                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-newspaper\"></i>
                            ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Articles de veille", [], "messages");
        // line 33
        echo "                        </a>
                    </li>
                    <li class=\"muted\">
                        <i class=\"fas fa-code\"></i>
                        ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Extraits de code", [], "messages");
        // line 38
        echo "                    </li>
                    <li class=\"muted\">
                        <i class=\"fas fa-keyboard\"></i>
                        ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Raccourcis", [], "messages");
        // line 42
        echo "                    </li>
                </ul>
            </li>
            <li class=\"sub-menu\">
                <a class=\"";
        // line 46
        echo ((twig_in_filter("dashboard_resources", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 46, $this->source); })()))) ? ("active") : (""));
        echo "\"  href=\"javascript:;\">
                    <i class=\"fas fa-paperclip\"></i>
                    <span>";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mes ressources", [], "messages");
        echo "</span>
                </a>
                <ul class=\"sub\">
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-key\"></i>
                            ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mots clés", [], "messages");
        // line 55
        echo "                        </a>
                    </li>
                    <li class=\"muted\">
                        <i class=\"fab fa-app-store-ios\"></i>
                        ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Couleurs", [], "messages");
        // line 60
        echo "                    </li>
                    <li class=\"muted\">
                        <i class=\"fab fa-app-store-ios\"></i>
                        ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Technologies", [], "messages");
        // line 64
        echo "                    </li>
                    <li class=\"muted\">
                        <i class=\"fas fa-comments\"></i>
                        ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Notes", [], "messages");
        // line 68
        echo "                    </li>
                    <li class=\"muted\">
                        <i class=\"fa fa-link\"></i>
                        ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Liens", [], "messages");
        // line 72
        echo "                    </li>
                    <li class=\"muted\">
                        <i class=\"fas fa-copyright\"></i>
                        ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Applications", [], "messages");
        // line 76
        echo "                    </li>
                </ul>
            </li>
            <li class=\"sub-menu\">
                <a class=\"";
        // line 80
        echo ((twig_in_filter("dashboard_category", (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 80, $this->source); })()))) ? ("active") : (""));
        echo "\" href=\"javascript:;\">
                    <i class=\"fa fa-tags\"></i>
                    <span>";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mes catégories", [], "messages");
        echo "</span>
                </a>
                <ul class=\"sub\">
                    <li><a class=\"";
        // line 85
        echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 85, $this->source); })()) == "dashboard_category_list")) ? ("active") : (""));
        echo "\"  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_category_list");
        echo "\">
                        <i class=\"fas fa-user-tag\"></i>
                            ";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gérer mes catégories", [], "messages");
        // line 88
        echo "                        </a>
                    </li>
                    <li class=\"muted\">
                        <i class=\"fas fa-sitemap\"></i>
                        ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Arborescence", [], "messages");
        // line 93
        echo "                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/common/_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 93,  203 => 92,  197 => 88,  195 => 87,  188 => 85,  182 => 82,  177 => 80,  171 => 76,  169 => 75,  164 => 72,  162 => 71,  157 => 68,  155 => 67,  150 => 64,  148 => 63,  143 => 60,  141 => 59,  135 => 55,  133 => 54,  124 => 48,  119 => 46,  113 => 42,  111 => 41,  106 => 38,  104 => 37,  98 => 33,  96 => 32,  89 => 27,  87 => 26,  80 => 24,  73 => 20,  68 => 18,  57 => 12,  54 => 11,  52 => 9,  45 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/dashboard/common/_sidebar.html.twig #}
{% set route = app.request.get('_route') %}

<aside>
    <div id=\"sidebar\" class=\"nav-collapse \">
        <!-- sidebar menu start-->
        <ul class=\"sidebar-menu\" id=\"nav-accordion\">
            {# Photo + Nom utilisateur #}
            {# <p class=\"centered\"><a href=\"profile.html\"><img src=\"img/ui-sam.jpg\" class=\"img-circle\" width=\"80\"></a></p>
                <h5 class=\"centered\">Sam Soffes</h5> #}
            <li class=\"sub-menu\">
                <a class=\"{{ route == 'dashboard_home' or route == '#' or not (route is defined) ? 'active' }} sidebar-top\" href=\"{{ path('dashboard_home') }}\">
                    <i class=\"fa fa-home\"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class=\"sub-menu\">
                <a class=\"{{ 'dashboard_content' in route ? 'active' }}\"  href=\"javascript:;\">
                    <i class=\"fa fa-list-alt\"></i>
                    <span>{% trans %}Mes contenus{% endtrans %}</span>
                </a>
                <ul class=\"sub\">
                    <li>
                        <a class=\"{{ route == 'dashboard_content_list' ? 'active' }}\" href=\"{{ path('dashboard_content_list') }}\">
                            <i class=\"fas fa-archive\"></i>
                            {% trans %}Tous les contenus{% endtrans %}
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-newspaper\"></i>
                            {% trans %}Articles de veille{% endtrans %}
                        </a>
                    </li>
                    <li class=\"muted\">
                        <i class=\"fas fa-code\"></i>
                        {% trans %}Extraits de code{% endtrans %}
                    </li>
                    <li class=\"muted\">
                        <i class=\"fas fa-keyboard\"></i>
                        {% trans %}Raccourcis{% endtrans %}
                    </li>
                </ul>
            </li>
            <li class=\"sub-menu\">
                <a class=\"{{ 'dashboard_resources' in route ? 'active' }}\"  href=\"javascript:;\">
                    <i class=\"fas fa-paperclip\"></i>
                    <span>{% trans %}Mes ressources{% endtrans %}</span>
                </a>
                <ul class=\"sub\">
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-key\"></i>
                            {% trans %}Mots clés{% endtrans %}
                        </a>
                    </li>
                    <li class=\"muted\">
                        <i class=\"fab fa-app-store-ios\"></i>
                        {% trans %}Couleurs{% endtrans %}
                    </li>
                    <li class=\"muted\">
                        <i class=\"fab fa-app-store-ios\"></i>
                        {% trans %}Technologies{% endtrans %}
                    </li>
                    <li class=\"muted\">
                        <i class=\"fas fa-comments\"></i>
                        {% trans %}Notes{% endtrans %}
                    </li>
                    <li class=\"muted\">
                        <i class=\"fa fa-link\"></i>
                        {% trans %}Liens{% endtrans %}
                    </li>
                    <li class=\"muted\">
                        <i class=\"fas fa-copyright\"></i>
                        {% trans %}Applications{% endtrans %}
                    </li>
                </ul>
            </li>
            <li class=\"sub-menu\">
                <a class=\"{{ 'dashboard_category' in route ? 'active' }}\" href=\"javascript:;\">
                    <i class=\"fa fa-tags\"></i>
                    <span>{% trans %}Mes catégories{% endtrans %}</span>
                </a>
                <ul class=\"sub\">
                    <li><a class=\"{{ route == 'dashboard_category_list' ? 'active' }}\"  href=\"{{ path('dashboard_category_list') }}\">
                        <i class=\"fas fa-user-tag\"></i>
                            {% trans %}Gérer mes catégories{% endtrans %}
                        </a>
                    </li>
                    <li class=\"muted\">
                        <i class=\"fas fa-sitemap\"></i>
                        {% trans %}Arborescence{% endtrans %}
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
", "dashboard/common/_sidebar.html.twig", "/home/jerkoder/dev_docs/projects/simplon_DWWM/symfony/devMemories/templates/dashboard/common/_sidebar.html.twig");
    }
}
