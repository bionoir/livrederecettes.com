<?php

/* FDLivrederecettesBundle:Unit:addUnit.html.twig */
class __TwigTemplate_ac5ed76a2a7eb4c8fbc658c8840921a7 extends Twig_Template
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
        echo " - Ajouter une unité de mesure
";
    }

    // line 8
    public function block_fdalivrederecettes_body($context, array $blocks = array())
    {
        // line 9
        echo "    <h3>Formulaire pour l'ajout d'une nouvelle unité de mesure</h3>
    
    ";
        // line 11
        $this->env->loadTemplate("FDLivrederecettesBundle:Unit:formUnit.html.twig")->display($context);
        // line 12
        echo "    
";
    }

    public function getTemplateName()
    {
        return "FDLivrederecettesBundle:Unit:addUnit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  46 => 11,  42 => 9,  39 => 8,  32 => 5,  29 => 4,);
    }
}
