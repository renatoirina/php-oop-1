<?php

require_once 'genre.php';

class Movie {
    private $titolo;
    private $anno;
    private $genere;

    public function __construct(string $titolo, int $anno, Genere $genere) {
        $this->titolo = $titolo;
        $this->anno = $anno;
        $this->genere = $genere;
    }

    // Getter per il titolo
    public function getTitolo(): string {
        return $this->titolo;
    }

    // Getter per l'anno
    public function getAnno(): int {
        return $this->anno;
    }

    // Getter per il genere
    public function getGenere(): Genere {
        return $this->genere;
    }
}
?>
