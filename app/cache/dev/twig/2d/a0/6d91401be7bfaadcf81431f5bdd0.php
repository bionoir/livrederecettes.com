<?php

/* FDLivrederecettesBundle:Unit:viewUnit.html.twig */
class __TwigTemplate_2da06d91401be7bfaadcf81431f5bdd0 extends Twig_Template
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
        echo " - Détail d'une unité de mesure
";
    }

    // line 8
    public function block_fdalivrederecettes_body($context, array $blocks = array())
    {
        // line 9
        echo " 
  <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unit"]) ? $context["unit"] : $this->getContext($context, "unit")), "name"), "html", null, true);
        echo "</h2>
 
  <div class=\"well\">
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unit"]) ? $context["unit"] : $this->getContext($context, "unit")), "value"), "html", null, true);
        echo "
  </div>
 
  <p>
    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_listUnits"), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_modifyUnit", array("id" => $this->getAttribute((isset($context["unit"]) ? $context["unit"] : $this->getContext($context, "unit")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-edit\"></i>
      Modifier l'unité
    </a>
    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_deleteUnit", array("id" => $this->getAttribute((isset($context["unit"]) ? $context["unit"] : $this->getContext($context, "unit")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-trash\"></i>
      Supprimer l'unité
    </a>
  </p>
 
";
    }

    public function getTemplateName()
    {
        return "FDLivrederecettesBundle:Unit:viewUnit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 25,  65 => 21,  58 => 17,  51 => 13,  45 => 10,  42 => 9,  39 => 8,  32 => 5,  29 => 4,);
    }
}
