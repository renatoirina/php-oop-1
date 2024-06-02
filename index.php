<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Lista dei Film</h1>
                <?php
                require_once './models/movie.php';
                require_once './models/genre.php';
                require_once './models/actor.php';

                // Creazione di oggetti Genere
                $genere1 = new Genere("Azione", "Film ricchi di azione e combattimenti");
                $genere2 = new Genere("Fantascienza", "Film fantascientifici");

                // Creazione di oggetti Movie
                $film1 = new Movie("Mission: Impossible", 2090, $genere1);
                $film2 = new Movie("Inception", 2010, $genere2);

                // Creazione di oggetti Actor
                $attore1 = new Actor("Tom", "Cruise");
                $attore2 = new Actor("Leonardo", "DiCaprio");
                $attore3 = new Actor("Elliot", "Page");

                // Aggiunta di attori ai film
                $film1->aggiungiAttore($attore1);
                $film2->aggiungiAttore($attore2);
                $film2->aggiungiAttore($attore3);

                // Array di film
                $filmList = [$film1, $film2];
                ?>

                <div class="row">
                    <?php foreach ($filmList as $film) : ?>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $film->getTitolo(); ?></h4>
                                    <h6 class="card-subtitle mb-2 text-muted">Anno: <?php echo $film->getAnno(); ?></h6>
                                    <p class="card-text">
                                        <strong>Genere:</strong> <?php echo $film->getGenere()->getNome(); ?><br>
                                        <strong>Descrizione del genere:</strong> <?php echo $film->getGenere()->getDescrizione(); ?>
                                    </p>
                                    <p class="card-text">
                                        <strong>Cast:</strong>
                                    <ul>
                                        <?php foreach ($film->getCast() as $attore) : ?>
                                            <li><?php echo $attore->getNome() . " " . $attore->getCognome(); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>