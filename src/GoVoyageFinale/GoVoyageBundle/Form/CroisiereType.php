<?php

namespace GoVoyageFinale\GoVoyageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CroisiereType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomcrois')
            ->add('prix')
            ->add('nombreplace')
            ->add('datedepart')
            ->add('nbjour')
            ->add('villedepart')
            ->add('villedestination')
            ->add('description')
            ->add('iduser')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GoVoyageFinale\GoVoyageBundle\Entity\Croisiere'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'govoyagefinale_govoyagebundle_croisiere';
    }
}
