<?php


namespace App\Controller;


use App\Entity\User;
use App\Form\ResetPasswordType;
use App\Form\UserType;
use App\Form\UserUpdateType;
use Dompdf\Dompdf;
use Dompdf\Options;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\Packages;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
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
    public function create(Request $request, UserPasswordEncoderInterface $encoder, MailerInterface $mailer)
    {
        $user = new User();


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
//            $getEmail = $form["email"]->getData();
            $mail = $user->getEmail();
            $email = (new Email())
                ->to($mail)
                ->from('	elh3728@gmail.com ')
                //->cc('cc@example.com')
                //->bcc('bcc@example.com')
                //->replyTo('fabien@example.com')
                //->priority(Email::PRIORITY_HIGH)
                ->subject('Inscription Inayah')
                ->text('Sending emails is fun again! Yes again')
                ->html('<img src="../../public/uploads/images/logo.png"> <p> Votre demande d\'inscription a bien été prise en compte.  <br> Veuillez trouver ci-joint le formulaire à compléter et à nous renvoyer par email afin de finaliser votre demande.</p>')
                ->attachFromPath($this->getParameter('pdf_directory') . '/formulaireBeneficiaire.pdf');


            $mailer->send($email);

            $this->addFlash('success', 'Felicitation votre inscription a été prise en compte.');

            #Redirection vers accueil
            return $this->redirectToRoute('app_login');

        }

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
        $form = $this->createForm(UserUpdateType::class, $user);
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

        #Affichage du formulaire dans la vue
        return $this->render('user/update.html.twig', [
            'form' => $form->createView()
        ]);
    }

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
        return $this->redirectToRoute('admin_dashboard');
    }

    /**
     * Update User password
     * @Route("/user/resetpassword", name="user-resetpassword", methods={"GET|POST"})
     * @IsGranted("ROLE_USER")
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @return RedirectResponse|Response
     */
    public function ResetPassword(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $user = $this->getUser();
        $form = $this->createForm(ResetPasswordType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $oldPassword = $request->request->get('post')['oldPassword'];
            $newPassword = $request->request->get('post')['password']['first'];
            if ($encoder->isPasswordValid($user, $oldPassword)) {

                $user->setPassword(
                    $encoder->encodePassword(
                        $user, $newPassword
                    )
                );

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                $this->addFlash('success', 'Votre mot de passe à bien été changé !');
                return $this->render('user/updatePassword.html.twig', array(
                    'form' => $form->createView(),
                ));
            } else {
                $form->addError(new FormError('Ancien mot de passe incorrect'));
            }
        }
        return $this->render('user/updatePassword.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/admin/user/{id}/load", name="user_load", methods={"GET"})
     */
    public function pdf(User $user)
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->set('isRemoteEnabled', true);

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $dompdf->set_base_path("css");
        $contxt = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed'=> TRUE
            ]
        ]);
        $dompdf->setHttpContext($contxt);

//        $dompdf = unserialize($user->getPdf());
        //dump($pdf);exit();

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('user/mypdf.html.twig', [
            'user' => $user,
            'pdf' => $dompdf
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("devis.pdf", [
            "Attachment" => false
        ]);
    }
}




