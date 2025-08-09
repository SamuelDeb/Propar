<?php

namespace App\Controller;

use App\Entity\Operation;
use App\Form\AjoutOperationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AjoutOperationController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em =$em;
    }
    /**
     * @Route("/ajout/operation", name="app_ajout_operation")
     */
    public function index(): Response
    {
        return $this->render('ajout_operation/ajouterOperation.html.twig', [
            'controller_name' => 'AjoutOperationController',
        ]);
    }
    /**
     * @Route("/ajout_operation", name="ajouterOperation")
     */
    

    public function ajouterOperation(Request $request): Response
    {
      
        $operation= new Operation();
        $form = $this->createForm(AjoutOperationType::class, $operation);
        $user = $this->getUser();
        $role = $this->getUser()->getRoles();
        $nombre = $this->getUser()->getNbOperation();;
        
        //écoute de la requête du submit
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            if ($role[0] == "ROLE_EXPERT") {
                $max = 5;
                if ($nombre < $max) {
                    $operation ->setAdresse($request->request->get('adresse'));
                    $operation ->setVille($request->request->get('ville'));
                    $operation ->setCodePostal($request->request->get('cp'));
                    $operation ->setUser($user);
        
                    $file = $form['image']->getData();
                    $operation ->setImage($someFilename = uniqid().'.'.$file->guessExtension());
                    $directory = "../public/assets/images/";
                
                    $file->move($directory, $someFilename);
                    $nombre ++;
                    $user->setNbOperation($nombre);
                    $operation->setIsActive(true);
                    $operation = $form->getData();
                    
                //figer les données à envoyer vers la BDD
                    $this->em->persist($operation);
                    
                    //Sauvegarde dans la BDD 
                    $this->em->flush();
                    $this->addFlash('success', 'L\'opération à  été ajouter');
                    return $this->redirectToRoute('ajouterOperation');
                
                }else{
                    $this->addFlash("error", "Vous avez atteint la limite maximum de : ".$nombre."\n Terminer une opération pour en ajouter une nouvelle.");
                    return $this->redirectToRoute('ajouterOperation');
                }
            }

            if ($role[0] == "ROLE_SENIOR") {
                $max = 3;
                if ($nombre < $max) {
                    $operation ->setAdresse($request->request->get('adresse'));
                    $operation ->setVille($request->request->get('ville'));
                    $operation ->setCodePostal($request->request->get('cp'));
                    $operation ->setUser($user);

                    $file = $form['image']->getData();
                    $operation ->setImage($someFilename = uniqid().'.'.$file->guessExtension());
                    $directory = "../public/assets/images/";
                
                    $file->move($directory, $someFilename);
                    $nombre ++;
                    $user->setNbOperation($nombre);
                    $operation->setIsActive(true);
                    $operation = $form->getData();
                    
                //figer les données à envoyer vers la BDD
                    $this->em->persist($operation);
                    
                    //Sauvegarde dans la BDD 
                    $this->em->flush();
                    $this->addFlash('success', 'L\'opération à  été ajouter');
                    return $this->redirectToRoute('ajouterOperation');
                
                }else{
                    $this->addFlash("error", "Vous avez atteint la limite maximum de : ".$nombre."\n Terminer une opération pour en ajouter une nouvelle.");
                    return $this->redirectToRoute('ajouterOperation');
                }
            }

            if ($role[0] == "ROLE_APPRENTI") {
                $max = 1;
                if ($nombre < $max) {
                    $operation ->setAdresse($request->request->get('adresse'));
                    $operation ->setVille($request->request->get('ville'));
                    $operation ->setCodePostal($request->request->get('cp'));
                    $operation ->setUser($user);

                    $file = $form['image']->getData();
                    $operation ->setImage($someFilename = uniqid().'.'.$file->guessExtension());
                    $directory = "../public/assets/images/";
                
                    $file->move($directory, $someFilename);
                    $nombre ++;
                    $user->setNbOperation($nombre);
                    $operation->setIsActive(true);
                    $operation = $form->getData();
                    
                //figer les données à envoyer vers la BDD
                    $this->em->persist($operation);
                    
                    //Sauvegarde dans la BDD 
                    $this->em->flush();
                    $this->addFlash('success', 'L\'opération à  été ajouter');
                    return $this->redirectToRoute('ajouterOperation');
                
                }else{
                    $this->addFlash("error", "Vous avez atteint la limite maximum de : ".$nombre."\n Terminer une opération pour en ajouter une nouvelle.");
                    return $this->redirectToRoute('ajouterOperation');
                }
            }
       
       }    
        
        return $this->render('ajout_operation/ajouterOperation.html.twig', [
            'form' => $form->createView()
        ]);
    
}

}
