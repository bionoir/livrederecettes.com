<?php

namespace FD\LivrederecettesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MealTypeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('label' => 'Type de repas'))
        ;
    }

    /*public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FD\LivrederecettesBundle\Entity\MealType'
        ));
    }*/
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FD\LivrederecettesBundle\Entity\MealType'
        ));
    }

    public function getName()
    {
        return 'fd_livrederecettesbundle_mealtypetype';
    }
}
