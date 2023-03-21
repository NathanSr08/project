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

/* sms/view.html.twig */
class __TwigTemplate_c6244eff0953619cbed6d66ff221d504 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sms/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sms/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sms/view.html.twig", 1);
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

        echo "Hello SmsController!";
        
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
        echo "<div class=\"container\">
<br>
<h3>Nouveaux Message</h3>
</div>
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["smss"]) || array_key_exists("smss", $context) ? $context["smss"] : (function () { throw new RuntimeError('Variable "smss" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sms"]) {
            // line 11
            echo "<div class=\"container\">
<br>

<button type=\"button\" class=\"btn btn-outline-primary disabled\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sms"], "date", [], "any", false, false, false, 14), "html", null, true);
            echo "</button>


  <div class=\"form-group\">
      <label for=\"exampleInputPassword1\" class=\"form-label mt-4\">De</label>
     <input class=\"form-control\" id=\"disabledInput\" type=\"text\" placeholder=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sms"], "email", [], "any", false, false, false, 19), "html", null, true);
            echo "\" disabled=\"\">
    </div>
   <div class=\"form-group\">
      <label for=\"exampleInputPassword1\" class=\"form-label mt-4\">Subject</label>
     <input class=\"form-control\" id=\"disabledInput\" type=\"text\" placeholder=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sms"], "subject", [], "any", false, false, false, 23), "html", null, true);
            echo "\" disabled=\"\">
    </div>

     <div class=\"form-group\">
      <label for=\"exampleTextarea\" class=\"form-label mt-4\">Message</label>
      <textarea class=\"form-control\"  name=\"sms[sms]\" rows=\"3\" placeholder=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sms"], "sms", [], "any", false, false, false, 28), "html", null, true);
            echo "\" disabled=\"\"></textarea>
    </div>
   
    <br>
     
  
    </div>
    <div class=\"container\">
    <div class=\"container\">
    <div class=\"container\">

    <hr/>
    </div>
    </div>
    </div>

    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "sms/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 46,  126 => 28,  118 => 23,  111 => 19,  103 => 14,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello SmsController!{% endblock %}

{% block body %}
<div class=\"container\">
<br>
<h3>Nouveaux Message</h3>
</div>
{% for sms in smss %}
<div class=\"container\">
<br>

<button type=\"button\" class=\"btn btn-outline-primary disabled\">{{sms.date}}</button>


  <div class=\"form-group\">
      <label for=\"exampleInputPassword1\" class=\"form-label mt-4\">De</label>
     <input class=\"form-control\" id=\"disabledInput\" type=\"text\" placeholder=\"{{sms.email}}\" disabled=\"\">
    </div>
   <div class=\"form-group\">
      <label for=\"exampleInputPassword1\" class=\"form-label mt-4\">Subject</label>
     <input class=\"form-control\" id=\"disabledInput\" type=\"text\" placeholder=\"{{sms.subject}}\" disabled=\"\">
    </div>

     <div class=\"form-group\">
      <label for=\"exampleTextarea\" class=\"form-label mt-4\">Message</label>
      <textarea class=\"form-control\"  name=\"sms[sms]\" rows=\"3\" placeholder=\"{{sms.sms}}\" disabled=\"\"></textarea>
    </div>
   
    <br>
     
  
    </div>
    <div class=\"container\">
    <div class=\"container\">
    <div class=\"container\">

    <hr/>
    </div>
    </div>
    </div>

    
{% endfor %}

{% endblock %}
", "sms/view.html.twig", "/home/lab/symf_docker/project/templates/sms/view.html.twig");
    }
}
