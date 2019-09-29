<?php
namespace App\Manager;

use App\Entity\Client;

use Symfony\Component\Form\Extension\Core\Type\DateType;

class UserManager
{
    /**
     *  @var EntityManager
     */
    private $entityManager;

    public function __construct(ObjectManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    public function save($form)
    {
        $client = new Client();

        $client =$form->getData();

        $client->setCreatedAt(new \DateTime());

        $entityManager->persist($client);

        $entityManager->flush();
    }

    public function findAnnouncements()
    {
        
    }
}


