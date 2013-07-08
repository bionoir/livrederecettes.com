<?php

/* FDLivrederecettesBundle:Unit:listUnits.html.twig */
class __TwigTemplate_7acc89c25c391b981c1f186c1617ac94 extends Twig_Template
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
        echo " - Liste des unités de mesure pour les ingredients
";
    }

    // line 8
    public function block_fdalivrederecettes_body($context, array $blocks = array())
    {
        // line 9
        echo "    <h3>Liste des unités de mesure présentes dans le système.</h3>
    <ul>
        ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["units_list"]) ? $context["units_list"] : $this->getContext($context, "units_list")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 12
            echo "            <li>
                <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_viewUnit", array("id" => $this->getAttribute((isset($context["unit"]) ? $context["unit"] : $this->getContext($context, "unit")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unit"]) ? $context["unit"] : $this->getContext($context, "unit")), "name"), "html", null, true);
            echo "</a>
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 16
            echo "            <li>Pas (encore !) d'unités de mesure dans le système!</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo "    </ul>
    
    <a class=\"btn btn-small btn-primary\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livrederecettes_addUnit"), "html", null, true);
        echo "\"><i class=\"icon-plus\"></i> Ajouter une unité de mesure</a>
";
    }

    public function getTemplateName()
    {
        return "FDLivrederecettesBundle:Unit:listUnits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 23,  23 => 6,  76 => 24,  113 => 33,  102 => 29,  97 => 43,  58 => 17,  63 => 19,  186 => 66,  179 => 55,  170 => 14,  161 => 11,  148 => 7,  134 => 65,  118 => 53,  77 => 40,  65 => 21,  34 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 60,  119 => 35,  107 => 31,  71 => 18,  38 => 6,  177 => 65,  165 => 13,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 22,  70 => 20,  67 => 17,  61 => 36,  94 => 31,  89 => 28,  85 => 25,  75 => 20,  68 => 29,  56 => 9,  87 => 39,  21 => 2,  26 => 6,  93 => 42,  88 => 23,  78 => 33,  46 => 11,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  196 => 90,  183 => 65,  171 => 61,  166 => 71,  163 => 12,  158 => 10,  156 => 58,  151 => 8,  142 => 6,  138 => 68,  136 => 67,  121 => 54,  117 => 44,  105 => 30,  91 => 31,  62 => 18,  49 => 19,  24 => 2,  25 => 5,  19 => 2,  79 => 20,  72 => 25,  69 => 22,  47 => 9,  40 => 13,  37 => 8,  22 => 4,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 62,  123 => 57,  120 => 40,  115 => 43,  111 => 37,  108 => 39,  101 => 35,  98 => 48,  96 => 31,  83 => 25,  74 => 32,  66 => 15,  55 => 14,  52 => 21,  50 => 14,  43 => 9,  41 => 9,  35 => 5,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 54,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 53,  112 => 52,  109 => 41,  106 => 49,  103 => 49,  99 => 30,  95 => 34,  92 => 24,  86 => 28,  82 => 42,  80 => 25,  73 => 39,  64 => 16,  60 => 6,  57 => 14,  54 => 13,  51 => 12,  48 => 13,  45 => 10,  42 => 9,  39 => 8,  36 => 9,  33 => 7,  30 => 9,);
    }
}
