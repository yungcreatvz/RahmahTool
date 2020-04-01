<?php

namespace App\Controller;

use App\Entity\Classe;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainDashboardController extends AbstractController
{
    /**
     * @Route("/maindashboard", name="main_dashboard")
     */
    public function index(EntityManagerInterface $manager ):Response
    {
        $eleve = $manager->createQuery('SELECT COUNT(e) FROM App\Entity\Eleve e')->getSingleScalarResult();
        $classe = $manager->createQuery('SELECT COUNT(c) FROM App\Entity\Classe c')->getSingleScalarResult();
        $parents = $manager->createQuery('SELECT COUNT(p) FROM App\Entity\Parents p')->getSingleScalarResult();
        $employe = $manager->createQuery('SELECT COUNT(em) FROM App\Entity\Salarie em')->getSingleScalarResult();
        $insRecent = $manager->createQuery('SELECT e FROM App\Entity\Eleve e')
            ->setMaxResults(5)
            ->getResult();
        dump($insRecent);
        return $this->render('pages/maindashboard.html.twig', [
            'stats' => compact('eleve','classe', 'parents','employe'),
            'insrecent'=> $insRecent,

        ]);
    }
}
