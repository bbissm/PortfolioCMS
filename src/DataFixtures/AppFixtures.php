<?php

namespace App\DataFixtures;

use App\Entity\Member;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
class AppFixtures extends Fixture
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
         $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager)
    {
        /*$user = new User();
        $user->setEmail('martin.bissiger@hotmail.com');
        $user->setPassword($this->passwordHasher->hashPassword($user, 'martin1997'));
        $user->setRoles(['ROLE_ADMIN']);
        $manager->persist($user);*/

        $member = new Member();
        $member->setName('Nadine');
        $member->setActive('1');
        $member->setText('Text');
        $member->setZitat('Love yourself');
        $manager->persist($member);

        /*$page = new Page();
        $page->setTitle('Homepage');
        $page->setActive(true);
        $page->setController('PageController.php');
        $page->setRoute('homepage');
        $page->setTemplate('homepage.html.twig');
        $page->setHideMenu(false);*/

        $manager->flush();
    }
}
