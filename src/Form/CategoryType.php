<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Color;
use App\Entity\User;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;

class CategoryType extends AbstractType
{
    private User $user;

    public function __construct(Security $security)
    {
        $this->user = $security->getUser();
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('label', TextType::class, [
                'label'=> 'Nom de la catégorie',
                'attr' => ['placeholder' => 'Saisir un nom']
            ])
            ->add('parent', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'label',
                'group_by' => 'parent',
                'attr' => ['style' => 'color: #7b8ab8'],
                'label' => 'Définir comme sous catégorie de:',
                'placeholder' => 'Choisir une catégorie parente',
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
            ->add('color', EntityType::class, [
                'class' => Color::class,
                'attr' => ['class' => 'select-color', 'style' => 'color: #7b8ab8'],
                'label' => 'Sélectionnez une couleur existante...',
                'placeholder' => 'Choisir une couleur',
                'required' => false,
                'choices' => null,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->where('c.user = :user')
                        ->orderBy('c.updated_at', 'desc')
                        ->setParameter(':user', $this->user->getId())
                    ;
                }
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
