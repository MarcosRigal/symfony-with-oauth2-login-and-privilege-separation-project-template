<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EnterprisesController extends AbstractController
{
    /**
     * @Route("/admin/enterprises", name="app_admin_enterprises")
     */
    public function index(): Response
    {
        return $this->render('admin/enterprises/index.html.twig', [
            'controller_name' => 'EnterprisesController',
        ]);
    }
}
