<?php


namespace App\Controller;


use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * Page / Action Accueil
     * ex. http://localhost:8000/
     * @Route("/", name="default_index", methods={"GET"})
     */
    public function index()
    {

        # Récupérer tous les articles
        $posts = $this->getDoctrine()
            ->getRepository(Post::class)
            ->findAll();

        # Grâce à render, je vais pouvoir effectuer le rendu d'une vue.
        # return new Response("<h1>Page Accueil</h1>");
        return $this->render("default/index.html.twig", [
            'posts' => $posts
        ]);
    }



    /**
     * Page / Action Article
     * Afficher le contenu d'un article
     * @Route("/{title}_{id}.html", name="default_post", methods={"GET"})
     * @param Post $post
     * @return Response
     */
    public function post(Post $post)
    {
        return $this->render("default/Post.html.twig", [
            'post' => $post
        ]);
    }
}
