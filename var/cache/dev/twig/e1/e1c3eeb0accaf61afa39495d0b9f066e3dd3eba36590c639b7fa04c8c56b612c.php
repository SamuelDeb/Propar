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

/* chiffre_affaire/chiffreAffaire.html.twig */
class __TwigTemplate_353bedb035543406978891dfab241bdc161f1683049507e0b72545f7b75aa766 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chiffre_affaire/chiffreAffaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chiffre_affaire/chiffreAffaire.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chiffre_affaire/chiffreAffaire.html.twig", 1);
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

        // line 4
        echo "Chiffre d'affaire";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

<!-- script template -->
<script src=\"../chiffre_affaire/jquery.min.js\"></script> 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
  <div class=\"card shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Les chiffres", [], "messages");
        echo " </h6>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row mb-4\">
                        
                            <!-- Petite taches terminées -->
                            <div class=\"col\">
                                <div class=\"card border-left-success shadow h-100 py-2\">
                                    <div class=\"card-body\">
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col mr-2\">
                                                <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Petite tâches terminées", [], "messages");
        echo " 
                                                </div>
                                                <div class=\"row no-gutters align-items-center\">
                                                    <div class=\"col-auto\">
                                                        <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["total_Petite"]) || array_key_exists("total_Petite", $context) ? $context["total_Petite"] : (function () { throw new RuntimeError('Variable "total_Petite" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "</div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                             <div class=\"col-auto\">
                                                <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Moyenne taches terminées -->
                            <div class=\"col\">
                                <div class=\"card border-left-warning shadow h-100 py-2\">
                                    <div class=\"card-body\">
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col mr-2\">
                                                <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Moyenne tâches terminées", [], "messages");
        echo " 
                                                </div>
                                                <div class=\"row no-gutters align-items-center\">
                                                    <div class=\"col-auto\">
                                                        <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["total_Moyenne"]) || array_key_exists("total_Moyenne", $context) ? $context["total_Moyenne"] : (function () { throw new RuntimeError('Variable "total_Moyenne" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "</div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class=\"col-auto\">
                                                <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Grande taches terminées -->
                            <div class=\"col\">
                                <div class=\"card border-left-danger shadow h-100 py-2\">
                                    <div class=\"card-body\">
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col mr-2\">
                                                <div class=\"text-xs font-weight-bold text-danger text-uppercase mb-1\">";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Grande tâches terminées", [], "messages");
        echo " 
                                                </div>
                                                <div class=\"row no-gutters align-items-center\">
                                                    <div class=\"col-auto\">
                                                        <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["total_Grande"]) || array_key_exists("total_Grande", $context) ? $context["total_Grande"] : (function () { throw new RuntimeError('Variable "total_Grande" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "</div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class=\"col-auto\">
                                                <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row mb-4\">
                            <!-- Earnings (Annual) Card Example -->
                            <div class=\"col\">
                                <div class=\"card border-left-success shadow h-100 py-2\">
                                    <div class=\"card-body\">
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col mr-2\">
                                                <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                                   ";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total petite tâche", [], "messages");
        echo " </div>
                                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["total_Petite"]) || array_key_exists("total_Petite", $context) ? $context["total_Petite"] : (function () { throw new RuntimeError('Variable "total_Petite" does not exist.', 100, $this->source); })()), "html", null, true);
        echo " €</div>
                                            </div>
                                            <div class=\"col-auto\">
                                                <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Earnings (Annual) Card Example -->
                            <div class=\"col\">
                                <div class=\"card border-left-warning shadow h-100 py-2\">
                                    <div class=\"card-body\">
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col mr-2\">
                                                <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                                   ";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total moyenne tâche", [], "messages");
        echo " </div>
                                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["total_Moyenne"]) || array_key_exists("total_Moyenne", $context) ? $context["total_Moyenne"] : (function () { throw new RuntimeError('Variable "total_Moyenne" does not exist.', 119, $this->source); })()), "html", null, true);
        echo " €</div>
                                            </div>
                                            <div class=\"col-auto\">
                                                <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Earnings (Annual) Card Example -->
                            <div class=\"col\">
                                <div class=\"card border-left-danger shadow h-100 py-2\">
                                    <div class=\"card-body\">
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col mr-2\">
                                                <div class=\"text-xs font-weight-bold text-danger text-uppercase mb-1\">
                                                   ";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total grande tâche", [], "messages");
        echo " </div>
                                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["total_Grande"]) || array_key_exists("total_Grande", $context) ? $context["total_Grande"] : (function () { throw new RuntimeError('Variable "total_Grande" does not exist.', 138, $this->source); })()), "html", null, true);
        echo " €</div>
                                            </div>
                                            <div class=\"col-auto\">
                                                <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                            <!-- Earnings (Annual) Card Example -->
                            <div class=\"col\">
                                <div class=\"card border-left-info shadow h-100 py-2\">
                                    <div class=\"card-body\">
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col mr-2\">
                                                <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">
                                                   ";
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Chiffre d'Affaire", [], "messages");
        echo " </div>
                                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["Total_Opération"]) || array_key_exists("Total_Opération", $context) ? $context["Total_Opération"] : (function () { throw new RuntimeError('Variable "Total_Opération" does not exist.', 158, $this->source); })()), "html", null, true);
        echo " €</div>
                                            </div>
                                            <div class=\"col-auto\">
                                                <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                </div>



            </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "chiffre_affaire/chiffreAffaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 158,  300 => 157,  278 => 138,  274 => 137,  253 => 119,  249 => 118,  228 => 100,  224 => 99,  199 => 77,  192 => 73,  170 => 54,  163 => 50,  141 => 31,  134 => 27,  120 => 16,  115 => 13,  105 => 12,  90 => 6,  80 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Chiffre d'affaire{% endblock %}
{% block javascripts %}
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

<!-- script template -->
<script src=\"../chiffre_affaire/jquery.min.js\"></script> 

{% endblock %}
{% block body %}

  <div class=\"card shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">{% trans %}Les chiffres{% endtrans %} </h6>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row mb-4\">
                        
                            <!-- Petite taches terminées -->
                            <div class=\"col\">
                                <div class=\"card border-left-success shadow h-100 py-2\">
                                    <div class=\"card-body\">
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col mr-2\">
                                                <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">{% trans %}Petite tâches terminées{% endtrans %} 
                                                </div>
                                                <div class=\"row no-gutters align-items-center\">
                                                    <div class=\"col-auto\">
                                                        <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">{{  total_Petite }}</div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                             <div class=\"col-auto\">
                                                <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Moyenne taches terminées -->
                            <div class=\"col\">
                                <div class=\"card border-left-warning shadow h-100 py-2\">
                                    <div class=\"card-body\">
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col mr-2\">
                                                <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">{% trans %}Moyenne tâches terminées{% endtrans %} 
                                                </div>
                                                <div class=\"row no-gutters align-items-center\">
                                                    <div class=\"col-auto\">
                                                        <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">{{ total_Moyenne }}</div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class=\"col-auto\">
                                                <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Grande taches terminées -->
                            <div class=\"col\">
                                <div class=\"card border-left-danger shadow h-100 py-2\">
                                    <div class=\"card-body\">
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col mr-2\">
                                                <div class=\"text-xs font-weight-bold text-danger text-uppercase mb-1\">{% trans %}Grande tâches terminées{% endtrans %} 
                                                </div>
                                                <div class=\"row no-gutters align-items-center\">
                                                    <div class=\"col-auto\">
                                                        <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">{{  total_Grande }}</div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class=\"col-auto\">
                                                <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row mb-4\">
                            <!-- Earnings (Annual) Card Example -->
                            <div class=\"col\">
                                <div class=\"card border-left-success shadow h-100 py-2\">
                                    <div class=\"card-body\">
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col mr-2\">
                                                <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                                   {% trans %}Total petite tâche{% endtrans %} </div>
                                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ total_Petite }} €</div>
                                            </div>
                                            <div class=\"col-auto\">
                                                <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Earnings (Annual) Card Example -->
                            <div class=\"col\">
                                <div class=\"card border-left-warning shadow h-100 py-2\">
                                    <div class=\"card-body\">
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col mr-2\">
                                                <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                                   {% trans %}Total moyenne tâche{% endtrans %} </div>
                                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{  total_Moyenne  }} €</div>
                                            </div>
                                            <div class=\"col-auto\">
                                                <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Earnings (Annual) Card Example -->
                            <div class=\"col\">
                                <div class=\"card border-left-danger shadow h-100 py-2\">
                                    <div class=\"card-body\">
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col mr-2\">
                                                <div class=\"text-xs font-weight-bold text-danger text-uppercase mb-1\">
                                                   {% trans %}total grande tâche{% endtrans %} </div>
                                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{  total_Grande }} €</div>
                                            </div>
                                            <div class=\"col-auto\">
                                                <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                            <!-- Earnings (Annual) Card Example -->
                            <div class=\"col\">
                                <div class=\"card border-left-info shadow h-100 py-2\">
                                    <div class=\"card-body\">
                                        <div class=\"row no-gutters align-items-center\">
                                            <div class=\"col mr-2\">
                                                <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">
                                                   {% trans %}Chiffre d'Affaire{% endtrans %} </div>
                                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{  Total_Opération  }} €</div>
                                            </div>
                                            <div class=\"col-auto\">
                                                <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                </div>



            </div>


{% endblock %}
", "chiffre_affaire/chiffreAffaire.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Propar\\projet_symfony_propar\\templates\\chiffre_affaire\\chiffreAffaire.html.twig");
    }
}
