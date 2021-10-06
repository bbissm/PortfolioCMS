<?php

namespace App\Controller\Admin;

use App\Entity\Event;
use App\Entity\UploadImageField;
use App\Form\EventType;
use App\Form\LocationType;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Query\Expr\Select;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
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
            AssociationField::new('location')
                ->setFormType(EventType::class)
                ->setFormTypeOption('by_reference', false)
                ->onlyOnForms(),
            DateField::new('date'),
            TextField::new('time'),
            TextEditorField::new('description'),
        ];
    }

}
