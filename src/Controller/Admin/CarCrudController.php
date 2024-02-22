<?php

namespace App\Controller\Admin;

use App\Entity\Car;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\TextEditorType;

class CarCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Car::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('image')
                ->setUploadDir('public/assets/img/cars/')
                ->hideOnIndex(),
            TextField::new('name', "Titre de l'annonce"),
            IntegerField::new('price', 'Prix'),
            IntegerField::new('year', 'Année'),
            IntegerField::new('kilometers', 'Kilomètres'),
            TextEditorField::new('description', 'Description (facultative)')
                ->hideOnIndex(),

        ];
    }
    
}
