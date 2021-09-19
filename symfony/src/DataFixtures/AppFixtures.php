<?php

namespace App\DataFixtures;

use App\Entity\Event;
use App\Entity\Member;
use App\Entity\News;
use App\Entity\Page;
use App\Entity\User;
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
        $user = new User();
        $user->setEmail('martin.bissiger@hotmail.com');
        $user->setPassword($this->passwordHasher->hashPassword($user, 'martin1997'));
        $user->setRoles(['ROLE_ADMIN']);
        $manager->persist($user);

        $member = new Member();
        $member->setName('Nadine');
        $member->setActive('1');
        $member->setText('Lorem ipsum dolor sit amet, consectetur adipisicing elit.');
        $member->setZitat('Love yourself');
        $manager->persist($member);

        $member = new Member();
        $member->setName('Martin');
        $member->setActive('1');
        $member->setText('Lorem ipsum dolor sit amet, consectetur adipisicing elit.');
        $member->setZitat('You only live once');
        $manager->persist($member);

        $event = new Event();
        $event->setActive('1');
        $event->setTitle('Lorem');
        $event->setTime('20 Uhr');
        $event->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aspernatur dicta ex incidunt ipsam ipsum molestiae nemo quam vel vitae?
');

        $news = new News();
        $news->setActive('1');
        $news->setTitle('Lorem');
        $news->setName('Name');
        $news->setTeaser('Lorem ipsum dolor sit amet');
        $news->setEnddate(\DateTime::createFromFormat('Y-m-d', "2021-01-01"));
        $news->setStartdate(\DateTime::createFromFormat('Y-m-d', "2021-12-31"));
        $news->setDateCreated(\DateTime::createFromFormat('Y-m-d', date('Y-m-d')));
        $news->setText('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aspernatur dicta ex incidunt ipsam ipsum molestiae nemo quam vel vitae?
');
        $manager->persist($news);

        $page = new Page();
        $page->setTitle('Homepage');
        $page->setActive(true);
        $page->setController('PageController.php');
        $page->setRoute('homepage');
        $page->setTemplate('homepage.html.twig');
        $page->setHideMenu(false);
        $manager->persist($page);

        $page = new Page();
        $page->setTitle('News');
        $page->setActive(true);
        $page->setController('NewsController.php');
        $page->setRoute('news');
        $page->setTemplate('news.html.twig');
        $page->setHideMenu(false);
        $manager->persist($page);

        $page = new Page();
        $page->setTitle('Contact');
        $page->setActive(true);
        $page->setController('ContactController.php');
        $page->setRoute('contact');
        $page->setTemplate('contact.html.twig');
        $page->setHideMenu(false);
        $manager->persist($page);

        $page = new Page();
        $page->setTitle('Event');
        $page->setActive(true);
        $page->setController('EventController.php');
        $page->setRoute('event');
        $page->setTemplate('event.html.twig');
        $page->setHideMenu(false);
        $manager->persist($page);

        $page = new Page();
        $page->setTitle('Team');
        $page->setActive(true);
        $page->setController('MemberController.php');
        $page->setRoute('member');
        $page->setTemplate('team.html.twig');
        $page->setHideMenu(false);
        $manager->persist($page);

        $manager->flush();
    }
}
