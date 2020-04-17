<?php

namespace App\Controller;

use App\Entity\Classe;
use App\Entity\Eleve;
use App\Repository\ClasseRepository;
use App\Repository\EleveRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;
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
        $insRecent = $manager->createQuery('SELECT e FROM App\Entity\Eleve e ORDER BY e.id DESC')->getResult();
        $recRecent = $manager->createQuery('SELECT re FROM App\Entity\Salarie re ORDER BY re.id DESC ')->getResult();
        dump($insRecent);
        return $this->render('pages/maindashboard.html.twig', [
            'stats' => compact('eleve','classe', 'parents','employe'),
            'insrecent'=> $insRecent,
            'recRecent'=> $recRecent,

        ]);
    }

    /**
     * @Route("/eclasse", name="effectif_show")
     */
    public function showc(EntityManagerInterface $manager, ClasseRepository $classeRepository, EleveRepository $eleveRepository):Response
    {
        $eclasse = $manager->createQuery('SELECT ec FROM App\Entity\Classe ec')->getResult();

        return $this->render('eleve/classe/eshow.html.twig', [
            'eclasse'=> $eclasse,
            'classe' => $classeRepository->findAll(),
            'eleve' => $eleveRepository->findAll(),

        ]);
    }
}
