<?php
    class Movie {
        public $title;
        public $director;
        public $year;
        public $genres;

        public function __construct($title, $director, $year, $genres) {
            $this->title = $title;
            $this->director = $director;
            $this->year = $year;
            $this->genres = $genres;
        }

        public function getDescription() {
            $genresString = implode(", ", $this->genres);
            return "{$this->title} diretto da {$this->director}, uscito nell'anno {$this->year}. Generi: {$genresString}.";
        }
    }
?>