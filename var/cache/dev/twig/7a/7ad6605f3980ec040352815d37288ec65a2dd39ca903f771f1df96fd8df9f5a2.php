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

/* dashboard/color/_edit.html.twig */
class __TwigTemplate_6d8e80fe7b06fe87eb8a56796dfd5e35ce4e71f06b38363314b8373279163885 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/color/_edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/color/_edit.html.twig"));

        // line 2
        echo "
<section class=\"form-container\" >
    ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["color_edit_form"]) || array_key_exists("color_edit_form", $context) ? $context["color_edit_form"] : (function () { throw new RuntimeError('Variable "color_edit_form" does not exist.', 4, $this->source); })()), 'form_start', ["attr" => ["id" => "color_edit_form", "style" => "display: none"]]);
        echo "
    <fieldset>
        <legend>
            <button type=\"button\" id=\"color_edit_form_nb_cat\" disabled title=\"Nombre de catégories liées\"></button>
            ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modifier une couleur", [], "messages");
        // line 9
        echo "            <div>
                <i class=\"fas fa-times-circle\" id=\"hideFormColorButton\"></i>
            </div>
        </legend>
        <div class=\"custom-colors-update-container\">
            <div class=\"flex-equal\">";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["color_edit_form"]) || array_key_exists("color_edit_form", $context) ? $context["color_edit_form"] : (function () { throw new RuntimeError('Variable "color_edit_form" does not exist.', 14, $this->source); })()), "code_text", [], "any", false, false, false, 14), 'row');
        echo "</div>
            <div class=\"flex-equal\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["color_edit_form"]) || array_key_exists("color_edit_form", $context) ? $context["color_edit_form"] : (function () { throw new RuntimeError('Variable "color_edit_form" does not exist.', 15, $this->source); })()), "code_bg", [], "any", false, false, false, 15), 'row');
        echo "</div>
            <input type=\"hidden\" value=\"\" name=\"color_id\" id=\"color_update_id\" />
            <button type=\"button\" id=\"color_edit_form_reset\" title=\"Annuler les changements\">
                <i class=\"fas fa-undo\"></i>
            </button>
            <button form=\"color_edit_form\" type=\"submit\" id=\"color_edit_form_submitColor\" title=\"Valider les changements\" >
                <i class=\"fas fa-check-circle\"></i>
            </button>
            <button type=\"button\" data-bs-toggle=\"modal\" title=\"Supprimer la couleur\" data-bs-target=\"#modal\"
                onclick=\"deleteColorConfirm()\" id=\"color_edit_form_delete\">
                <i class=\"fas fa-trash-alt\"></i>
            </button>
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["color_edit_form"]) || array_key_exists("color_edit_form", $context) ? $context["color_edit_form"] : (function () { throw new RuntimeError('Variable "color_edit_form" does not exist.', 27, $this->source); })()), "submitColor", [], "any", false, false, false, 27), 'row', ["attr" => ["style" => "display: none"]]);
        echo "
        </div>
    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["color_edit_form"]) || array_key_exists("color_edit_form", $context) ? $context["color_edit_form"] : (function () { throw new RuntimeError('Variable "color_edit_form" does not exist.', 29, $this->source); })()), 'form_end');
        echo "
    <fieldset>
</section>

<script>
    // Hide the update form on click
    const formUpdateColorHide = document.getElementById('hideFormColorButton');
    formUpdateColorHide.addEventListener(\"click\", function(){
        document.getElementById('color_edit_form').style.display = \"none\";
    })

    const formUpdateColorReset = document.getElementById('color_edit_form_reset');
    formUpdateColorReset.addEventListener(\"click\", function() {
        const colorUpdateId = document.getElementById('color_update_id').value;
        const currentBadge = document.getElementById(`badge_\${colorUpdateId}`);
        document.getElementById('color_edit_form_code_text').value = currentBadge.dataset.textColor;
        document.getElementById('color_edit_form_code_bg').value = currentBadge.dataset.bgColor;
    })

    // Set the modal content
    function deleteColorConfirm() {
        const colorUpdateId = document.getElementById('color_update_id');

        document.getElementById('modal-title').innerHTML = \"Suppression d'une couleur\" ;
        document.getElementById('modal-content').innerHTML = `Êtes-vous sur de vouloir supprimer la couleur sélectionnée ?`;
        document.getElementById('delete-confirm').href = `/dashboard/colors/delete/\${colorUpdateId.value}`;
    }

</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/color/_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 29,  82 => 27,  67 => 15,  63 => 14,  56 => 9,  54 => 8,  47 => 4,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/dashboard/color/_edit.html.twig #}

<section class=\"form-container\" >
    {{ form_start(color_edit_form, {'attr': {'id': 'color_edit_form', 'style': 'display: none' }}) }}
    <fieldset>
        <legend>
            <button type=\"button\" id=\"color_edit_form_nb_cat\" disabled title=\"Nombre de catégories liées\"></button>
            {% trans %}Modifier une couleur{% endtrans %}
            <div>
                <i class=\"fas fa-times-circle\" id=\"hideFormColorButton\"></i>
            </div>
        </legend>
        <div class=\"custom-colors-update-container\">
            <div class=\"flex-equal\">{{ form_row(color_edit_form.code_text,) }}</div>
            <div class=\"flex-equal\">{{ form_row(color_edit_form.code_bg, ) }}</div>
            <input type=\"hidden\" value=\"\" name=\"color_id\" id=\"color_update_id\" />
            <button type=\"button\" id=\"color_edit_form_reset\" title=\"Annuler les changements\">
                <i class=\"fas fa-undo\"></i>
            </button>
            <button form=\"color_edit_form\" type=\"submit\" id=\"color_edit_form_submitColor\" title=\"Valider les changements\" >
                <i class=\"fas fa-check-circle\"></i>
            </button>
            <button type=\"button\" data-bs-toggle=\"modal\" title=\"Supprimer la couleur\" data-bs-target=\"#modal\"
                onclick=\"deleteColorConfirm()\" id=\"color_edit_form_delete\">
                <i class=\"fas fa-trash-alt\"></i>
            </button>
            {{ form_row(color_edit_form.submitColor, {'attr': {'style': 'display: none' }}) }}
        </div>
    {{ form_end(color_edit_form) }}
    <fieldset>
</section>

<script>
    // Hide the update form on click
    const formUpdateColorHide = document.getElementById('hideFormColorButton');
    formUpdateColorHide.addEventListener(\"click\", function(){
        document.getElementById('color_edit_form').style.display = \"none\";
    })

    const formUpdateColorReset = document.getElementById('color_edit_form_reset');
    formUpdateColorReset.addEventListener(\"click\", function() {
        const colorUpdateId = document.getElementById('color_update_id').value;
        const currentBadge = document.getElementById(`badge_\${colorUpdateId}`);
        document.getElementById('color_edit_form_code_text').value = currentBadge.dataset.textColor;
        document.getElementById('color_edit_form_code_bg').value = currentBadge.dataset.bgColor;
    })

    // Set the modal content
    function deleteColorConfirm() {
        const colorUpdateId = document.getElementById('color_update_id');

        document.getElementById('modal-title').innerHTML = \"Suppression d'une couleur\" ;
        document.getElementById('modal-content').innerHTML = `Êtes-vous sur de vouloir supprimer la couleur sélectionnée ?`;
        document.getElementById('delete-confirm').href = `/dashboard/colors/delete/\${colorUpdateId.value}`;
    }

</script>
", "dashboard/color/_edit.html.twig", "/home/jerkoder/dev_docs/projects/simplon_DWWM/symfony/devMemories/templates/dashboard/color/_edit.html.twig");
    }
}
