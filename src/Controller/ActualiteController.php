<?php


namespace App\Controller;


use App\Entity\Evenement;
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
        # Récupérer tous les evenements
        $evenements = $this->getDoctrine()
            ->getRepository(Evenement::class)
            ->findAll();

        return $this->render("actualite/actualite.html.twig", [
            'evenements' => $evenements

        ]);
    }
}