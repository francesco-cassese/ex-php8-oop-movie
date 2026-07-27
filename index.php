<?php

require_once __DIR__ . '/db.php';

$movies = [$fordVFerrari, $rush];
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Movie Collection</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="navbar">
        <span class="logo">MOVIEFLIX</span>
    </header>

    <main>
        <h1>La mia collezione di film</h1>

        <div class="movie-list">
            <?php foreach ($movies as $movie): ?>
                <div class="movie-card">
                    <div class="movie-card__poster">
                        <img src="img/poster-placeholder.jpg" alt="Locandina non disponibile" class="movie-card__poster-img">
                        <span class="movie-card__year"><?= $movie->year ?></span>
                    </div>
                    <div class="movie-card__body">
                        <h2><?= htmlspecialchars($movie->title) ?></h2>
                        <p><strong>Genere:</strong> <?= htmlspecialchars($movie->getGenresList()) ?></p>
                        <p><strong>Durata:</strong> <?= $movie->duration ?> min</p>
                        <p class="vote"><?= $movie->getRatingStars() ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>

</html>
