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

/* dashboard/common/_flashMessage.html.twig */
class __TwigTemplate_4a1e17b542df6c072e4b896e657281a6470a19b67576a8486e757f66260568f7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/common/_flashMessage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/common/_flashMessage.html.twig"));

        // line 1
        echo "<main class=\"mt-3\" id=\"flash-container\">
    <div class=\"container px-4 px-lg-5\">
        <div class=\"row gx-4 gx-lg-5 justify-content-center\">
        <div class=\"col-md-10 col-lg-8 col-xl-7 text-center\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["flashSuccess"]) {
            // line 6
            echo "                <div class=\"alert alert-success\" role=\"alert\">";
            echo $context["flashSuccess"];
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashSuccess'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["flashSuccess"]) {
            // line 9
            echo "                <div class=\"alert alert-warning\" role=\"alert\">";
            echo $context["flashSuccess"];
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashSuccess'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 12
            echo "                <div class=\"alert alert-danger\" role=\"alert\">";
            echo $context["flashError"];
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </div>
        </div>
    </div>
</main>

";
        // line 19
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 20
        echo "    <script>
        const flashDiv = document.getElementById('flash-container')
        setTimeout(function () {
        flashDiv.style.display = \"none\"
        }, 4000);
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/common/_flashMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 20,  98 => 19,  91 => 14,  82 => 12,  77 => 11,  68 => 9,  63 => 8,  54 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<main class=\"mt-3\" id=\"flash-container\">
    <div class=\"container px-4 px-lg-5\">
        <div class=\"row gx-4 gx-lg-5 justify-content-center\">
        <div class=\"col-md-10 col-lg-8 col-xl-7 text-center\">
            {% for flashSuccess in app.flashes('success') %}
                <div class=\"alert alert-success\" role=\"alert\">{{ flashSuccess|raw }}</div>
            {% endfor %}
            {% for flashSuccess in app.flashes('warning') %}
                <div class=\"alert alert-warning\" role=\"alert\">{{ flashSuccess|raw }}</div>
            {% endfor %}
            {% for flashError in app.flashes('error') %}
                <div class=\"alert alert-danger\" role=\"alert\">{{ flashError|raw }}</div>
            {% endfor %}
        </div>
        </div>
    </div>
</main>

{% block javascript %}
    <script>
        const flashDiv = document.getElementById('flash-container')
        setTimeout(function () {
        flashDiv.style.display = \"none\"
        }, 4000);
    </script>
{% endblock %}", "dashboard/common/_flashMessage.html.twig", "/home/jerkoder/dev_docs/projects/simplon_DWWM/symfony/devMemories/templates/dashboard/common/_flashMessage.html.twig");
    }
}
