<?php

namespace App\Controller;

use App\Entity\Operation;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="app_accueil")
     */
    public function index(): Response
    {
        $operation = $this->getDoctrine()->getRepository(Operation::class)->findBy(array(),
        array('type' => 'ASC')
        );
        
        return $this->render('accueil/accueil.html.twig', [
            'operation' => $operation,
        ]);
    }
}
