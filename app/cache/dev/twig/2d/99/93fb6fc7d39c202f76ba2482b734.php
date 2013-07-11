<?php

/* FDLivrederecettesBundle:Livrederecettes:menu.html.twig */
class __TwigTemplate_2d9993fb6fc7d39c202f76ba2482b734 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<h3> Les dernières recettes </h3>

<ul>
    <ul class=\"nav nav-pills nav-stacked\">
        ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_recettes"]) ? $context["liste_recettes"] : $this->getContext($context, "liste_recettes")));
        foreach ($context['_seq'] as $context["_key"] => $context["recette"]) {
            // line 7
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_viewRecipe", array("id" => $this->getAttribute((isset($context["recette"]) ? $context["recette"] : $this->getContext($context, "recette")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recette"]) ? $context["recette"] : $this->getContext($context, "recette")), "titre"), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recette'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </ul>
</ul>";
    }

    public function getTemplateName()
    {
        return "FDLivrederecettesBundle:Livrederecettes:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  26 => 6,  19 => 1,  194 => 68,  191 => 67,  187 => 57,  184 => 56,  178 => 14,  173 => 13,  171 => 12,  169 => 11,  166 => 10,  159 => 8,  156 => 7,  150 => 6,  144 => 69,  142 => 67,  131 => 58,  129 => 56,  126 => 55,  120 => 54,  111 => 51,  106 => 50,  101 => 49,  97 => 48,  90 => 44,  85 => 42,  81 => 41,  77 => 40,  73 => 39,  69 => 38,  65 => 37,  61 => 36,  36 => 10,  34 => 7,  24 => 2,  57 => 14,  48 => 12,  45 => 10,  43 => 9,  40 => 8,  33 => 5,  30 => 7,  75 => 18,  68 => 16,  54 => 13,  51 => 13,  46 => 11,  42 => 9,  39 => 16,  32 => 5,  29 => 4,);
    }
}
