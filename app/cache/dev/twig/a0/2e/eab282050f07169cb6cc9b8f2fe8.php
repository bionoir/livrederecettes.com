<?php

/* FDLivrederecettesBundle:MealType:viewMealType.html.twig */
class __TwigTemplate_a02eeab282050f07169cb6cc9b8f2fe8 extends Twig_Template
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
        echo " - Détail d'un type de repas
";
    }

    // line 8
    public function block_fdalivrederecettes_body($context, array $blocks = array())
    {
        // line 9
        echo " 
  <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mealType"]) ? $context["mealType"] : $this->getContext($context, "mealType")), "name"), "html", null, true);
        echo "</h2>
    
  <p>
    <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_listMealTypes"), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_modifyMealType", array("id" => $this->getAttribute((isset($context["mealType"]) ? $context["mealType"] : $this->getContext($context, "mealType")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-edit\"></i>
      Modifier le type de repas
    </a>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_deleteMealType", array("id" => $this->getAttribute((isset($context["mealType"]) ? $context["mealType"] : $this->getContext($context, "mealType")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-trash\"></i>
      Supprimer le type de repas
    </a>
  </p>
 
";
    }

    public function getTemplateName()
    {
        return "FDLivrederecettesBundle:MealType:viewMealType.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  58 => 17,  51 => 13,  45 => 10,  42 => 9,  39 => 8,  32 => 5,  29 => 4,);
    }
}
