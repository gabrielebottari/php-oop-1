<?php
include __DIR__ . '/models/movie.php';
include __DIR__ . '/genres.php';

$movies = [
    new Movie("Il Signore degli Anelli - La compagnia dell'anello", "Peter Jackson", 2001, [$genres[0], $genres[1]]),
    new Movie("Harry Potter e la pietra filosofale", "Chris Columbus", 2001, [$genres[0], $genres[2], $genres[1]]),
    new Movie("Star Wars: Episodio V - L'Impero colpisce ancora", "George Lucas", 1980, [$genres[3], $genres[1]])
];
?>