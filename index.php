<?php

require_once './models/movie.php';
require_once './models/genre.php';
require_once './models/actor.php';

// Creazione di oggetti Genere
$genereAzione = new Genere("Azione", "Film ricchi di azione e combattimenti");
$genereFantascienza = new Genere("Fantascienza", "Film fantascientifici");

// Creazione di oggetti Movie
$filmMissionImpossible = new Movie("Mission: Impossible", 2090, $genereAzione);
$filmInception = new Movie("Inception", 2010, $genereFantascienza);

// Creazione di oggetti Actor
$attore1 = new Actor("Tom", "Cruise");
$attore2 = new Actor("Leonardo", "DiCaprio");
$attore3 = new Actor("Elliot", "Page");

// Aggiunta di attori ai film
$filmMissionImpossible->aggiungiAttore($attore1);
$filmInception->aggiungiAttore($attore2);
$filmInception->aggiungiAttore($attore3);

// var_dump del primo genere
echo "Dettagli del genere 1:<br>";
var_dump($genereAzione);
echo "<br>";

// var_dump del primo film
echo "Dettagli del film 1:<br>";
var_dump($filmMissionImpossible);
echo "<br>";

// var_dump del secondo genere
echo "Dettagli del genere 2:<br>";
var_dump($genereFantascienza);
echo "<br>";

// var_dump del secondo film
echo "Dettagli del film 2:<br>";
var_dump($filmInception);
echo "<br>";

// Stampa delle proprietà del primo film
echo "<h2>Film 1:</h2><br>";
echo "<strong>Titolo</strong>: " . $filmMissionImpossible->getTitolo() . "<br>";
echo "<strong>Anno</strong>: " . $filmMissionImpossible->getAnno() . "<br>";
echo "<strong>Genere</strong>: " . $filmMissionImpossible->getGenere()->getNome() . "<br>";
echo "<strong>Descrizione del genere</strong>: " . $filmMissionImpossible->getGenere()->getDescrizione() . "<br>";
echo "<strong>Cast</strong>:<br>";
foreach ($filmMissionImpossible->getCast() as $attore) {
    echo $attore->getNome() . " " . $attore->getCognome() . "<br>";
}
echo "<br><br>";

// Stampa delle proprietà del secondo film
echo "<h2>Film 2:</h2><br>";
echo "<strong>Titolo</strong>: " . $filmInception->getTitolo() . "<br>";
echo "<strong>Anno</strong>: " . $filmInception->getAnno() . "<br>";
echo "<strong>Genere</strong>: " . $filmInception->getGenere()->getNome() . "<br>";
echo "<strong>Descrizione del genere</strong>: " . $filmInception->getGenere()->getDescrizione() . "<br>";
echo "<strong>Cast</strong>:<br>";
foreach ($filmInception->getCast() as $attore) {
    echo $attore->getNome() . " " . $attore->getCognome() . "<br>";
}
echo "<br><br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>

<body>

</body>

</html>