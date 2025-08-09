<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TerminerOperationController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em =$em;
    }
    /**
     * @Route("/terminer/operation", name="app_terminer_operation")
     */
    public function index(): Response
    {
        return $this->render('terminer_operation/terminer_operation.html.twig', [
            'controller_name' => 'TerminerOperationController',
        ]);
    }
}
