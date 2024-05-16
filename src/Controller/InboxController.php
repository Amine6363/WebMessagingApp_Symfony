<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Message;

class InboxController extends AbstractController
{
    #[Route('/inbox', name: 'app_inbox')]
    public function inbox(): Response
    {
        // Get currently logged-in user
        $user = $this->getUser();

        // Get received messages for the user
        $receivedMessages = $user->getReceivedMessages();

        return $this->render('message/inbox.html.twig', [
            'receivedMessages' => $receivedMessages,
        ]);
    }

    #[Route('/inbox/message/{id}', name: 'app_message_view')]
    public function viewMessage(Message $message, EntityManagerInterface $entityManager): Response
    {

        // get currently logged-in user
        $user = $this->getUser();
        // Mark message as read if it's not already marked
        if (!$message->isViewed()) {
            $message->setViewed(true);
            $entityManager->flush();
        }

        return $this->render('message/inbox_show.html.twig', [
            'message' => $message,
            'user' => $user,

        ]);
    }

}
