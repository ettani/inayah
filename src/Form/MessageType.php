<?php


namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Gregwar\CaptchaBundle\Type\CaptchaType;


class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fullname', TextType::class, [
                'label' => 'Votre Nom et Prénom'
            ])
            ->add('email', EmailType::class, [
                'label' => 'Adresse email'
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Votre Message'
            ])            ->add('captcha', CaptchaType::class)


            ->add('submit', SubmitType::class, [
                'label' => "Envoyez!"
            ]);

    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }

    public function getBlockPrefix()
    {
        return 'post';
    }
}