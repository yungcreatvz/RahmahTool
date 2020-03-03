<?php

namespace App\Controller;

use App\Entity\AbonnementServices;
use App\Form\AbonnementServicesType;
use App\Repository\AbonnementServicesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/abonnement&services")
 */
class AbonnementServicesController extends AbstractController
{
    /**
         * @Route("/", name="as_index", methods={"GET"})
     */
    public function index(AbonnementServicesRepository $abonnementServicesRepository): Response
    {
        return $this->render('abonnement_services/index.html.twig', [
            'abonnement_services' => $abonnementServicesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="abonnement_services_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $abonnementService = new AbonnementServices();
        $form = $this->createForm(AbonnementServicesType::class, $abonnementService);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($abonnementService);
            $entityManager->flush();

            return $this->redirectToRoute('abonnement_services_index');
        }

        return $this->render('abonnement_services/new.html.twig', [
            'abonnement_service' => $abonnementService,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="abonnement_services_show", methods={"GET"})
     */
    public function show(AbonnementServices $abonnementService): Response
    {
        return $this->render('abonnement_services/show.html.twig', [
            'abonnement_service' => $abonnementService,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="abonnement_services_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, AbonnementServices $abonnementService): Response
    {
        $form = $this->createForm(AbonnementServicesType::class, $abonnementService);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('abonnement_services_index');
        }

        return $this->render('abonnement_services/edit.html.twig', [
            'abonnement_service' => $abonnementService,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="abonnement_services_delete", methods={"DELETE"})
     */
    public function delete(Request $request, AbonnementServices $abonnementService): Response
    {
        if ($this->isCsrfTokenValid('delete'.$abonnementService->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($abonnementService);
            $entityManager->flush();
        }

        return $this->redirectToRoute('abonnement_services_index');
    }
}
