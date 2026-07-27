<?php

require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/Movie.php';

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

$rush->setVote(9);
