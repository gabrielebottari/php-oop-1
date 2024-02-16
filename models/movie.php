<?php
    class Movie {
        public $title;
        public $director;
        public $year;
        public $genres;
        public $imageUrl;

        public function __construct($title, $director, $year, $genres, $imageUrl) {
            $this->title = $title;
            $this->director = $director;
            $this->year = $year;
            $this->genres = $genres;
            $this->imageUrl = $imageUrl;
        }

        public function getDescription() {
            $genresString = implode(", ", $this->genres);
            return "diretto da {$this->director}, uscito nell'anno {$this->year}. Generi: {$genresString}.";
        }

        public function getImageUrl() {
            return $this->imageUrl;
        }
    }
?>