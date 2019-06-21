<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Fournisseur;
use App\Form\FournisseurType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;

class FournisseurController extends AbstractController
{
    /**
     * @Route("/fournisseur", name="fournisseur")
     */
    public function fournisseur(Request $request,ObjectManager $manager){
        $fournisseur=new Fournisseur();

        $form=$this->createForm(FournisseurType::class, $fournisseur);
        
        $form->handleRequest($request);

        if($form->isSubmitted()){
         $manager->persist($fournisseur);
         $manager->flush();       
        
      }
      return $this->render('fournisseur/fournisseur.html.twig', [
        'form' => $form->createView()
    ]
  );
   }
}
