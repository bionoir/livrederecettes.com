<?php
// src/FD/LivrederecettesBundle/Form/DocumentType.php

namespace FD\LivrederecettesBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class DocumentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('file', 'file')
        ;
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array('data_class' => 'FD\LivrederecettesBundle\Entity\Document'));
    }
    
    public function getName() {
        return 'fd_livrederecettesbundle_documenttype';
    }
}