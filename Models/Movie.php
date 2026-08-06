<?php

require_once __DIR__ . '/Rateable.php';

class Movie
{

    use Rateable;

    public string $title;
    // Ho reso $genres private perché la uso solo dentro questa classe (in getGenresList());
    // da fuori non serve accedervi direttamente.
    private array $genres;
    public int $duration;
    public int $year;
    public string $poster;

    public function __construct(string $_title, array $_genres, int $_duration, int $_year, string $_poster = "img/poster-placeholder.jpg")
    {
        // Valorizzo tutte le proprietà del film con i parametri ricevuti dal costruttore.
        $this->title = $_title;
        $this->genres = $_genres;
        $this->duration = $_duration;
        $this->year = $_year;
        $this->poster = $_poster;
    }

    public function getGenresList()
    {
        // Scorro i generi del film e mi salvo solo il nome di ciascuno.
        $genreNames = [];
        foreach ($this->genres as $genre) {
            $genreNames[] = $genre->name;
        }
        // Unisco i nomi dei generi in un'unica stringa separata da virgole.
        return implode(", ", $genreNames);
    }

    public function getFullDetails()
    {
        // Compongo una stringa riassuntiva con tutti i dati principali del film.
        return "'{$this->title}' ({$this->year}) - Genere: {$this->getGenresList()}, Durata: {$this->duration} min";
    }
}
