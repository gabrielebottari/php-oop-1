
<?php
    //Definizione della classe Movie
    class Movie {
        //Dichiarazione delle variabili d'istanza
        public $title;
        public $director;
        public $year;

        //Definizione del costruttore
        public function __construct($title, $director, $year) {
            $this->title = $title;
            $this->director = $director;
            $this->year = $year;
        }

        //Definizione di un metodo per ottenere una rappresentazione stringa dell'oggetto
        public function getDescription() {
            return $this->title . " diretto da " . $this->director . ", uscito nell'anno " . $this->year;
        }
    }

    //Istanza dei tre oggetti movie
    $movie1 = new Movie("Il Signore degli Anelli", "Peter Jackson", 2001);
    $movie2 = new Movie("Harry Potter e la pietra filosofale", "Chris Columbus", 2001);
    $movie3 = new Movie("Star Wars: Episodio IV - Una nuova speranza", "George Lucas", 1977);

    var_dump($movie1);
    var_dump($movie2);
    var_dump($movie3);

    //Stampo a schermo delle informazioni dei film tramite il metodo getDescription
    echo $movie1->getDescription();
    echo "<br>";
    echo $movie2->getDescription();
    echo "<br>";
    echo $movie3->getDescription();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Template PHP</title>
    </head>
    <body>
      
    </body>
</html>