<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Client;
use App\Entity\Operation;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
        ->setTitle('PROPAR');
}

public function configureMenuItems(): iterable
{
    yield MenuItem::section('Propar');
    yield MenuItem::linktoRoute('Back to the website', 'fas fa-home', 'app_accueil');

    yield MenuItem::subMenu('Utilisateurs', 'fas fa-list', User::class)
        ->setSubItems([
            MenuItem::linkToCrud('Ajouter', 'fas fa-plus', User::class) 
                        ->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Visualiser', 'fas fa-eye', User::class)
        ]);
        
    
    yield MenuItem::subMenu('Opérations', 'fas fa-list', Operation::class)
        ->setSubItems([
            MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Operation::class) 
                        ->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Visualiser', 'fas fa-eye', Operation::class)
        ]);
    
    yield MenuItem::subMenu('Clients', 'fas fa-list', Client::class)
        ->setSubItems([
            MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Client::class) 
                        ->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Visualiser', 'fas fa-eye', Client::class)
        ]);
}


}
