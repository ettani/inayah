<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgirController extends AbstractController
{

    /**
     * @return Response
     * @Route("/agir", name="agir_agir", methods={"GET"})
     */
    public function agir(): Response
    {
        return $this->render('agir/agir.html.twig');
    }
}