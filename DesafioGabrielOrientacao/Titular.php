<?php

class Titular {
    private $nome;

    public function __construct(string $newNome) {
        $this->nome = $newNome;
    }
    public function getNome () {
        return $this->nome;
    }

}