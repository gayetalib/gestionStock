<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\DepartementType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Departement;

class DepartementController extends AbstractController
{
    /**
     * @Route("/ajouterDepartement", name="ajouterDepartement")
     */
    public function direction(Request $request,ObjectManager $manager){
        $departement=new Departement();

        $form=$this->createForm(DepartementType::class, $departement);
        
        $form->handleRequest($request);

        if($form->isSubmitted()){
         $manager->persist($departement);
         $manager->flush();       
        
      }
      return $this->render('departement/ajouterDepartement.html.twig', [
        'form' => $form->createView()
    ]
  );
   }
}
