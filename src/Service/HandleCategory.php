<?php

namespace App\Service;

use App\Entity\User;
use App\Entity\Category;

use App\Repository\CategoryRepository;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\Security\Core\Security;

/**
 * Some methods to handle the categories
 */
class HandleCategory
{
    private CategoryRepository $categoryRepository;
    private FlashBagInterface $flashbag;
    private User $user;

    public function __construct(CategoryRepository $categoryRepository, FlashBagInterface $flashBagInterface, Security $security)
    {
        $this->categoryRepository = $categoryRepository;
        $this->flashbag = $flashBagInterface;
        $this->user = $security->getUser();
    }

    /**
     * Verify if the subCategory isn't already bound to the defined parent
     * and if the category doesn't exist yet if no parent defined
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return self
     */
    public function verifyIfCategoryRelationExist(Category $category) :self
    {
        if (!$category->getParent() && $exist = $this->categoryRepository->findCategoriesByNoParent(
            $category->getLabel()
        )) {
            $this->flashbag->add('error', 'La catégorie<b> ' . $category->getLabel() . ' </b>est déjà existante !');
            return $this;
        }

        if ( $exist = $this->categoryRepository->findOneBy([
            'label' => $category->getLabel(),
            'parent' => $category->getParent(),
            'user' => $this->user->getId()
            ])) {
            $this->flashbag->add(
                'error',
                'La catégorie<b> ' . $exist->getLabel() . ' </b>est déjà associée à la catégorie parente<b> ' . $exist->getParent()->getLabel() . ' </b>!'
            );
        }

        return $this;
    }

    /**
     * Add an error message flash if the parent category already exist
     *
     * @param \App\Entity\Category $category
     * @return self
     */
    public function checkIfSameParent(Category $category): self
    {
        $parent = $category->getParent() ? $category->getParent()->getId() : null;
        if ($this->categoryRepository->findDuplicateCategories(
                $category->getLabel(),
                $category->getId(),
                $parent
        )) {
            $this->flashbag->add('error', "Erreur! la catégorie parente sélectionnée contient déjà une catégorie de même nom.");
        }

        return $this;
    }
}
