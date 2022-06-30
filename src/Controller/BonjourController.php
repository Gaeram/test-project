<?php

namespace App\Controller;

use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BonjourController extends AbstractController
{

    #[Route("/", name: "Bonjour")]
    public function Bonjour(){
        $name = "GAETAN";

        return $this->render('index.html.twig', [
            'name' => $name
        ]);
    }
}