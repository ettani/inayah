<?php


namespace App\Controller;


use App\Entity\Evenement;
use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActualiteController extends AbstractController
{
    /**
     * @return Response
     * @Route ("/actualite", name="actualite_actualite", methods={"GET"})
     */

    public function actualite(): Response
    {

        # Récupérer tous les articles
        $posts = $this->getDoctrine()
            ->getRepository(Post::class)
            ->findAll();
        //->findBy([], ['id' => 'DESC', 10]);

        # Grâce à render, je vais pouvoir effectuer le rendu d'une vue.
        # return new Response("<h1>Page Accueil</h1>");
        return $this->render("actualite/actualite.html.twig", [
            'posts' => $posts
        ]);

    }
}