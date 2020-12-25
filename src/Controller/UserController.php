<?php


namespace App\Controller;


use App\Entity\User;
use App\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
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

            $this->addFlash('success', 'Felicitation votre inscription a été prise en compte ');

            #Redirection vers accueil
            return $this->redirectToRoute('app_login');

        }

        #return new Response("<p>TEST</p>");
        #Affichage du formulaire dans la vue
        return $this->render('user/create.html.twig', [
            'form' => $form->createView()
        ]);

    }

    /**
     * Update User
     * @Route("/admin/user/{id}/update", name="user-update", methods={"GET|POST"})
     * ex. http://localhost:8000/admin/user/12/update
     * @IsGranted("ROLE_ADMIN")
     * @param User $user
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @return Response
     */
    public function update(User $user, Request $request, UserPasswordEncoderInterface $encoder)
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            #Sauvegarde dans la BDD
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Felicitation Vos Informations ont été modifiées');

            #Redirection vers accueil
            return $this->redirectToRoute('default_index');

        }

        #return new Response("<p>TEST</p>");
        #Affichage du formulaire dans la vue
        return $this->render('user/update.html.twig', [
            'form' => $form->createView()
        ]);
    }


    # @IsGranted("ROLE_ADMIN") à ajouter aprés

    /**
     * Supprimer un User
     * @Route("/admin/user/{id}/delete", name="user_delete", methods={"GET"})
     * ex. http://localhost:8000/admin/user/7/delete
     * @IsGranted("ROLE_ADMIN")
     * @param User $user
     * @return RedirectResponse
     */
    public function delete(User $user)
    {
        $this->getDoctrine()->getManager()->remove($user);
        $this->getDoctrine()->getManager()->flush();

        #redirection
        return $this->redirectToRoute('default_index');
    }
}




