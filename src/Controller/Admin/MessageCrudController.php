<?php

namespace App\Controller\Admin;

use App\Entity\Message;
use Doctrine\DBAL\Types\BigIntType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;

class MessageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Message::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('full_name'),
            TextField::new('email'),
            IntegerField::new('phone'),
            TextField::new('subject'),
            TextField::new('message'),
        ];
    }
    
}
