<?php

require_once './models/movie.php';
require_once './models/genre.php';

// Creazione di un oggetto Genere
$genere1 = new Genere("Azione", "Film ricchi di azione e combattimenti");
$genere2 = new Genere("Fantascienza", "Film fantascientifici");

// Creazione di un oggetto Movie
$film1 = new Movie("Mission: Impossible", 2090, $genere1);
$film2 = new Movie("Inception", 2010, $genere2);

// var_dump del primo genere
echo "Dettagli del genere 1:<br>";
var_dump($genere1);
// var_dump del primo film
echo "Dettagli del film 1:<br>";
var_dump($film1);

// var_dump del secondo genere
echo "Dettagli del genere 2:<br>";
var_dump($genere2);
// var_dump del secondo film
echo "Dettagli del film 2:<br>";
var_dump($film2);

// Stampa delle proprietà del primo film
echo "Film 1:<br>";
echo "Titolo: " . $film1->getTitolo() . "<br>";
echo "Anno: " . $film1->getAnno() . "<br>";
echo "Genere: " . $film1->getGenere()->getNome() . "<br>";
echo "Descrizione del genere: " . $film1->getGenere()->getDescrizione() . "<br>";
echo "<br><br>";

// Stampa delle proprietà del secondo film
echo "Film 2:<br>";
echo "Titolo: " . $film2->getTitolo() . "<br>";
echo "Anno: " . $film2->getAnno() . "<br>";
echo "Genere: " . $film2->getGenere()->getNome() . "<br>";
echo "Descrizione del genere: " . $film2->getGenere()->getDescrizione() . "<br>";
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