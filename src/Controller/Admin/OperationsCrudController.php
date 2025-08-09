<?php

namespace App\Controller\Admin;

use App\Entity\Operation;
use App\Controller\Admin\UserCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class OperationsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Operation::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
           
            TextField::new('Type'),
            MoneyField::new('Prix')->setCurrency('EUR'),
            TextField::new('Nom'),
            TextField::new('Prenom'),
            TextField::new('Adresse'),
            TextField::new('Ville'),
            IntegerField::new('CodePostal'),
            ImageField::new('image')
            ->setBasePath('assets/images/')
            ->setUploadDir('public/assets/images/')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(false),
            TextareaField::new('Description'),
            AssociationField::new('user')->setCrudController(UserCrudController::class),
            BooleanField::new('isActive'),
        ];
    }
    
}
