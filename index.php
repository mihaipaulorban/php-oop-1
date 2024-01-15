<?php
// Autoload per registrare eventuali classi aggiunte
spl_autoload_register(function ($class_name) {
    include 'Classes/' . $class_name . '.php';
});

// Includo sezioni da partials
include 'partials/header.php';
include 'partials/movieCard.php';

$movies = include 'data/db.php';
?>
<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <?php foreach ($movies as $movie) {
            renderMovieCard($movie);
        } ?>
    </div>
</div>
<?php
include 'partials/footer.php';
?>