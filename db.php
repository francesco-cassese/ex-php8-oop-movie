<?php

// Includo le classi dei modelli prima di poterle usare.
require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/Movie.php';

// Creo i generi che poi assegno ai film.
$action = new Genre("Azione", "Film con scene d'azione ad alto impatto.");
$biography = new Genre("Biografico", "Tratto da una storia vera.");
$drama = new Genre("Drammatico", "Storie ad alto impatto emotivo.");

// Creo il primo film passando i generi già istanziati sopra.
$fordVFerrari = new Movie(
    "Le Mans '66 - La grande sfida",
    [$action, $biography, $drama],
    152,
    2019
);

// Assegno il voto tramite setVote(), così passa dalla validazione.
$fordVFerrari->setVote(10);

// Creo il secondo film.
$rush = new Movie(
    "Rush",
    [$action, $biography],
    123,
    2013
);

$rush->setVote(9);
