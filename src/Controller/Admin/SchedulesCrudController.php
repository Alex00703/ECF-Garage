<?php

namespace App\Controller\Admin;

use App\Entity\Schedules;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SchedulesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Schedules::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('lundi'),
            TextField::new('mardi'),
            TextField::new('mercredi'),
            TextField::new('jeudi'),
            TextField::new('vendredi'),
            TextField::new('samedi'),
            TextField::new('dimanche'),
        ];
    }
    
}
