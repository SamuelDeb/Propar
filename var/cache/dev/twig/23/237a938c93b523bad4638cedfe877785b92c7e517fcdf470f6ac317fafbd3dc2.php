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

/* ajout_operation/ajouterOperation.html.twig */
class __TwigTemplate_f1e93860b080be6d9facec88c6003e9d217c26c8455d57381db63f75baf7bb04 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ajout_operation/ajouterOperation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ajout_operation/ajouterOperation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ajout_operation/ajouterOperation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout Opération";
        
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
 <head>
    <meta charset=\"UTF-8\">
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\">
    <script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>
    <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
    
</head>
<body>
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "    <div class=\"alert alert-success\">
                ";
            // line 18
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            echo "    <div class=\"alert alert-warning\">
                ";
            // line 23
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
  
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)) {
            // line 28
            echo "<div class=\"bg-white p-5 contact-form\" style=\"margin-left:30%; margin-right:30%;margin-top:5%; margin-bottom:15%\">
    <div class=\"form-group\">
";
            // line 30
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_start');
            echo "
    ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "type", [], "any", false, false, false, 31), 'row', ["attr" => ["class" => "form-control"]]);
            echo "
</div>
<div class=\"form-group\">
    ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "prix", [], "any", false, false, false, 34), 'row', ["attr" => ["class" => "form-control"]]);
            echo "
</div>
<div class=\"form-group\">
    ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), 'row', ["attr" => ["class" => "form-control"]]);
            echo "
</div>
<div class=\"form-group\">
    ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "prenom", [], "any", false, false, false, 40), 'row', ["attr" => ["class" => "form-control"]]);
            echo "
</div>
     <label for=\"adresse\" class=\"control-label\">Adresse</label>
          <input type=\"text\" class=\"form-control\" id=\"adresse\" name=\"adresse\" autocomplete=\"off\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" />
          <div class=\"address-feedback\" style=\"z-index:1100;\">
      </div>
   
        <div class=\"form-group\">
                  <div class=\"form-row\">
        <div class=\"form-group col-sm-3\">
          <label for=\"cp\" class=\"control-label\">Code Postal</label>
          <input type=\"text\" class=\"form-control\" id=\"cp\" name=\"cp\" />
        </div>
        <div class=\"form-group col-sm-6\">
          <label for=\"ville\">Ville</label>
          <input type=\"text\" class=\"form-control\" id=\"ville\" name=\"ville\" required />
        </div>
    ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "description", [], "any", false, false, false, 57), 'row', ["attr" => ["class" => "form-control"]]);
            echo "
</div>
<div class=\"form-group\">
    ";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "image", [], "any", false, false, false, 60), 'row', ["attr" => ["class" => "form-control"]]);
            echo "
</div>
<div class=\"form-group\">
  <div class=\"form-group col-sm-6\">
          <label for=\"user\">Utilisateur</label>
          <input type=\"text\" class=\"form-control\" id=\"user\" name=\"user\" value=";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "nom", [], "any", false, false, false, 65), "html", null, true);
            echo " required />
        </div>
</div>
<div class=\"form-group\">
    <input type=\"submit\" value=\"Ajouter l'opération\" class=\"btn btn-primary py-3 px-5 \">
</div>
";
            // line 71
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form_end');
            echo "
</div>
</div>
          </div>
        </div>

</body>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "
<script>

 var currentFocus = -1;
var fetchTrigger = 0;

function setActive() {
  var nbVal = \$(\"div.address-feedback a\").length;

  if (!nbVal)
    return false;

  \$('div.address-feedback a').removeClass(\"active\");

  currentFocus = ((currentFocus + nbVal - 1) % nbVal) + 1;

  \$('div.address-feedback a:nth-child(' + currentFocus + ')').addClass(\"active\");
}


\$('div.address-feedback').on(\"mousedown\", \"a\", function(event) {

  event.preventDefault();
  event.stopPropagation();

  \$(\"#adresse\").val(\$(this).attr(\"data-name\"));
  \$(\"#cp\").val(\$(this).attr(\"data-postcode\"));
  \$(\"#ville\").val(\$(this).attr(\"data-city\"));

  \$('.address-feedback').empty();
});


\$(\"#adresse\").keyup(function(event) {

  event.preventDefault();
  event.stopPropagation();

  if (event.keyCode === 38) { 
    currentFocus--;
    setActive();
    return false;
  } else if (event.keyCode === 40) { 
    currentFocus++;
    setActive();
    return false;
  } else if (event.keyCode === 13) { 
    if (currentFocus > 0) {
    
      \$(\"div.address-feedback a:nth-child(\" + currentFocus + \")\").mousedown();
    }
    return false;
  }


  \$('div.address-feedback a').removeClass(\"active\");
  currentFocus = 0;

 
  clearTimeout(fetchTrigger);


  let rue = \$(\"#adresse\").val();
  if (rue.length === 0) {
    \$('.address-feedback').empty();
    return false;
  }


  fetchTrigger = setTimeout(function() {

    \$.get('https://api-adresse.data.gouv.fr/search/', {
      q: rue,
      limit: 15,
      autocomplete: 1
    }, function(data, status, xhr) {
      let liste = \"\";
      \$.each(data.features, function(i, obj) {
      
        let cooladdress = obj.properties.name + \" \" + obj.properties.postcode + \" <strong>\" + obj.properties.city + \"</strong>\";
        liste += '<a class=\"list-group-item list-group-item-action py-1\" href=\"#\" name=\"' + obj.properties.label + '\" data-name=\"' + obj.properties.name + '\" data-postcode=\"' + obj.properties.postcode + '\" data-city=\"' + obj.properties.city + '\">' + cooladdress + '</a>';
      });
      \$('.address-feedback').html(liste);
    }, 'json');
  }, 500);
});


\$(\"#adresse\").focusout(function() {
  \$('.address-feedback').empty();
});

\$(\"#adresse\").keydown(function(e) {
  if (\$(\"div.address-feedback a\").length > 0 && (e.keyCode === 38 || e.keyCode === 40 || e.keyCode === 13)) {
    e.preventDefault();
  }
});

</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ajout_operation/ajouterOperation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 82,  223 => 81,  204 => 71,  195 => 65,  187 => 60,  181 => 57,  161 => 40,  155 => 37,  149 => 34,  143 => 31,  139 => 30,  135 => 28,  133 => 27,  123 => 23,  120 => 22,  116 => 21,  107 => 18,  104 => 17,  100 => 16,  89 => 7,  79 => 6,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Ajout Opération{% endblock %}

{% block body %}

 <head>
    <meta charset=\"UTF-8\">
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\">
    <script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>
    <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
    
</head>
<body>
{% for message in app.flashes('success') %}
    <div class=\"alert alert-success\">
                {{ message }}
            </div>
{% endfor %}
{% for message in app.flashes('error') %}
    <div class=\"alert alert-warning\">
                {{ message }}
            </div>
  
{% endfor %}
{% if app.user %}
<div class=\"bg-white p-5 contact-form\" style=\"margin-left:30%; margin-right:30%;margin-top:5%; margin-bottom:15%\">
    <div class=\"form-group\">
{{ form_start(form) }}
    {{ form_row(form.type, {'attr': {'class': 'form-control'}}) }}
</div>
<div class=\"form-group\">
    {{ form_row(form.prix, {'attr': {'class': 'form-control'}}) }}
</div>
<div class=\"form-group\">
    {{ form_row(form.nom, {'attr': {'class': 'form-control'}}) }}
</div>
<div class=\"form-group\">
    {{ form_row(form.prenom, {'attr': {'class': 'form-control'}}) }}
</div>
     <label for=\"adresse\" class=\"control-label\">Adresse</label>
          <input type=\"text\" class=\"form-control\" id=\"adresse\" name=\"adresse\" autocomplete=\"off\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" />
          <div class=\"address-feedback\" style=\"z-index:1100;\">
      </div>
   
        <div class=\"form-group\">
                  <div class=\"form-row\">
        <div class=\"form-group col-sm-3\">
          <label for=\"cp\" class=\"control-label\">Code Postal</label>
          <input type=\"text\" class=\"form-control\" id=\"cp\" name=\"cp\" />
        </div>
        <div class=\"form-group col-sm-6\">
          <label for=\"ville\">Ville</label>
          <input type=\"text\" class=\"form-control\" id=\"ville\" name=\"ville\" required />
        </div>
    {{ form_row(form.description, {'attr': {'class': 'form-control'}}) }}
</div>
<div class=\"form-group\">
    {{ form_row(form.image, {'attr': {'class': 'form-control'}}) }}
</div>
<div class=\"form-group\">
  <div class=\"form-group col-sm-6\">
          <label for=\"user\">Utilisateur</label>
          <input type=\"text\" class=\"form-control\" id=\"user\" name=\"user\" value={{app.user.nom}} required />
        </div>
</div>
<div class=\"form-group\">
    <input type=\"submit\" value=\"Ajouter l'opération\" class=\"btn btn-primary py-3 px-5 \">
</div>
{{ form_end(form) }}
</div>
</div>
          </div>
        </div>

</body>
{% endif %}
{% endblock %}

{% block javascripts %}

<script>

 var currentFocus = -1;
var fetchTrigger = 0;

function setActive() {
  var nbVal = \$(\"div.address-feedback a\").length;

  if (!nbVal)
    return false;

  \$('div.address-feedback a').removeClass(\"active\");

  currentFocus = ((currentFocus + nbVal - 1) % nbVal) + 1;

  \$('div.address-feedback a:nth-child(' + currentFocus + ')').addClass(\"active\");
}


\$('div.address-feedback').on(\"mousedown\", \"a\", function(event) {

  event.preventDefault();
  event.stopPropagation();

  \$(\"#adresse\").val(\$(this).attr(\"data-name\"));
  \$(\"#cp\").val(\$(this).attr(\"data-postcode\"));
  \$(\"#ville\").val(\$(this).attr(\"data-city\"));

  \$('.address-feedback').empty();
});


\$(\"#adresse\").keyup(function(event) {

  event.preventDefault();
  event.stopPropagation();

  if (event.keyCode === 38) { 
    currentFocus--;
    setActive();
    return false;
  } else if (event.keyCode === 40) { 
    currentFocus++;
    setActive();
    return false;
  } else if (event.keyCode === 13) { 
    if (currentFocus > 0) {
    
      \$(\"div.address-feedback a:nth-child(\" + currentFocus + \")\").mousedown();
    }
    return false;
  }


  \$('div.address-feedback a').removeClass(\"active\");
  currentFocus = 0;

 
  clearTimeout(fetchTrigger);


  let rue = \$(\"#adresse\").val();
  if (rue.length === 0) {
    \$('.address-feedback').empty();
    return false;
  }


  fetchTrigger = setTimeout(function() {

    \$.get('https://api-adresse.data.gouv.fr/search/', {
      q: rue,
      limit: 15,
      autocomplete: 1
    }, function(data, status, xhr) {
      let liste = \"\";
      \$.each(data.features, function(i, obj) {
      
        let cooladdress = obj.properties.name + \" \" + obj.properties.postcode + \" <strong>\" + obj.properties.city + \"</strong>\";
        liste += '<a class=\"list-group-item list-group-item-action py-1\" href=\"#\" name=\"' + obj.properties.label + '\" data-name=\"' + obj.properties.name + '\" data-postcode=\"' + obj.properties.postcode + '\" data-city=\"' + obj.properties.city + '\">' + cooladdress + '</a>';
      });
      \$('.address-feedback').html(liste);
    }, 'json');
  }, 500);
});


\$(\"#adresse\").focusout(function() {
  \$('.address-feedback').empty();
});

\$(\"#adresse\").keydown(function(e) {
  if (\$(\"div.address-feedback a\").length > 0 && (e.keyCode === 38 || e.keyCode === 40 || e.keyCode === 13)) {
    e.preventDefault();
  }
});

</script>

{% endblock %}
", "ajout_operation/ajouterOperation.html.twig", "D:\\projet symfony\\projet_symfony_propar\\templates\\ajout_operation\\ajouterOperation.html.twig");
    }
}
