<?php

// Includo db.php per avere a disposizione i film già istanziati ($fordVFerrari, $rush).
require_once __DIR__ . '/db.php';

// Raggruppo i film in un array così posso scorrerli con un solo ciclo nel markup sotto.
$movies = [$fordVFerrari, $rush];
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie Collection</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <a class="skip-link" href="#main-content">Salta al contenuto principale</a>

    <header class="navbar">
        <span class="logo">MOVIEFLIX</span>
    </header>

    <main id="main-content">
        <h1>La mia collezione di film</h1>

        <ul class="movie-list">

            <!-- // Per ogni film in elenco genero una card con i suoi dati. -->
            <?php foreach ($movies as $movie): ?>
                <li class="movie-card">
                    <div class="movie-card__poster">
                        <img src="img/poster-placeholder.jpg" alt="Locandina di <?= htmlspecialchars($movie->title) ?>" class="movie-card__poster-img">
                        <span class="movie-card__year"><?= $movie->year ?></span>
                    </div>
                    <div class="movie-card__body">
                        <h2><?= htmlspecialchars($movie->title) ?></h2>
                        <p><strong>Genere:</strong> <?= htmlspecialchars($movie->getGenresList()) ?></p>
                        <p><strong>Durata:</strong> <?= $movie->duration ?> min</p>
                        <p class="vote"><?= $movie->getRatingStars() ?></p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>

</html>