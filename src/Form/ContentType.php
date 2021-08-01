<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Content;
use App\Entity\Type;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre',
                'attr' => ['placholder' => 'Choisissez un titre']
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => ['placholder' => 'Décrivez rapidement votre contenu']
            ])
            ->add('content', CKEditorType::class, [
                'label' => 'Contenu à ajouter'
            ])
            ->add('private', CheckboxType::class, [
                'label' => 'Le contenu doit-il être privé ?'
            ])
            ->add('published', CheckboxType::class, [
                'label' => 'Publier le contenu ?'
            ])
            ->add('type', EntityType::class, [
                'class' => Type::class,
                'label' => 'Type de contenu',
                'placeholder' => 'Choisir un type',
                'required' => true,
                'choices' => null,
                'choice_label' => 'label',
            ])
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'label',
                'group_by' => 'parent',
                'multiple' => true,
                'label' => 'Associer à une catégorie',
                'placeholder' => 'Choisir une catégorie',
                'required' => false,
                'choices' => null
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Créer une nouveau contenu'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Content::class,
        ]);
    }
}
