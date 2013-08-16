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
            ->add('name', 'text', array('label' => 'Nom du produit'))
            ->add('seasonStart', 'date', array('format' => 'dd-MMMM-yyyy',
                                                'label' => 'Début saison'))
            ->add('seasonEnd', 'date', array('format' => 'dd-MMMM-yyyy',
                                                'label' => 'Fin saison'))
            ->add('productType', 'entity', array(
                    'class' => 'FDLivrederecettesBundle:ProductType',
                    'property' => 'value',
                    'label' => 'Type de produit',
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
