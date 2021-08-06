<?php

namespace App\Service;

use App\Entity\Category;
use App\Entity\Color;
use App\Entity\User;

use App\Repository\ColorRepository;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Validator\ConstraintViolationList;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * Some methods to handle the colors
 */
class HandleColor
{
    private ColorRepository $colorRepository;
    private EntityManagerInterface $em;
    private FlashBagInterface $flashbag;
    private ValidatorInterface $validator;
    private User $user;

    public function __construct(
        ColorRepository $colorRepository,
        EntityManagerInterface $em,
        FlashBagInterface $flashBagInterface,
        Security $security,
        ValidatorInterface $validator,
    )
    {
        $this->colorRepository = $colorRepository;
        $this->em = $em;
        $this->flashbag = $flashBagInterface;
        $this->user = $security->getUser();
        $this->validator = $validator;
    }

    /**
     * Verify if the color category already exist, add a flashbag and persist the color
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \App\Entity\Category $category
     *
     * @return self
     */
    public function setCategoryColor(Request $request, Category $category) :self
    {
        $params = $request->request->all();
        $bgColor = $params['category']['bgColorPicker'];
        $textColor = $params['category']['textColorPicker'];
        $color = new Color();
        $color->setCodeBg($bgColor);
        $color->setCodeText($textColor);

        $color = $this->getExistingUserColor($color);

        if ($color) {
            $this->flashbag->add('warning', "La couleur n'a pas été ajoutée car elle existait déjà");
            $category->setColor($color);
        } else {
            $this->flashbag->add('success', "Une nouvelle couleur a été ajoutée en base de donnée");
            $category->setColor($this->persistColor($bgColor, $textColor));
        }

        return $this;
    }

    /**
     * Return the existing color if occured
     *
     * @param \App\Entity\Color $color
     *
     * @return \App\Entity\Color|null
     */
    public function getExistingUserColor(Color $color) :Color|null
    {
        $color = $this->colorRepository->findOneBy([
            'code_bg' => $color->getCodeBg(),
            'code_text' => $color->getCodeText(),
            'user' => $this->user->getId()
        ]);
        return $color;
    }

    /**
     * Check the code color with constraints and return the errors
     *
     * @param \App\Entity\Color $color
     *
     * @return \Symfony\Component\Validator\ConstraintViolationList
     */
    public function validateColor(Color $color) :ConstraintViolationList
    {
        $errors = $this->validator->validate($color);

        if (count($errors) > 0) {
            foreach ($errors as $error) {
                $this->flashbag->add(
                    'error',
                    $error->getMessage()
                );
            }
        }
        return $errors;
    }

    /**
     * Persist the given color to the database
     *
     * @param string $backgroundColor
     * @param string $textColor
     *
     * @return \App\Entity\Color
     */
    private function persistColor(string $backgroundColor, string $textColor): Color
    {
        $color = new Color();
        $color
            ->setCodeBg($backgroundColor)
            ->setCodeText($textColor)
            ->setUser($this->user);

        $this->em->persist($color);

        return $color;
    }
}
