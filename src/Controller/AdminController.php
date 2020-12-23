<?php


namespace App\Controller;


use App\Entity\Message;
use App\Entity\Post;
use App\Entity\User;
use App\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class AdminController
 * @package App\Controller
 * @Route("/admin")
 */
class AdminController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{

    /**
     * Page / Action Admin
     * ex. http://localhost:8000/
     * @IsGranted("ROLE_ADMIN")
     * @Route("/dashboard", name="admin_dashboard", methods={"GET"})
     */
    public function user(UserRepository $userRepository)
    {

        # Récupérer les bénévoles
        $benevoles = $userRepository->findByRoles('ROLE_BENEVOLE');

        # Récupérer les demandeurs
        $demandeurs = $userRepository->findByRoles('ROLE_DEMANDEUR');




        # Récupérer tous les messages
        $messages = $this->getDoctrine()
            ->getRepository(Message::class)
            ->findAll();

        $posts= $this->getDoctrine()
            ->getRepository(Post::class)
            ->findAll();

        # Grâce à render, je vais pouvoir effectuer le rendu d'une vue.
        return $this->render("admin/dashboard.html.twig", [
            'benevoles' => $benevoles,
            'demandeurs' => $demandeurs,
            'messages' => $messages,
            'posts' => $posts
        ]);
    }


}

