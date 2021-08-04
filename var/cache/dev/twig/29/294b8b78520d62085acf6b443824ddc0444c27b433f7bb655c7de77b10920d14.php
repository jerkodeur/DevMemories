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

/* dashboard/category/_new.html.twig */
class __TwigTemplate_04c07e04a3d9e776f5af011c2e647c741ee0828f820c999f773b96a867d2e9bd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/category/_new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/category/_new.html.twig"));

        // line 2
        echo "
<section class=\"form-container\">
    <fieldset>
        <legend>
            ";
        // line 6
        echo twig_escape_filter($this->env, ((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 6, $this->source); })()) . " une catégorie"), "html", null, true);
        echo "
        </legend>
            ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["category_form"]) || array_key_exists("category_form", $context) ? $context["category_form"] : (function () { throw new RuntimeError('Variable "category_form" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
                ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["category_form"]) || array_key_exists("category_form", $context) ? $context["category_form"] : (function () { throw new RuntimeError('Variable "category_form" does not exist.', 9, $this->source); })()), "label", [], "any", false, false, false, 9), 'row');
        echo "
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["category_form"]) || array_key_exists("category_form", $context) ? $context["category_form"] : (function () { throw new RuntimeError('Variable "category_form" does not exist.', 10, $this->source); })()), "parent", [], "any", false, false, false, 10), 'row');
        echo "
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["category_form"]) || array_key_exists("category_form", $context) ? $context["category_form"] : (function () { throw new RuntimeError('Variable "category_form" does not exist.', 11, $this->source); })()), "color", [], "any", false, false, false, 11), 'row');
        echo "
                <fieldset class=\"form-custom-colors\">
                    <legend>.. où modifier les couleurs</legend>
                    <div class=\"custom-colors-container\">
                        <div class=\"flex-equal\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["category_form"]) || array_key_exists("category_form", $context) ? $context["category_form"] : (function () { throw new RuntimeError('Variable "category_form" does not exist.', 15, $this->source); })()), "bgColorPicker", [], "any", false, false, false, 15), 'row');
        echo "</div>
                        <div class=\"flex-equal\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["category_form"]) || array_key_exists("category_form", $context) ? $context["category_form"] : (function () { throw new RuntimeError('Variable "category_form" does not exist.', 16, $this->source); })()), "textColorPicker", [], "any", false, false, false, 16), 'row');
        echo "</div>
                    </div>
                </fieldset>
                <div id=\"preview-category\" style=\"display:none\">
                    <fieldset>
                        <legend>Aperçu</legend>
                        <div id=\"preview-category-content\"></div>
                    </fieldset>
                </div>
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["category_form"]) || array_key_exists("category_form", $context) ? $context["category_form"] : (function () { throw new RuntimeError('Variable "category_form" does not exist.', 25, $this->source); })()), "submitNewCategory", [], "any", false, false, false, 25), 'row', ["label" => (        // line 26
(isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 26, $this->source); })()) . " la catégory"), "disabled" => "disabled"]);
        // line 27
        echo "
            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["category_form"]) || array_key_exists("category_form", $context) ? $context["category_form"] : (function () { throw new RuntimeError('Variable "category_form" does not exist.', 28, $this->source); })()), 'form_end');
        echo "
    </fieldset>
</section>

<script>
    // Category preview
    const previewContainer = document.getElementById('preview-category');
    const previewCategoryContent = document.getElementById('preview-category-content');

    // Preview container handler
    const labelCategoryInput = document.getElementById('category_label');
    labelCategoryInput.addEventListener('input', function(){
        if(this.value) {
            previewContainer.style.display = 'block'
            previewCategoryContent.innerHTML = this.value
            // Disabled the submit button if no label
            document.getElementById('category_submitNewCategory').disabled = false;
        } else {
            document.getElementById('category_submitNewCategory').disabled = true;
            previewContainer.style.display = 'none';
        }
    })

    // color pickers handle
    const colorInput = document.getElementById('category_color');
    const bgPicker = document.getElementById('category_bgColorPicker');
    const textPicker = document.getElementById('category_textColorPicker');

    textPicker.value = '#f0f5fa';
    bgPicker.value = '#7b8ab8';

    //
    bgPicker.addEventListener('input', function() {
        colorInput.selectedIndex = 0;
        colorInput.style.background = '#fff';
        colorInput.style.color = '#7b8ab8';
        previewCategoryContent.style.background = this.value;
        previewCategoryContent.style.text = textPicker.value;
    })

    textPicker.addEventListener('input', function() {
        colorInput.selectedIndex = 0
        colorInput.style.background = '#fff'
        colorInput.style.color = '#7b8ab8'
        previewCategoryContent.style.color = this.value;
        previewCategoryContent.style.background = bgPicker.value;
    })

    colorInput.addEventListener('input', function(){
        const selectedText = this.options[this.selectedIndex].text
        if(selectedText && selectedText !== \"Choisir une couleur\") {
            const [bgColor, textColor] = selectedText.split('_');
            previewCategoryContent.style.background = bgColor;
            previewCategoryContent.style.boxShadow = `2px 2px 5px #212529`;
            previewCategoryContent.style.color = textColor;

            this.style.background = bgColor;
            this.style.color = textColor;

            bgPicker.value = bgColor;
            textPicker.value = textColor;
        } else {
            previewCategoryContent.style.color = '#f0f5fa';
            previewCategoryContent.style.background = '#7b8ab8';

            this.style.color = '#7b8ab8';
            this.style.background = '#f0f5fa';

            textPicker.value = '#f0f5fa';
            bgPicker.value = '#7b8ab8';
        }
    })

    // Stylise the select color
    for(let i=0; i<colorInput.options.length; i++) {
        const [bgColor, textColor] = colorInput.options[i].text.split('_')
        colorInput.options[i].style.background = bgColor;
        colorInput.options[i].style.color = textColor;
    }
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/category/_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 28,  92 => 27,  90 => 26,  89 => 25,  77 => 16,  73 => 15,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  49 => 6,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/dashboard/category/_new.html.twig #}

<section class=\"form-container\">
    <fieldset>
        <legend>
            {{action ~ ' une catégorie' }}
        </legend>
            {{ form_start(category_form) }}
                {{ form_row(category_form.label) }}
                {{ form_row(category_form.parent) }}
                {{ form_row(category_form.color) }}
                <fieldset class=\"form-custom-colors\">
                    <legend>.. où modifier les couleurs</legend>
                    <div class=\"custom-colors-container\">
                        <div class=\"flex-equal\">{{ form_row(category_form.bgColorPicker) }}</div>
                        <div class=\"flex-equal\">{{ form_row(category_form.textColorPicker) }}</div>
                    </div>
                </fieldset>
                <div id=\"preview-category\" style=\"display:none\">
                    <fieldset>
                        <legend>Aperçu</legend>
                        <div id=\"preview-category-content\"></div>
                    </fieldset>
                </div>
                {{ form_row(category_form.submitNewCategory,
                    {'label': action ~ ' la catégory' , 'disabled': 'disabled'})
                }}
            {{ form_end(category_form) }}
    </fieldset>
</section>

<script>
    // Category preview
    const previewContainer = document.getElementById('preview-category');
    const previewCategoryContent = document.getElementById('preview-category-content');

    // Preview container handler
    const labelCategoryInput = document.getElementById('category_label');
    labelCategoryInput.addEventListener('input', function(){
        if(this.value) {
            previewContainer.style.display = 'block'
            previewCategoryContent.innerHTML = this.value
            // Disabled the submit button if no label
            document.getElementById('category_submitNewCategory').disabled = false;
        } else {
            document.getElementById('category_submitNewCategory').disabled = true;
            previewContainer.style.display = 'none';
        }
    })

    // color pickers handle
    const colorInput = document.getElementById('category_color');
    const bgPicker = document.getElementById('category_bgColorPicker');
    const textPicker = document.getElementById('category_textColorPicker');

    textPicker.value = '#f0f5fa';
    bgPicker.value = '#7b8ab8';

    //
    bgPicker.addEventListener('input', function() {
        colorInput.selectedIndex = 0;
        colorInput.style.background = '#fff';
        colorInput.style.color = '#7b8ab8';
        previewCategoryContent.style.background = this.value;
        previewCategoryContent.style.text = textPicker.value;
    })

    textPicker.addEventListener('input', function() {
        colorInput.selectedIndex = 0
        colorInput.style.background = '#fff'
        colorInput.style.color = '#7b8ab8'
        previewCategoryContent.style.color = this.value;
        previewCategoryContent.style.background = bgPicker.value;
    })

    colorInput.addEventListener('input', function(){
        const selectedText = this.options[this.selectedIndex].text
        if(selectedText && selectedText !== \"Choisir une couleur\") {
            const [bgColor, textColor] = selectedText.split('_');
            previewCategoryContent.style.background = bgColor;
            previewCategoryContent.style.boxShadow = `2px 2px 5px #212529`;
            previewCategoryContent.style.color = textColor;

            this.style.background = bgColor;
            this.style.color = textColor;

            bgPicker.value = bgColor;
            textPicker.value = textColor;
        } else {
            previewCategoryContent.style.color = '#f0f5fa';
            previewCategoryContent.style.background = '#7b8ab8';

            this.style.color = '#7b8ab8';
            this.style.background = '#f0f5fa';

            textPicker.value = '#f0f5fa';
            bgPicker.value = '#7b8ab8';
        }
    })

    // Stylise the select color
    for(let i=0; i<colorInput.options.length; i++) {
        const [bgColor, textColor] = colorInput.options[i].text.split('_')
        colorInput.options[i].style.background = bgColor;
        colorInput.options[i].style.color = textColor;
    }
</script>
", "dashboard/category/_new.html.twig", "/home/jerkoder/dev_docs/projects/simplon_DWWM/symfony/devMemories/templates/dashboard/category/_new.html.twig");
    }
}
