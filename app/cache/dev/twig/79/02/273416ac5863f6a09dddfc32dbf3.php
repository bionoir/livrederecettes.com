<?php

/* FDLivrederecettesBundle:Unit:deleteUnit.html.twig */
class __TwigTemplate_7902273416ac5863f6a09dddfc32dbf3 extends Twig_Template
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
        echo " - Confirmer suppression unité de mesure
";
    }

    // line 8
    public function block_fdalivrederecettes_body($context, array $blocks = array())
    {
        // line 9
        echo "
    <p> Voulez-vous vraiment supprimer l'unité de mesure \"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unit"]) ? $context["unit"] : $this->getContext($context, "unit")), "name"), "html", null, true);
        echo "\" ? </p>
    
    <p>
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_deleteUnit", array("id" => $this->getAttribute((isset($context["unit"]) ? $context["unit"] : $this->getContext($context, "unit")), "id"))), "html", null, true);
        echo "\" class=\"btn\" onclick=\"submitAsPost(this.href); return false;\">
        <i class=\"icon-ok\"></i>
        Oui
        </a>
        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_viewUnit", array("id" => $this->getAttribute((isset($context["unit"]) ? $context["unit"] : $this->getContext($context, "unit")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
        <i class=\"icon-remove\"></i>
        Non
        </a>
    </p>
    
";
    }

    public function getTemplateName()
    {
        return "FDLivrederecettesBundle:Unit:deleteUnit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  51 => 13,  45 => 10,  42 => 9,  39 => 8,  32 => 5,  29 => 4,);
    }
}
