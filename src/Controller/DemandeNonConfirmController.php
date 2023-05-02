<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemandeNonConfirmController extends AbstractController
{
    #[Route('/demande/non/confirm', name: 'app_demande_non_confirm')]
    public function index(): Response
    {
        return $this->render('demande_non_confirm/index.html.twig', [
            'controller_name' => 'DemandeNonConfirmController',
        ]);
    }
}
