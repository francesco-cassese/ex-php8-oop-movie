<?php

class Movie
{
    public $title;
    public $genre;
    public $duration;
    public $year;

    public function __construct($_title, $_genre, $_duration, $_year)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->duration = $_duration;
        $this->year = $_year;
    }

    public function getFullDetails()
    {
        return "'{$this->title}' ({$this->year}) - Genere: {$this->genre}, Durata: {$this->duration} min";
    }
}

$fordVFerrari = new Movie("Le Mans '66 - La grande sfida", "Azione / Biografico", 152, 2019);
$rush = new Movie("Rush", "Azione / Biografico", 123, 2013);

var_dump($fordVFerrari);
var_dump($rush);
