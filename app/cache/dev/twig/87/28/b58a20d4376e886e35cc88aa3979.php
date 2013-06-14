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
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'javascriptsend' => array($this, 'block_javascriptsend'),
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
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
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
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_homepage"), "html", null, true);
        echo "\">Accueil</a></li>
                    <li><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_listRecipies"), "html", null, true);
        echo "\">Recettes</a></li>
                    <li><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_listProducts"), "html", null, true);
        echo "\">Produits</a></li>
                    <li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_listUnits"), "html", null, true);
        echo "\">Unités de mesure</a></li>
                    <li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_listTypes"), "html", null, true);
        echo "\">Types de produit</a></li>
                </ul>
                ";
        // line 42
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FDLivrederecettesBundle:Livrederecettes:menu"));
        echo "
            </div>
            
            <div id=\"content\" class=\"span9\">
                ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["typeMessage"] => $context["flashMessages"]) {
            // line 47
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 48
                echo "                        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, (isset($context["typeMessage"]) ? $context["typeMessage"] : $this->getContext($context, "typeMessage")), "html", null, true);
                echo "\">
                            ";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage"))), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 52
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['typeMessage'], $context['flashMessages'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 53
        echo "                    
                ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "            </div>
        </div>

            <hr>
            <footer>
                <p>Dalmasso productions © 2013 and beyond.</p>
            </footer>
        </div>

        ";
        // line 65
        $this->displayBlock('javascriptsend', $context, $blocks);
        // line 67
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

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        // line 11
        echo "            ";
        // line 12
        echo "            ";
        // line 13
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdlivrederecettes/js/jquery-1.10.1.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        // line 55
        echo "                ";
    }

    // line 65
    public function block_javascriptsend($context, array $blocks = array())
    {
        // line 66
        echo "        ";
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
        return array (  186 => 66,  183 => 65,  179 => 55,  176 => 54,  170 => 14,  165 => 13,  163 => 12,  161 => 11,  158 => 10,  151 => 8,  148 => 7,  142 => 6,  136 => 67,  134 => 65,  123 => 56,  121 => 54,  118 => 53,  112 => 52,  103 => 49,  98 => 48,  93 => 47,  89 => 46,  82 => 42,  77 => 40,  73 => 39,  69 => 38,  65 => 37,  61 => 36,  39 => 16,  36 => 10,  34 => 7,  30 => 6,  24 => 2,);
    }
}
