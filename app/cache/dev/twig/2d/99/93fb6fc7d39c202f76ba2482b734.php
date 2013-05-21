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
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
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
        return array (  41 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }
}
