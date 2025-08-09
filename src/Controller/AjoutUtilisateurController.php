<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AjoutUtilisateurType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AjoutUtilisateurController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em =$em;
    }
    /**
     * @Route("/ajout/utilisateur", name="app_ajout_utilisateur")
     */
    public function index(Request $request, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = new User();
        $form = $this->createForm(AjoutUtilisateurType::class, $user);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $user = $form->getData();
            $user -> setRoles(array($request->request->get('role')));

            $userexiste = $this->em->getRepository(User::class)->findOneBy(['identifiant' => $user->getIdentifiant()]);
            if(!$userexiste){
            $pwdHash = $passwordHasher->hashPassword($user,$user->getPassword());
            $user->setPassword($pwdHash);
            $user->setNbOperation(0);
            $this->em->persist($user);
            $this->em->flush();

        
            $this->addFlash('success', 'L\'utilisateur a bien été ajouté');
            return $this->redirectToRoute('app_ajout_utilisateur');
        }
        }



        return $this->render('ajout_utilisateur/ajoutUtilisateur.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
