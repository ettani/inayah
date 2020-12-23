<?php


namespace App\Controller;


use App\Entity\Post;
use App\Entity\User;
use Dompdf\Dompdf;
use Dompdf\Options;
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
            //->findBy([], ['id' => 'DESC', 10]);

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

    /**
     * @Route("/admin/user/{id}/load", name="user_load", methods={"GET"})
     */
    public function pdf(User $user)
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');


        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('default/mypdf.html.twig', [
            'user' => $user
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
    }

}

