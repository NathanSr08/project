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

/* files/view.html.twig */
class __TwigTemplate_8005dd81cff3a2ad7131d64cf437d9ec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "files/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "files/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "files/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello TuestconnecterController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container\">
<br>
  <form name=\"file\" method=\"post\"\">
        <label for=\"exampleFormControlSelect1\">Fichier demander</label>
         <select class=\"form-control\" name=\"file[id_demande]\" id=\"exampleFormControlSelect1\">
           ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandes"]) || array_key_exists("demandes", $context) ? $context["demandes"] : (function () { throw new RuntimeError('Variable "demandes" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 13
            echo "           <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "Nom", [], "any", false, false, false, 13), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo " 
         </select>
         <br>
         <label for=\"exampleFormControlSelect1\">Clients</label>
         <select class=\"form-control\" name=\"file[id_cli]\" id=\"exampleFormControlSelect1\">
          <option value=\"\">Chosit un client</option>
           ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tests"]) || array_key_exists("tests", $context) ? $context["tests"] : (function () { throw new RuntimeError('Variable "tests" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 21
            echo "           <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["test"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["test"], "nom", [], "any", false, false, false, 21), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["test"], "prenom", [], "any", false, false, false, 21), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["test"], "NomSociete", [], "any", false, false, false, 21), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo " 
         </select>
         <br>
      <button type=\"submite\" class=\"btn btn-outline-success\">Filtrer</button>
     ";
        // line 26
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 27
            echo "         <a href=\"/admin/files\"><button type=\"button\" class=\"btn btn-outline-danger\">Remove filtre</button></a>
        ";
        } else {
            // line 29
            echo "           <a href=\"/colab/files\"><button type=\"button\" class=\"btn btn-outline-danger\">Remove filtre</button></a>
           ";
        }
        // line 31
        echo "

         </form>
         <br>
<h2>Liste des Fichiers</h2>
<br>

<table class=\"table\">
  <thead>
    <tr>
     <th scope=\"col\">Client</th>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Fichier Demande</th>
     

  
    </tr>
  </thead>
  <tbody>
   ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 51
            echo "    <tr>
      <th>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "prenom", [], "any", false, false, false, 52), "html", null, true);
            echo "</th>
      <th scope=\"row\"><a href=\"/viewpdf/";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "name_md5", [], "any", false, false, false, 53), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nom_fichier", [], "any", false, false, false, 53), "html", null, true);
            echo "</a></th>
      <th>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nom", [], "any", false, false, false, 54), "html", null, true);
            echo "</th>
      
     
    
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "   
  </tbody>
</table>
</div>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "files/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 60,  192 => 54,  186 => 53,  182 => 52,  179 => 51,  175 => 50,  154 => 31,  150 => 29,  146 => 27,  144 => 26,  138 => 22,  123 => 21,  119 => 20,  111 => 14,  100 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello TuestconnecterController!{% endblock %}

{% block body %}

<div class=\"container\">
<br>
  <form name=\"file\" method=\"post\"\">
        <label for=\"exampleFormControlSelect1\">Fichier demander</label>
         <select class=\"form-control\" name=\"file[id_demande]\" id=\"exampleFormControlSelect1\">
           {% for demande in demandes %}
           <option value=\"{{demande.id}}\">{{demande.Nom}}</option>
          {% endfor %} 
         </select>
         <br>
         <label for=\"exampleFormControlSelect1\">Clients</label>
         <select class=\"form-control\" name=\"file[id_cli]\" id=\"exampleFormControlSelect1\">
          <option value=\"\">Chosit un client</option>
           {% for test in tests %}
           <option value=\"{{test.id}}\">{{test.nom}}.{{test.prenom}}: {{test.NomSociete}}</option>
          {% endfor %} 
         </select>
         <br>
      <button type=\"submite\" class=\"btn btn-outline-success\">Filtrer</button>
     {% if is_granted('ROLE_ADMIN') %}
         <a href=\"/admin/files\"><button type=\"button\" class=\"btn btn-outline-danger\">Remove filtre</button></a>
        {% else %}
           <a href=\"/colab/files\"><button type=\"button\" class=\"btn btn-outline-danger\">Remove filtre</button></a>
           {% endif %}


         </form>
         <br>
<h2>Liste des Fichiers</h2>
<br>

<table class=\"table\">
  <thead>
    <tr>
     <th scope=\"col\">Client</th>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Fichier Demande</th>
     

  
    </tr>
  </thead>
  <tbody>
   {% for client in clients %}
    <tr>
      <th>{{client.prenom}}</th>
      <th scope=\"row\"><a href=\"/viewpdf/{{client.name_md5}}\" target=\"_blank\">{{client.nom_fichier}}</a></th>
      <th>{{client.nom}}</th>
      
     
    
    </tr>
    {% endfor %}
   
  </tbody>
</table>
</div>



{% endblock %}", "files/view.html.twig", "/var/www/project/templates/files/view.html.twig");
    }
}
