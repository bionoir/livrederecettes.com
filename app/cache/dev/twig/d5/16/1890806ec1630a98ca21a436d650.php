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
        return array (  59 => 23,  23 => 6,  76 => 24,  113 => 33,  102 => 29,  97 => 43,  58 => 17,  63 => 19,  186 => 66,  179 => 55,  170 => 14,  161 => 11,  148 => 7,  134 => 65,  118 => 53,  77 => 40,  65 => 21,  34 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 60,  119 => 35,  107 => 31,  71 => 18,  38 => 6,  177 => 65,  165 => 13,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 22,  70 => 20,  67 => 17,  61 => 36,  94 => 31,  89 => 28,  85 => 25,  75 => 20,  68 => 29,  56 => 9,  87 => 39,  21 => 2,  26 => 6,  93 => 42,  88 => 23,  78 => 33,  46 => 11,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  196 => 90,  183 => 65,  171 => 61,  166 => 71,  163 => 12,  158 => 10,  156 => 58,  151 => 8,  142 => 6,  138 => 68,  136 => 67,  121 => 54,  117 => 44,  105 => 30,  91 => 31,  62 => 18,  49 => 19,  24 => 2,  25 => 5,  19 => 2,  79 => 20,  72 => 25,  69 => 22,  47 => 9,  40 => 13,  37 => 8,  22 => 4,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 62,  123 => 57,  120 => 40,  115 => 43,  111 => 37,  108 => 39,  101 => 35,  98 => 48,  96 => 31,  83 => 25,  74 => 32,  66 => 15,  55 => 14,  52 => 21,  50 => 14,  43 => 9,  41 => 9,  35 => 5,  32 => 5,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 54,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 53,  112 => 52,  109 => 41,  106 => 49,  103 => 49,  99 => 30,  95 => 34,  92 => 24,  86 => 28,  82 => 42,  80 => 25,  73 => 39,  64 => 16,  60 => 6,  57 => 14,  54 => 13,  51 => 13,  48 => 13,  45 => 10,  42 => 11,  39 => 8,  36 => 9,  33 => 7,  30 => 9,);
    }
}
