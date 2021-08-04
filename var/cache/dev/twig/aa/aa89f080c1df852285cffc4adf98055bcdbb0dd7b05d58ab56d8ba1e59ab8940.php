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

/* dashboard/content/_contentTable.html.twig */
class __TwigTemplate_9ee591d619dd1214c16d8ca827e743d675f4f4648eef24b0d8bac340c456f880 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/content/_contentTable.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/content/_contentTable.html.twig"));

        // line 2
        echo "
";
        // line 67
        echo "
<script>

    ";
        // line 98
        echo "</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/content/_contentTable.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 98,  46 => 67,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/dashboard/content/_contentTable.html.twig #}

{# <div class=\"content-panel\">
\t<div class=\"adv-table\">
\t\t<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display table table-bordered\" id=\"hidden-table-info\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"text-center\" title=\"Plus d'infos\"><i class=\"fas fa-info-circle\"></i></th>
\t\t\t\t\t<th style>{% trans %}Id{% endtrans %}</th>
\t\t\t\t\t<th style>{% trans %}Date{% endtrans %}</th>
\t\t\t\t\t<th style>{% trans %}Date{% endtrans %}</th>
\t\t\t\t\t<th style>{% trans %}Type{% endtrans %}</th>
\t\t\t\t\t<th>{% trans %}Titre{% endtrans %}</th>
\t\t\t\t\t<th>{% trans %}Description{% endtrans %}</th>
\t\t\t\t\t<th>{% trans %}Contenu{% endtrans %}</th>
\t\t\t\t\t<th><i class=\"fas fa-user-lock\" title=\"Privé ?\"></i></th>
\t\t\t\t\t<th>{% trans %}<i class=\"fas fa-file-export\" title=\"publié ?\"></i>{% endtrans %}</th>
\t\t\t\t\t<th>{% trans %}Catégorie{% endtrans %}</th>
\t\t\t\t\t<th>{% trans %}Actions{% endtrans %}</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for content in contents %}
\t\t\t\t\t<tr class=\"gradeA {% if loop.index is even %} even {% else %} odd {% endif %}\">
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<img class=\"toggle-img\" src=\"{{asset('build/images/dashboard/advanced-table/details_open.png', 'app')}}\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"center\">{{content.id}}</td>
\t\t\t\t\t\t<td class=\"center\" title=\"{{content.updatedAt|date(\"d/m/Y à H:i\")}}\">{{content.updatedAt| date(\"d/m/Y\")}}</td>
\t\t\t\t\t\t<td class=\"center\" title=\"{{content.createdAt|date(\"d/m/Y à H:i\")}}\">{{content.createdAt| date(\"d/m/Y\")}}</td>
\t\t\t\t\t\t<td class=\"center\">{{content.type.label}}</td>
\t\t\t\t\t\t<td title=\"{{content.title}}\">{{content.title | u.truncate(50, ' ...')}}</td>
\t\t\t\t\t\t<td title=\"{{content.description}}\">{{content.description | u.truncate(75, ' ...')}}</td>
\t\t\t\t\t\t<td class=\"center\">{{content.content}}</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t<span style=\"display:none\">{{content.private}}</span>
\t\t\t\t\t\t\t\t<input class=\"form-check-input\" value=\"content.private\" type=\"checkbox\" name=\"private\" id=\"private_{{ content.id }}\" data-id=\"{{ content.id }}\" {{ content.private ? 'checked' : null}}>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<span style=\"display:none\">{{content.published}}</span>
\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"published\" id=\"published_{{ content.id }}\" data-id=\"{{ content.id }}\" {{ content.published ? 'checked' : null}}>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t{% for category in content.categories %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t{{category.label}}
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center \">
\t\t\t\t\t\t\t<a href=\"{{ path('dashboard_content_edit', { slug: content.slug }) }}\" role=\"button\" aria-pressed=\"true\" alt=\"Modifier le contenu\" title=\"modifier\"><i class=\"fas fa-edit fa-2x\"></i></a>

\t\t\t\t\t\t\t<i class=\"fas fa-trash fa-2x\" role=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal\" data-slug=\"{{ content.slug }}\"  data-title=\"{{ content.title }}\" onclick=\"deleteModalConfirm({{ content.id }})\" id=\"deleteButton_{{ content.id}}\" aria-pressed=\"true\" title=\"Supprimer\" style=\"with:10em\"></i></a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</div>
</div> #}

<script>

    {# // Set the modal content
    function deleteModalConfirm(id) {
        const el = document.getElementById(`deleteButton_\${id}`);
        const message = `Êtes-vous sur de vouloir supprimer le contenu contenant le titre <b>\${el.dataset.title}</b> ?`
        document.getElementById('modal-title').innerHTML = \"Suppression d'un contenu\" ;
        document.getElementById('modal-content').innerHTML = message;
        document.getElementById('delete-confirm').href = `/dashboard/contents/delete/\${el.dataset.slug}`
    }

\twindow.onload = () => {
\t\tlet privateCheckbox = document.querySelectorAll(\"[id*=private_]\")
\t\tfor(let checkbox of privateCheckbox) {
\t\t\tcheckbox.addEventListener(\"click\", function(){
\t\t\t\tlet xmlhttp = new XMLHttpRequest
\t\t\t\txmlhttp.open(\"get\", `/dashboard/contents/switchPrivate/\${this.dataset.id}`)
\t\t\t\txmlhttp.send()
\t\t\t})
\t\t}

\t\tlet publishedCheckbox = document.querySelectorAll(\"[id*=published_]\")
\t\tfor(let checkbox of publishedCheckbox) {
\t\t\tcheckbox.addEventListener(\"click\", function(){
\t\t\t\tlet xmlhttp = new XMLHttpRequest
\t\t\t\txmlhttp.open(\"get\", `/dashboard/contents/switchPublished/\${this.dataset.id}`)
\t\t\t\txmlhttp.send()
\t\t\t})
\t\t}
\t} #}
</script>
", "dashboard/content/_contentTable.html.twig", "/home/jerkoder/dev_docs/projects/simplon_DWWM/symfony/devMemories/templates/dashboard/content/_contentTable.html.twig");
    }
}
