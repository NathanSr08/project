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
class __TwigTemplate_69f605682165673730adb07ddcde38b0cfa04f86baad47c97cdc8ce34d20251c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "files/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello TuestconnecterController!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["demandes"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["tests"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
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
        return array (  174 => 60,  162 => 54,  156 => 53,  152 => 52,  149 => 51,  145 => 50,  124 => 31,  120 => 29,  116 => 27,  114 => 26,  108 => 22,  93 => 21,  89 => 20,  81 => 14,  70 => 13,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "files/view.html.twig", "/home/sio/docker-symfony/project/templates/files/view.html.twig");
    }
}
