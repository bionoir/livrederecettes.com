<?php

/* FDLivrederecettesBundle:Product:listProducts.html.twig */
class __TwigTemplate_d1a41bb459d9e3aeef447ef31c7baf20 extends Twig_Template
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
        echo " - Liste des produits dans le système
";
    }

    // line 8
    public function block_fdalivrederecettes_body($context, array $blocks = array())
    {
        // line 9
        echo "    <h3>Liste des produits présents dans le système.</h3>
    <ul>
        ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products_list"]) ? $context["products_list"] : $this->getContext($context, "products_list")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "            <li>
                <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_viewProduct", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
            echo "</a>
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 16
            echo "            <li>Pas (encore !) de produits dans le système!</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo "    </ul>
    
    <a class=\"btn btn-small btn-primary\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_addProduct"), "html", null, true);
        echo "\"><i class=\"icon-plus\"></i> Ajouter un produit</a>
";
    }

    public function getTemplateName()
    {
        return "FDLivrederecettesBundle:Product:listProducts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  71 => 18,  64 => 16,  54 => 13,  51 => 12,  46 => 11,  42 => 9,  39 => 8,  32 => 5,  29 => 4,);
    }
}
