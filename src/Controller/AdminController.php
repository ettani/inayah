<?php


namespace App\Controller;


use App\Entity\User;
use App\Repository\UserRepository;
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
     * @Route("/dashboard", name="admin_dashboard", methods={"GET"})
     */
    public function user(UserRepository $userRepository)
    {

        # Récupérer les bénévoles
        $benevoles = $userRepository->findByRoles('ROLE_BENEVOLE');

        # Récupérer les demandeurs
        $demandeurs = $userRepository->findByRoles('ROLE_DEMANDEUR');


        # Récupérer les demandes de contacts


        # Récupérer tous les articles

        # Grâce à render, je vais pouvoir effectuer le rendu d'une vue.
        # return new Response("<h1>Page Accueil</h1>");
        return $this->render("admin/dashboard.html.twig", [
            'benevoles' => $benevoles,
            'demandeurs' => $demandeurs
        ]);
    }
}