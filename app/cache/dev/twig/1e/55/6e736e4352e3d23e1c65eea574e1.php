<?php

/* FDLivrederecettesBundle:Menu:formModMenu.html.twig */
class __TwigTemplate_1e556e736e4352e3d23e1c65eea574e1 extends Twig_Template
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
        echo "    <form class=\"well form-horizontal\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    <div class=\"control-group\">
        <div class=\"control-label\">
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'label');
        echo "
        </div>
        <div class=\"controls\">
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget', array("attr" => array("class" => "input-block-level")));
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'errors');
        echo "
        </div>
    </div>  
    
    <div class=\"control-group\">
        <div class=\"control-label\">
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dated"), 'label');
        echo "
        </div>
        <div class=\"controls\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dated"), 'widget', array("attr" => array("class" => "input-block-level")));
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dated"), 'errors');
        echo "
        </div>
    </div>  
    
    <div class=\"control-group\">
        <div class=\"control-label\">
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFrom"), 'label');
        echo "
        </div>
        <div class=\"controls\">
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFrom"), 'widget', array("attr" => array("class" => "input-block-level")));
        echo "
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFrom"), 'errors');
        echo "
        </div>
    </div>  
    
    <div class=\"control-group\">
        <div class=\"control-label\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateTo"), 'label');
        echo "
         </div>
        <div class=\"controls\">       
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateTo"), 'widget', array("attr" => array("class" => "input-block-level")));
        echo "
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateTo"), 'errors');
        echo "
      </div>
    </div>  
    
    <div class=\"control-group\">
        <div class=\"control-label\">
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "meals"), 'label');
        echo "
        </div>
        <div class=\"controls\">
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "meals"), 'widget', array("attr" => array("class" => "input-block-level")));
        echo "
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "meals"), 'errors');
        echo "
        </div>
    </div>
            
      ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            
            
      ";
        // line 59
        echo "      <a href=\"#\" id=\"add_ingredient\" class=\"btn\">Ajouter un ingredient</a><br /><br />
      <div class=\"form-actions\">
        <input type=\"submit\" class=\"btn btn-primary btn-large\" value=\"Modifier le menu\"/>
      </div>
    </form>
";
        // line 65
        echo "

<script type=\"text/javascript\">
    
    \$(document).ready(function(){
            // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse
            var \$container = \$('#fd_livrederecettesbundle_recipetype_meals');
            
            // On enlève les label inutiles
            div_children = \$container.children();
    
            for (var i=0; i < div_children.length; i++) {
                div_children.eq(i).children(\"label\").remove();
            }
            
            // On ajoute les boutons \"Supprimer\" pour les ingrédients déjà existant
            for (var i=0; i < div_children.length; i++) {
                div_children.eq(i).append(\$('<a href=\"#\" id=\"delete_meal_' + i +'\" class=\"btn btn-danger\">Supprimer repas</a><br /><br />'));
                
                \$('#delete_meal_' + i).click(function() {
                    \$(this).prev().remove(); // \$(this).prev() est le template ajouté
                    \$(this).remove(); // \$(this) est le lien de suppression
                    return false;
                });
            }
            
            // On définit une fonction qui va ajouter un champ
            function add_meal() {
                // On définit le numéro du champ (en comptant le nombre de champs déjà ajoutés)
                index = \$container.children().length;

                // On ajoute à la fin de la balise <div> le contenu de l'attribut « data-prototype »
                // Après avoir remplacé la variable __name__ qu'il contient par le numéro du champ
                var \$sub_container = \$container.attr('data-prototype').replace(/__name__label__/g, 'Label'+index);
                \$sub_container = \$sub_container.replace('<label class=\"required\">Label' + index + '</label>', '');
                \$sub_container = \$sub_container.replace(/__name__/g, index);
                \$container.append(\$(\$sub_container));
                
                // On ajoute également un bouton pour pouvoir supprimer l'ingredient
                \$container.append(\$('<a href=\"#\" id=\"delete_meal_' + index +'\" class=\"btn btn-danger\">Supprimer repas</a><br /><br />'));

                // On supprime le champ à chaque clic sur le lien de suppression
                \$('#delete_meal_' + index).click(function() {
                        \$(this).prev().remove(); // \$(this).prev() est le template ajouté
                        \$(this).remove(); // \$(this) est le lien de suppression
                        return false;
                });
            }

            // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvelle recette par exemple)
            if(\$container.children().length === 0) {
                add_meal();
            }

            // On ajoute un nouveau champ à chaque clic sur le lien d'ajout
            \$('#add_meal').click(
                function() {
                    add_meal();
                    return false;
                }
            );
        }
    );
</script>
";
    }

    public function getTemplateName()
    {
        return "FDLivrederecettesBundle:Menu:formModMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 65,  128 => 59,  122 => 55,  115 => 51,  111 => 50,  105 => 47,  96 => 41,  92 => 40,  86 => 37,  77 => 31,  73 => 30,  67 => 27,  58 => 21,  54 => 20,  35 => 10,  22 => 4,  19 => 2,  52 => 14,  48 => 17,  46 => 11,  42 => 9,  39 => 11,  32 => 5,  29 => 7,);
    }
}
