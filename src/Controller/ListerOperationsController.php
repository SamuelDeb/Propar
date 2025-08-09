<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Operation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ListerOperationsController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em =$em;
    }
    /**
     * @Route("/lister_operations", name="app_lister_operations")
     */
    public function listerOperation(): Response
    {
        $operation = $this->getDoctrine()->getRepository(Operation::class)->findBy(array(),
            array('type' => 'ASC')
        );

       return $this->render('lister_operations/listerOperations.html.twig', [
            'operation' => $operation,
        ]);
    }

    /**
     * @Route("/lister_operations/terminer_operation/{id}", name="terminerOperation")
     */
   
    public function terminerOperation($id): Response
    {
        $user = $this->getUser();
        $role = $this->getUser()->getRoles();
        $nombre = $this->getUser()->getNbOperation();

        $operation = $this->getDoctrine()->getRepository(Operation::class)->find($id);
        if($operation && $user == $operation->getUser()){
            $nombre--;
            $user->setNbOperation($nombre);
            $operation->setIsActive(false);
            $this->em->flush();

        }
        $this->addFlash('success', 'L\'opération a bien été terminé');
        return $this->redirectToRoute('app_lister_operations');
       
}
}

