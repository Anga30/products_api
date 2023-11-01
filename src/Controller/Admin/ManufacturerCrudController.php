<?php

namespace App\Controller\Admin;

use App\Entity\Manufacturer;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ManufacturerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Manufacturer::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name'),
            AssociationField::new('product'),
            TextField::new('country'),
            TextField::new('address'),
            TextField::new('website'),
            TextField::new('description'),
        ];
    }
    */
}
