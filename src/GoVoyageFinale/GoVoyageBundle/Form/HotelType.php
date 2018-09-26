<?php

namespace GoVoyageFinale\GoVoyageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HotelType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomhotel')
            ->add('nbetoile')
            ->add('description')
            ->add('chambretype')
            ->add('ville')
            ->add('nombreplace')
            ->add('prixpc')
            ->add('prixdp')
            ->add('prixlpd')
            ->add('photo')
            ->add('iduser')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GoVoyageFinale\GoVoyageBundle\Entity\Hotel'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'govoyagefinale_govoyagebundle_hotel';
    }
}
