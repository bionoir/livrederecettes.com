<?php

/* ::layout.html.twig */
class __TwigTemplate_8728b58a20d4376e886e35cc88aa3979 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    
    <body>
        <div class=\"container\">
            
            <div id=\"header\" class=\"hero-unit\">
            <h1>Livre de recettes</h1>
            <p>
                Texte description 1
            </p>
            
            <p>
                <a class=\"btn btn-primary btn-large\" href=\"http://www.siteduzero.com/tutoriel-3-517569-symfony2.html\">Lire le tutoriel »</a>
            </p>
        </div>
            
        <div class=\"row\">
            <div id=\"menu\" class=\"span3\">
                <h3>Le site</h3>
                <ul class=\"nav nav-pills nav-stacked\">
                    <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_homepage"), "html", null, true);
        echo "\">Accueil</a></li>
                    <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_addIngredient"), "html", null, true);
        echo "\">Ajouter un ingredient</a></li>
                    <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_addRecipe"), "html", null, true);
        echo "\">Ajouter une recette</a></li>
                </ul>
                ";
        // line 34
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FDLivrederecettesBundle:Livrederecettes:menu"));
        echo "
            </div>
                
            <div id=\"content\" class=\"span9\">
                ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "            </div>
        </div>

            <hr>
            <footer>
                <p>Dalmasso productions © 2013 and beyond.</p>
            </footer>
        </div>
            
        ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Livre de recettes";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "                ";
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        // line 50
        echo "            ";
        // line 51
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 52,  126 => 51,  124 => 50,  121 => 49,  117 => 39,  114 => 38,  107 => 8,  104 => 7,  98 => 6,  92 => 54,  90 => 49,  79 => 40,  77 => 38,  70 => 34,  65 => 32,  61 => 31,  57 => 30,  35 => 10,  33 => 7,  29 => 6,  23 => 2,);
    }
}
