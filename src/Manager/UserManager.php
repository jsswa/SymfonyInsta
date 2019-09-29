<?php
namespace App\Manager;

use App\Entity\Client;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Doctrine\ORM\EntityManagerInterface;

class UserManager
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    public function save($form)
    {
        $client = new Client();

        $client =$form->getData();

        $client->setCreatedAt(new \DateTime());

        $this->entityManager->persist($client);

        $this->entityManager->flush();
    }

    public function findAnnouncements()
    {
        
    }
}


