<?php


namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    /**
     * Page Accueil
     * @Route("/", name="default_index", methods={"GET"})
     */
    public function index()
    {
        return $this->render("default/index.html.twig");
    }

}
