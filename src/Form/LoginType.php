<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class LoginType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('identifiant', IntegerType::class, [
            'label' => 'indentifiant',
            'attr' => ['placeholder' => 'Identifiant']
        ])
        ->add('password', RepeatedType::class, [
            'type' => PasswordType::class,
            'invalid_message' => 'Le mot de passe de confirmation ne correspond pas',
            'options' => ['attr' => ['class' => 'password-field']],
            'required' => true,
            'first_options'  => ['label' => 'Mot de passe', 'attr' =>['placeholder'=>'Saisir votre mot de passe']],
            'second_options' => ['label' => 'Confirmer mot de passe', 'attr' =>['placeholder'=>'Confirmer votre mot de passe']],
        ])
        ->add(
            'submit',
            SubmitType::class,
            [
                'label' => 'S\'inscrire'
            ]
        );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
