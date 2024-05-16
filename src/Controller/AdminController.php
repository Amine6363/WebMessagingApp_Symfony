<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\User;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    // Retrieve all users from the database
    public function index(EntityManagerInterface $entityManager): Response
    {
        // Retrieve all users from the database
        $users = $entityManager->getRepository(User::class)->findAll();

        return $this->render('admin/dashboard.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/admin/block/{id}', name: 'admin_block_user')]
    public function blockUser(User $user, EntityManagerInterface $entityManager): Response
    {
        // Update user roles to block the user
        $user->setRoles(['ROLE_BLOCKED']);
        $user->setBlocked(true);


        // Persist changes to database
        $entityManager->flush();

        return $this->redirectToRoute('app_admin');
    }

    #[Route('/admin/unblock/{id}', name: 'admin_unblock_user')]
    public function unblockUser(User $user, EntityManagerInterface $entityManager): Response
    {
        $user->setRoles(['ROLE_USER']); // Adjust roles as needed
        $user->setBlocked(false);

        // Persist changes to database
        $entityManager->flush();

        $this->addFlash('success', 'User unblocked successfully.');

        return $this->redirectToRoute('app_admin');
    }
}