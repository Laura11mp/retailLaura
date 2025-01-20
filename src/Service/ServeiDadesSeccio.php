<?php

namespace App\Service;

class ServeiDadesSeccio {

    private $seccions = array(
        array("codi" => 1, "nom" => "Roba", "descripcio" => "Secció de roba i moda per a totes les ocasions.", "any" => "2024", "imatge" => "roba.png", "articles" => array("Jersei", "Camisa", "Vestit", "Jaqueta")),
        array("codi" => 2, "nom" => "Electrònica", "descripcio" => "Aparells i gadgets d'última generació.", "any" => "2024", "imatge" => "electronica.png", "articles" => array("Mòbil", "Ordinador", "Televisor", "Altaveu")),
        array("codi" => 3, "nom" => "Llibres", "descripcio" => "Llibres de tots els gèneres per gaudir de la lectura.", "any" => "2024", "imatge" => "libros.png", "articles" => array("Crònica", "Assaig", "Novel·la", "Memòries")),
        array("codi" => 4, "nom" => "Esports", "descripcio" => "Articles i equipament per a la pràctica esportiva.", "any" => "2024", "imatge" => "esports.png", "articles" => array("Pilota", "Xandall", "Raqueta", "Tovallola")),
        array("codi" => 5, "nom" => "Alimentació", "descripcio" => "Productes frescos i aliments bàsics per a cada dia.", "any" => "2024", "imatge" => "alimentacio.png", "articles" => array("Fruita", "Verdures", "Pa", "Begudes")),
        array("codi" => 6, "nom" => "Joguines", "descripcio" => "Joguines per a totes les edats i preferències.", "any" => "2024", "imatge" => "joguines.png", "articles" => array("Puzles", "Nines", "Cotxes", "Jocs de taula")),
    );

    public function get()
    {
        return $this->seccions;
    }

}
