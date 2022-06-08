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

/* files/add.html.twig */
class __TwigTemplate_4b7e957a6e9fbc475fc02e7d11870ba8dbc0477c7d955781d641ccb55cddd11f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "files/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "files/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "files/add.html.twig", 1);
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

        echo "Log in!";
        
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
        echo "<div class=\"alert alert-success\" role=\"alert\">
 Page Operationnel @Nathan!
</div>
<div class=\"container\">
<form name=\"file\" method=\"post\" enctype=\"multipart/form-data\">
 <div class=\"form-group\">
    <label for=\"exampleFormControlSelect1\">Client</label>
    <select class=\"form-control\" id=\"exampleFormControlSelect1\" name=\"file[id_client]\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 15
            echo "      <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "Nom", [], "any", false, false, false, 15), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "NomSociete", [], "any", false, false, false, 15), "html", null, true);
            echo "</option>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo " 
    </select>
  </div>
  <br>
   <div class=\"form-group\">
    <label for=\"exampleFormControlSelect1\">Fichier demander</label>
    <select class=\"form-control\" name=\"file[id_demande]\" id=\"exampleFormControlSelect1\">
      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandes"]) || array_key_exists("demandes", $context) ? $context["demandes"] : (function () { throw new RuntimeError('Variable "demandes" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 24
            echo "      <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "Nom", [], "any", false, false, false, 24), "html", null, true);
            echo "</option>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo " 
    </select>
    <br>
    <div class=\"form-group\">
    <label for=\"exampleFormControlFile1\">Veuillez ajouter le fichier</label>
    <input type=\"file\" class=\"form-control\" name=\"file_name\" id=\"exampleFormControlFile1\">
  </div>
  </div>
  <br>
<button type=\"submite\" class=\"btn btn-success\">Success</button>
  </form>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "files/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 25,  128 => 24,  124 => 23,  115 => 16,  102 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
<div class=\"alert alert-success\" role=\"alert\">
 Page Operationnel @Nathan!
</div>
<div class=\"container\">
<form name=\"file\" method=\"post\" enctype=\"multipart/form-data\">
 <div class=\"form-group\">
    <label for=\"exampleFormControlSelect1\">Client</label>
    <select class=\"form-control\" id=\"exampleFormControlSelect1\" name=\"file[id_client]\">
    {% for client in clients %}
      <option value=\"{{client.id}}\">{{client.Nom}} - {{client.NomSociete}}</option>
     {% endfor %} 
    </select>
  </div>
  <br>
   <div class=\"form-group\">
    <label for=\"exampleFormControlSelect1\">Fichier demander</label>
    <select class=\"form-control\" name=\"file[id_demande]\" id=\"exampleFormControlSelect1\">
      {% for demande in demandes %}
      <option value=\"{{demande.id}}\">{{demande.Nom}}</option>
     {% endfor %} 
    </select>
    <br>
    <div class=\"form-group\">
    <label for=\"exampleFormControlFile1\">Veuillez ajouter le fichier</label>
    <input type=\"file\" class=\"form-control\" name=\"file_name\" id=\"exampleFormControlFile1\">
  </div>
  </div>
  <br>
<button type=\"submite\" class=\"btn btn-success\">Success</button>
  </form>
  </div>
{% endblock%}", "files/add.html.twig", "/var/www/project/templates/files/add.html.twig");
    }
}
