<?php

namespace App\Controller\Api;

use App\Entity\Player;
use App\Repository\PlayerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    #[Route('/players', name: 'api_players_list')]
    public function players_list(PlayerRepository $playerRepo): JsonResponse
    {

        return $this->json(
            $playerRepo->findAll(),
            200,
            [],
            ['groups' => 'list_players']
        );
    }

    #[Route('/players/{id}', name: 'app_api')]
    public function find_by_name(Player $player, Request $request): JsonResponse
    {

        return $this->json(
            $player,
            200,
            [],
            ['groups' => 'list_players']
        );
    }


    
}
