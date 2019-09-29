<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Manager\UserManager;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Client;
use App\Form\TaskType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AddController extends Controller
{
    /**
     * @Route("/{_locale}/annoncement/add", 
     * name="annoncement_add",
     * methods={"GET","POST"})
     */
    public function annoucement_add(Request $request): Response
    {
        $client = new Client();

        $g = $this->get('user.manager');
          
       $form = $this->createForm(TaskType::class, $client);

       $form->add('submit', SubmitType::class, [
           'label' => 'Envoyer',
       ]);
       
   
       $form->handleRequest($request);
   
       if ($form->isSubmitted() && $form->isValid()) {
           
        $g->save($form);
   
           return $this->redirectToRoute('home');
   
       }
   
       
   
       return $this->render("add/annoucement_add.html.twig", [
   
           'form' => $form->createView()
   
       ]);


        
    }

}
