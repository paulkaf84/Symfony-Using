<?php

namespace App\Controller;

use App\Events\GreatUser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcher;
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
            ['name' => 'home']
        );
    }

    /**
     * @Route("/greatMe/{name}", name="greatuser")
     **/
    public function greatUser(string $name): Response
    {
        $event = new GreatUser('Charles');
        $eventDispatcher = new EventDispatcher();

        $eventDispatcher->dispatch($event, GreatUser::NAME);

        return $this->render('home.html.twig', ['name' => $name]);
    }

}