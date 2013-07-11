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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_listMenus"), "html", null, true);
        echo "\">Menus</a></li>
                    <li><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_listRecipies"), "html", null, true);
        echo "\">Recettes</a></li>
                    <li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_listProducts"), "html", null, true);
        echo "\">Produits</a></li>
                    <li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_listUnits"), "html", null, true);
        echo "\">Unités de mesure</a></li>
                    <li><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_listTypes"), "html", null, true);
        echo "\">Types de produit</a></li>
                    <li><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_listMealTypes"), "html", null, true);
        echo "\">Types de repas</a></li>
                </ul>
                ";
        // line 44
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FDLivrederecettesBundle:Livrederecettes:menu"));
        echo "
            </div>
            
            <div id=\"content\" class=\"span9\">
                ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["typeMessage"] => $context["flashMessages"]) {
            // line 49
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 50
                echo "                        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, (isset($context["typeMessage"]) ? $context["typeMessage"] : $this->getContext($context, "typeMessage")), "html", null, true);
                echo "\">
                            ";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage"))), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['typeMessage'], $context['flashMessages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    
                ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "            </div>
        </div>

            <hr>
            <footer>
                <p>Dalmasso productions © 2013 and beyond.</p>
            </footer>
        </div>

        ";
        // line 67
        $this->displayBlock('javascriptsend', $context, $blocks);
        // line 69
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

    // line 56
    public function block_body($context, array $blocks = array())
    {
        // line 57
        echo "                ";
    }

    // line 67
    public function block_javascriptsend($context, array $blocks = array())
    {
        // line 68
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
        return array (  194 => 68,  191 => 67,  187 => 57,  184 => 56,  178 => 14,  173 => 13,  171 => 12,  169 => 11,  166 => 10,  159 => 8,  156 => 7,  150 => 6,  144 => 69,  142 => 67,  131 => 58,  129 => 56,  126 => 55,  120 => 54,  111 => 51,  106 => 50,  101 => 49,  97 => 48,  90 => 44,  85 => 42,  81 => 41,  77 => 40,  73 => 39,  69 => 38,  65 => 37,  61 => 36,  36 => 10,  34 => 7,  24 => 2,  57 => 14,  48 => 12,  45 => 10,  43 => 9,  40 => 8,  33 => 5,  30 => 6,  75 => 18,  68 => 16,  54 => 13,  51 => 13,  46 => 11,  42 => 9,  39 => 16,  32 => 5,  29 => 4,);
    }
}
