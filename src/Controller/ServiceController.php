<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\ServiceType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Service;

class ServiceController extends AbstractController
{
    /**
     * @Route("/ajouterService", name="ajouterService")
     */
    public function direction(Request $request,ObjectManager $manager){
        $service=new Service();

        $form=$this->createForm(ServiceType::class, $service);
        
        $form->handleRequest($request);

        if($form->isSubmitted()){
         $manager->persist($service);
         $manager->flush();       
        
      }
      return $this->render('service/ajouterService.html.twig', [
        'form' => $form->createView()
    ]
  );
   }
}
