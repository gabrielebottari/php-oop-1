<?php
include __DIR__ . '/models/movie.php';
include __DIR__ . '/genres.php';

$movies = [
    new Movie("Il Signore degli Anelli - La compagnia dell'Anello", "Peter Jackson", 2001, [$genres[0], $genres[1]], "https://pad.mymovies.it/filmclub/2002/01/011/locandina.jpg"),
    new Movie("Harry Potter e la pietra Filosofale", "Chris Columbus", 2001, [$genres[0], $genres[2], $genres[1]], "https://static.posters.cz/image/1300/poster/harry-potter-la-pietra-filosofale-i104639.jpg"),
    new Movie("Star Wars: Episodio V - L'Impero colpisce ancora", "George Lucas", 1980, [$genres[3], $genres[1]],  "https://preview.redd.it/the-empire-strikes-back-1980-movie-poster-v0-obb9faatoopb1.jpg?width=1080&crop=smart&auto=webp&s=bd706005c2363066b7674f26aaa1540878ca2b62")
];
?>