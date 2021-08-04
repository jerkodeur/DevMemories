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

/* dashboard/content/home.html.twig */
class __TwigTemplate_e7ba718cbf2f0928052f1fbc5d067f065fe162a7a840791275bb85d0b7379b42 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/content/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/content/home.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/base.html.twig", "dashboard/content/home.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "\t";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
\t";
        // line 8
        echo "\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Liste de mes contenus", [], "messages");
        // line 10
        echo "\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 12
        echo "\t\t";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
\t\tMes contenus
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "\t<section id=\"content-container\">
\t\t<h3>Liste de mes contenus</h3>
\t\t<div class=\"content-panel\">
\t\t<div class=\"adv-table\">
\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display table table-bordered\" id=\"hidden-table-info\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t<th class=\"text-center\" title=\"Plus d'infos\">
\t\t\t\t\t<i class=\"fas fa-info-circle\"></i>
\t\t\t\t</th>
\t\t\t\t<th style=\"style\">";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Id", [], "messages");
        echo "</th>
\t\t\t\t<th style=\"style\">";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "messages");
        echo "</th>
\t\t\t\t<th style=\"style\">";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "messages");
        echo "</th>
\t\t\t\t<th style=\"style\">";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type", [], "messages");
        echo "</th>
\t\t\t\t<th>";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Titre", [], "messages");
        echo "</th>
\t\t\t\t<th>";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "messages");
        echo "</th>
\t\t\t\t<th>";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contenu", [], "messages");
        echo "</th>
\t\t\t\t<th>
\t\t\t\t\t<i class=\"fas fa-user-lock\" title=\"Privé ?\"></i>
\t\t\t\t</th>
\t\t\t\t<th>";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("<i class=\"fas fa-file-export\" title=\"publié ?\"></i>", [], "messages");
        // line 37
        echo "</th>
\t\t\t\t<th>";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catégorie", [], "messages");
        echo "</th>
\t\t\t\t<th>";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "messages");
        echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contents"]) || array_key_exists("contents", $context) ? $context["contents"] : (function () { throw new RuntimeError('Variable "contents" does not exist.', 43, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 44
            echo "\t\t\t\t<tr class=\"gradeA ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 44) % 2 == 0)) {
                echo " even ";
            } else {
                echo " odd ";
            }
            echo "\">
\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t<img class=\"toggle-img\" src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/dashboard/advanced-table/details_open.png", "app"), "html", null, true);
            echo "\">
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"center\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"center\" title=\"";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "updatedAt", [], "any", false, false, false, 49), " d/m/y à h:i"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "updatedAt", [], "any", false, false, false, 49), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"center\" title=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "createdAt", [], "any", false, false, false, 50), " d/m/y à h:i"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "createdAt", [], "any", false, false, false, 50), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"center\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["content"], "type", [], "any", false, false, false, 51), "label", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
\t\t\t\t\t<td title=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "title", [], "any", false, false, false, 52), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["content"], "title", [], "any", false, false, false, 52)), "truncate", [0 => 50, 1 => " ..."], "method", false, false, false, 52), "html", null, true);
            echo "</td>
\t\t\t\t\t<td title=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "description", [], "any", false, false, false, 53), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["content"], "description", [], "any", false, false, false, 53)), "truncate", [0 => 75, 1 => " ..."], "method", false, false, false, 53), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"center\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "content", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t<span style=\"display:none\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "private", [], "any", false, false, false, 57), "html", null, true);
            echo "</span>
\t\t\t\t\t\t<input class=\"form-check-input\" value=\"content.private\" type=\"checkbox\" name=\"private\" id=\"private_";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo "\" ";
            echo ((twig_get_attribute($this->env, $this->source, $context["content"], "private", [], "any", false, false, false, 58)) ? ("checked") : (null));
            echo ">
\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t<span style=\"display:none\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "published", [], "any", false, false, false, 62), "html", null, true);
            echo "</span>
\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"published\" id=\"published_";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\" ";
            echo ((twig_get_attribute($this->env, $this->source, $context["content"], "published", [], "any", false, false, false, 64)) ? ("checked") : (null));
            echo ">
\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["content"], "categories", [], "any", false, false, false, 69));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 70
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "label", [], "any", false, false, false, 71), "html", null, true);
                echo "
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-center \">
\t\t\t\t\t<a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_content_edit", ["slug" => twig_get_attribute($this->env, $this->source, $context["content"], "slug", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\" role=\"button\" aria-pressed=\"true\" alt=\"Modifier le contenu\" title=\"modifier\">
\t\t\t\t\t\t<i class=\"fas fa-edit fa-2x\"></i>
\t\t\t\t\t</a>

\t\t\t\t\t<i class=\"fas fa-trash fa-2x\" role=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal\" data-slug=\"";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "slug", [], "any", false, false, false, 81), "html", null, true);
            echo "\" data-title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "title", [], "any", false, false, false, 81), "html", null, true);
            echo "\" onclick=\"deleteModalConfirm(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "id", [], "any", false, false, false, 81), "html", null, true);
            echo ")\" id=\"deleteButton_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "id", [], "any", false, false, false, 81), "html", null, true);
            echo "\" aria-pressed=\"true\" title=\"Supprimer\" style=\"with:10em\"></i>
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "\t\t\t</tbody>
\t\t</table>
\t\t</div>
\t</div>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 95
        echo "\t";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
\t";
        // line 96
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("datatables");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/content/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 96,  382 => 95,  372 => 94,  356 => 86,  331 => 81,  324 => 77,  319 => 74,  310 => 71,  307 => 70,  303 => 69,  291 => 64,  286 => 62,  275 => 58,  271 => 57,  265 => 54,  259 => 53,  253 => 52,  249 => 51,  243 => 50,  237 => 49,  233 => 48,  228 => 46,  218 => 44,  201 => 43,  194 => 39,  190 => 38,  187 => 37,  185 => 36,  178 => 32,  174 => 31,  170 => 30,  166 => 29,  162 => 28,  158 => 27,  154 => 26,  142 => 16,  132 => 15,  118 => 12,  108 => 11,  98 => 10,  87 => 9,  77 => 8,  72 => 6,  62 => 5,  39 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/dashboard/content/home.html.twig #}

{% extends 'dashboard/base.html.twig' %}

{% block head %}
\t{{ parent() }}
\t{# <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.25/datatables.min.css\"/> #}
\t{% endblock %}
\t{% block title %}{% trans %}Liste de mes contenus{% endtrans %}
\t{% endblock %}
\t{% block breadcrumb %}
\t\t{{ parent() }}
\t\tMes contenus
\t{% endblock %}
\t{% block body %}
\t<section id=\"content-container\">
\t\t<h3>Liste de mes contenus</h3>
\t\t<div class=\"content-panel\">
\t\t<div class=\"adv-table\">
\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display table table-bordered\" id=\"hidden-table-info\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t<th class=\"text-center\" title=\"Plus d'infos\">
\t\t\t\t\t<i class=\"fas fa-info-circle\"></i>
\t\t\t\t</th>
\t\t\t\t<th style=\"style\">{% trans %}Id{% endtrans %}</th>
\t\t\t\t<th style=\"style\">{% trans %}Date{% endtrans %}</th>
\t\t\t\t<th style=\"style\">{% trans %}Date{% endtrans %}</th>
\t\t\t\t<th style=\"style\">{% trans %}Type{% endtrans %}</th>
\t\t\t\t<th>{% trans %}Titre{% endtrans %}</th>
\t\t\t\t<th>{% trans %}Description{% endtrans %}</th>
\t\t\t\t<th>{% trans %}Contenu{% endtrans %}</th>
\t\t\t\t<th>
\t\t\t\t\t<i class=\"fas fa-user-lock\" title=\"Privé ?\"></i>
\t\t\t\t</th>
\t\t\t\t<th>{% trans %}
\t\t\t\t\t<i class=\"fas fa-file-export\" title=\"publié ?\"></i>{% endtrans %}</th>
\t\t\t\t<th>{% trans %}Catégorie{% endtrans %}</th>
\t\t\t\t<th>{% trans %}Actions{% endtrans %}</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for content in contents %}
\t\t\t\t<tr class=\"gradeA {% if loop.index is even %} even {% else %} odd {% endif %}\">
\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t<img class=\"toggle-img\" src=\"{{asset('build/images/dashboard/advanced-table/details_open.png', 'app')}}\">
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"center\">{{content.id}}</td>
\t\t\t\t\t<td class=\"center\" title=\"{{content.updatedAt|date(\" d/m/y à h:i\")}}\">{{content.updatedAt| date(\"d/m/Y\")}}</td>
\t\t\t\t\t<td class=\"center\" title=\"{{content.createdAt|date(\" d/m/y à h:i\")}}\">{{content.createdAt| date(\"d/m/Y\")}}</td>
\t\t\t\t\t<td class=\"center\">{{content.type.label}}</td>
\t\t\t\t\t<td title=\"{{content.title}}\">{{content.title | u.truncate(50, ' ...')}}</td>
\t\t\t\t\t<td title=\"{{content.description}}\">{{content.description | u.truncate(75, ' ...')}}</td>
\t\t\t\t\t<td class=\"center\">{{content.content}}</td>
\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t<span style=\"display:none\">{{content.private}}</span>
\t\t\t\t\t\t<input class=\"form-check-input\" value=\"content.private\" type=\"checkbox\" name=\"private\" id=\"private_{{ content.id }}\" data-id=\"{{ content.id }}\" {{ content.private ? 'checked' : null}}>
\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t<span style=\"display:none\">{{content.published}}</span>
\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"published\" id=\"published_{{ content.id }}\" data-id=\"{{ content.id }}\" {{ content.published ? 'checked' : null}}>
\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t{% for category in content.categories %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t{{category.label}}
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-center \">
\t\t\t\t\t<a href=\"{{ path('dashboard_content_edit', { slug: content.slug }) }}\" role=\"button\" aria-pressed=\"true\" alt=\"Modifier le contenu\" title=\"modifier\">
\t\t\t\t\t\t<i class=\"fas fa-edit fa-2x\"></i>
\t\t\t\t\t</a>

\t\t\t\t\t<i class=\"fas fa-trash fa-2x\" role=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal\" data-slug=\"{{ content.slug }}\" data-title=\"{{ content.title }}\" onclick=\"deleteModalConfirm({{ content.id }})\" id=\"deleteButton_{{ content.id}}\" aria-pressed=\"true\" title=\"Supprimer\" style=\"with:10em\"></i>
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t\t</div>
\t</div>
</section>

{% endblock %}

{% block js %}
\t{{ parent() }}
\t{{ encore_entry_script_tags('datatables') }}
{% endblock %}
", "dashboard/content/home.html.twig", "/home/jerkoder/dev_docs/projects/simplon_DWWM/symfony/devMemories/templates/dashboard/content/home.html.twig");
    }
}
