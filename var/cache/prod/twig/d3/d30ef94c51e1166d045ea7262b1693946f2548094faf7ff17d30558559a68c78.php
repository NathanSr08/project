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

/* files/search.html.twig */
class __TwigTemplate_ec03cb30e9a72e5bfaabfb7bd72e22a5503956015c64ee7fc4885339426a0c9e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "files/search.html.twig", 1);
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
        echo "<div class=\"container\">
    <form name=\"file\" method=\"post\"\">
        <label for=\"exampleFormControlSelect1\">Fichier demander</label>
         <select class=\"form-control\" name=\"file[id_demande]\" id=\"exampleFormControlSelect1\">
           ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["demandes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 11
            echo "           <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 11), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "Nom", [], "any", false, false, false, 11), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo " 
         </select>
           <label for=\"exampleFormControlSelect1\">Fichier demander</label>
         <select class=\"form-control\" name=\"file[id_cli]\" id=\"exampleFormControlSelect1\">
         <option value=\"\">Choisit un client</option>
           ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tests"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 18
            echo "           <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["test"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["test"], "nom", [], "any", false, false, false, 18), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo " 
         </select>
         <br>
         <br>
         <button type=\"submite\" class=\"btn btn-success\">Filtrer</button>
         </form>
          <br>
       
</div>
";
    }

    public function getTemplateName()
    {
        return "files/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 19,  90 => 18,  86 => 17,  79 => 12,  68 => 11,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "files/search.html.twig", "/home/sio/docker-symfony/project/templates/files/search.html.twig");
    }
}
