<?php

class Genre
{
    public string $name;
    public string $description;

    public function __construct(string $_name, $_description = "")
    {
        $this->name = $_name;
        $this->description = $_description;
    }
}


class Movie
{
    public string $title;
    public array $genres;
    public int $duration;
    public int $year;

    public function __construct(string $_title, array $_genres, int $_duration, int $_year)
    {
        $this->title = $_title;
        $this->genres = $_genres;
        $this->duration = $_duration;
        $this->year = $_year;
    }

    public function getGenresList()
    {
        $genreNames = [];
        foreach ($this->genres as $genre) {
            $genreNames[] = $genre->name;
        }
        return implode(", ", $genreNames);
    }

    public function getFullDetails()
    {
        return "'{$this->title}' ({$this->year}) - Genere: {$this->getGenresList()}, Durata: {$this->duration} min";
    }
}

$action = new Genre("Azione", "Film con scene d'azione ad alto impatto.");
$biography = new Genre("Biografico", "Tratto da una storia vera.");
$drama = new Genre("Drammatico", "Storie ad alto impatto emotivo.");

$fordVFerrari = new Movie(
    "Le Mans '66 - La grande sfida",
    [$action, $biography, $drama],
    152,
    2019
);

$rush = new Movie(
    "Rush",
    [$action, $biography],
    123,
    2013
);

var_dump($fordVFerrari);
var_dump($rush);
