<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\RegistrationType;
use App\Form\UtilisateurType;
use App\Repository\UtilisateurRepository;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login()
    {
        //: Response AuthenticationUtils $authenticationUtils
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
      //  $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        //$lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig');
         //,['last_username' => $lastUsername, 'error' => $error,]

    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
       // throw new \Exception('This method can be blank - it will be intercepted by the logout key on your firewall');
    }
    /**
     * Permet d'afficher le formulaire de création de compte
     *
     * @Route("/register", name="app_register")
     * @return
     */
    public function register(Request $request, UserPasswordEncoderInterface $encoder):Response {

        $utilisateur = new Utilisateur();

        $form = $this->createForm(RegistrationType::class, $utilisateur);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $hash = $encoder ->encodePassword($utilisateur, $utilisateur->getPassword());
            $utilisateur->setHash($hash);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($utilisateur);
            $entityManager->flush();

            $this->addFlash('success', 'Nouveau Profil ajouté');
            return $this->redirectToRoute('app_login');
        }
            return $this->render('security/register.html.twig', [
                'form' => $form->createView()
            ]);

    }
    /**
     * @Route("/utilisateur", name="u_index", methods={"GET"})
     */
    public function index(UtilisateurRepository $utilisateurRepository): Response
    {
        return $this->render('security/u_index.html.twig', [
            'utilisateur' => $utilisateurRepository->findAll()
        ]);
    }
    /**
     * @Route("/{id}/edit/", name="u_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Utilisateur $utilisateur, UserPasswordEncoderInterface $encoder): Response
    {
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hash = $encoder ->encodePassword($utilisateur, $utilisateur->getPassword());
            $utilisateur->setHash($hash);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('u_index');
        }

        return $this->render('security/edit.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="u_show", methods={"GET"})
     */
    public function show(Utilisateur $utilisateur): Response
    {
        return $this->render('security/show.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }

    /**
     * @Route("/{id}", name="u_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Utilisateur $utilisateur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$utilisateur->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($utilisateur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('u_index');
    }
}
