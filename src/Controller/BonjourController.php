<?php

namespace App\Controller;

// use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BonjourController extends AbstractController
{

 /*   #[Route("/", name: "Bonjour")]
    public function Bonjour(){
        $name = "GAETAN";

        return $this->render('index.html.twig', [
            'name' => $name
        ]);
    }*/

    // Creating new route for a new page
    #[Route("/article", name: "article")]
    public function article(){
        // define array as variable
        $article = [
            'title' => 'Musique',
            'color' => 'red',
            'published' => true,
            'description' => 'Decrypter l/actualité musicale avec le prisme de Gaetan Ramillon',
        ];

        return $this->render('index.html.twig', [
            // return the var as 'article' to use it in .twig
            'article' => $article
        ]);
    }
}