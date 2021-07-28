<?php

namespace App\Controller\Dashboard;

use App\Entity\Color;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('dashboard/colors', name: 'dashboard_color_')]
class ColorController extends AbstractController
{
    #[Route('/delete/{id<\d+>}', name: 'delete')]
    public function delete(Color $color): Response
    {
        $this->getDoctrine()->getManager()->remove($color);
        $this->getDoctrine()->getManager()->flush();

        $this->addFlash('success', 'La couleur a été supprimée avec succès !');

        return $this->redirectToRoute('dashboard_category_list');
    }
}
