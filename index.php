<?php

    require_once './models/movie.php';
    require_once './models/genre.php';
    
    // Creazione di un oggetto Genere
    $genere1 = new Genere("Azione", "Film ricchi di azione e combattimenti");
    
    // var_dump del genere
    echo "Dettagli del genere 1:<br>";
    var_dump($genere1);

    // Stampa delle proprietà del genere
    echo "Nome: " . $genere1->getNome() . "<br>";
    echo "Descrizione: " . $genere1->getDescrizione() . "<br>";
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