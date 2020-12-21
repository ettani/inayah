<?php


namespace App\Form;




use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\ChoiceList\ChoiceList;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'Prénom'
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Nom'
            ])
            ->add('adress', TextType::class, [
                'label' => 'adresse'
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville'
            ])
            ->add('cp', IntegerType::class, [
                'label' => 'Code Postale'
            ])
            ->add('email', EmailType::class, [
                'label' => 'Adresse Email'
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Mot de Passe'
            ])
            ->add('roles', ChoiceType::class, [
                'label' => 'Choix',
                'expanded' => true,
                'multiple' => true,
                'choices' => [
                    'Bénévole' => 'ROLE_BENEVOLE',
                    'Demandeur' => 'ROLE_DEMANDEUR',
                ],
            ])
            ->add('tel', IntegerType::class, [
                'label' => 'Téléphone'
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Déscription'
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Enregistrer'
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