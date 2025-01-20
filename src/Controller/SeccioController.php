<?php

namespace App\Controller;

// use App\Service\ServeiDadesSeccio;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class SeccioController extends AbstractController {

    // private $seccions = array(
    //     array("codi" => 1, "nom" => "Roba", "descripcio" =>"Descripció de la secció", "any" =>"2024", "articles" => array("Pantalons","Camisa","Jersey","Xaqueta")),
    //     array("codi" => 2, "nom" => "Electrònica", "descripcio" => "Descripció de la secció d'electrònica", "any" => "2024", "articles" => array("Mòbil", "Portàtil", "Auriculars", "Carregador")),
    //     array("codi" => 3, "nom" => "Llibres", "descripcio" => "Descripció de la secció de llibres", "any" => "2024", "articles" => array("Novel·la", "Història", "Ciència", "Filosofia")),
    //     array("codi" => 4, "nom" => "Esports", "descripcio" => "Descripció de la secció d'esports", "any" => "2024", "articles" => array("Pilota", "Raqueta", "Bicicleta", "Botas de futbol")),
    // );

    // #[Route('/contacte/{codi<\d+>?1}' ,name:'fitxa_contacte')]     \d --> codi alfanumèric

    private $seccions;
    public function __construct($dadesSeccions) {
        $this->seccions = $dadesSeccions->get();
    }

    #[Route('/seccions', name: 'seccions')]
    public function seccions(): Response
    {
        return $this->render('mainContent/sections.html.twig', ['seccions' => $this->seccions]);
    }

    #[Route('/details/{codi}', name: 'details', requirements: ['codi' => '\d+'])]
    public function details($codi): Response
    {
        $resultat = array_filter($this->seccions,
        function($seccio) use ($codi) {
            return $seccio["codi"] == $codi;
        });

        if (count($resultat) == 0) {
            return $this->render('mainContent/error.html.twig');
        }

        $seccio = array_shift($resultat); // Agafa el primer element de l'array

        return $this->render('mainContent/detallSeccio.html.twig',['seccio' => $seccio]);
    }

}