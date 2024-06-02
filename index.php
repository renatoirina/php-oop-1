<?php

require_once './models/movie.php';
require_once './models/genre.php';

// Creazione di un oggetto Genere
$genere1 = new Genere("Azione", "Film ricchi di azione e combattimenti");

// Creazione di un oggetto Movie
$film1 = new Movie("Inception", 2010, $genere1);

// var_dump del primo genere
echo "Dettagli del genere 1:<br>";
var_dump($genere1);
// var_dump del primo film
echo "Dettagli del film 1:<br>";
var_dump($film1);

// Stampa delle proprietà del primo film
echo "Film 1:<br>";
echo "Titolo: " . $film1->getTitolo() . "<br>";
echo "Anno: " . $film1->getAnno() . "<br>";
echo "Genere: " . $film1->getGenere()->getNome() . "<br>";
echo "Descrizione del genere: " . $film1->getGenere()->getDescrizione() . "<br>";
echo "<br>";
?>
z
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