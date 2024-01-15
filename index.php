<?php
include 'movie.php';

// Aggiungo alla classe il film con i valori
$movie1 = new Movie("Il Padrino", "Francis Ford Coppola", 1972, ["Drammatico", "Crime"]);
$movie2 = new Movie("Pulp Fiction", "Quentin Tarantino", 1994, ["Crime", "Commedia", "Drammatico"]);

echo $movie1->getMovieInfo();
echo "<br>";
echo $movie2->getMovieInfo();
