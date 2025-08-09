<?php

namespace App\Controller;

use App\Entity\Operation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Loader\Configurator\request;
use App\Entity\User;

class ChiffreAffaireController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em =$em;
    }
    /**
     * @Route("/chiffre/affaire", name="app_chiffre_affaire")
     */
    public function index(): Response
    {
        $count = 0;
        $sommeGrande = 0;
        $sommeMoyenne = 0;
        $sommePetite = 0;
        $totalOperation = 0;
        $operation = $this->getDoctrine()->getRepository(Operation::class)->findAll();
        // dd($operation);
        for($i=0;$i<count($operation);$i++){
        if($operation[$i]->getType()=="Grosse"){
            $sommeGrande += 10000;
        }elseif($operation[$i]->getType()=="Moyenne"){
            $sommeMoyenne += 2500;

        }elseif($operation[$i]->getType()=="Petite manoeuvre"){
            $sommePetite += 1000;
        }
    }
        $totalOperation = $sommeGrande + $sommeMoyenne + $sommePetite;

        
        return $this->render('chiffre_affaire/chiffreAffaire.html.twig', [
            'total_Grande' => $sommeGrande,
            'total_Moyenne' => $sommeMoyenne,
            'total_Petite' => $sommePetite,
            'Total_Opération' => $totalOperation
        ]);
    }
}
