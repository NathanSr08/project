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

/* client/edit.html.twig */
class __TwigTemplate_107d340241e73367c496ade88ab6cfa0d32c45424dcfca2ec950ddfb8adf9a70 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "client/edit.html.twig", 1);
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
        if ((0 === twig_compare(($context["message"] ?? null), 1))) {
            // line 7
            echo "<div class=\"alert alert-success\" role=\"alert\">
Le Client à été crée!
</div>
";
        }
        // line 11
        echo "<h2 style=\"text-align:center\">Ajouter un Client</h2>

<div class=\"container\">
<div class=\"row\">
 <div class=\"col-md-4\">



";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Nom", [], "any", false, false, false, 20), 'row', ["value" => twig_get_attribute($this->env, $this->source, ($context["cli"] ?? null), "Nom", [], "any", false, false, false, 20)]);
        echo "
";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Prenom", [], "any", false, false, false, 21), 'row');
        echo "


";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Mail", [], "any", false, false, false, 24), 'row');
        echo "

</div>


 <div class=\"col-4\">
 ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom_Societe", [], "any", false, false, false, 30), 'row');
        echo "
";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Adresse", [], "any", false, false, false, 31), 'row');
        echo "

";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Num_pro", [], "any", false, false, false, 33), 'row');
        echo "
";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id_adm", [], "any", false, false, false, 34), 'row', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, ($context["cli"] ?? null), "IdAdm", [], "any", false, false, false, 34)]]);
        echo "


</div>
 <div class=\"col-4\">
 ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Cp", [], "any", false, false, false, 39), 'row');
        echo "
";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Ville", [], "any", false, false, false, 40), 'row');
        echo "
";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "num_siret", [], "any", false, false, false, 41), 'row');
        echo "
 </div>
</div>
<br>
<button type=\"submite\" class=\"btn btn-success\">Modifier</button>
";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

</div>
";
    }

    public function getTemplateName()
    {
        return "client/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 46,  128 => 41,  124 => 40,  120 => 39,  112 => 34,  108 => 33,  103 => 31,  99 => 30,  90 => 24,  84 => 21,  80 => 20,  76 => 19,  66 => 11,  60 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/edit.html.twig", "/home/sio/docker-symfony/project/templates/client/edit.html.twig");
    }
}
