<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Game;

class GameController extends AbstractController
{
    /**
     * @Route("/game", name="game")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/GameController.php',
        ]);

        $entityManager = $this->getDoctrine()->getManager();

        $game = new Game();
        $game = setName('Ghost Recon');
        $game = setDate('12-01-2018');

        $entityManager->persist($game);

        $entityManager->flush();

        return new Reponse('Nouveau Jeu !' .$game->getId());
    }
}
