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

/* dashboard/category/_list.html.twig */
class __TwigTemplate_c373de3026604f8085eb648087042da7226eeebfea495375659ef3f46a7fbad3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/category/_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/category/_list.html.twig"));

        // line 2
        echo "
<article class=\"tree-categories-container\" id=\"category-list\" style=\"display:none\">
    <input type=\"hidden\" id=\"currentCategoryShow\"></input>
    ";
        // line 36
        echo "
    ";
        // line 37
        $macros["macros"] = $this->macros["macros"] = $this;
        // line 38
        echo "
    ";
        // line 39
        echo twig_call_macro($macros["macros"], "macro_menu_categories", [(isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 39, $this->source); })())], 39, $context, $this->getSourceContext());
        echo "
</article>

<script>
    // Set the modal content
    function deleteCategoryConfirm(id) {
        const el = document.getElementsByClassName(id)[0];
        const subCategories = el.dataset.sub > 0 ? ' et <b>toutes ses sous-catégories</b>' : ''
        const message = `Êtes-vous sur de vouloir supprimer la catégorie <b>\${el.dataset.label}</b> \${subCategories} ?`
        document.getElementById('modal-title').innerHTML = \"Suppression d'une catégorie\" ;
        document.getElementById('modal-content').innerHTML = message;
        document.getElementById('delete-confirm').href = `/dashboard/categories/delete/\${el.dataset.id}`
    }

    // Add a listener to the category title to show/hide the subCategories
    const buttons = document.querySelectorAll(\"button[class*='cat-accordion-button']\");
    for(let button of buttons) {
        const label = button.className.split('_')[1];
        const subCatArrowDown = document.getElementById(`\${label}-subCat-arrow-down`);
        const subCatArrowUp = document.getElementById(`\${label}-subCat-arrow-up`);
        button.addEventListener(\"click\", function(){
            const toggleNode = document.getElementById(`cat-accordion-sub_\${label}`);
            toggleNode.style.display = toggleNode.style.display === \"none\" ? \"inline-block\" : \"none\";
            subCatArrowDown.style.display = subCatArrowDown.style.display === \"inline-block\" ? \"none\" : \"inline-block\";
            subCatArrowUp.style.display = subCatArrowUp.style.display === \"inline-block\" ? \"none\" : \"inline-block\";
        })
    }

    // Display/hide the handle category container
    const handleDisplayCategorybuttons = document.querySelectorAll(\"button[class*='expand-category-button']\");
    for(let button of handleDisplayCategorybuttons) {
        button.addEventListener('click', function() {
            const id = this.dataset.id
            const container = document.getElementById(`handle-category-\${id}`);
            container.style.animationName = 'container-left-to-right';
            container.style.animationDuration = '2s';
            container.style.animationFillMode = 'forwards';
            const containerShowed = document.getElementById(`currentCategoryShow`).value;
            if(containerShowed) {
                const el = document.getElementById(`handle-category-\${containerShowed}`);
                el.style.animationName = 'container-right-to-left';
                el.style.animationDuration = '1s';
                el.style.animationFillMode = 'forwards';
            }

            document.getElementById('currentCategoryShow').value = id;
        })
    }
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function macro_menu_categories($__categories__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "categories" => $__categories__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "menu_categories"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "menu_categories"));

            // line 6
            echo "        ";
            $macros["macros"] = $this;
            // line 7
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 8
                echo "            <ul>
                <li class=\"cat-accordion-header\">
                    <button class=\"cat-accordion-button_";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 10), "html", null, true);
                echo "\" type=\"button\" aria-expanded=\"true\"
                            style=\"color: ";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "color", [], "any", false, false, false, 11), "codeText", [], "any", false, false, false, 11), "html", null, true);
                echo "; background: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "color", [], "any", false, false, false, 11), "codeBg", [], "any", false, false, false, 11), "html", null, true);
                echo "\"
                    >
                        ";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "label", [], "any", false, false, false, 13), "html", null, true);
                echo "
                        ";
                // line 14
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "subCategories", [], "any", false, false, false, 14)) > 0)) {
                    // line 15
                    echo "                            <i class=\"fas fa-chevron-down\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 15), "html", null, true);
                    echo "-subCat-arrow-down\" style=\"display: inline-block\"></i>
                            <i class=\"fas fa-chevron-up\" id=\"";
                    // line 16
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 16), "html", null, true);
                    echo "-subCat-arrow-up\"style=\"display:none\"></i>
                        ";
                }
                // line 18
                echo "                    </button>
                    <div id=\"handle-category-";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 19), "html", null, true);
                echo "\">
                        <button class=\"category-edit-button-";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 20), "html", null, true);
                echo "\" onclick=\"location.href='";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_category_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                echo "'\">Modifier</button>
                        <button class=\"category-delete-button-";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 21), "html", null, true);
                echo "\" data-bs-toggle=\"modal\" title=\"Supprimer la catégorie\" data-bs-target=\"#modal\" onclick=\"deleteCategoryConfirm('category-delete-button-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 21), "html", null, true);
                echo "')\" data-label=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "label", [], "any", false, false, false, 21), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 21), "html", null, true);
                echo "\" data-sub=";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "subCategories", [], "any", false, false, false, 21)), "html", null, true);
                echo ">Supprimer</button>
                        <button class=\"expand-category-button-";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 22), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 22), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_category_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\">
                            <i class=\"fas fa-chevron-right\" id=\"fa-right-";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 23), "html", null, true);
                echo "\"></i>
                            <i class=\"fas fa-chevron-left\" id=\"fa-left-";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 24), "html", null, true);
                echo "\" style=\"display:none\"></i>
                        </button>
                    </div>
                </li>
                ";
                // line 28
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "subCategories", [], "any", false, false, false, 28)) > 0)) {
                    // line 29
                    echo "                    <div id=\"cat-accordion-sub_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 29), "html", null, true);
                    echo "\" style=\"display: none\" class=\"cat-accordion-body\">
                        ";
                    // line 30
                    echo twig_call_macro($macros["macros"], "macro_menu_categories", [twig_get_attribute($this->env, $this->source, $context["category"], "subCategories", [], "any", false, false, false, 30)], 30, $context, $this->getSourceContext());
                    echo "
                    </div>
                ";
                }
                // line 33
                echo "            </ul>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "    ";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "dashboard/category/_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 35,  231 => 33,  225 => 30,  220 => 29,  218 => 28,  211 => 24,  207 => 23,  199 => 22,  187 => 21,  181 => 20,  177 => 19,  174 => 18,  169 => 16,  164 => 15,  162 => 14,  158 => 13,  151 => 11,  147 => 10,  143 => 8,  138 => 7,  135 => 6,  116 => 5,  56 => 39,  53 => 38,  51 => 37,  48 => 36,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/dashboard/category/_list.html.twig #}

<article class=\"tree-categories-container\" id=\"category-list\" style=\"display:none\">
    <input type=\"hidden\" id=\"currentCategoryShow\"></input>
    {% macro menu_categories(categories) %}
        {% import _self as macros %}
        {% for category in categories %}
            <ul>
                <li class=\"cat-accordion-header\">
                    <button class=\"cat-accordion-button_{{category.slug}}\" type=\"button\" aria-expanded=\"true\"
                            style=\"color: {{category.color.codeText}}; background: {{category.color.codeBg}}\"
                    >
                        {{ category.label }}
                        {% if category.subCategories|length > 0 %}
                            <i class=\"fas fa-chevron-down\" id=\"{{category.slug}}-subCat-arrow-down\" style=\"display: inline-block\"></i>
                            <i class=\"fas fa-chevron-up\" id=\"{{category.slug}}-subCat-arrow-up\"style=\"display:none\"></i>
                        {% endif %}
                    </button>
                    <div id=\"handle-category-{{category.id}}\">
                        <button class=\"category-edit-button-{{category.id}}\" onclick=\"location.href='{{ path('dashboard_category_edit', {id: category.id}) }}'\">Modifier</button>
                        <button class=\"category-delete-button-{{category.id}}\" data-bs-toggle=\"modal\" title=\"Supprimer la catégorie\" data-bs-target=\"#modal\" onclick=\"deleteCategoryConfirm('category-delete-button-{{category.id}}')\" data-label=\"{{category.label}}\" data-id=\"{{category.id}}\" data-sub={{category.subCategories|length}}>Supprimer</button>
                        <button class=\"expand-category-button-{{category.id}}\" data-id=\"{{category.id}}\" href=\"{{ path('dashboard_category_edit', {id: category.id}) }}\">
                            <i class=\"fas fa-chevron-right\" id=\"fa-right-{{category.id}}\"></i>
                            <i class=\"fas fa-chevron-left\" id=\"fa-left-{{category.id}}\" style=\"display:none\"></i>
                        </button>
                    </div>
                </li>
                {% if category.subCategories|length > 0 %}
                    <div id=\"cat-accordion-sub_{{category.slug}}\" style=\"display: none\" class=\"cat-accordion-body\">
                        {{ macros.menu_categories(category.subCategories) }}
                    </div>
                {% endif %}
            </ul>
        {% endfor %}
    {% endmacro %}

    {% import _self as macros %}

    {{ macros.menu_categories(categories) }}
</article>

<script>
    // Set the modal content
    function deleteCategoryConfirm(id) {
        const el = document.getElementsByClassName(id)[0];
        const subCategories = el.dataset.sub > 0 ? ' et <b>toutes ses sous-catégories</b>' : ''
        const message = `Êtes-vous sur de vouloir supprimer la catégorie <b>\${el.dataset.label}</b> \${subCategories} ?`
        document.getElementById('modal-title').innerHTML = \"Suppression d'une catégorie\" ;
        document.getElementById('modal-content').innerHTML = message;
        document.getElementById('delete-confirm').href = `/dashboard/categories/delete/\${el.dataset.id}`
    }

    // Add a listener to the category title to show/hide the subCategories
    const buttons = document.querySelectorAll(\"button[class*='cat-accordion-button']\");
    for(let button of buttons) {
        const label = button.className.split('_')[1];
        const subCatArrowDown = document.getElementById(`\${label}-subCat-arrow-down`);
        const subCatArrowUp = document.getElementById(`\${label}-subCat-arrow-up`);
        button.addEventListener(\"click\", function(){
            const toggleNode = document.getElementById(`cat-accordion-sub_\${label}`);
            toggleNode.style.display = toggleNode.style.display === \"none\" ? \"inline-block\" : \"none\";
            subCatArrowDown.style.display = subCatArrowDown.style.display === \"inline-block\" ? \"none\" : \"inline-block\";
            subCatArrowUp.style.display = subCatArrowUp.style.display === \"inline-block\" ? \"none\" : \"inline-block\";
        })
    }

    // Display/hide the handle category container
    const handleDisplayCategorybuttons = document.querySelectorAll(\"button[class*='expand-category-button']\");
    for(let button of handleDisplayCategorybuttons) {
        button.addEventListener('click', function() {
            const id = this.dataset.id
            const container = document.getElementById(`handle-category-\${id}`);
            container.style.animationName = 'container-left-to-right';
            container.style.animationDuration = '2s';
            container.style.animationFillMode = 'forwards';
            const containerShowed = document.getElementById(`currentCategoryShow`).value;
            if(containerShowed) {
                const el = document.getElementById(`handle-category-\${containerShowed}`);
                el.style.animationName = 'container-right-to-left';
                el.style.animationDuration = '1s';
                el.style.animationFillMode = 'forwards';
            }

            document.getElementById('currentCategoryShow').value = id;
        })
    }
</script>
", "dashboard/category/_list.html.twig", "/home/jerkoder/dev_docs/projects/simplon_DWWM/symfony/devMemories/templates/dashboard/category/_list.html.twig");
    }
}
