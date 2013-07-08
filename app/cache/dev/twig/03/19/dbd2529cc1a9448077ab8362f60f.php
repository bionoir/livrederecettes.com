<?php

/* FDLivrederecettesBundle:Recipe:formModRecipe.html.twig */
class __TwigTemplate_0319dbd2529cc1a9448077ab8362f60f extends Twig_Template
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
        // line 6
        echo "    <form class=\"well form-horizontal\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    <div class=\"control-group\">
        <div class=\"control-label\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'label');
        echo "
        </div>
        <div class=\"controls\">
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget', array("attr" => array("class" => "input-block-level")));
        echo "
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'errors');
        echo "
        </div>
    </div>  
    
    <div class=\"control-group\">
        <div class=\"control-label\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label');
        echo "
        </div>
        <div class=\"controls\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget', array("attr" => array("class" => "input-block-level")));
        echo "
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'errors');
        echo "
        </div>
    </div>  
    
    <div class=\"control-group\">
        <div class=\"control-label\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "difficulty"), 'label');
        echo "
        </div>
        <div class=\"controls\">
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "difficulty"), 'widget', array("attr" => array("class" => "input-block-level")));
        echo "
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "difficulty"), 'errors');
        echo "
        </div>
    </div>  
    
    <div class=\"control-group\">
        <div class=\"control-label\">
            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preparation"), 'label');
        echo "
         </div>
        <div class=\"controls\">       
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preparation"), 'widget', array("attr" => array("class" => "input-block-level")));
        echo "
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preparation"), 'errors');
        echo "
      </div>
    </div>  
    
    <div class=\"control-group\">
        <div class=\"control-label\">
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingredients"), 'label');
        echo "
        </div>
        <div class=\"controls\">
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingredients"), 'widget', array("attr" => array("class" => "input-block-level")));
        echo "
            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingredients"), 'errors');
        echo "
        </div>
    </div>
            
      ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            
      ";
        // line 60
        echo "            
      ";
        // line 62
        echo "      <a href=\"#\" id=\"add_ingredient\" class=\"btn\">Ajouter un ingredient</a><br /><br />
      <div class=\"form-actions\">
        <input type=\"submit\" class=\"btn btn-primary btn-large\" value=\"Modifier la recette\"/>
      </div>
    </form>
";
        // line 68
        echo "

<script type=\"text/javascript\">
    
    \$(document).ready(function(){
            // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse
            var \$container = \$('#fd_livrederecettesbundle_recipetype_ingredients');
            
            // On enlève les label inutiles
            div_children = \$container.children();
    
            for (var i=0; i < div_children.length; i++) {
                div_children.eq(i).children(\"label\").remove();
            }
            
            // On ajoute les boutons \"Supprimer\" pour les ingrédients déjà existant
            for (var i=0; i < div_children.length; i++) {
                div_children.eq(i).append(\$('<a href=\"#\" id=\"delete_ingredient_' + i +'\" class=\"btn btn-danger\">Supprimer ingredient</a><br /><br />'));
                
                \$('#delete_ingredient_' + i).click(function() {
                    \$(this).prev().remove(); // \$(this).prev() est le template ajouté
                    \$(this).remove(); // \$(this) est le lien de suppression
                    return false;
                });
            }
            
            // On définit une fonction qui va ajouter un champ
            function add_ingredient() {
                // On définit le numéro du champ (en comptant le nombre de champs déjà ajoutés)
                index = \$container.children().length;

                // On ajoute à la fin de la balise <div> le contenu de l'attribut « data-prototype »
                // Après avoir remplacé la variable __name__ qu'il contient par le numéro du champ
                var \$sub_container = \$container.attr('data-prototype').replace(/__name__label__/g, 'Label'+index);
                \$sub_container = \$sub_container.replace('<label class=\"required\">Label' + index + '</label>', '');
                \$sub_container = \$sub_container.replace(/__name__/g, index);
                \$container.append(\$(\$sub_container));
        
                //\$container.append(\$(\$container.attr('data-prototype').replace(/__name__/g, index)));
                
                // On ajoute également un bouton pour pouvoir supprimer l'ingredient
                \$container.append(\$('<a href=\"#\" id=\"delete_ingredient_' + index +'\" class=\"btn btn-danger\">Supprimer ingredient</a><br /><br />'));

                // On supprime le champ à chaque clic sur le lien de suppression
                \$('#delete_ingredient_' + index).click(function() {
                        \$(this).prev().remove(); // \$(this).prev() est le template ajouté
                        \$(this).remove(); // \$(this) est le lien de suppression
                        return false;
                });
            }

            // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvelle recette par exemple)
            if(\$container.children().length === 0) {
                add_ingredient();
            }

            // On ajoute un nouveau champ à chaque clic sur le lien d'ajout
            \$('#add_ingredient').click(
                function() {
                    add_ingredient();
                    return false;
                }
            );
        }
    );
</script>";
    }

    public function getTemplateName()
    {
        return "FDLivrederecettesBundle:Recipe:formModRecipe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 68,  131 => 62,  128 => 60,  123 => 57,  116 => 53,  112 => 52,  106 => 49,  97 => 43,  93 => 42,  87 => 39,  78 => 33,  74 => 32,  68 => 29,  59 => 23,  55 => 22,  49 => 19,  40 => 13,  36 => 12,  30 => 9,  23 => 6,  19 => 2,);
    }
}
