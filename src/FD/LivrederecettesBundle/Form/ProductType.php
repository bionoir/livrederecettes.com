<?php

namespace FD\LivrederecettesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
                    'choice_label' => 'value',
                    'label' => 'Type de produit',
                    'empty_value' => 'Sélectionner le type du produit'))
        ;
        
        if (isset($options['attr']['normalWindow'])) {
            $builder->add('save', 'submit', array('attr' => array('class' => 'btn btn-primary')));
        }
    }
    
    public function configureOptions(OptionsResolver $resolver)
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
