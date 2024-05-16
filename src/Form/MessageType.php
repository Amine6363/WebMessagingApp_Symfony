<?php

namespace App\Form;

use App\Entity\Message;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Count;


class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('subject', TextareaType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Please enter a subject.'])
                ],
            ])->add('body', TextareaType::class, [
                    'constraints' => [
                        new NotBlank(['message' => 'Please enter a message body.'])
                    ],
                ])
            ->add('recipients', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'username',
                'multiple' => true,
                'expanded' => true,
                'constraints' => [
                    new Count(['min' => 1, 'minMessage' => 'Please select at least one recipient.'])
                ],
            ])
            ->add('attachment', FileType::class, [
                'label' => 'Attachment (optional)',
                'required' => false,
                'mapped' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Message::class,
        ]);
    }
}
