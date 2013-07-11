<?php

/* FDLivrederecettesBundle:Menu:modifyMenu.html.twig */
class __TwigTemplate_8cf3c3077b4d970fa60f84c2e90c806a extends Twig_Template
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
        echo " - Modifier le menu
";
    }

    // line 8
    public function block_fdalivrederecettes_body($context, array $blocks = array())
    {
        // line 9
        echo "    <h3>Modification d'un menu</h3>
    
    ";
        // line 11
        $this->env->loadTemplate("FDLivrederecettesBundle:Menu:formModMenu.html.twig")->display($context);
        // line 12
        echo "       
    <p>
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_viewMenu", array("id" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
        <i class=\"icon-chevron-left\"></i>
        Retour à la fiche du menu
        </a>
    </p>
";
    }

    public function getTemplateName()
    {
        return "FDLivrederecettesBundle:Menu:modifyMenu.html.twig";
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
