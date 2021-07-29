<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Color;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('label', TextType::class, [
                'label'=> 'Nom de la catégorie',
                'attr' => ['placeholder' => 'Saisir un nom']
            ])
            ->add('parent', EntityType::class, [
                'class' => Category::class,
                'label' => 'Définir comme sous catégorie de:',
                'placeholder' => 'Choisir une catégorie parente',
                'required' => false,
                'choices' => null
            ])
            ->add('color', EntityType::class, [
                'class' => Color::class,
                'attr' => ['class' => 'select-color'],
                'label' => 'Sélectionnez une couleur existante...',
                'placeholder' => 'Choisir une couleur',
                'required' => false,
                'choices' => null
            ])
            ->add('bgColorPicker', ColorType::class, [
                'label' => 'Fond',
                'data' => '#f0f5fa',
                'mapped' => false
            ])
            ->add('textColorPicker', ColorType::class, [
                'label' => 'Texte',
                'data' => '#212529',
                'mapped' => false
            ])
            ->add('submitNewCategory', SubmitType::class, [
                'label' => 'Créer la catégorie'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Category::class,
        ]);
    }
}
