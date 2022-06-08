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

/* fd/index.html.twig */
class __TwigTemplate_01771fe67028e7d266029f6c007ae8cf6427add8c3b5ffa7b3d32a0bbdf09ff5 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "fd/index.html.twig", 1);
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
<h2>Liste des Users</h2>
<br>
<table class=\"table\">
  <thead>
    <tr>
    <th>ID</th>
      <th scope=\"col\">Fichier</th>
      <th scope=\"col\">Edit</th>
  
    
    </tr>

  </thead>
  <tbody>
   ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["fd"]) {
            // line 24
            echo "    <tr>
     <th scope=\"row\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fd"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</th>
      <th scope=\"row\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fd"], "Nom", [], "any", false, false, false, 26), "html", null, true);
            echo "</th>
    <th><a onclick=\"confirmer(";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fd"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo ",'";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fd"], "Nom", [], "any", false, false, false, 27), "html", null, true);
            echo "')\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-x-square\" viewBox=\"0 0 16 16\">
  <path d=\"M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z\"/>
  <path d=\"M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z\"/>
</svg></a></th>
     
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "   
  </tbody>
</table>
</div>



";
    }

    public function getTemplateName()
    {
        return "fd/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 34,  92 => 27,  88 => 26,  84 => 25,  81 => 24,  77 => 23,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fd/index.html.twig", "/home/sio/docker-symfony/project/templates/fd/index.html.twig");
    }
}
