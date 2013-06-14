<?php

/* FDLivrederecettesBundle:Product:formProduct.html.twig */
class __TwigTemplate_1e8d78c85605cbea07691d9d636a3ec5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo " 
";
        // line 4
        echo "<div class=\"well\">
  <form method=\"post\" ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label', array("label" => "Nom du produit"));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors');
        echo "
    
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seasonStart"), 'label', array("label" => "Début saison"));
        echo "
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seasonStart"), "year"), 'widget', array("attr" => array("style" => "display:none")));
        echo "
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seasonStart"), "day"), 'widget');
        echo "
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seasonStart"), "month"), 'widget');
        echo "
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seasonStart"), 'errors');
        echo "
    
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seasonEnd"), 'label', array("label" => "Fin saison"));
        echo "
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seasonEnd"), "year"), 'widget', array("attr" => array("style" => "display:none")));
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seasonEnd"), "day"), 'widget');
        echo "
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seasonEnd"), "month"), 'widget');
        echo "
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seasonEnd"), 'errors');
        echo "
    
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'label', array("label" => "Type de produit"));
        echo "
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'widget');
        echo "
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'errors');
        echo "     
          
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <br/>
    ";
        // line 29
        echo "    <input type=\"submit\" class=\"btn btn-primary btn-large\" />
    ";
        // line 30
        if ((null === (isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")))) {
            // line 31
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["url_cancel"]) ? $context["url_cancel"] : $this->getContext($context, "url_cancel"))), "html", null, true);
            echo "\"><input type=\"button\" class=\"btn-large\" value=\"Annuler\" /></a>
    ";
        } else {
            // line 33
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["url_cancel"]) ? $context["url_cancel"] : $this->getContext($context, "url_cancel")), array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
            echo "\"><input type=\"button\" class=\"btn-large\" value=\"Annuler\" /></a>
    ";
        }
        // line 35
        echo "  </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "FDLivrederecettesBundle:Product:formProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 35,  113 => 33,  107 => 31,  105 => 30,  102 => 29,  97 => 26,  92 => 24,  88 => 23,  84 => 22,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  58 => 14,  54 => 13,  50 => 12,  46 => 11,  42 => 10,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  22 => 4,  19 => 2,);
    }
}
