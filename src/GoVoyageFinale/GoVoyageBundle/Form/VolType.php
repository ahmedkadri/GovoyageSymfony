<?php

namespace GoVoyageFinale\GoVoyageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VolType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prix')
            ->add('nombreplace')
            ->add('datevol')
            ->add('paysdestination')
            ->add('paysdepart')
            ->add('description')
            ->add('nomvol')
            ->add('idUser')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GoVoyageFinale\GoVoyageBundle\Entity\Vol'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'govoyagefinale_govoyagebundle_vol';
    }
}
