<?php

namespace App\Controller\Api;

use App\Repository\PlayerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    #[Route('/players', name: 'app_api')]
    public function index(PlayerRepository $playerRepo): JsonResponse
    {

        return $this->json([
            $playerRepo->findAll(),
            200,
            [],
            ['groups' => 'list_players']
        ]);
    }
}
