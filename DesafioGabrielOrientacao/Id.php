<?php

class Id { // ao invés de utilizar nome CPF, utilizei ID.
private $id;

    public function __construct(string $id) {
        $this->id = $id;
        $this->validarID($id);
    }
    private function validarID($id) {
        if (strlen($this->id) > 2 ) {
            echo "Muitos carácteres. ID Inválido. " . PHP_EOL;
            exit;
        }
    }
}