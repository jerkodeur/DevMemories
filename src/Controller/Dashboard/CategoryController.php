<?php

namespace App\Controller\Dashboard;

use App\Entity\Color;
use App\Entity\Category;
use App\Form\ColorsType;
use App\Form\CategoryType;
use App\Repository\ColorRepository;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('dashboard/categories', name: 'dashboard_category_')]
class CategoryController extends AbstractController
{
    private ValidatorInterface $validator;
    private EntityManagerInterface $em;
    private ColorRepository $colorRepository;
    private CategoryRepository $categoryRepository;

    public function __construct(EntityManagerInterface $em, CategoryRepository $categoryRepository, ColorRepository $colorRepository, ValidatorInterface $validator)
    {
        $this->em = $em;
        $this->colorRepository = $colorRepository;
        $this->categoryRepository = $categoryRepository;
        $this->validator = $validator;
    }

    #[Route('/', name: 'list')]
    public function index(Request $request): Response
    {
        $color = new Color();
        $category = new Category();

        $color_edit_form = $this->get('form.factory')->createNamed('color_edit_form', ColorsType::class, $color);
        $color_new_form = $this->get('form.factory')->createNamed('color_new_form', ColorsType::class, $color);
        $category_form = $this->createForm(CategoryType::class, $category);

        $color_new_form->handleRequest($request);
        $color_edit_form->handleRequest($request);
        $category_form->handleRequest($request);

        if ($category_form->isSubmitted() && $category_form->isValid()) {
            $this->handleNewCategoryRequest($request, $category);

            if (!$this->get('session')->getFlashBag()->peek('error', [])) {
                return $this->redirect($this->generateUrl('dashboard_category_list'));
            } else {
                $this->redirectToRoute('dashboard_category_list');
            }
        }

        if ($color_new_form->isSubmitted() && $color_new_form->isValid()) {

            $this->handleNewColorRequest($request, $color);

            if (!$this->get('session')->getFlashBag()->peek('error', [])) {
                return $this->redirect($this->generateUrl('dashboard_category_list'));
            } else {
                $this->redirectToRoute('dashboard_category_list');
            }
        }

        if ($color_edit_form->isSubmitted() && $color_edit_form->isValid()) {

            $color = $this->colorRepository->find($request->get('color_id'));
            $color->setCodeBg($request->get('color_edit_form')['code_bg']);
            $color->setCodeText($request->get('color_edit_form')['code_text']);

            $this->em->persist($color);
            $this->em->flush();

            $this->addFlash('success', 'La couleur a été modifiée avec succès !');
        }

        return $this->render('dashboard/category/list.html.twig', [
            'categories' => $this->categoryRepository->findUserParentCategories($this->getUser()->getId()),
            'colors' => $this->colorRepository->findBy(['user' => $this->getUser()]),
            'color_new_form' => $color_new_form->createView(),
            'color_edit_form' => $color_edit_form->createView(),
            'category_form' => $category_form->createView()
        ]);
    }

    /**
     * Handle the category request
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \App\Entity\Category $category
     */
    public function handleNewCategoryRequest(Request $request, Category $category)
    {

        if ($this->verifyIfCategoryRelationExist($request)) return;
        // handle the category color
        if(!$category->getColor()) {
            $params = $request->request->all();
            $color = $this->verifyIfColorExist($params['category']['bgColorPicker'], $params['category']['textColorPicker']);
            // dd($color);

            if($color) {
                $this->addFlash('warning', "La couleur n'a pas été ajoutée car elle existait déjà");
                $category->setColor($color);
            } else {
                $this->addFlash('success', "Une nouvelle couleur a été ajoutée en base de donnée");
                $persistColor = $this->persistColor($params['category']['bgColorPicker'], $params['category']['textColorPicker']);
                $category->setColor($persistColor);
            }
        }

        $category->setUser($this->getUser());
        $this->em->persist($category);
        $this->em->flush();

        if (!$this->get('session')->getFlashBag()->peek('error', [])) {
            return $this->addFlash('success', 'La nouvelle catégorie a bien été ajoutée');
        } else {
            return $this->addFlash('error', 'Des erreurs ont été rencontrées');
        }
    }

    /**
     * Handle the color request
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \App\Entity\Color $color
     */
    public function handleNewColorRequest(Request $request, Color $color)
    {
        $existColor = $this->verifyIfColorExist($color->getCodeBg(), $color->getCodeText());

        if (isset($existColor)) {
            $this->addFlash(
                'error',
                "Erreur ! La couleur choisie n'a pas pu été crée, elle existait déjà !"
            );
            return;
        };

        if ($this->validateColor($color)) return;

        $color->setUser($this->getUser());

        $this->em->persist($color);
        $this->em->flush();

        $this->addFlash('success', 'La nouvelle couleur a été créee !');
    }

    /**
     * Verify if the subCategory isn't already bound to the defined parent
     * and if unique if no parent bonud
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     */
    public function verifyIfCategoryRelationExist(Request $request)
    {
        if (
            $exist = $this->categoryRepository->findOneBy([
                'label' => $request->get('category')['label'],
                'parent' => $request->get('category')['parent'],
                'user' => $this->getUser()->getId()
            ])
        ) {
            $this->addFlash(
                'error',
                'La catégorie<b> ' . $request->get('category')['label'] . ' </b>est déjà associée à la catégorie parente<b> ' . $exist->getParent()->getLabel() . ' </b>!'
            );
        }

        if (
            !$request->get('category')['parent'] &&
            $exist = $this->categoryRepository->findByParentCategories(
                $this->getUser()->getId(),
                $request->get('category')['label']
            )
        ) {
            $this->addFlash(
                'error',
                'La catégorie<b> ' . $request->get('category')['label'] . ' </b>est déjà existante !'
            );
        }
        return $exist;
    }

    // /**
    //  * Define color to the category if already present in database
    //  *
    //  * @param \Symfony\Component\HttpFoundation\Request $request
    //  * @param \App\Entity\Category $category
    //  */
    // public function verifyIfCategoryColorExist(Request $request, Category $category): self
    // {
    //     dd($request);
    //     $this->verifyIfColorExist ? $category->setColor($exist);
    // }

    /**
     * Return the existing color if occured
     *
     * @param string $backgroundColor
     * @param string $textColor
     *
     * @return \App\Entity\Color|null
     */
    public function verifyIfColorExist(string $backgroundColor, string $textColor) :?Color
    {
        $color = $this->colorRepository->findOneBy([
            'code_bg' => $backgroundColor,
            'code_text' => $textColor,
            'user' => $this->getUser()->getId()
        ]);

        return $color;
    }

    /**
     * Check the code color with constraints
     *
     * @param \App\Entity\Color $color
     */
    public function validateColor(Color $color)
    {
        $errors = $this->validator->validate($color);

        if (count($errors) > 0) {
            foreach ($errors as $error) {
                $this->addFlash(
                    'error',
                    $error->getMessage()
                );
            }
            return $errors;
        }
    }

    /**
     * Persist the given color to the database
     *
     * @param string $backgroundColor
     * @param string $textColor
     *
     * @return \App\Entity\Color
     */
    public function persistColor(string $backgroundColor, string $textColor): Color
    {
        $color = new Color();
        $color
            ->setCodeBg($backgroundColor)
            ->setCodeText($textColor)
            ->setUser($this->getUser())
        ;

        $this->em->persist($color);
        // $this->em->flush();

        return $color;
    }

    #[Route('/edit/{id<\d+>}', name: 'edit')]
    public function edit(Request $request, Category $category): Response
    {
        $category = $request->get('category');

        $category_form = $this->createForm(CategoryType::class, $category);
        $category_form->handleRequest($request);

        if($category_form->isSubmitted() && $category_form->isValid()) {
            $this->checkIfSameParent($category);

            if(!$category->getColor()) {
                $params = $request->request->all();
                $color = $this->verifyIfColorExist($params['category']['bgColorPicker'], $params['category']['textColorPicker']);

                if($color) {
                    $this->addFlash('warning', "La couleur n'a pas été ajoutée car elle existait déjà");
                    $category->setColor($color);
                } else {
                    $this->addFlash('success', "Une nouvelle couleur a été ajoutée en base de donnée");
                    $persistColor = $this->persistColor($params['category']['bgColorPicker'], $params['category']['textColorPicker']);
                    $category->setColor($persistColor);
                }
                // dd($category);
                // $category->setColor($color);
            }

            if (!$this->get('session')->getFlashBag()->peek('error', [])) {
                $this->em->flush();
                $this->addFlash('success', 'La nouvelle catégorie a bien été ajoutée');

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

    public function checkIfSameParent(Category $category) {
        $parent = $category->getParent() ? $category->getParent()->getId() : null;
        if (
            $this->categoryRepository->findDuplicateCategories(
                $category->getLabel(),
                $category->getId(),
                $this->getUser()->getId(),
                $parent
            )
        ) {
            $this->addFlash(
                'error',
                "Erreur! la catégorie parente sélectionnée contient déjà une catégorie de même nom."
            );
        }
    }

    #[Route('/delete/{id<\d+>}', name: 'delete')]
    public function delete(Category $category): Response
    {
        $this->getDoctrine()->getManager()->remove($category);
        $this->getDoctrine()->getManager()->flush();

        $this->addFlash('success', 'La catégorie a été supprimée avec succès !');

        return $this->redirectToRoute('dashboard_category_list');
    }
}
