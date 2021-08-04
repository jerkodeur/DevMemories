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

/* dashboard/category/home.html.twig */
class __TwigTemplate_198184b7eee1498b85ca1bf25dd1118e3e48cf18d5ca821cc66fc0ba4ba6accf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'body' => [$this, 'block_body'],
            'modal' => [$this, 'block_modal'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "dashboard/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/category/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/category/home.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/base.html.twig", "dashboard/category/home.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mes catégories", [], "messages");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 6
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo " Mes catégories
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <div class=\"categories-main-container row\">
        <section class=\"categories-handle-container col-12 col-lg-8\">
            <h1 id=\"category-title\">
                ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mes catégories", [], "messages");
        // line 15
        echo "                <span>
                    <i class=\"fas fa-chevron-down\" id=\"cat-arrow-down\" style=\"display: inline-block\"></i>
                    <i class=\"fas fa-chevron-up\" id=\"cat-arrow-up\" style=\"display: none\"></i>
                </span>
            </h1>
            ";
        // line 20
        $this->loadTemplate("dashboard/category/_list.html.twig", "dashboard/category/home.html.twig", 20)->display($context);
        // line 21
        echo "            ";
        $this->loadTemplate("dashboard/category/_new.html.twig", "dashboard/category/home.html.twig", 21)->display(twig_array_merge($context, ["action" => "Ajouter"]));
        // line 22
        echo "
        </section>
        <section class=\"colors-handle-container col-12 col-lg-4\">
            <h1 id=\"color-title\">
                ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mes couleurs", [], "messages");
        // line 27
        echo "                <span>
                    <i class=\"fas fa-chevron-down\" id=\"color-arrow-down\" style=\"display: inline-block\"></i>
                    <i class=\"fas fa-chevron-up\" id=\"color-arrow-up\" style=\"display: none\"></i>
                </span>
            </h1>
            ";
        // line 32
        $this->loadTemplate("dashboard/color/_edit.html.twig", "dashboard/category/home.html.twig", 32)->display($context);
        // line 33
        echo "            ";
        $this->loadTemplate("dashboard/color/_list.html.twig", "dashboard/category/home.html.twig", 33)->display($context);
        // line 34
        echo "            ";
        $this->loadTemplate("dashboard/color/_new.html.twig", "dashboard/category/home.html.twig", 34)->display($context);
        // line 35
        echo "        </section>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        // line 40
        echo "    ";
        $this->loadTemplate("common/modal/_deleteModal.html.twig", "dashboard/category/home.html.twig", 40)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 44
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
    <script>
        window.onload = () => {

            // Hide/show list of categories on click
            const handleButtonCatList = document.getElementById('category-title');
            const catArrowDown = document.getElementById('cat-arrow-down');
            const catArrowUp = document.getElementById('cat-arrow-up');
            handleButtonCatList.addEventListener(\"click\", function(){
                const categoryList = document.getElementById('category-list');
                categoryList.style.display = categoryList.style.display === \"none\" ? \"inline-block\" : \"none\";
                catArrowDown.style.display = catArrowDown.style.display === \"inline-block\" ? \"none\" : \"inline-block\";
                catArrowUp.style.display = catArrowUp.style.display === \"inline-block\" ? \"none\" : \"inline-block\";
            });

            // Hide/show list of colors on click
            const handleButtonColorList = document.getElementById('color-title');
            const colorArrowDown = document.getElementById('color-arrow-down');
            const colorArrowUp = document.getElementById('color-arrow-up');
            handleButtonColorList.addEventListener(\"click\", function(){
                const colorList = document.getElementById('color-list');
                colorList.style.display = colorList.style.display === \"none\" ? \"inline-block\" : \"none\";
                colorArrowDown.style.display = colorArrowDown.style.display === \"inline-block\" ? \"none\" : \"inline-block\";
                colorArrowUp.style.display = colorArrowUp.style.display === \"inline-block\" ? \"none\" : \"inline-block\";
            });
        }
    </script> #}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/category/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 44,  190 => 43,  179 => 40,  169 => 39,  157 => 35,  154 => 34,  151 => 33,  149 => 32,  142 => 27,  140 => 26,  134 => 22,  131 => 21,  129 => 20,  122 => 15,  120 => 14,  114 => 10,  104 => 9,  91 => 6,  81 => 5,  62 => 4,  39 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/dashboard/category/home.html.twig #}

{% extends 'dashboard/base.html.twig' %}
{% block title %}{% trans %}Mes catégories{% endtrans %}{% endblock %}
{% block breadcrumb %}
    {{ parent() }} Mes catégories
{% endblock %}

{% block body %}

    <div class=\"categories-main-container row\">
        <section class=\"categories-handle-container col-12 col-lg-8\">
            <h1 id=\"category-title\">
                {% trans %}Mes catégories{% endtrans %}
                <span>
                    <i class=\"fas fa-chevron-down\" id=\"cat-arrow-down\" style=\"display: inline-block\"></i>
                    <i class=\"fas fa-chevron-up\" id=\"cat-arrow-up\" style=\"display: none\"></i>
                </span>
            </h1>
            {% include \"dashboard/category/_list.html.twig\" %}
            {% include \"dashboard/category/_new.html.twig\" with {'action': 'Ajouter'}%}

        </section>
        <section class=\"colors-handle-container col-12 col-lg-4\">
            <h1 id=\"color-title\">
                {% trans %}Mes couleurs{% endtrans %}
                <span>
                    <i class=\"fas fa-chevron-down\" id=\"color-arrow-down\" style=\"display: inline-block\"></i>
                    <i class=\"fas fa-chevron-up\" id=\"color-arrow-up\" style=\"display: none\"></i>
                </span>
            </h1>
            {% include \"dashboard/color/_edit.html.twig\" %}
            {% include \"dashboard/color/_list.html.twig\" %}
            {% include \"dashboard/color/_new.html.twig\" %}
        </section>
    </div>
{% endblock %}

{% block modal %}
    {% include \"common/modal/_deleteModal.html.twig\" %}
{% endblock %}

{% block js %}
    {{ parent() }}
    <script>
        window.onload = () => {

            // Hide/show list of categories on click
            const handleButtonCatList = document.getElementById('category-title');
            const catArrowDown = document.getElementById('cat-arrow-down');
            const catArrowUp = document.getElementById('cat-arrow-up');
            handleButtonCatList.addEventListener(\"click\", function(){
                const categoryList = document.getElementById('category-list');
                categoryList.style.display = categoryList.style.display === \"none\" ? \"inline-block\" : \"none\";
                catArrowDown.style.display = catArrowDown.style.display === \"inline-block\" ? \"none\" : \"inline-block\";
                catArrowUp.style.display = catArrowUp.style.display === \"inline-block\" ? \"none\" : \"inline-block\";
            });

            // Hide/show list of colors on click
            const handleButtonColorList = document.getElementById('color-title');
            const colorArrowDown = document.getElementById('color-arrow-down');
            const colorArrowUp = document.getElementById('color-arrow-up');
            handleButtonColorList.addEventListener(\"click\", function(){
                const colorList = document.getElementById('color-list');
                colorList.style.display = colorList.style.display === \"none\" ? \"inline-block\" : \"none\";
                colorArrowDown.style.display = colorArrowDown.style.display === \"inline-block\" ? \"none\" : \"inline-block\";
                colorArrowUp.style.display = colorArrowUp.style.display === \"inline-block\" ? \"none\" : \"inline-block\";
            });
        }
    </script> #}
{% endblock %}
", "dashboard/category/home.html.twig", "/home/jerkoder/dev_docs/projects/simplon_DWWM/symfony/devMemories/templates/dashboard/category/home.html.twig");
    }
}
