<?php

/* FDLivrederecettesBundle:Recipe:modifyRecipe.html.twig */
class __TwigTemplate_83c2d36a20980dae3d6fa3ea37d0279c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FDLivrederecettesBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fdalivrederecettes_body' => array($this, 'block_fdalivrederecettes_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FDLivrederecettesBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Modifier la recette
";
    }

    // line 8
    public function block_fdalivrederecettes_body($context, array $blocks = array())
    {
        // line 9
        echo "    <h3>Modification d'une recette</h3>
    
    ";
        // line 11
        $this->env->loadTemplate("FDLivrederecettesBundle:Recipe:formModRecipe.html.twig")->display($context);
        // line 12
        echo "       
    <p>
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_viewRecipe", array("id" => $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
        <i class=\"icon-chevron-left\"></i>
        Retour à la fiche de la recette
        </a>
    </p>
";
    }

    public function getTemplateName()
    {
        return "FDLivrederecettesBundle:Recipe:modifyRecipe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  48 => 12,  46 => 11,  42 => 9,  39 => 8,  32 => 5,  29 => 4,);
    }
}
