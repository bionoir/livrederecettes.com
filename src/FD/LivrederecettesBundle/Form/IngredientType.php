<?php

namespace FD\LivrederecettesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IngredientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /*$builder
            ->add('quantity', 'number', array('label' => 'Quantité' ))
            ->add('product', 'entity', array(
                    'class' => 'FDLivrederecettesBundle:Product',
                    'property' => 'name',
                    'label' => 'Produit',
                    'empty_value' => 'Sélectionner un produit'))
            ->add('unit', 'entity', array(
                    'class' => 'FDLivrederecettesBundle:Unit',
                    'property' => 'value',
                    'label' => 'Unité de mesure',
                    'empty_value' => 'Sélectionner une unité de mesure'))
        ;*/
        $builder
            ->add('quantity', 'number', array('label' => 'Quantité' ))
            ->add('product', 'entity', array(
                    'class' => 'FDLivrederecettesBundle:Product',
                    'choice_label' => 'name',
                    'label' => 'Produit',
                    'empty_value' => 'Sélectionner un produit'))
            ->add('unit', 'entity', array(
                    'class' => 'FDLivrederecettesBundle:Unit',
                    'choice_label' => 'value',
                    'label' => 'Unité de mesure',
                    'empty_value' => 'Sélectionner une unité de mesure'))
        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FD\LivrederecettesBundle\Entity\Ingredient'
        ));
    }

    public function getName()
    {
        return 'fd_livrederecettesbundle_ingredienttype';
    }
}
