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

/* client/tab.html.twig */
class __TwigTemplate_009f090277955d5eb5c76eb02bf7390ac76fdc178a98dcadeffddcd18be51e0b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "client/tab.html.twig", 1);
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
        echo "<br><br>
<h1 style=\"text-align:center\">Tableau Recapitulatif</h1>
<br>
<table class=\"table table-sm\">
  <thead>
    <tr>
      <th scope=\"col\">Clients</th>
      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["fd"]) {
            // line 14
            echo "      <th scope=\"col\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fd"], "nom", [], "any", false, false, false, 14), "html", null, true);
            echo "</th>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    
    </tr>
  </thead>
  <tbody>

  ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 22
            echo "    <tr>
    <th>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nom", [], "any", false, false, false, 23), "html", null, true);
            echo "</th>
    ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fds"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["fd"]) {
                // line 25
                echo "      <th scope=\"row\">a</th>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fd'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    </tr>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo " 
    
  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "client/tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 29,  109 => 27,  102 => 25,  98 => 24,  94 => 23,  91 => 22,  87 => 21,  80 => 16,  71 => 14,  67 => 13,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/tab.html.twig", "/home/sio/docker-symfony/project/templates/client/tab.html.twig");
    }
}
