<?php


namespace App\Controller;


use App\Entity\Post;
use App\Form\PostType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * Gestion des Articles du site.
 * @Route("/dashboard/post")
 */
class PostController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    /**
     * Mettre à jour un Article
     * @Route("/{id}/update", name="post_update", methods={"GET|POST"})
     * ex. http://localhost:8000/dashboard/post/1/update
     * @IsGranted("ROLE_ADMIN")
     * @param Post $post
     * @param Request $request
     * @param SluggerInterface $slugger
     * @return RedirectResponse|Response
     */
    public function update(Post $post, Request $request, SluggerInterface $slugger)
    {

        # Convertir mon image en objet "File"
        $currentImage = $post->getImage(); # On garde le nom de l'image dans la BDD
        if(!is_null($currentImage)) {
            $post->setImage(
                new File($this->getParameter('images_directory') . '/' . $post->getImage())
            );
        }
        #image2
        $currentImage2 = $post->getImage2(); # On garde le nom de l'image dans la BDD

        if(!is_null($currentImage2)) {
            $post->setImage2(
                new File($this->getParameter('images_directory') . '/' . $post->getImage2())
            );
        }

        #image3
        $currentImage3 = $post->getImage3(); # On garde le nom de l'image dans la BDD
        if(!is_null($currentImage3)) {
            $post->setImage3(
                new File($this->getParameter('images_directory') . '/' . $post->getImage3())
            );
        }

        #image4
        $currentImage4 = $post->getImage4(); # On garde le nom de l'image dans la BDD
        if(!is_null($currentImage4)) {
            $post->setImage4(
                new File($this->getParameter('images_directory') . '/' . $post->getImage4())
            );
        }

        # Création du Formulaire
        $form = $this->createForm(PostType::class, $post)->handleRequest($request);

        # Si le formulaire a été soumis : équivalent à : if isset $_POST
        if ($form->isSubmitted() && $form->isValid()) {

            # Upload de l'image
            $post->setImage($currentImage);
            $post->setImage2($currentImage2);
            $post->setImage3($currentImage3);
            $post->setImage4($currentImage4);

            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {

                # Générer le nom de l'image | Sécurisation du nom de l'image
                $newFilename = $this->SecurisationImage($imageFile, $slugger);

                # Upload de l'image
                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {

                }

                # /!\ Permet de définir le nouveau nom de l'image dans la BDD /!\
                $post->setImage($newFilename);
            }

#image2
            /** @var UploadedFile $imageFile2 */
            $imageFile2 = $form->get('image2')->getData();

            if ($imageFile2) {

                # Générer le nom de l'image | Sécurisation du nom de l'image
                $newFilename2 = $this->SecurisationImage($imageFile2, $slugger);

                # Upload de l'image
                try {
                    $imageFile2->move(
                        $this->getParameter('images_directory'),
                        $newFilename2
                    );
                } catch (FileException $e) {
                }

                # /!\ Permet de définir le nouveau nom de l'image dans la BDD /!\
                $post->setImage2($newFilename2);
            }
################################################
# image3


            /** @var UploadedFile $imageFile3 */
            $imageFile3 = $form->get('image3')->getData();

            if ($imageFile3) {

                # Générer le nom de l'image | Sécurisation du nom de l'image
                $newFilename3 = $this->SecurisationImage($imageFile3, $slugger);

                # Upload de l'image
                try {
                    $imageFile3->move(
                        $this->getParameter('images_directory'),
                        $newFilename3
                    );
                } catch (FileException $e) {

                }

                # /!\ Permet de définir le nouveau nom de l'image dans la BDD /!\
                $post->setImage3($newFilename3);
            }
#######################################################

            # image4


            /** @var UploadedFile $imageFile4 */
            $imageFile4 = $form->get('image4')->getData();

            if ($imageFile4) {

                # Générer le nom de l'image | Sécurisation du nom de l'image
                $newFilename4 = $this->SecurisationImage($imageFile4, $slugger);

                # Upload de l'image
                try {
                    $imageFile4->move(
                        $this->getParameter('images_directory'),
                        $newFilename4
                    );
                } catch (FileException $e) {

                }

                # /!\ Permet de définir le nouveau nom de l'image dans la BDD /!\
                $post->setImage4($newFilename4);
            }

####################################################

            # Sauvegarde dans la BDD
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            # Redirection vers l'article
            return $this->redirectToRoute('default_post', [
                'id' => $post->getId(),
                'title' => $post->getAlias(),
            ]);
        }

        # Afficher le formulaire dans la vue
        return $this->render('post/create.html.twig', [
            'form' => $form->createView(),
            'currentImage' => $currentImage,
            'currentImage2' => $currentImage2,
            'currentImage3' => $currentImage3,
            'currentImage4' => $currentImage4
        ]);
    }

    /**
     * Créer un Article
     * @Route("/create", name="post_create", methods={"GET|POST"})
     * ex. http://localhost:8000/dashboard/post/create
     * @IsGranted("ROLE_ADMIN")
     * @param Request $request : Contient la requète de l'utilisateur et ses données.
     * @param SluggerInterface $slugger
     * @return Response
     */
    public function create(Request $request, SluggerInterface $slugger)
    {
        # Création d'un nouvel article VIDE.
        $post = new Post();
        $post->setCreatedAt(new \DateTime());


        # Création du Formulaire
        $form = $this->createForm(PostType::class, $post);

        # Permet au formulaire de récupérer les données dans la Request.
        $form->handleRequest($request);

        # Si le formulaire a été soumis : équivalent à : if isset $_POST
        if ($form->isSubmitted() && $form->isValid()) {

            # Upload de l'image
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {

                $newFilename = $this->SecurisationImage($imageFile, $slugger);

                # Upload de l'image
                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }

                # /!\ Permet de définir le nouveau nom de l'image dans la BDD /!\
                $post->setImage($newFilename);
            }

            #######################################
            # Upload de l'image2
            /** @var UploadedFile $imageFile2 */
            $imageFile2 = $form->get('image2')->getData();

            if ($imageFile2) {

                $newFilename2 = $this->SecurisationImage($imageFile2, $slugger);

                # Upload de l'image2
                try {
                    $imageFile2->move(
                        $this->getParameter('images_directory'),
                        $newFilename2
                    );
                } catch (FileException $e) {
                }

                # /!\ Permet de définir le nouveau nom de l'image dans la BDD /!\
                $post->setImage2($newFilename2);
            }
############################################

            # Upload de l'image3
            /** @var UploadedFile $imageFile3 */
            $imageFile3 = $form->get('image3')->getData();

            if ($imageFile3) {

                $newFilename3 = $this->SecurisationImage($imageFile3, $slugger);

                # Upload de l'image3
                try {
                    $imageFile3->move(
                        $this->getParameter('images_directory'),
                        $newFilename3
                    );
                } catch (FileException $e) {
                }

                # /!\ Permet de définir le nouveau nom de l'image dans la BDD /!\
                $post->setImage3($newFilename3);
            }
############################################

            # Upload de l'image4
            /** @var UploadedFile $imageFile4 */
            $imageFile4 = $form->get('image4')->getData();

            if ($imageFile4) {

                $newFilename4 = $this->SecurisationImage($imageFile4, $slugger);

                # Upload de l'image4
                try {
                    $imageFile4->move(
                        $this->getParameter('images_directory'),
                        $newFilename4
                    );
                } catch (FileException $e) {
                }

                # /!\ Permet de définir le nouveau nom de l'image dans la BDD /!\
                $post->setImage4($newFilename4);
            }

            #####################################################
            $post->setAlias(
                $slugger->slug(
                    $post->getTitle()
                )
            );

            # Sauvegarde dans la BDD
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            # Notification Flash / Confirmation
            $this->addFlash('success', "félicitation votre article est en ligne ! ");
            return $this->redirectToRoute('default_post', [
                'id' => $post->getId(),
                'title' => $post->getAlias()
            ]);

        }

        # Afficher le formulaire dans la vue
        return $this->render('post/create.html.twig', [
            'form' => $form->createView()
        ]);

    }

    /**
     * Générer le nom de l'image | Sécurisation du nom de l'image
     * @param UploadedFile $imageFile
     * @param SluggerInterface $slugger
     * @return string
     */
    public function SecurisationImage(UploadedFile $imageFile, SluggerInterface $slugger): string
    {
        # Générer le nom de l'image2 | Sécurisation du nom de l'image
        $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $slugger->slug($originalFilename);
        return $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();
    }


    /**
     * Supprimer un Article
     * @IsGranted("ROLE_ADMIN")
     * @Route("/{id}/delete", name="post_delete", methods={"GET"})
     * ex. http://localhost:8000/dashboard/post/1/delete
     * @param Post $post
     */

    public function delete(Post $post)
    {
        # suppression de la BDD
        $this->getDoctrine()->getManager()->remove($post);
        $this->getDoctrine()->getManager()->flush();

        #redirection
        return $this->redirectToRoute('default_index');

    }
}
