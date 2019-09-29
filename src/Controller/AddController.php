<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Manager;
use App\Entity\Client;
use App\Form\TaskType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AddController extends AbstractController
{
    /**
     * @Route("/{_locale}/annoncement/add", 
     * name="annoncement_add",
     * methods={"GET","POST"})
     */
    public function annoucement_add(Request $request): Response
    {
        $client = new Client();
       $form = $this->createForm(TaskType::class, $client);

       $form->add('submit', SubmitType::class, [
           'label' => 'Envoyer',
       ]);
       
   
       $form->handleRequest($request);
   
       if ($form->isSubmitted() && $form->isValid()) {

        $g = $this->container->get('user.manager')->save($form);
   
           return $this->redirectToRoute('home');
   
       }
   
       
   
       return $this->render("add/annoucement_add.html.twig", [
   
           'form' => $form->createView()
   
       ]);


        
    }

}
