<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileException;


class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    public function index(REQUEST $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        if ($request->isMethod('POST')) {
            $profilePictureFile = $request->files->get('profile_picture');

            if ($profilePictureFile) {
                try {
                    $user->uploadProfilePicture($profilePictureFile);

                    $entityManager->persist($user);
                    $entityManager->flush();

                    $this->addFlash('success', 'Profile picture uploaded successfully!');
                } catch (FileException $e) {
                    $this->addFlash('error', 'An error occurred while uploading the profile picture.');
                }
            }
        }

        return $this->render('home/profile.html.twig', [
            'user' => $user,
        ]);
    }
}