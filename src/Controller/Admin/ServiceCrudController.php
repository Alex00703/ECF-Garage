<?php

namespace App\Controller\Admin;

use App\Entity\Service;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ServiceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Service::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular("Service")
            ->setEntityLabelInPlural("Services")
            ;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name', "Nom du service"),
            TextEditorField::new('description'),
        ];
    }
    
}
