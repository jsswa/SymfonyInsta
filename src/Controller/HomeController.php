<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Task;

use App\Entity\Client;

use App\Form\TaskType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;


class HomeController extends AbstractController
{
    
    /**
     * @Route("/", name="home" )
     */
    public function index()
    {
        $cards = $this->getDoctrine()->getRepository(Client::class);
        $cards=$cards->findAll();

        return $this->render('home/index.html.twig',[
            "cards"=>$cards
        ]);
    }


    /**
     * @Route("/annoncement/{page}", 
     * name="annoncement",
     * requirements={"page"="\d+"})
     */
    public function annoucement(int $page=1)
    {
        $cards = $this->getDoctrine()->getRepository(Client::class);
        $cards=$cards->findAll();
        

        return $this->render('home/annoncement.html.twig',[
            'cards'=>$cards
        ]);
    }

    /**
     * @Route("/annoncement/{id}/detail", 
     * name="annoncement_detail",
     * requirements={"id"="[0-9]+"})
     */
    public function annoucement_detail(int $id)
    {
        $card = $this->getDoctrine()->getRepository(Client::class);
        $card=$card->find($id);

        return $this->render('home/annoncement_detail.html.twig',[
            'id'=>$id,
            'card'=> $card
        ]);
    }


    /**
     * @Route("/annoncement/add", 
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
	
             $entityManager = $this->getDoctrine()->getManager();

             $client =$form->getData();
             $client->setCreatedAt(new \DateTime());
	
             $entityManager->persist($client);
	
             $entityManager->flush();
	
            return $this->redirectToRoute('home');
	
        }
	
        
	
        return $this->render("home/annoucement_add.html.twig", [
	
            'form' => $form->createView()
	
        ]);
         
     }

}
