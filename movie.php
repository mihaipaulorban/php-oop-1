<?php
// Classe per i Film
class Movie
{
    // Variabili di istanza per ogni film
    public $title;
    public $director;
    public $year;
    public $genres;

    // Definisco il construct per le variabili
    function __construct($title, $director, $year, $genres = [])
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genres = $genres;
    }

    // Funzione per il return del film
    public function getMovieInfo()
    {
        // Uso implode per unire gli elementi dell'array alla stringa di info sul film
        $genresString = implode(", ", $this->genres);
        return "{$this->title}, diretto da {$this->director}, anno di uscita: {$this->year}, generi: {$genresString}";
    }
}
