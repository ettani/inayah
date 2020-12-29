<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre de l\'article'
            ])

            ->add('content', TextareaType::class, [
                'label' => "Contenu de l'article"
            ])
            ->add('image', FileType::class, [
                'label' => "Illustration",
                'attr' => [
                    'class' => 'dropify'
                ]
            ])
            ->add('image2', FileType::class, [
                'label' => "Illustration",
                'attr' => [
                    'class' => 'dropify'
                ]
          ])
           ->add('image3', FileType::class, [
               'label' => "Illustration",
               'attr' => ['
               class' => 'dropify'
               ]])
            ->add('image4', FileType::class, [
                'label' => "Illustration",
                'attr' => [
                    'class' => 'dropify'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Publier cet Article'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }

    public function getBlockPrefix()
    {
        return 'post';
    }


}
