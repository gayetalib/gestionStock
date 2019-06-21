<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\ArticleType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Article;

class ArticleController extends AbstractController
{
    /**
     * @Route("/ajouterArticle", name="ajouterArticle")
     */
    public function fournisseur(Request $request,ObjectManager $manager){
        $article=new Article();

        $form=$this->createForm(ArticleType::class, $article);
        
        $form->handleRequest($request);

        if($form->isSubmitted()){
         $manager->persist($article);
         $manager->flush();       
        
      }
      return $this->render('article/ajouterArticle.html.twig', [
        'form' => $form->createView()
    ]
  );
   }
}
