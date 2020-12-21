<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Persistence\ObjectManager;

class AppFixtures
{
    /**
     * Le Manager "ObjectManager" est un objet qui sait comment manipuler en BDD
     * nos entités. (Insert, Update, Delete)
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {


        # Création des Articles de blog
        for ($i = 0; $i < 3; $i++) {

            $post = new Post();
            $post->setTitle('Lorem ipsum dolor ' . $i)
                ->setContent('<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolore nostrum odit quaerat quasi qui quidem sunt voluptatem! Consectetur consequatur consequuntur expedita id iure labore magnam maiores necessitatibus nihil nostrum.</p>')
                ->setImage('https://via.placeholder.com/500')
                ->setCreatedAt(new \DateTime());

            $manager->persist($post);
            $manager->flush();
        } # endfor

        # Création des Articles de blog
        for ($i = 3; $i < 7; $i++) {

            $post = new Post();
            $post->setTitle('Lorem ipsum dolor ' . $i)
                ->setContent('<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolore nostrum odit quaerat quasi qui quidem sunt voluptatem! Consectetur consequatur consequuntur expedita id iure labore magnam maiores necessitatibus nihil nostrum.</p>')
                ->setImage('https://via.placeholder.com/500')
                ->setCreatedAt(new \DateTime());


            $manager->persist($post);
            $manager->flush();
        } # endfor


    }
}
