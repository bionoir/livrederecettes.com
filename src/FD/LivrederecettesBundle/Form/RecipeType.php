<?php

namespace FD\LivrederecettesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use FD\LivrederecettesBundle\Form\IngredientType;

class RecipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', array('label' => 'Nom de la recette'))
            ->add('description', 'textarea', array('label' => 'Description'))
            ->add('difficulty', 'text', array('label' => 'Difficulté'))
            ->add('preparation', 'time', array('label' => 'Temps de préparation',
                                                'widget' => 'single_text'
                                                ))
            ->add('document', new DocumentType(), array('required' => false))
            ->add('ingredients', 'collection', array('label' => 'Liste d\'ingredients',
                                                     'type'=> new IngredientType(),
                                                     'allow_add' => true,
                                                     'allow_delete' => true,
                                                     'by_reference' => false ))
            //->add('submit', 'submit')
        ;
    }

    /*public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FD\LivrederecettesBundle\Entity\Recipe',
            'cascade_validation' => true
        ));
    }*/
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FD\LivrederecettesBundle\Entity\Recipe',
            'cascade_validation' => TRUE
        ));
    }

    public function getName()
    {
        return 'fd_livrederecettesbundle_recipetype';
    }
}
