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

/* lister_operations/listerOperations.html.twig */
class __TwigTemplate_4028bf769c9488f9b730598264838e1566b35a660e30b1931ddcf5fe52df5c44 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lister_operations/listerOperations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lister_operations/listerOperations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lister_operations/listerOperations.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste de vos opérations
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<h2>Liste de vos opérations :
\t\t";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "prenom", [], "any", false, false, false, 9), "html", null, true);
        echo ".</h2>
\t<h1>Opérations en cours</h1>
\t<div class=\"d-flex align-items-start\">

\t\t";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)) {
            // line 14
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["operation"]) || array_key_exists("operation", $context) ? $context["operation"] : (function () { throw new RuntimeError('Variable "operation" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ope"]) {
                // line 15
                echo "\t\t\t\t";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ope"], "IsActive", [], "any", false, false, false, 15), true))) {
                    // line 16
                    echo "\t\t\t\t\t";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ope"], "user", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16)))) {
                        // line 17
                        echo "<div class=\"card shadow m-3 col-md-12 col-lg-4 col-xl-3\">
\t\t\t\t<div class=\"card-header py-3\">
\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-primary\">
\t\t\t\t\t\tClient :
\t\t\t\t\t\t";
                        // line 21
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ope"], "user", [], "any", false, false, false, 21), "html", null, true);
                        echo "</h6>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\">Description:
\t\t\t\t\t</h5>
\t\t\t\t\t<p class=\"card-text\">";
                        // line 26
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ope"], "description", [], "any", false, false, false, 26), "html", null, true);
                        echo "</p>
\t\t\t\t\t<p class=\"card-text\">type:
\t\t\t\t\t\t";
                        // line 28
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ope"], "type", [], "any", false, false, false, 28), "html", null, true);
                        echo "</p>
\t\t\t\t<img src=\"assets/images/";
                        // line 29
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ope"], "image", [], "any", false, false, false, 29), "html", null, true);
                        echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"card-footer text-light bg-dark\">Fait par :
\t\t\t\t\t";
                        // line 32
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ope"], "user", [], "any", false, false, false, 32), "html", null, true);
                        echo "
\t\t\t\t</div>
\t\t\t<a class=\"btn btn-error my-2 my-sm-0\" href=\"";
                        // line 34
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("terminerOperation", ["id" => twig_get_attribute($this->env, $this->source, $context["ope"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                        echo "\" type=\"submit\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/images_source/task-7.svg"), "html", null, true);
                        echo "\" alt=\"terminer opération\" width=\"50px\">Terminer l'opération</a>
\t\t\t</div>

\t\t\t\t\t";
                    }
                    // line 38
                    echo "\t\t\t\t";
                }
                // line 39
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ope'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t";
        }
        // line 41
        echo "\t</div>
</div></div><h1>
Opérations terminées</h1>";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43)) {
            // line 44
            echo "
";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["operation"]) || array_key_exists("operation", $context) ? $context["operation"] : (function () { throw new RuntimeError('Variable "operation" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ope"]) {
                // line 46
                echo "\t";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ope"], "IsActive", [], "any", false, false, false, 46), false))) {
                    // line 47
                    echo "\t\t";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ope"], "user", [], "any", false, false, false, 47), twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47)))) {
                        // line 48
                        echo "\t\t\t<div class=\"card shadow m-3 col-md-12 col-lg-4 col-xl-3\">
\t\t\t\t<div class=\"card-header py-3\">
\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-primary\">
\t\t\t\t\t\tClient :
\t\t\t\t\t\t";
                        // line 52
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ope"], "user", [], "any", false, false, false, 52), "html", null, true);
                        echo "</h6>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\">Description:
\t\t\t\t\t</h5>
\t\t\t\t\t<p class=\"card-text\">";
                        // line 57
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ope"], "description", [], "any", false, false, false, 57), "html", null, true);
                        echo "</p>
\t\t\t\t\t<p class=\"card-text\">type:
\t\t\t\t\t\t";
                        // line 59
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ope"], "type", [], "any", false, false, false, 59), "html", null, true);
                        echo "</p>
\t\t\t\t<img src=\"assets/images/";
                        // line 60
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ope"], "image", [], "any", false, false, false, 60), "html", null, true);
                        echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"card-footer text-light bg-dark\">Fait par :
\t\t\t\t\t";
                        // line 63
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ope"], "user", [], "any", false, false, false, 63), "html", null, true);
                        echo "
\t\t\t\t</div>

\t\t\t</div>
\t\t";
                    }
                    // line 68
                    echo "\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ope'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "lister_operations/listerOperations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 68,  216 => 63,  210 => 60,  206 => 59,  201 => 57,  193 => 52,  187 => 48,  184 => 47,  181 => 46,  177 => 45,  174 => 44,  172 => 43,  168 => 41,  165 => 40,  159 => 39,  156 => 38,  147 => 34,  142 => 32,  136 => 29,  132 => 28,  127 => 26,  119 => 21,  113 => 17,  110 => 16,  107 => 15,  102 => 14,  100 => 13,  93 => 9,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste de vos opérations
{% endblock %}

{% block body %}

\t<h2>Liste de vos opérations :
\t\t{{app.user.prenom}}.</h2>
\t<h1>Opérations en cours</h1>
\t<div class=\"d-flex align-items-start\">

\t\t{% if app.user %}
\t\t\t{% for ope in operation %}
\t\t\t\t{% if ope.IsActive == true %}
\t\t\t\t\t{% if ope.user == app.user %}
<div class=\"card shadow m-3 col-md-12 col-lg-4 col-xl-3\">
\t\t\t\t<div class=\"card-header py-3\">
\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-primary\">
\t\t\t\t\t\tClient :
\t\t\t\t\t\t{{ope.user}}</h6>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\">Description:
\t\t\t\t\t</h5>
\t\t\t\t\t<p class=\"card-text\">{{ope.description}}</p>
\t\t\t\t\t<p class=\"card-text\">type:
\t\t\t\t\t\t{{ope.type}}</p>
\t\t\t\t<img src=\"assets/images/{{ope.image}}\">
\t\t\t\t</div>
\t\t\t\t<div class=\"card-footer text-light bg-dark\">Fait par :
\t\t\t\t\t{{ope.user}}
\t\t\t\t</div>
\t\t\t<a class=\"btn btn-error my-2 my-sm-0\" href=\"{{path('terminerOperation' , { 'id' : ope.id })}}\" type=\"submit\"><img src=\"{{ asset('assets/images/images_source/task-7.svg')}}\" alt=\"terminer opération\" width=\"50px\">Terminer l'opération</a>
\t\t\t</div>

\t\t\t\t\t{% endif %}
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t{% endif %}
\t</div>
</div></div><h1>
Opérations terminées</h1>{% if app.user %}

{% for ope in operation %}
\t{% if ope.IsActive == false %}
\t\t{% if ope.user == app.user %}
\t\t\t<div class=\"card shadow m-3 col-md-12 col-lg-4 col-xl-3\">
\t\t\t\t<div class=\"card-header py-3\">
\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-primary\">
\t\t\t\t\t\tClient :
\t\t\t\t\t\t{{ope.user}}</h6>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\">Description:
\t\t\t\t\t</h5>
\t\t\t\t\t<p class=\"card-text\">{{ope.description}}</p>
\t\t\t\t\t<p class=\"card-text\">type:
\t\t\t\t\t\t{{ope.type}}</p>
\t\t\t\t<img src=\"assets/images/{{ope.image}}\">
\t\t\t\t</div>
\t\t\t\t<div class=\"card-footer text-light bg-dark\">Fait par :
\t\t\t\t\t{{ope.user}}
\t\t\t\t</div>

\t\t\t</div>
\t\t{% endif %}
\t{% endif %}
{% endfor %}{% endif %}{% endblock %}
", "lister_operations/listerOperations.html.twig", "D:\\projet symfony\\projet_symfony_propar\\templates\\lister_operations\\listerOperations.html.twig");
    }
}
