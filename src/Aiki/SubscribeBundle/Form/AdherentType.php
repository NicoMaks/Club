<?php

namespace Aiki\SubscribeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdherentType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('number')
            ->add('date')
            ->add('grade')
            ->add('ischild')
            ->add('persona', new PersonaType())
            ->add('adress', new AdressAddType())
            ->add('mail', new MailType())
            ->add('tel', new TelType())
            ->add('tutor', new TutorType())
            ->add('school', new SchoolType())
            ->add('ice', new IceType())
            ->add('approval', new ApprovalType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Aiki\SubscribeBundle\Entity\Adherent'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'aiki_subscribebundle_adherent';
    }
}
