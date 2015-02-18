/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
        // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse
        var $container = $('#fd_livrederecettesbundle_recipetype_ingredients');

        // On définit une fonction qui va ajouter un champ
        function add_ingredient() {
            // On définit le numéro du champ (en comptant le nombre de champs déjà ajoutés)
            index = $container.children().length;

            // On ajoute à la fin de la balise <div> le contenu de l'attribut « data-prototype »
            // Après avoir remplacé la variable __name__ qu'il contient par le numéro du champ
            var $sub_container = $container.attr('data-prototype').replace(/__name__label__/g, 'Label'+index);
            $sub_container = $sub_container.replace('<label class="required">Label' + index + '</label>', '');
            $sub_container = $sub_container.replace(/__name__/g, index);
            var $html = $.parseHTML($sub_container);

            //
            // Bootstrap 3 adaptations
            $('div#fd_livrederecettesbundle_recipetype_ingredients_'+index+' div', $html).addClass('form-group');
            $('#fd_livrederecettesbundle_recipetype_ingredients_'+index+' div input', $html).addClass('form-control');
            $('#fd_livrederecettesbundle_recipetype_ingredients_'+index+' div select', $html).addClass('form-control');
            $('#fd_livrederecettesbundle_recipetype_ingredients_'+index+' div label', $html).wrap('<div class="col-lg-3 control-label"></div>');
            $('#fd_livrederecettesbundle_recipetype_ingredients_'+index+' div input', $html).wrap('<div class="col-lg-5" style:width:auto; display:inline"></div>');
            $('#fd_livrederecettesbundle_recipetype_ingredients_'+index+' div select', $html).wrap('<div class="col-lg-5" style:width:auto; display:inline"></div>');

            $plusProductButton = $('<button class="btn btn-primary btn-lg btn-sm"><i class="glyphicon glyphicon-plus"></button>');
            $plusProductButton.click(function(){
                $formProduct = $('#dialog-formProduct');

                $formProduct.find('#formProduct-submit').click(function(e){
                    e.preventDefault();

                    $.ajax({
                        type        : $('#myFormProduct').attr( 'method' ),
                        url         : $('#myFormProduct').attr( 'action' ),
                        data        : $('#myFormProduct').serialize(),
                        success     : function(data) {
                                            if (data.success) {

                                                var products = data.products,
                                                    $productSelect = $('#fd_livrederecettesbundle_recipetype_ingredients_' + index + '_product');

                                                $productSelect.empty();

                                                for(var i = 0; i < products.length; i ++) {
                                                    $productSelect.append('<option value="'+products[i].id+'">'+products[i].name+'</option>');
                                                }

                                                $productSelect.val(data.lastAdded);

                                                $('#myFormProduct')[0].reset();

                                                $(e.target).off('click');
                                                $('#closeProductModal').click();

                                            } else {
                                                $('.modal-body').prepend('<div />').html(data.message);
                                            }
                                        },
                         error      : function(data) {
                                        $('.modal-body').prepend('<div />').html(data.message)
                                      }

                    });

                });

                $formProduct.modal();
            })

            // The "+" button for adding a product
            $('#fd_livrederecettesbundle_recipetype_ingredients_'+index+'_product', $html)
                    .parent()
                    .after($plusProductButton);


            $plusUnitButton = $('<button class="btn btn-primary btn-lg btn-sm"><i class="glyphicon glyphicon-plus"></button>');
            $plusUnitButton.click(function(){
                $formUnit = $('#dialog-formUnit');

                $formUnit.find('#formUnit-submit').click(function(e){
                    e.preventDefault();

                    $.ajax({
                        type        : $('#myFormUnit').attr( 'method' ),
                        url         : $('#myFormUnit').attr( 'action' ),
                        data        : $('#myFormUnit').serialize(),
                        success     : function(data) {
                                            if (data.success) {

                                                var units = data.units,
                                                    $unitSelect = $('#fd_livrederecettesbundle_recipetype_ingredients_' + index + '_unit');

                                                $unitSelect.empty();

                                                for(var i = 0; i < units.length; i ++) {
                                                    $unitSelect.append('<option value="'+units[i].id+'">'+units[i].name+'</option>');
                                                }

                                                $unitSelect.val(data.lastAdded);

                                                $('#myFormUnit')[0].reset();

                                                $(e.target).off('click');
                                                $('#closeUnitModal').click();

                                            } else {
                                                $('.modal-body').prepend('<div />').html(data.message);
                                            }
                                        },
                         error      : function(data) {
                                        $('.modal-body').prepend('<div />').html(data.message)
                                      }

                    });

                });

                $formUnit.modal();
            })


            // The "+" button for adding a unit
            $('#fd_livrederecettesbundle_recipetype_ingredients_'+index+'_unit', $html)
                    .parent()
                    .after($plusUnitButton);

            $container.append($($html));

            // On ajoute également un bouton pour pouvoir supprimer l'ingredient
            $container.append($('<div id="delete_ingredient_' + index +'" class="form-group"><div class="col-lg-3 control-label"><a href="#" class="btn btn-danger btn-sm">Supprimer ingredient</a><br /><br /></div></div>'));

            // On supprime le champ à chaque clic sur le lien de suppression
            $('#delete_ingredient_' + index).click(function() {
                    $(this).prev().remove(); // $(this).prev() est le template ajouté
                    $(this).remove(); // $(this) est le lien de suppression
                    return false;
            });

        }

        // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvelle recette par exemple)
        if($container.children().length === 0) {
            add_ingredient();
        }

        // On ajoute un nouveau champ à chaque clic sur le lien d'ajout
        $('#add_ingredient').click(
            function() {
                add_ingredient();
                return false;
            }
        );

        $('#fd_livrederecettesbundle_recipetype_document_file').after('<button id="file_button" class="btn btn-primary">Choisir fichier</button>');
        $('#fd_livrederecettesbundle_recipetype_document_file').css('display', 'none');

        $('#file_button').click(function(){
            $("#fd_livrederecettesbundle_recipetype_document_file").click();
        });

        var allowedTypes = ['png', 'jpg', 'jpeg', 'gif'],
            $fileInput = $('#fd_livrederecettesbundle_recipetype_document_file'),
            $prev = $('#previewImage');

        function createPreviewThumbnail(file) {

            var reader = new FileReader();

            reader.onload = function() {
                var imgElement = document.createElement('img');
                imgElement.style.width = '64px';
                imgElement.style.height = 'auto';
                imgElement.src = this.result;

                if ($('#previewImage i').length !== 0) {
                    $('#previewImage i').remove();
                }
                if ($('#previewImage img').length !== 0) {
                    $('#previewImage img').remove();
                }

                $prev.append(imgElement);
            }

            reader.readAsDataURL(file);
        }

        $fileInput.change( function() {

            var files = this.files;
            var filesLen = files.length;
            var imgType;

            for (var i = 0 ; i < filesLen ; i++) {

                imgType = files[i].name.split('.');
                imgType = imgType[imgType.length - 1];

                if(allowedTypes.indexOf(imgType) !== -1) {
                    createPreviewThumbnail(files[i]);
                }

            }

        });
    }
);
