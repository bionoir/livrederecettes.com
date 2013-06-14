<?php

/* FDLivrederecettesBundle:Unit:formUnit.html.twig */
class __TwigTemplate_d5161890806ec1630a98ca21a436d650 extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" class=\"btn btn-primary btn-large\" />
    ";
        // line 8
        if ((null === (isset($context["unit"]) ? $context["unit"] : $this->getContext($context, "unit")))) {
            // line 9
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["url_cancel"]) ? $context["url_cancel"] : $this->getContext($context, "url_cancel"))), "html", null, true);
            echo "\"><input type=\"button\" class=\"btn-large\" value=\"Annuler\" /></a>
    ";
        } else {
            // line 11
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["url_cancel"]) ? $context["url_cancel"] : $this->getContext($context, "url_cancel")), array("id" => $this->getAttribute((isset($context["unit"]) ? $context["unit"] : $this->getContext($context, "unit")), "id"))), "html", null, true);
            echo "\"><input type=\"button\" class=\"btn-large\" value=\"Annuler\" /></a>
    ";
        }
        // line 13
        echo "  </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "FDLivrederecettesBundle:Unit:formUnit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  42 => 11,  36 => 9,  34 => 8,  29 => 6,  25 => 5,  22 => 4,  19 => 2,);
    }
}
