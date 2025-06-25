<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('first_name', TextType::class, [
                'label' => 'Nom',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('last_name', TextType::class, [
                'label' => 'Prénom',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('date_of_birth', DateType::class, [
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'label' => 'Date de naissance',
            ])
            ->add('phone_number', TextType::class, [
                'required' => false,
                'attr' => ['class' => 'form-control'],
                'label' => 'Téléphone',
            ])
            ->add('address', TextType::class, [
                'required' => false,
                'attr' => ['class' => 'form-control'],
                'label' => 'Adresse',
            ])
            ->add('postal_code', TextType::class, [
                'required' => false,
                'attr' => ['class' => 'form-control'],
                'label' => 'Code postal',
            ])
            ->add('city', TextType::class, [
                'required' => false,
                'attr' => ['class' => 'form-control'],
                'label' => 'Ville',
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'attr' => ['class' => 'p-3 m-1'],
                'constraints' => [
                    new IsTrue([
                        'message' => 'Vous devez accepter les conditions.',
                    ]),
                ],
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'required' => true,
                'first_options' => [
                    'label' => 'Mot de passe',
                    'attr' => ['class' => 'form-control','id'=>'plainPasswordOne']
                ],
                'second_options' => [
                    'label' => 'Confirmation du mot de passe',
                    'attr' => ['class' => 'form-control','id'=>'plainPasswordTwo']
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Merci d’entrer un mot de passe',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit faire au moins {{ limit }} caractères',
                        'max' => 4096,
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
