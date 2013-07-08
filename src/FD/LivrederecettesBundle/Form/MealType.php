<?php

namespace FD\LivrederecettesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MealType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('recipe', 'entity', array(
                    'class' => 'FDLivrederecettesBundle:Recipe',
                    'property' => 'title',
                    'label' => 'Recette',
                    'empty_value' => 'Sélectionner une recette'))
            ->add('mealType', 'entity', array(
                    'class' => 'FDLivrederecettesBundle:MealType',
                    'property' => 'name',
                    'label' => 'Type de repas',
                    'empty_value' => 'Sélectionner un type de repas'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FD\LivrederecettesBundle\Entity\Meal'
        ));
    }

    public function getName()
    {
        return 'fd_livrederecettesbundle_mealtype';
    }
}
