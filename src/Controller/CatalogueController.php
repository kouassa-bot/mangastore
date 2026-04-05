<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CatalogueController extends AbstractController
{
    #[Route('/catalogue', name: 'app_catalogue')]
    public function index(): Response
    {
        $mangas = [
            [
                'titre' => 'Naruto',
                'auteur' => 'Masashi Kishimoto',
                'date_parution' => '1999',
                'genre' => 'Shonen',
                'prix' => 6.99,
            ],
            [
                'titre' => 'One Piece',
                'auteur' => 'Eiichiro Oda',
                'date_parution' => '1997',
                'genre' => 'Shonen',
                'prix' => 6.99,
            ],
            [
                'titre' => 'Fullmetal Alchemist',
                'auteur' => 'Hiromu Arakawa',
                'date_parution' => '2001',
                'genre' => 'Shonen',
                'prix' => 7.50,
            ],
        ];

        return $this->render('catalogue/index.html.twig', [
            'mangas' => $mangas,
        ]);
    }
}