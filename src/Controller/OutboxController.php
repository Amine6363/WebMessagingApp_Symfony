<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Message;

class OutboxController extends AbstractController
{
    #[Route('/outbox', name: 'app_outbox')]
    public function outbox(EntityManagerInterface $entityManager): Response
    {
        // Get the currently logged-in user
        $user = $this->getUser();

        // Retrieve sent messages for the current user
        $sentMessages = $entityManager->getRepository(Message::class)->findBy([
            'sender' => $user
        ]);

        return $this->render('message/outbox.html.twig', [
            'sentMessages' => $sentMessages,
            'user' => $this->getUser(),

        ]);
    }

    #[Route('/outbox/message/{id}', name: 'app_message_show')]
    public function viewMessage(Message $message, EntityManagerInterface $entityManager): Response
    {
        // Get the currently logged-in user
        $user = $this->getUser();

        // Mark the message as read if it's not already marked
        if (!$message->isViewed()) {
            $message->setViewed(true);
            $entityManager->flush();
        }

        return $this->render('message/outbox_show.html.twig', [
            'message' => $message,
            'user' => $user,

        ]);
    }
}

