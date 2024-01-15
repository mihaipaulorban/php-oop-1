<?php
// Classe per i Film
class Movie
{
    // Variabili di istanza per ogni film
    public $title;
    public $director;
    public $year;

    // Definisco il construct per le variabili
    function __construct($title, $director, $year)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
    }

    // Funzione per il return del film
    public function getMovieInfo()
    {
        return "{$this->title}, diretto da {$this->director}, anno di uscita {$this->year}";
    }
}
