<?php

namespace GoVoyageFinale\GoVoyageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AthleteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('texte')
            ->add('ahmed')
            ->add('number')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GoVoyageFinale\GoVoyageBundle\Entity\Athlete'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'govoyagefinale_govoyagebundle_athlete';
    }
}
