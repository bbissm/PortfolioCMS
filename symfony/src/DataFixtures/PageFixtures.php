<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Page;

class PageFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $page = new Page();
        $page->setTitle('Homepage');
        $page->setActive(true);
        $page->setController('PageController.php');
        $page->setRoute('homepage');
        $page->setTemplate('homepage.html.twig');
        $page->setHideMenu(false);

        $manager->persist($page);

        $manager->flush();
    }
}
