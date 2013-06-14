<?php

namespace FD\LivrederecettesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text')
            ->add('seasonStart', 'date', array('format' => 'dd-MMMM-yyyy'))
            ->add('seasonEnd', 'date', array('format' => 'dd-MMMM-yyyy'))
            ->add('type', 'entity', array(
                    'class' => 'FDLivrederecettesBundle:Type',
                    'property' => 'value',
                    'empty_value' => 'Sélectionner le type du produit'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FD\LivrederecettesBundle\Entity\Product'
        ));
    }

    public function getName()
    {
        return 'fd_livrederecettesbundle_producttype';
    }
}
