<?php function renderMovieCard($movie)
{ ?>
    <div class="col-md-4 mb-3">
        <div class="card">

            <!-- Poster -->
            <?php if ($movie->posterUrl) : ?>
                <img src="<?php echo htmlspecialchars($movie->posterUrl); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($movie->title); ?>">
            <?php endif; ?>
            <div class="card-body text-center bg-opacity-10">

                <!-- Titolo -->
                <h5 class="card-title"><?php echo htmlspecialchars($movie->title); ?></h5>

                <!-- Regista -->
                <h6 class="card-subtitle mb-2 text-muted"><?php echo htmlspecialchars($movie->director); ?></h6>

                <!-- Genere -->
                <p class="card-text"><?php echo htmlspecialchars(implode(", ", $movie->genres)); ?></p>

                <!-- Anno -->
                <p class="card-text"><small class="text-muted">Anno di uscita: <?php echo htmlspecialchars($movie->year); ?></small></p>
            </div>

        </div>
    </div>
<?php } ?>