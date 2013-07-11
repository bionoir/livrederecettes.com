<?php

namespace FD\LivrederecettesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MenuType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', array('label' => 'Nom du menu'))
            ->add('dated', 'checkbox', array('label' => 'Menu daté ?',
                                             'required' => false))
            ->add('dateFrom', 'date', array('format' => 'dd-MMMM-yyyy'))
            ->add('dateTo', 'date', array('format' => 'dd-MMMM-yyyy'))
            ->add('meals', 'collection', array('label' => 'Liste des repas',
                                                     'type'=> new MealType(),
                                                     'allow_add' => true,
                                                     'allow_delete' => true,
                                                     'by_reference' => false))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FD\LivrederecettesBundle\Entity\Menu' ,
            'cascade_validation' => true
        ));
    }

    public function getName()
    {
        return 'fd_livrederecettesbundle_menutype';
    }
}
