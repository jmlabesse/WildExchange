<?php

namespace XTeam\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->remove('email')->remove('username')->remove('plainPassword');

        $builder
            ->add('email', 'Symfony\Component\Form\Extension\Core\Type\EmailType', array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
            ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle'))
            ->add('nom', 'Symfony\Component\Form\Extension\Core\Type\TextType', array('label' => 'form.lastname', 'translation_domain' => 'FOSUserBundle'))
            ->add('prenom', 'Symfony\Component\Form\Extension\Core\Type\TextType', array('label' => 'form.firstname', 'translation_domain' => 'FOSUserBundle'))
            ->add('plainPassword', 'Symfony\Component\Form\Extension\Core\Type\RepeatedType', array(
                'type' => 'Symfony\Component\Form\Extension\Core\Type\PasswordType',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'form.password'),
                'second_options' => array('label' => 'form.password_confirmation'),
                'invalid_message' => 'fos_user.password.mismatch',
            ));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    public function getName()
    {
        return $this->getBlockPrefix();
    }
}