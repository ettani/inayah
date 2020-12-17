<?php


namespace App\Controller;


use App\Entity\User;
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
    public function user()
    {

        # Récupérer tous les articles
        $user = $this->getDoctrine()
            ->getRepository(User::class)
            ->findAll();

        # Grâce à render, je vais pouvoir effectuer le rendu d'une vue.
        # return new Response("<h1>Page Accueil</h1>");
        return $this->render("admin/dashboard.html.twig", [
            'user' => $user
        ]);
    }
}