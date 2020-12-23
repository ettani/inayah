<?php


namespace App\Controller;

use App\Entity\Message;


use App\Form\MessageType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
class MessageController extends AbstractController
{

    /**
     * http://localhost:8000/page/messsage
     * Page Action Message
     * @Route("/page/contact", name="message-create", methods={"GET|POST"})
     * @param Request $request
     * @return Response
     */
    public function create(Request $request, MailerInterface $mailer)
    {
        $message = new Message();

        $form = $this->createForm(MessageType::class, $message);

        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()) {
            $message->setDate(new \DateTime());

            #Sauvegarde dans la BDD
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();

            $mail = $message->getEmail();
            $mailMessage = $message->getDescription();

            $email = (new Email())
                ->to($mail)
                ->from('ettani.hakim@live.fr')
                //->cc('cc@example.com')
                //->bcc('bcc@example.com')
                //->replyTo('fabien@example.com')
                //->priority(Email::PRIORITY_HIGH)
                ->subject('Time for Symfony Mailer!')
                ->text('Sending emails is fun again! Yes again')
                ->html('<p>Nous avons bien reçu votre message!</p><br><p>Message : </p>' . $mailMessage);

            $mailer->send($email);

            #Redirection vers accueil
            return $this->redirectToRoute('default_index');



        }
        #Afficher le formulaire dns la vue
        return $this->render('contact/message.html.twig', [
            'form' => $form->createView()
        ]);

    }
    /**
     * Supprimer un Message
     * @Route("/admin/message/{id}/delete", name="message_delete", methods={"GET"})
     * ex. http://localhost:8000/admin/message/7/delete
     * @IsGranted("ROLE_ADMIN")
     * @param Message $message
     * @return RedirectResponse
     */
    public function delete(Message $message)
    {
        $this->getDoctrine()->getManager()->remove($message);
        $this->getDoctrine()->getManager()->flush();

        #redirection
        return $this->redirectToRoute('default_index');
    }

}