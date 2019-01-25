<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Game;

class GameController extends AbstractController
{
    /**
     * @Route("/game", name="game")
     */
    public function index()
    {
        $entityManager = $this->getDoctrine()->getManager();

        $game = new Game();
        $game->setName('Ghost Recon');
        $game->setDate(\DateTime::createFromFormat('Y-m-d',"2001-08-15"));

        $entityManager->persist($game);

        $entityManager->flush();

        return new Response('Nouveau Jeu !' .$game->getId());
    }
}
