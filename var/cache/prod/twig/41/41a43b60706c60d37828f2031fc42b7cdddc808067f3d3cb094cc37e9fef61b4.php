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
class __TwigTemplate_542601699c1f5a58133887749bbe4f1a7ab176e98354492cb2a24e3a0ea2d563 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "files/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Log in!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["demandes"] ?? null));
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
        return array (  109 => 25,  98 => 24,  94 => 23,  85 => 16,  72 => 15,  68 => 14,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "files/add.html.twig", "/home/sio/docker-symfony/project/templates/files/add.html.twig");
    }
}
