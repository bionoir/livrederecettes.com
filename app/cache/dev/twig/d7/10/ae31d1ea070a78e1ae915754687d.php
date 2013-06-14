<?php

/* FDLivrederecettesBundle:Type:viewType.html.twig */
class __TwigTemplate_d710ae31d1ea070a78e1ae915754687d extends Twig_Template
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
        echo " - Détail d'un type de produit
";
    }

    // line 8
    public function block_fdalivrederecettes_body($context, array $blocks = array())
    {
        // line 9
        echo " 
  <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "value"), "html", null, true);
        echo "</h2>
  
  <div class=\"well\">
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "description"), "html", null, true);
        echo "
  </div>
  
  <p>
    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_listTypes"), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_modifyType", array("id" => $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-edit\"></i>
      Modifier le type de produit
    </a>
    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_deleteType", array("id" => $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-trash\"></i>
      Supprimer le type de produit
    </a>
  </p>
 
";
    }

    public function getTemplateName()
    {
        return "FDLivrederecettesBundle:Type:viewType.html.twig";
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
