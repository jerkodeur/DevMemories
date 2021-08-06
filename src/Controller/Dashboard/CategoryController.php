<?php

namespace App\Controller\Dashboard;

use App\Entity\Category;
use App\Entity\Color;

use App\Repository\CategoryRepository;
use App\Repository\ColorRepository;

use App\Form\CategoryType;
use App\Form\ColorsType;

use App\Service\HandleCategory;
use App\Service\HandleColor;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('dashboard/categories', name: 'dashboard_category_')]
/**
 * Handle the dashboard category page witch include categories and colors management
 */
class CategoryController extends AbstractController
{
    private EntityManagerInterface $em;
    private ColorRepository $colorRepository;
    private CategoryRepository $categoryRepository;
    private HandleColor $handleColor;
    private HandleCategory $handleCategory;

/**
 * Inject dependencies on class initialization
 *
 * @param \Doctrine\ORM\EntityManagerInterface $em
 * @param \App\Repository\CategoryRepository $categoryRepository
 * @param \App\Repository\ColorRepository $colorRepository
 * @param \App\Service\HandleColor $handleColor
 * @param \App\Service\HandleCategory $handleCategory
 */
    public function __construct(
        EntityManagerInterface $em,
        CategoryRepository $categoryRepository,
        ColorRepository $colorRepository,
        HandleColor $handleColor,
        HandleCategory $handleCategory)
    {
        $this->em = $em;
        $this->colorRepository = $colorRepository;
        $this->categoryRepository = $categoryRepository;
        $this->handleColor = $handleColor;
        $this->handleCategory = $handleCategory;
    }

    #[Route('/', name: 'list')]
    /**
     * Category dashboard home page
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request): Response
    {
        $color = new Color();
        $category = new Category();

        // Create each form needed
        $color_edit_form = $this->get('form.factory')->createNamed('color_edit_form', ColorsType::class, $color);
        $color_new_form = $this->get('form.factory')->createNamed('color_new_form', ColorsType::class, $color);
        $category_form = $this->createForm(CategoryType::class, $category);

        $color_new_form->handleRequest($request);
        $color_edit_form->handleRequest($request);
        $category_form->handleRequest($request);

        // Handle the category form
        if ($category_form->isSubmitted() && $category_form->isValid()) {
            $this->handleNewCategoryRequest($request, $category);

            if (!$this->get('session')->getFlashBag()->peek('error', [])) {
                $this->addFlash('success', 'La nouvelle catégorie a bien été ajoutée');
                return $this->redirect($this->generateUrl('dashboard_category_list'));
            } else {
                $this->addFlash('error', 'Des erreurs ont été rencontrées');
            }
        }

        // Handle the new color form
        if ($color_new_form->isSubmitted() && $color_new_form->isValid()) {

            $this->handleNewColorRequest($color);

            if (!$this->get('session')->getFlashBag()->peek('error', [])) {
                return $this->redirect($this->generateUrl('dashboard_category_list'));
            } else {
                $this->redirectToRoute('dashboard_category_list');
            }
        }

        // Handle the edit color
        if ($color_edit_form->isSubmitted() && $color_edit_form->isValid()) {

            $color = $this->colorRepository->find($request->get('color_id'));
            $color->setCodeBg($request->get('color_edit_form')['code_bg']);
            $color->setCodeText($request->get('color_edit_form')['code_text']);

            $this->em->persist($color);
            $this->em->flush();

            $this->addFlash('success', 'La couleur a été modifiée avec succès !');
        }

        // Return the category view with data and forms
        return $this->render('dashboard/category/home.html.twig', [
            'categories' => $this->categoryRepository->findUserParentCategories($this->getUser()->getId()),
            'colors' => $this->colorRepository->findBy(['user' => $this->getUser()]),
            'color_new_form' => $color_new_form->createView(),
            'color_edit_form' => $color_edit_form->createView(),
            'category_form' => $category_form->createView()
        ]);
    }

    /**
     * Handle the new category request
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \App\Entity\Category $category
     *
     * @return self
     */
    public function handleNewCategoryRequest(Request $request, Category $category) :self
    {
        $this->handleCategory->verifyIfCategoryRelationExist($category);
        if($this->get('session')->getFlashBag()->peek('error', [])) return $this;

        if (!$category->getColor()) $this->handleColor->setCategoryColor($request, $category);

        $category->setUser($this->getUser());

        $this->em->persist($category);
        $this->em->flush();

        return $this;
    }

    /**
     * Handle the color request
     *
     * @param \App\Entity\Color $color
     *
     * @return self
     */
    public function handleNewColorRequest(Color $color) :self
    {
        $existColor = $this->handleColor->GetExistingUserColor($color);

        if (isset($existColor)) {
            $this->addFlash(
                'error',
                "Erreur ! La couleur choisie n'a pas pu été crée, elle existait déjà !"
            );
            return $this;
        };

        $errors = $this->handleColor->validateColor($color);
        if (count($errors) > 0) return $this;

        $color->setUser($this->getUser());

        $this->em->persist($color);
        $this->em->flush();

        $this->addFlash('success', 'La nouvelle couleur a été créee !');

        return $this;
    }

    /**
     * Handle the requests for the edition page of the categories
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \App\Entity\Category $category
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[Route('/edit/{slug}', name: 'edit')]
    public function edit(Request $request, Category $category): Response
    {
        $category = $request->get('category');

        $category_form = $this->createForm(CategoryType::class, $category);
        $category_form->handleRequest($request);

        if ($category_form->isSubmitted() && $category_form->isValid()) {
            $this->handleCategory->checkIfSameParent($category);

            if (!$category->getColor()) $this->handleColor->setCategoryColor($request, $category);

            if (!$this->get('session')->getFlashBag()->peek('error', [])) {
                $this->em->flush();
                $this->addFlash('success', 'La catégorie a bien été modifiée');

                return $this->redirectToRoute('dashboard_category_list');
            } else {
                $this->addFlash('error', 'Des erreurs ont été rencontrées');
            }
        }

        return $this->render('dashboard/category/edit.html.twig', [
            'category' => $request->get('category'),
            'category_form' => $category_form->createView(),
            'colors' => $this->colorRepository->findBy(['user' => $this->getUser()]),
        ]);
    }

    /**
     * Handle the delete category requests
     *
     * @param \App\Entity\Category $category
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[Route('/delete/{slug}', name: 'delete')]
    public function delete(Category $category): Response
    {
        $this->getDoctrine()->getManager()->remove($category);
        $this->getDoctrine()->getManager()->flush();

        $this->addFlash('success', 'La catégorie a été supprimée avec succès !');

        return $this->redirectToRoute('dashboard_category_list');
    }
}
