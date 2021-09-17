<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('martin.bissiger@hotmail.com');
        $user->setPassword($this->passwordHasher->hashPassword($user, 'martin1997'));
        $user->setRoles(['ROLE_ADMIN'.'ROLE_USER']);
        $manager->persist($user);

        $manager->flush();
    }
}
