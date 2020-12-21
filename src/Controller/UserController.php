<?php


namespace App\Controller;


use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    /**
     * Création d'un User
     * @Route ("/user/create", name="user-create", methods={"GET|POST"})
     *ex. http://localhost:8000/user/create/
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @return Response
     */
    public function create(Request $request, UserPasswordEncoderInterface $encoder)
    {
        #$post = new Post();
        $user = new User();
        #$user->setRoles(['ROLE_USER']);


#Création du Formulaire

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user->setPassword(
               $encoder->encodePassword(
                    $user, $user->getPassword()
                )
            );
            #Sauvegarde dans la BDD
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();


            #Redirection vers accueil
            return $this->redirectToRoute('app_login');

        }

        #return new Response("<p>TEST</p>");
        #Affichage du formulaire dans la vue
        return $this->render('user/create.html.twig', [
            'form' => $form->createView()
        ]);

    }
}




