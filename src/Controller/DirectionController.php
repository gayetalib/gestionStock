<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\DirectionType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Direction;

class DirectionController extends AbstractController
{
    /**
     * @Route("/ajouterDirection", name="ajouterDirection")
     */
    public function direction(Request $request,ObjectManager $manager){
        $direction=new Direction();

        $form=$this->createForm(DirectionType::class, $direction);
        
        $form->handleRequest($request);

        if($form->isSubmitted()){
         $manager->persist($direction);
         $manager->flush();       
        
      }
      return $this->render('direction/ajouterDirection.html.twig', [
        'form' => $form->createView()
    ]
  );
   }
}
