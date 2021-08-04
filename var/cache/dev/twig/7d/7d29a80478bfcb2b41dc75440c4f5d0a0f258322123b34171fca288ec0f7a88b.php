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

/* dashboard/common/_navbar.html.twig */
class __TwigTemplate_2a740484844957a2c6ea0f1e886b2ac3ac69c1aeb24236e416ea913e75245aa3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/common/_navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/common/_navbar.html.twig"));

        // line 2
        echo "
<!--header start-->
<header class=\"header black-bg\">
    <div class=\"sidebar-toggle-box\">
        <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
    </div>
    <!--logo start-->
    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"logo\">
        <b>DEV<span>MEMORIES</span></b>
    </a>
    <!--logo end-->
    <div class=\"nav notify-row\" id=\"top_menu\">
        <!-- notification start -->
        <ul class=\"nav top-menu\">
        ";
        // line 17
        echo "        </ul>
        <!-- notification end -->
    </div>
    <div class=\"top-menu\">
        <ul class=\"nav float-end top-menu\">
            <li>
                <a class=\"new-content\" role=\"button\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_content_new");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Créer un contenu", [], "messages");
        echo "</a>
            </li>
            <li>
                <a class=\"logout\" role=\"button\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Déconnexion", [], "messages");
        echo "</a>
            </li>
        </ul>
    </div>
</header>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/common/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 26,  70 => 23,  62 => 17,  52 => 9,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/dashboard/common/_navbar.html.twig #}

<!--header start-->
<header class=\"header black-bg\">
    <div class=\"sidebar-toggle-box\">
        <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
    </div>
    <!--logo start-->
    <a href=\"{{ path('home') }}\" class=\"logo\">
        <b>DEV<span>MEMORIES</span></b>
    </a>
    <!--logo end-->
    <div class=\"nav notify-row\" id=\"top_menu\">
        <!-- notification start -->
        <ul class=\"nav top-menu\">
        {# DROPDOWNS BUTTONS #}
        </ul>
        <!-- notification end -->
    </div>
    <div class=\"top-menu\">
        <ul class=\"nav float-end top-menu\">
            <li>
                <a class=\"new-content\" role=\"button\" href=\"{{ path('dashboard_content_new') }}\">{% trans %}Créer un contenu{% endtrans %}</a>
            </li>
            <li>
                <a class=\"logout\" role=\"button\" href=\"{{ path('app_logout') }}\">{% trans %}Déconnexion{% endtrans %}</a>
            </li>
        </ul>
    </div>
</header>
", "dashboard/common/_navbar.html.twig", "/home/jerkoder/dev_docs/projects/simplon_DWWM/symfony/devMemories/templates/dashboard/common/_navbar.html.twig");
    }
}
