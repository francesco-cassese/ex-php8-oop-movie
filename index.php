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
    public object $genre;
    public int $duration;
    public int $year;

    public function __construct(string $_title, Genre $_genre, int $_duration, int $_year)
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

$actionGenre = new Genre(
    "Azione / Biografico",
    "Film basati su eventi reali con sequenze ad alto tasso di adrenalina."
);

$fordVFerrari = new Movie("Le Mans '66 - La grande sfida", $actionGenre, 152, 2019);
$rush = new Movie("Rush", $actionGenre, 123, 2013);

var_dump($fordVFerrari);
var_dump($rush);
