<?php

namespace App\Controller;
use App\Entity\Member;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MemberController extends BaseController
{
    /**
     * @Route("/member", name="member")
     */
    public function index(): Response
    {
        $members = $this->getDoctrine()
            ->getRepository(Member::class)
            ->findAll();

        return $this->render('team.html.twig', [
                'members' => $members,
                'base_path' => '%app.path.attachments%'
        ]);
    }
}
