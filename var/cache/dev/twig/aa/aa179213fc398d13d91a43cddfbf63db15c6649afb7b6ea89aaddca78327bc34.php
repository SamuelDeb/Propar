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

/* accueil/accueil.html.twig */
class __TwigTemplate_babcf56321fa1bb4b59f89b92e2da6f10f3a4baece95f38bf45e0ef2b84ead45 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/accueil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "PROPAR
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"m-booked-bl-simple-41642\" style=\"margin-right:90%; > 
<div class=\"booked-wzs-160-110 weather-customize\" style=\"background-color:#137AE9;width:160px;\" id=\"width1\"> <div class=\"booked-wzs-160-110_in\"> <div class=\"booked-wzs-160-data\"> <div class=\"booked-wzs-160-left-img wrz-06\"></div> <div class=\"booked-wzs-160-right\"> <div class=\"booked-wzs-day-deck\"> <div class=\"booked-wzs-day-val\"> <div class=\"booked-wzs-day-number\"><span class=\"plus\">+</span>30</div> <div class=\"booked-wzs-day-dergee\"> <div class=\"booked-wzs-day-dergee-val\">&deg;</div> <div class=\"booked-wzs-day-dergee-name\">C</div> </div> </div> <div class=\"booked-wzs-day\"> <div class=\"booked-wzs-day-d\"><span class=\"plus\">+</span>33&deg;</div> <div class=\"booked-wzs-day-n\"><span class=\"plus\">+</span>19&deg;</div> </div> </div> <div class=\"booked-wzs-160-info\"> <div class=\"booked-wzs-160-city\">roubaix</div> <div class=\"booked-wzs-160-date\">Dimanche, 24</div> </div> </div> </div> <div class=\"booked-wzs-center\"><span class=\"booked-wzs-bottom-l\"> Prévisions sur 7 jours</span></div> </div> </div> </div><script type=\"text/javascript\"> var css_file=document.createElement(\"link\"); var widgetUrl = location.href; css_file.setAttribute(\"rel\",\"stylesheet\"); css_file.setAttribute(\"type\",\"text/css\"); css_file.setAttribute(\"href\",'https://s.bookcdn.com/css/w/booked-wzs-widget-160.css?v=0.0.1'); document.getElementsByTagName(\"head\")[0].appendChild(css_file); function setWidgetData_41642(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-bl-simple-41642'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } var widgetSrc = \"https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=18145;type=1;scode=2;ltid=3457;domid=581;anc_id=66706;countday=undefined;cmetric=1;wlangID=3;color=137AE9;wwidth=160;header_color=ffffff;text_color=333333;link_color=08488D;border_form=1;footer_color=ffffff;footer_text_color=333333;transparent=0;v=0.0.1\";widgetSrc += ';ref=' + widgetUrl;widgetSrc += ';rand_id=41642';var weatherBookedScript = document.createElement(\"script\"); weatherBookedScript.setAttribute(\"type\", \"text/javascript\"); weatherBookedScript.src = widgetSrc; document.body.appendChild(weatherBookedScript) </script><!-- weather widget end -->
\t<h1>
\t\tOpérations en cours</h1>
<div class=\"d-flex align-items-start\">

\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operation"]) || array_key_exists("operation", $context) ? $context["operation"] : (function () { throw new RuntimeError('Variable "operation" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ope"]) {
            // line 13
            echo "\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ope"], "IsActive", [], "any", false, false, false, 13), true))) {
                // line 14
                echo "

\t\t\t\t\t\t<div class=\"card shadow m-3 col-md-12 col-lg-4 col-xl-3\">
\t\t\t\t<div class=\"card-header py-3\">
\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-primary\">
\t\t\t\t\t\tClient :
\t\t\t\t\t\t";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ope"], "user", [], "any", false, false, false, 20), "html", null, true);
                echo "</h6>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\">Description:
\t\t\t\t\t</h5>
\t\t\t\t\t<p class=\"card-text\">";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ope"], "description", [], "any", false, false, false, 25), "html", null, true);
                echo "</p>
\t\t\t\t\t<p class=\"card-text\">type:
\t\t\t\t\t\t";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ope"], "type", [], "any", false, false, false, 27), "html", null, true);
                echo "</p>
\t\t\t\t<img src=\"assets/images/";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ope"], "image", [], "any", false, false, false, 28), "html", null, true);
                echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"card-footer text-light bg-dark\">Fait par :
\t\t\t\t\t";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ope"], "user", [], "any", false, false, false, 31), "html", null, true);
                echo "
\t\t\t\t</div>

\t\t\t</div>
\t\t\t
\t\t\t";
            }
            // line 37
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ope'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t</div>
</div></div></div>

<h1>Opérations terminées</h1>
<div class=\"d-flex align-items-start\">

\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operation"]) || array_key_exists("operation", $context) ? $context["operation"] : (function () { throw new RuntimeError('Variable "operation" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ope"]) {
            // line 45
            echo "\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ope"], "IsActive", [], "any", false, false, false, 45), false))) {
                // line 46
                echo "

\t\t\t\t\t\t<div class=\"card shadow m-3 col-md-12 col-lg-4 col-xl-3\">
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
\t\t\t
\t\t\t";
            }
            // line 69
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ope'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t</div>
</div></div></div><div id=\"carouselExampleSlidesOnly\" class=\"carousel slide w-75  mx-auto \" style=\"margin-left:20%; margin-top:2%;\" data-bs-ride=\"carousel\"><div class=\"carousel-inner\" style=\"margin-left:13%; margin-bottom:5%\">
<div class=\"carousel-item active w-75\">
\t<img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/images_source/img1.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
</div>
<div class=\"carousel-item w-75 \">
\t<img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/images_source/img3.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
</div></div></div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 76,  216 => 73,  211 => 70,  205 => 69,  196 => 63,  190 => 60,  186 => 59,  181 => 57,  173 => 52,  165 => 46,  162 => 45,  158 => 44,  150 => 38,  144 => 37,  135 => 31,  129 => 28,  125 => 27,  120 => 25,  112 => 20,  104 => 14,  101 => 13,  97 => 12,  89 => 6,  79 => 5,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}PROPAR
{% endblock %}

{% block body %}
<div id=\"m-booked-bl-simple-41642\" style=\"margin-right:90%; > 
<div class=\"booked-wzs-160-110 weather-customize\" style=\"background-color:#137AE9;width:160px;\" id=\"width1\"> <div class=\"booked-wzs-160-110_in\"> <div class=\"booked-wzs-160-data\"> <div class=\"booked-wzs-160-left-img wrz-06\"></div> <div class=\"booked-wzs-160-right\"> <div class=\"booked-wzs-day-deck\"> <div class=\"booked-wzs-day-val\"> <div class=\"booked-wzs-day-number\"><span class=\"plus\">+</span>30</div> <div class=\"booked-wzs-day-dergee\"> <div class=\"booked-wzs-day-dergee-val\">&deg;</div> <div class=\"booked-wzs-day-dergee-name\">C</div> </div> </div> <div class=\"booked-wzs-day\"> <div class=\"booked-wzs-day-d\"><span class=\"plus\">+</span>33&deg;</div> <div class=\"booked-wzs-day-n\"><span class=\"plus\">+</span>19&deg;</div> </div> </div> <div class=\"booked-wzs-160-info\"> <div class=\"booked-wzs-160-city\">roubaix</div> <div class=\"booked-wzs-160-date\">Dimanche, 24</div> </div> </div> </div> <div class=\"booked-wzs-center\"><span class=\"booked-wzs-bottom-l\"> Prévisions sur 7 jours</span></div> </div> </div> </div><script type=\"text/javascript\"> var css_file=document.createElement(\"link\"); var widgetUrl = location.href; css_file.setAttribute(\"rel\",\"stylesheet\"); css_file.setAttribute(\"type\",\"text/css\"); css_file.setAttribute(\"href\",'https://s.bookcdn.com/css/w/booked-wzs-widget-160.css?v=0.0.1'); document.getElementsByTagName(\"head\")[0].appendChild(css_file); function setWidgetData_41642(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-bl-simple-41642'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } var widgetSrc = \"https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=18145;type=1;scode=2;ltid=3457;domid=581;anc_id=66706;countday=undefined;cmetric=1;wlangID=3;color=137AE9;wwidth=160;header_color=ffffff;text_color=333333;link_color=08488D;border_form=1;footer_color=ffffff;footer_text_color=333333;transparent=0;v=0.0.1\";widgetSrc += ';ref=' + widgetUrl;widgetSrc += ';rand_id=41642';var weatherBookedScript = document.createElement(\"script\"); weatherBookedScript.setAttribute(\"type\", \"text/javascript\"); weatherBookedScript.src = widgetSrc; document.body.appendChild(weatherBookedScript) </script><!-- weather widget end -->
\t<h1>
\t\tOpérations en cours</h1>
<div class=\"d-flex align-items-start\">

\t\t{% for ope in operation %}
\t\t\t{% if ope.IsActive == true %}


\t\t\t\t\t\t<div class=\"card shadow m-3 col-md-12 col-lg-4 col-xl-3\">
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
\t\t\t
\t\t\t{% endif %}
\t\t{% endfor %}
\t</div>
</div></div></div>

<h1>Opérations terminées</h1>
<div class=\"d-flex align-items-start\">

\t\t{% for ope in operation %}
\t\t\t{% if ope.IsActive == false %}


\t\t\t\t\t\t<div class=\"card shadow m-3 col-md-12 col-lg-4 col-xl-3\">
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
\t\t\t
\t\t\t{% endif %}
\t\t{% endfor %}
\t</div>
</div></div></div><div id=\"carouselExampleSlidesOnly\" class=\"carousel slide w-75  mx-auto \" style=\"margin-left:20%; margin-top:2%;\" data-bs-ride=\"carousel\"><div class=\"carousel-inner\" style=\"margin-left:13%; margin-bottom:5%\">
<div class=\"carousel-item active w-75\">
\t<img src=\"{{ asset('assets/images/images_source/img1.jpg') }}\" class=\"d-block w-100\" alt=\"...\">
</div>
<div class=\"carousel-item w-75 \">
\t<img src=\"{{ asset('assets/images/images_source/img3.jpg') }}\" class=\"d-block w-100\" alt=\"...\">
</div></div></div>{% endblock %}
", "accueil/accueil.html.twig", "D:\\projet symfony\\projet_symfony_propar\\templates\\accueil\\accueil.html.twig");
    }
}
