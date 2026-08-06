<?php

// Includo le classi dei modelli prima di poterle usare.
require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/Movie.php';

// Creo i generi che poi assegno ai film.
$action = new Genre("Azione", "Film con scene d'azione ad alto impatto.");
$biography = new Genre("Biografico", "Tratto da una storia vera.");
$drama = new Genre("Drammatico", "Storie ad alto impatto emotivo.");
$comedy = new Genre("Commedia", "Film pensati per divertire e far ridere.");
$documentary = new Genre("Documentario", "Racconto basato su materiale e riprese reali.");
$animation = new Genre("Animazione", "Film realizzato in computer grafica o disegno.");

// Creo il primo film passando i generi già istanziati sopra.
$fordVFerrari = new Movie(
    "Le Mans '66 - La grande sfida",
    [$action, $biography, $drama],
    152,
    2019,
    "img/poster-le-mans-66.jpg"
);

// Assegno il voto tramite setVote(), così passa dalla validazione.
$fordVFerrari->setVote(10);

// Creo il secondo film.
$rush = new Movie(
    "Rush",
    [$action, $biography],
    123,
    2013,
    "img/poster-rush.jpg"
);

$rush->setVote(9);

// Creo il terzo film.
$daysOfThunder = new Movie(
    "Giorni di tuono",
    [$action, $drama],
    107,
    1990,
    "img/poster-giorni-di-tuono.jpg"
);

$daysOfThunder->setVote(7);

// Creo il quarto film.
$senna = new Movie(
    "Senna",
    [$biography, $documentary],
    106,
    2010,
    "img/poster-senna.jpg"
);

$senna->setVote(9);

// Creo il quinto film.
$granTurismo = new Movie(
    "Gran Turismo",
    [$action, $biography],
    134,
    2023,
    "img/poster-gran-turismo.jpg"
);

$granTurismo->setVote(8);

// Creo il sesto film.
$taxi = new Movie(
    "Taxi",
    [$action, $comedy],
    86,
    1998,
    "img/poster-taxi.jpg"
);

$taxi->setVote(8);

// Creo il settimo film.
$cars = new Movie(
    "Cars - Motori ruggenti",
    [$animation, $comedy],
    117,
    2006,
    "img/poster-cars.jpg"
);

$cars->setVote(9);
