<?php

class Actor {
    private $nome;
    private $cognome;

    public function __construct(string $nome, string $cognome) {
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    // Getter per il nome
    public function getNome(): string {
        return $this->nome;
    }

    // Getter per il cognome
    public function getCognome(): string {
        return $this->cognome;
    }
}
?>
