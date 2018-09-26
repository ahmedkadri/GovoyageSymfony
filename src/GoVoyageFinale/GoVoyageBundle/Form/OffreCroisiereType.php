<?php

namespace GoVoyageFinale\GoVoyageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OffreCroisiereType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('reduction')
            ->add('nomcrois')
            ->add('prix')
            ->add('dateDebut')
            ->add('dateFin')
            ->add('nombreplace')
            ->add('datedepart')
            ->add('nbjour')
            ->add('villedepart')
            ->add('villedestination')
            ->add('description')
            
            ->add('Ajouter','submit')
                ->getForm();
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GoVoyageFinale\GoVoyageBundle\Entity\OffreCroisiere'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'govoyagefinale_govoyagebundle_offrecroisiere';
    }
}
