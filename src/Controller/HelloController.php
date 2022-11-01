<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * Page d'accueil
     *
     * @Route ("/", name="accueil")
     */
    public function home(): Response
    {
        return $this->render(
            'acc.html.twig',
            []
        );
    }

    /**
     * @Route("/greatMe/{name}", name="greatuser")
     **/
    public function greatUser(string $name): Response
    {

        return $this->render('home.html.twig', ['name' => $name]);
    }

}