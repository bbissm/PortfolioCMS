<?php

namespace App\Controller\Admin;

use App\Entity\Page;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Config\FileLocator;

class PageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Page::class;
    }


    public function configureFields(string $pageName): iterable
    {
        $files = glob('../templates/*.html.twig');
        $array = [];
        foreach ($files as $file => $value) {

            $fileName = str_replace('../templates/','',$value);
            $array[$fileName] = $fileName;
        }
        return [
            IdField::new('id')->hideOnForm()->setPermission('ROLE_ADMIN'),
            BooleanField::new('active'),
            TextField::new('title'),
            ChoiceField::new('template')->setChoices($array)->setPermission('ROLE_ADMIN'),
            BooleanField::new('hide_menu'),
            TextField::new('controller')->setPermission('ROLE_ADMIN'),
            TextField::new('route')->setPermission('ROLE_ADMIN')
        ];
    }


    // Set action permissions
    public function configureActions(Actions $actions): Actions
    {
        return $actions
            // use the 'setPermission()' method to set the permission of actions
            // (the same permission is granted to the action on all pages)
            ->setPermission('delete', 'ROLE_ADMIN')

            // you can set permissions for built-in actions in the same way
            ->setPermission(Action::NEW, 'ROLE_ADMIN')
            ;
    }
}
