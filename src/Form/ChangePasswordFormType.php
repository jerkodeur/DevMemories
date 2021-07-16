<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class ChangePasswordFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options' => [
                    'attr' => ['autocomplete' => 'new-password'],
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Vous devez renseigner un mot de passe',
                        ]),
                        new Length([
                            'min' => 6,
                            'minMessage' => 'Votre mot de passe doit contenir au moins {{ limit }} caractères',
                            // max length allowed by Symfony for security reasons
                            'max' => 4096,
                        ]),
                    ],
                    'label' => 'Mot de passe *',
                    'label_attr' =>  ['class' => 'form-label'],
                    'attr' => [
                        'autocomplete' => 'new-password',
                        'placeholder' => 'Votre nouveau mot de passe'
                    ],
                    'row_attr' => ['class' => 'row'],
                ],
                'second_options' => [
                    'label_attr' =>  ['class' => 'form-label'],
                    'attr' => [
                        'autocomplete' => 'new-password',
                        'placeholder' => 'Confirmer votre mot de passe'
                    ],
                    'label' => 'Répétez le mot de passe *',
                    'row_attr' => ['class' => 'row'],
                ],
                'invalid_message' => 'Les deux mots de passe ne sont pas identiques',
                // Instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Réinitialiser mon mot de passe',
                'row_attr' => ['class' => 'row'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([]);
    }
}
