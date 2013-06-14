<?php

/* FDLivrederecettesBundle:Type:deleteType.html.twig */
class __TwigTemplate_fe0edb13da541298c55bde5351a59b43 extends Twig_Template
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
        echo " - Confirmer suppression du type de produit
";
    }

    // line 8
    public function block_fdalivrederecettes_body($context, array $blocks = array())
    {
        // line 9
        echo "
    <p> Voulez-vous vraiment supprimer le type de produit \"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "value"), "html", null, true);
        echo "\" ? </p>
    
    <p>
        <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_deleteType", array("id" => $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_viewType", array("id" => $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
                <i class=\"icon-chevron-left\"></i>
                Retour à la fiche du type de produit
            </a>
            <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </form>
    </p>

";
    }

    public function getTemplateName()
    {
        return "FDLivrederecettesBundle:Type:deleteType.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  55 => 14,  51 => 13,  45 => 10,  42 => 9,  39 => 8,  32 => 5,  29 => 4,);
    }
}
