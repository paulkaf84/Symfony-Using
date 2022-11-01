<?php

namespace App\Controller;

use App\Entity\Article;
use App\form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
    /**
     * @Route("/form/test", name="/form/test")
     */
    public function new(Request $request)
    {
        $article = new Article();
        $article
            ->setTitle('FormTest')
            ->setContent('Dolor ipsum')
            ->setAuthor('John Doe')
        ;
        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            dump($article);
        }

        return $this->render(
            "default/new.html.twig", array(
                'form' => $form->createView()
            ));
    }
}