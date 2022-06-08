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

/* files/view_client.html.twig */
class __TwigTemplate_a31ceded9f4d8751fde48e27c0b75bf9537ae991b91b9ae42077a17ac1b04e5c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "files/view_client.html.twig", 1);
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
<h2>Liste des Fichiers</h2>
<br>
   ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 12
            echo "<button type=\"text\" class=\"btn btn-outline-primary\">Client: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "prenom", [], "any", false, false, false, 12), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nom_societe", [], "any", false, false, false, 12), "html", null, true);
            echo "</button>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo " <br>
<br>
<table class=\"table\">
  <thead>
    <tr>
     <th scope=\"col\">Fichier</th>
      <th scope=\"col\">Categorie</th>
      <th scop=\"col\">Edit</th>
     
     

  
    </tr>
  </thead>
  <tbody>
   ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 30
            echo "    <tr>
     
      <th scope=\"row\"><a href=\"/viewpdf/";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "name_md5", [], "any", false, false, false, 32), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nom_fichier", [], "any", false, false, false, 32), "html", null, true);
            echo "</a></th>
      <th>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nom", [], "any", false, false, false, 33), "html", null, true);
            echo "</th>
      <th><a href=\"/delete_file/";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-x-square\" viewBox=\"0 0 16 16\">
  <path d=\"M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z\"/>
  <path d=\"M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z\"/>
</svg></a></th>
      
     
    
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "   
  </tbody>
</table>
</div>



";
    }

    public function getTemplateName()
    {
        return "files/view_client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 43,  115 => 34,  111 => 33,  105 => 32,  101 => 30,  97 => 29,  80 => 14,  69 => 12,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "files/view_client.html.twig", "/home/sio/docker-symfony/project/templates/files/view_client.html.twig");
    }
}
