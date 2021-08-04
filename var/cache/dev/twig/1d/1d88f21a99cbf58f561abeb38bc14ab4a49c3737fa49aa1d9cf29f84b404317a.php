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

/* dashboard/color/_list.html.twig */
class __TwigTemplate_31bec79e7e112aaffce301647217bb8cbe6f5faf50d80227362df7e5c0ca2f0e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/color/_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/color/_list.html.twig"));

        // line 2
        echo "
<article class=\"tree-color-container\"  id=\"color-list\"  style=\"display:none\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 4, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 5
            echo "        <div
            class=\"badge rounded-pill badge-color
                ";
            // line 7
            if ((twig_length_filter($this->env, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 7, $this->source); })())) > 50)) {
                // line 8
                echo "                    col-1
                ";
            } elseif ((twig_length_filter($this->env,             // line 9
(isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 9, $this->source); })())) > 40)) {
                // line 10
                echo "                    col-2
                ";
            } elseif ((twig_length_filter($this->env,             // line 11
(isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 11, $this->source); })())) > 30)) {
                // line 12
                echo "                    col-3
                ";
            } elseif ((twig_length_filter($this->env,             // line 13
(isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 13, $this->source); })())) > 20)) {
                // line 14
                echo "                    col-4
                ";
            } else {
                // line 16
                echo "                    col-5
                ";
            }
            // line 18
            echo "                \"
        data-id=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\" data-text-color=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "codeText", [], "any", false, false, false, 19), "html", null, true);
            echo "\" data-bg-color=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "codeBg", [], "any", false, false, false, 19), "html", null, true);
            echo "\" data-bind=\"";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "categories", [], "any", false, false, false, 19)), "html", null, true);
            echo "\" id=\"badge_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\"
            style=\"color: ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "codeText", [], "any", false, false, false, 20), "html", null, true);
            echo "; background: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "codeBg", [], "any", false, false, false, 20), "html", null, true);
            echo "\" >
            ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 21), "html", null, true);
            echo "
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "</article>

<script>
// Function to handle the color update
    const colors = document.querySelectorAll(\".badge-color\");
    colors.forEach(color => {
        color.addEventListener('click', function() {
            document.getElementById('color_edit_form').style.display = 'block';
            document.getElementById('color_edit_form_code_text').value = this.dataset.textColor;
            document.getElementById('color_edit_form_code_bg').value = this.dataset.bgColor;
            document.getElementById('color_update_id').value = this.dataset.id;
            // Display the delete button only when the color has no category bound
            document.getElementById('color_edit_form_delete').style.display = this.dataset.bind > 0 ? 'none' : 'block';
            document.getElementById('color_edit_form_nb_cat').innerHTML = this.dataset.bind > 0 ? this.dataset.bind : '';
        })
    })
    // Add a shadow if color is bound with one or many categories
    colors.forEach(color => {
        color.style.border = color.dataset.bind > 0 && '1px solid #212529';
    })
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/color/_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 24,  114 => 21,  108 => 20,  96 => 19,  93 => 18,  89 => 16,  85 => 14,  83 => 13,  80 => 12,  78 => 11,  75 => 10,  73 => 9,  70 => 8,  68 => 7,  64 => 5,  47 => 4,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/dashboard/color/_list.html.twig #}

<article class=\"tree-color-container\"  id=\"color-list\"  style=\"display:none\">
    {% for color in colors %}
        <div
            class=\"badge rounded-pill badge-color
                {% if colors|length > 50 %}
                    col-1
                {% elseif colors|length > 40 %}
                    col-2
                {% elseif colors|length > 30 %}
                    col-3
                {% elseif colors|length > 20 %}
                    col-4
                {% else %}
                    col-5
                {% endif %}
                \"
        data-id=\"{{ color.id }}\" data-text-color=\"{{color.codeText}}\" data-bg-color=\"{{color.codeBg}}\" data-bind=\"{{color.categories|length}}\" id=\"badge_{{color.id}}\"
            style=\"color: {{ color.codeText}}; background: {{ color.codeBg }}\" >
            {{ loop.index }}
        </div>
    {% endfor %}
</article>

<script>
// Function to handle the color update
    const colors = document.querySelectorAll(\".badge-color\");
    colors.forEach(color => {
        color.addEventListener('click', function() {
            document.getElementById('color_edit_form').style.display = 'block';
            document.getElementById('color_edit_form_code_text').value = this.dataset.textColor;
            document.getElementById('color_edit_form_code_bg').value = this.dataset.bgColor;
            document.getElementById('color_update_id').value = this.dataset.id;
            // Display the delete button only when the color has no category bound
            document.getElementById('color_edit_form_delete').style.display = this.dataset.bind > 0 ? 'none' : 'block';
            document.getElementById('color_edit_form_nb_cat').innerHTML = this.dataset.bind > 0 ? this.dataset.bind : '';
        })
    })
    // Add a shadow if color is bound with one or many categories
    colors.forEach(color => {
        color.style.border = color.dataset.bind > 0 && '1px solid #212529';
    })
</script>
", "dashboard/color/_list.html.twig", "/home/jerkoder/dev_docs/projects/simplon_DWWM/symfony/devMemories/templates/dashboard/color/_list.html.twig");
    }
}
