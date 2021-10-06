<?php

namespace App\Controller\Admin;

use App\Entity\Event;
use App\Entity\VichImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class EventCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Event::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),

            TextField::new('title'),
            TextField::new('location'),
            DateField::new('date'),
            TextField::new('time'),
            TextEditorField::new('description'),
            VichImageField::new('image')->hideOnForm(),
            VichImageField::new('imageFile')->onlyOnForms(),

        ];
    }

}
