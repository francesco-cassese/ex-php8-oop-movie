<?php

require_once __DIR__ . '/Rateable.php';

class Movie
{

    use Rateable;

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
