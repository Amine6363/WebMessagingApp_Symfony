<?php
// src/Controller/MessageController.php
namespace App\Controller;

use App\Entity\Message;
use App\Form\MessageType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class MessageController extends AbstractController
{
    // send a message
    #[Route('/message', name: 'app_message')]
    public function sendMessage(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle file upload
            /** @var UploadedFile $attachmentFile */
            $attachmentFile = $form->get('attachment')->getData();

            if ($attachmentFile) {
                $originalFilename = pathinfo($attachmentFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $attachmentFile->guessExtension();

                try {
                    $attachmentFile->move(
                        $this->getParameter('attachments_directory'), // Define 'attachments_directory' in services.yaml
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Handle file upload error
                    // You might want to log or display a message to the user
                    // and handle any other exception scenarios
                    throw new \Exception('Error uploading file');
                }

                // Store the file path or filename in the message entity
                $message->setAttachmentFilename($newFilename);
            }

            // Set the currently logged-in user as the sender
            $message->setSender($this->getUser());

            // Set the sentAt date to the current datetime
            $sentAt = new \DateTimeImmutable();
            $message->setSentAt($sentAt);

            // Persist the message and recipients
            $entityManager->persist($message);
            $entityManager->flush();

            $this->addFlash('success', 'Message sent successfully!');
            return $this->redirectToRoute('app_message'); // Redirect to home or another route
        }

        return $this->render('message/send.html.twig', [
            'form' => $form->createView(),
            'user' => $this->getUser(),
        ]);
    }


    // reply to a message
    #[Route('/message/{id}/reply', name: 'app_message_reply')]

    public function replyToMessage(Request $request, Message $message, EntityManagerInterface $entityManager): Response
    {
        $replyContent = $request->request->get('reply_content');

        // Create a new message for the reply
        $replyMessage = new Message();
        $replyMessage->setSubject('Re: ' . $message->getSubject());
        $replyMessage->setSender($this->getUser());
        $replyMessage->addRecipient($message->getSender()); // Reply to the original sender
        $replyMessage->setBody($replyContent);

        // Set the sentAt date to the current datetime
        $sentAt = new \DateTimeImmutable();
        $replyMessage->setSentAt($sentAt);


        $entityManager->persist($replyMessage);
        $entityManager->flush();

        $this->addFlash('success', 'Reply sent successfully!');

        return $this->redirectToRoute('app_inbox'); // Redirect to inbox or another appropriate route
    }
}
