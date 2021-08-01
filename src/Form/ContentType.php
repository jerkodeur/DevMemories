<?php

namespace App\Form;

use App\Entity\Type;
use App\Entity\User;
use App\Entity\Content;
use App\Entity\Category;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Security\Core\Security;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContentType extends AbstractType
{
    private User $user;

    public function __construct(Security $security)
    {
        $this->user = $security->getUser();
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', EntityType::class, [
                'class' => Type::class,
                'label' => 'Choisir un type de contenu à ajouter',
                'placeholder' => 'Choisir',
                'required' => true,
                'choices' => null,
                'choice_label' => 'label',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('t')
                        ->orderBy('t.label', 'asc')
                    ;
                }
            ])
            ->add('title', TextType::class, [
                'label' => 'Titre',
                'attr' => ['placeholder' => 'Choisissez un titre']
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => ['placeholder' => 'Décrivez rapidement votre contenu']
            ])
            ->add('content', CKEditorType::class, [
                'label' => 'Contenu à ajouter'
            ])
            ->add('private', CheckboxType::class, [
                'label' => 'Le contenu doit-il être privé ?',
                'required' => false
            ])
            ->add('published', CheckboxType::class, [
                'label' => 'Publier le contenu ?',
                'required' => false
            ])
            ->add('categories', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'label',
                'group_by' => 'parent',
                'multiple' => true,
                'label' => 'Associer à une catégorie',
                'placeholder' => 'Choisir une catégorie',
                'required' => false,
                'choices' => null,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->where('c.user = :user')
                        ->orderBy('c.parent', 'asc')
                        ->setParameter(':user', $this->user->getId())
                    ;
                }
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Créer une nouveau contenu',
                'row_attr' => ['style' => 'text-align: end']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Content::class
        ]);
    }
}
