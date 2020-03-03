<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainDashboardController extends AbstractController
{
    /**
     * @Route("/maindashboard", name="main_dashboard")
     */
    public function index()
    {
        return $this->render('pages/maindashboard.html.twig', [
            'controller_name' => 'MainDashboardController',
        ]);
    }
}
