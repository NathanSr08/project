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
class __TwigTemplate_fa452d2f1046facd2437c203665d28a5f3fec6f1ffada9ab03d4d631751b2da7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sms/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sms/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sms/view.html.twig", 1);
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

        echo "Hello SmsController!";
        
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
      <textarea class=\"form-control\" id=\"editor\" name=\"sms[sms]\"id=\"exampleTextarea\" rows=\"3\" placeholder=\"";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["sms"], "sms", [], "any", false, false, false, 28);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
      <textarea class=\"form-control\" id=\"editor\" name=\"sms[sms]\"id=\"exampleTextarea\" rows=\"3\" placeholder=\"{{sms.sms|raw}}\" disabled=\"\"></textarea>
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
", "sms/view.html.twig", "/var/www/project/templates/sms/view.html.twig");
    }
}
