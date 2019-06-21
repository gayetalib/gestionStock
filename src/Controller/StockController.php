<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
// use App\Controller\UserPasswordEncoder;
// use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class StockController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('stock/home.html.twig');
    }

    /**
     * @Route("/stock", name="stock")
     */
    public function index()
    {
        return $this->render('stock/index.html.twig', [
            'controller_name' => 'StockController',
        ]);
    }

    /**
     * @Route("/afficherListe", name="afficherListe")
     */
    public function afficherListe(){
        return $this->render('stock/afficherListe.html.twig');
    }

    /**
     * @Route("/ajouterType", name="ajouterType")
     */
    public function ajouterType(){
        return $this->render('stock/ajouterType.html.twig');
    }

    /**
     * @Route("/ajouterUnite", name="ajouterUnite")
     */
    public function ajouterUnite(){
        return $this->render('stock/ajouterUnite.html.twig');
    }

    /**
     * @Route("/gestionStock", name="gestionStock")
     */
    public function gestionStock(){
        return $this->render('stock/gestionStock.html.twig');
    }

    /**
     * @Route("/afficherListeArticle", name="afficherListeArticle")
     */
    public function afficherListeArticle(){
        return $this->render('stock/afficherListeArticle.html.twig');
    }

    /**
     * @Route("/ajouterUser", name="ajouterUser")
     */
    public function ajouterUser(){
        return $this->render('stock/ajouterUser.html.twig');
    }
     
    /**
     * @Route("/formAjouterUser", name="formAjouterUser")
     */
    public function formAjouterUser(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $passwordEncoder){
        
        $user=new User();

        $form=$this->createForm(UserType::class, $user);
        
        $form->handleRequest($request);

        if($form->isSubmitted()){
         
         $password= $passwordEncoder->encodePassword($user, $user->getPassword());   
         $user->setPassword($password);
         
         $manager->persist($user);
         $manager->flush();       
         
        }
        return $this->render('stock/ajouterUser.html.twig', [
            'form' => $form->createView()
        ]);
    }

}
