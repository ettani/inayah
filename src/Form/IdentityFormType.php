<?php

namespace App\Form;

use App\Entity\Identity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IdentityFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Dénommination'
            ])
            ->add('adress', TextType::class, [
                'label' => 'Adresse'
            ])
            ->add('cp', TextType::class, [
                'label' => 'Code postal'
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville'
            ])
            ->add('email', TextType::class, [
                'label' => 'Email'
            ])
            ->add('tel', TextType::class, [
                'label' => 'Téléphone'
            ])
            ->add('logo', FileType::class, [
                'label' => 'Logo',
                'attr' => [
                    'class' => 'dropify'
                ]
            ])
            ->add('headerpic', FileType::class, [
                'label' => 'Illustration du menu de navigation',
                'attr' => [
                    'class' => 'dropify'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Mettre à jour'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Identity::class,
        ]);
    }
}
