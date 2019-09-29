<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Client;

class AnnouncementListController extends AbstractController
{
      /**
     * @Route("/{_locale}/annoncement/{page}", 
     * name="annoncement",
     * requirements={"page"="\d+"})
     */
    public function annoucement(int $page=1)
    {
        $cards = $this->getDoctrine()->getRepository(Client::class);
        $cards=$cards->findAll();
        

        return $this->render('announcement_list/annoncement.html.twig',[
            'cards'=>$cards
        ]);
    }

}
