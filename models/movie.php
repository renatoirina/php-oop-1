<?php

require_once 'genre.php';
require_once 'actor.php';

class Movie {
    private $titolo;
    private $anno;
    private $genere;
    private $cast = [];

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

    // Aggiunge un attore al cast
    public function aggiungiAttore(Actor $attore) {
        $this->cast[] = $attore;
    }

    // Getter per il cast
    public function getCast(): array {
        return $this->cast;
    }
}
?>
