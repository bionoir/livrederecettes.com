<?php

/* FDLivrederecettesBundle::layout.html.twig */
class __TwigTemplate_7ec32aa49d53bc7bfc5028f3f62a7066 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fdalivrederecettes_body' => array($this, 'block_fdalivrederecettes_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "     ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        // line 10
        echo "    <h1>Livre de recettes</h1>
    <hr>
        
    ";
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('fdalivrederecettes_body', $context, $blocks);
    }

    public function block_fdalivrederecettes_body($context, array $blocks = array())
    {
        // line 16
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FDLivrederecettesBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 16,  53 => 15,  50 => 14,  45 => 10,  43 => 9,  40 => 8,  33 => 5,  30 => 4,  75 => 18,  68 => 16,  54 => 13,  51 => 12,  46 => 11,  42 => 9,  39 => 8,  32 => 5,  29 => 4,);
    }
}
