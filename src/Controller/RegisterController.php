<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Utilisateur;
use App\Form\RegistrationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    /**
     * @Route("/add_user", name="ajout")
     */
    public function Register()
    {
        $user = new Utilisateur();
        $form = $this->createForm(RegistrationType::class, $user);
            
        return $this->render('user/register.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
