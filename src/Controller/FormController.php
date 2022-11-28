<?php

namespace App\Controller;

use App\Entity\Article;
use App\form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class FormController extends AbstractController
{
    /**
     * @Route("/form/test", name="/form/test")
     */
    public function new(Request $request, ManagerRegistry $doctrine): Response
    {
        $article = new Article();
        $article
            ->setTitle('FormTest with Doctrine ORM')
            ->setContent('Dolor ipsum')
            ->setAuthor('John Doe')
        ;
        $form = $this->createForm(ArticleType::class, $article);



        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            dump($article);
            $entitymanager =$doctrine->getManager() ;

            $entitymanager->persist($article);
            $entitymanager->flush();
        }

        return $this->render(
            "default/new.html.twig", array(
                'form' => $form->createView()
            ));
    }

    #[Route("form/edit/{id<\d+>}", name: "EditArticle")]
    public function editArticle(ManagerRegistry $doctrine, $id)
    {
        $entitymanager = $doctrine->getManager();
        $article = $entitymanager->find(Article::class, $id);

        if(!$article){
            throw $this->createNotFoundException(
                'No Article Found With this id:['.$id.']'
            );
        }
        $article
            ->setAuthor("Jule Doe")
            ->setTitle('Some Title')
            ->setContent('Some Content');

        $entitymanager->flush();

        return new Response("Well did", Response::HTTP_OK);
    }
}