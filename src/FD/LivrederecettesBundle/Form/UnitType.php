<?php

namespace FD\LivrederecettesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UnitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name' , 'text', array('label' => 'Nom de l\'unité'))
            ->add('value', 'text', array('label' => 'Abréviation ou symbole'))
        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FD\LivrederecettesBundle\Entity\Unit'
        ));
    }

    public function getName()
    {
        return 'fd_livrederecettesbundle_unittype';
    }
}
