<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Color;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('label')
            ->add('parent', EntityType::class, [
                'class' => Category::class
            ])
            ->add('color', EntityType::class, [
                'class' => Color::class,
                'label' => 'Sélectionnez une couleur existante'
            ])
            ->add('bgColorPicker', ColorType::class, [
                'label' => 'Fond',
                'mapped' => false
            ])
            ->add('textColorPicker', ColorType::class, [
                'label' => 'Texte',
                'mapped' => false
            ])
            ->add('submitColor', SubmitType::class, [
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
