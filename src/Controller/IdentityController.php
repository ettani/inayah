<?php


namespace App\Controller;


use App\Entity\Identity;
use App\Form\IdentityFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class IdentityController extends AbstractController
{
    /**
     * @Route("admin/identity", name="identity_update", methods={"GET|POST"})
     * @param Identity $identity
     * @param Request $request
     * @param SluggerInterface $slugger
     * @return RedirectResponse|Response
     */
    public function update(Request $request, SluggerInterface $slugger)
    {

        $identity = $this->getDoctrine()->getRepository(Identity::class)->find(1);
        # Convertir mon image en objet "File"
        $currentLogo = $identity->getLogo(); # On garde le nom de l'image dans la BDD
        $identity->setLogo(
            new File($this->getParameter('images_directory') . '/' . $identity->getLogo())
        );
        $currentHeaderPic = $identity->getHeaderpic(); # On garde le nom de l'image dans la BDD
        $identity->setHeaderpic(
            new File($this->getParameter('images_directory') . '/' . $identity->getHeaderpic())
        );


        # Création du Formulaire
        $form = $this->createForm(IdentityFormType::class, $identity)->handleRequest($request);

        # Si le formulaire a été soumis : équivalent à : if isset $_POST
        if ($form->isSubmitted() && $form->isValid()) {

            # Upload de l'image
            $identity->setLogo($currentLogo);
            $identity->setHeaderpic($currentHeaderPic);

            /** @var UploadedFile $imageFile */
            $logoFile = $form->get('logo')->getData();
            $headerFile = $form->get('headerpic')->getData();

            if ($logoFile) {
                # Générer le nom de l'image | Sécurisation du nom de l'image
                $originalFilename = pathinfo($logoFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = 'logo-' . uniqid() . '.' . $logoFile->guessExtension();
                # Upload de l'image
                try {
                    $logoFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }
                # /!\ Permet de définir le nouveau nom de l'image dans la BDD /!\
                $identity->setLogo($newFilename);
            }

            if ($headerFile) {
                # Générer le nom de l'image | Sécurisation du nom de l'image
                $originalFilename = pathinfo($headerFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = 'header-' . uniqid() . '.' . $headerFile->guessExtension();
                # Upload de l'image
                try {
                    $headerFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }
                # /!\ Permet de définir le nouveau nom de l'image dans la BDD /!\
                $identity->setHeaderpic($newFilename);
            }


            # Sauvegarde dans la BDD
            $em = $this->getDoctrine()->getManager();
            $em->persist($identity);
            $em->flush();
            # Redirection vers l'article
            return $this->redirectToRoute('admin_dashboard');
        }
        # Afficher le formulaire dans la vue
        return $this->render('admin/identity.html.twig', [
            'form' => $form->createView()
        ]);
    }

}