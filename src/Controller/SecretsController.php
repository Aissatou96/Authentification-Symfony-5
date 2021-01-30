<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SecretsController extends AbstractController
{
    /**
     * @Route("/secrets", name="app_secrets_index")
     * @IsGranted("ROLE_USER")
     */
    public function index(): Response
    {
        //$this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render('secrets/index.html.twig');
    }
}
