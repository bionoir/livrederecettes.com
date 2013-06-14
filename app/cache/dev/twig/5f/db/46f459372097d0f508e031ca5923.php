<?php

/* FDLivrederecettesBundle:Unit:modifyUnit.html.twig */
class __TwigTemplate_5fdb46f459372097d0f508e031ca5923 extends Twig_Template
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
        echo " - Modifier l'unité de mesure
";
    }

    // line 8
    public function block_fdalivrederecettes_body($context, array $blocks = array())
    {
        // line 9
        echo "    <h2>Modifier une unité</h2>
    
    <h3>Formulaire pour la modification d'une unité de mesure</h3>
    
    ";
        // line 13
        $this->env->loadTemplate("FDLivrederecettesBundle:Unit:formUnit.html.twig")->display($context);
        // line 14
        echo "    
    <p>
        Vous éditez une unité déjà existante.
    </p>
    
    <p>
        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_viewUnit", array("id" => $this->getAttribute((isset($context["unit"]) ? $context["unit"] : $this->getContext($context, "unit")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
        <i class=\"icon-chevron-left\"></i>
        Retour à la fiche de l'unité
        </a>
  </p>
";
    }

    public function getTemplateName()
    {
        return "FDLivrederecettesBundle:Unit:modifyUnit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  50 => 14,  48 => 13,  42 => 9,  39 => 8,  32 => 5,  29 => 4,);
    }
}
