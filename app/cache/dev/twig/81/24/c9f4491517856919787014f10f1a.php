<?php

/* FDLivrederecettesBundle:Recipe:viewRecipe.html.twig */
class __TwigTemplate_8124c9f4491517856919787014f10f1a extends Twig_Template
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
        echo " - Détail d'une recette
";
    }

    // line 8
    public function block_fdalivrederecettes_body($context, array $blocks = array())
    {
        // line 9
        echo " 
  <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "title"), "html", null, true);
        echo "</h2>
  
  <div class=\"well\">
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "description"), "html", null, true);
        echo "
  </div>
  
  <div class=\"well\">
    ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "difficulty"), "html", null, true);
        echo "
  </div>
  
  <table>
  ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ingredients"]) ? $context["ingredients"] : $this->getContext($context, "ingredients")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            // line 22
            echo "    <tr>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingredient"]) ? $context["ingredient"] : $this->getContext($context, "ingredient")), "product"), "name"), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ingredient"]) ? $context["ingredient"] : $this->getContext($context, "ingredient")), "quantity"), "html", null, true);
            echo "</td>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingredient"]) ? $context["ingredient"] : $this->getContext($context, "ingredient")), "unit"), "value"), "html", null, true);
            echo "</td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "  </table>
    
  <div class=\"well\">
    ";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "preparation"), "H:i"), "html", null, true);
        echo "
  </div>
  
  <p>
    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_listRecipies"), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_modifyRecipe", array("id" => $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-edit\"></i>
      Modifier la recette
    </a>
    <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_deleteRecipe", array("id" => $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-trash\"></i>
      Supprimer la recette
    </a>
  </p>
 
";
    }

    public function getTemplateName()
    {
        return "FDLivrederecettesBundle:Recipe:viewRecipe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 43,  108 => 39,  101 => 35,  94 => 31,  89 => 28,  80 => 25,  76 => 24,  72 => 23,  69 => 22,  65 => 21,  58 => 17,  51 => 13,  45 => 10,  42 => 9,  39 => 8,  32 => 5,  29 => 4,);
    }
}
