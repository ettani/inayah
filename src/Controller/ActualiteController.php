<?php


namespace App\Controller;


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


        return $this->render("actualite/actualite.html.twig");
    }
}