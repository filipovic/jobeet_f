<?php

namespace Ens\JobeetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Ens\JobeetBundle\Entity\Job;

class JobType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('company')
            ->add('file', 'file', array('label' => 'Company logo', 'required' => false))
            ->add('category')
            ->add('type', 'choice', array('choices' => Job::getTypes(), 'expanded' => true))
            ->add('position')
            ->add('location')
            ->add('description')
            ->add('how_to_apply', null, array('label' => 'How to apply?'))
            ->add('url')
            ->add('email')
            ->add('is_public', null, array('label' => 'Public?'));
        
        
        
            //->add('logo')
            //->add('is_public')
            //->add('how_to_apply')
             //->add('type')
            //->add('expires_at')
            //->add('created_at')
            //->add('updated_at')
           //->add('is_activated')
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ens\JobeetBundle\Entity\Job'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ens_jobeetbundle_jobtype';
    }
}
