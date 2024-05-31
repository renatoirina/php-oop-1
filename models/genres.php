<?php

class Genere {
    private $nome;
    private $descrizione;

    public function __construct(string $nome, string $descrizione) {
        $this->nome = $nome;
        $this->descrizione = $descrizione;
    }

    // Getter per il nome
    public function getNome(): string {
        return $this->nome;
    }

    // Getter per la descrizione
    public function getDescrizione(): string {
        return $this->descrizione;
    }
}
?>
