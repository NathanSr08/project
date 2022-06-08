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

/* base.html.twig */
class __TwigTemplate_62c17226fb4cb253a7acf6df4421bae236709b1b07f3a76b5145e05b711308b0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">

        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 10
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "         <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/test.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
    

<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <div class=\"container-fluid\">
   ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "    <a class=\"navbar-brand\" href=\"/\">Home</a>
   
    ";
        }
        // line 32
        echo "    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
      <ul class=\"navbar-nav me-auto\">
     
         
        
      


        ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 44)) {
            // line 45
            echo "        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Clients</a>
          <div class=\"dropdown-menu\">
            ";
            // line 48
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 49
                echo "            <a class=\"dropdown-item\" href=\"/admin/client\">All Clients</a>
            ";
            }
            // line 51
            echo "            <a class=\"dropdown-item\" href=\"/colab/client\">Mes Clients</a>
            <a class=\"dropdown-item\" href=\"/colab/addclient\">Add Clients</a>
            </li>
        ";
        }
        // line 55
        echo "  ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 56
            echo "        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Users</a>
          <div class=\"dropdown-menu\">
            
            <a class=\"dropdown-item\" href=\"/admin/users\">views</a>
            <a class=\"dropdown-item\" href=\"/admin/register\">Register</a>
            ";
        }
        // line 63
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 63)) {
            // line 64
            echo "       <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Files</a>
          <div class=\"dropdown-menu\">
           ";
            // line 67
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                echo " 
           <a class=\"dropdown-item\" href=\"/admin/files\">All Files</a>
           <a class=\"dropdown-item\" href=\"/admin/view_fd\">Fichier Demandé</a>
           ";
            } else {
                // line 71
                echo "            <a class=\"dropdown-item\" href=\"/colab/files\">All Files</a>
           ";
            }
            // line 73
            echo "           <a class=\"dropdown-item\" href=\"/add_file\">Add File</a>
           ";
        }
        // line 75
        echo "         ";
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 75)) {
            // line 76
            echo "  <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/logout\"><svg class=\"svg-icon\" style=\"width: 1em; height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;\" viewBox=\"0 0 1024 1024\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M768 106V184c97.2 76 160 194.8 160 328 0 229.6-186.4 416-416 416S96 741.6 96 512c0-133.2 62.8-251.6 160-328V106C121.6 190.8 32 341.2 32 512c0 265.2 214.8 480 480 480s480-214.8 480-480c0-170.8-89.6-321.2-224-406z\" fill=\"\" /><path d=\"M512 32c-17.6 0-32 14.4-32 32v448c0 17.6 14.4 32 32 32s32-14.4 32-32V64c0-17.6-14.4-32-32-32z\" fill=\"\" /></svg></a>
        </li>
       
         ";
        }
        // line 81
        echo "          
        </li>
      </ul>
    

     ";
        // line 86
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            echo " 
      <form class=\"d-flex\"  name=\"test\" method=\"post\" action=\"/colab/add_fd\">
        <input class=\"form-control me-sm-2\" type=\"text\" name=\"test[jcp]\" placeholder=\"Ajouter Nom Fichier\">
        <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Ajouter</button>
      </form>
      </form>
";
        }
        // line 93
        echo "    </div>
  </div>
</nav>





        ";
        // line 101
        $this->displayBlock('body', $context, $blocks);
        // line 104
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "        <!-- JavaScript Bundle with Popper -->
         
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2\" crossorigin=\"anonymous\"></script>

            ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
    }

    // line 101
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        echo "        
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 102,  227 => 101,  221 => 19,  215 => 15,  211 => 14,  204 => 11,  200 => 10,  193 => 5,  187 => 104,  185 => 101,  175 => 93,  165 => 86,  158 => 81,  151 => 76,  148 => 75,  144 => 73,  140 => 71,  133 => 67,  128 => 64,  125 => 63,  116 => 56,  113 => 55,  107 => 51,  103 => 49,  101 => 48,  96 => 45,  94 => 44,  80 => 32,  75 => 29,  73 => 28,  62 => 21,  60 => 14,  57 => 13,  54 => 10,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/sio/docker-symfony/project/templates/base.html.twig");
    }
}
