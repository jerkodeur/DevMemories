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

/* dashboard/color/_new.html.twig */
class __TwigTemplate_472645a58a2044061d0f9e8ce7f8796f5184e8b7fbad472e9efe44d0291d1040 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/color/_new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/color/_new.html.twig"));

        // line 2
        echo "
<section class=\"form-container\">
    <fieldset>
        <legend>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter une couleur", [], "messages");
        echo "</legend>
            ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["color_new_form"]) || array_key_exists("color_new_form", $context) ? $context["color_new_form"] : (function () { throw new RuntimeError('Variable "color_new_form" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["id" => "color_new_form"]]);
        echo "
                <div class=\"form-custom-colors\">
                    <div class=\"custom-colors-container form-colors\">
                        <div class=\"flex-equal\">";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["color_new_form"]) || array_key_exists("color_new_form", $context) ? $context["color_new_form"] : (function () { throw new RuntimeError('Variable "color_new_form" does not exist.', 9, $this->source); })()), "code_text", [], "any", false, false, false, 9), 'row', ["id" => "colors_code_text_2"]);
        echo "</div>
                        <div class=\"flex-equal\">";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["color_new_form"]) || array_key_exists("color_new_form", $context) ? $context["color_new_form"] : (function () { throw new RuntimeError('Variable "color_new_form" does not exist.', 10, $this->source); })()), "code_bg", [], "any", false, false, false, 10), 'row', ["id" => "colors_code_bg_2"]);
        echo "</div>
                    </div>
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["color_new_form"]) || array_key_exists("color_new_form", $context) ? $context["color_new_form"] : (function () { throw new RuntimeError('Variable "color_new_form" does not exist.', 12, $this->source); })()), "submitColor", [], "any", false, false, false, 12), 'row');
        echo "
                </div>
            ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["color_new_form"]) || array_key_exists("color_new_form", $context) ? $context["color_new_form"] : (function () { throw new RuntimeError('Variable "color_new_form" does not exist.', 14, $this->source); })()), 'form_end');
        echo "
    </fieldset>
</section>

<script>
    // Set the default values for the second color picker form
    document.getElementById('colors_code_text_2').value = '#f0f5fa';
    document.getElementById('colors_code_bg_2').value = '#7b8ab8';
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/color/_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 14,  67 => 12,  62 => 10,  58 => 9,  52 => 6,  48 => 5,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/dashboard/color/_new.html.twig #}

<section class=\"form-container\">
    <fieldset>
        <legend>{% trans %}Ajouter une couleur{% endtrans %}</legend>
            {{ form_start(color_new_form, {'attr': {'id': 'color_new_form'}} ) }}
                <div class=\"form-custom-colors\">
                    <div class=\"custom-colors-container form-colors\">
                        <div class=\"flex-equal\">{{ form_row(color_new_form.code_text, {id: 'colors_code_text_2'}) }}</div>
                        <div class=\"flex-equal\">{{ form_row(color_new_form.code_bg, {id: 'colors_code_bg_2'}) }}</div>
                    </div>
                    {{ form_row(color_new_form.submitColor) }}
                </div>
            {{ form_end(color_new_form) }}
    </fieldset>
</section>

<script>
    // Set the default values for the second color picker form
    document.getElementById('colors_code_text_2').value = '#f0f5fa';
    document.getElementById('colors_code_bg_2').value = '#7b8ab8';
</script>
", "dashboard/color/_new.html.twig", "/home/jerkoder/dev_docs/projects/simplon_DWWM/symfony/devMemories/templates/dashboard/color/_new.html.twig");
    }
}
