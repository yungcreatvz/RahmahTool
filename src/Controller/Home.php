<?php



namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


    class Home extends AbstractController
    {
    /**
     *@Route("/", name="homepage")
     */
    public function home(){
        return $this->render(
            'home.html.twig',
            ['title'=> "Bienvenue Cher Utilisateur",
             'parag'=>"Pour poursuivre vers la page de connexion veuillez suivre le lien ci dessous"
            ]);
        }

        /**
         *@Route("/loginpage", name="Login")
         */
        public function login(){
            return $this->render(
                'pages/login2.html.twig');
        }

        /**
         *@Route("/dashboard", name="dashboard")
         */
        public function dashboard(){
            return $this->render(
                'dashboardbase.html.twig',
                ['title'=> "Dashboard",
                    'parag'=>"bienvenue dans la page dashboard"]);
        }
    }


