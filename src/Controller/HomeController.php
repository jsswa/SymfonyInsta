<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Task;



use Symfony\Component\HttpFoundation\Request;
use App\Entity\Client;


class HomeController extends AbstractController
{
    
    /**
     * @Route("/{_locale}", name="home", requirements={"_local"="fr|en"} )
     */
    public function index(Request $request)
    {
        $cards = $this->getDoctrine()->getRepository(Client::class);
        $cards=$cards->findAll();
        $locale = $request ->getLocale();

        return $this->render('home/index.html.twig',[
            "cards"=>$cards
        ]);
    }



    /**
     * @Route("/{_locale}/annoncement/{id}/detail", 
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



}
