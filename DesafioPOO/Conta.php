<?php

class Conta {
    private $id;
    private $nome;
    private $saldo = 1000;
    private static $numeroContas = 0;

    public function __construct($novoNome, $novoID) {
        echo "Dados recebidos." . PHP_EOL;
        echo "Nova conta criada. " . PHP_EOL;
        echo "Obrigado por criar uma conta! Recebeu 1.000 reais de bonus. " . PHP_EOL;
        $this->nome = $novoNome;
        $this->id = $novoID;
        self::$numeroContas++;
    }

    public static function retornaContas() {
        return Conta::$numeroContas;
    }

    public function definirNome(string $novoNome) {
        $this->nome = $novoNome;
    }
    public function recuperar() {
        return $this->saldo;
    }
    

    public function saque(float $quantidade): void {

            if ($quantidade > $this->saldo ) {
                echo "Não é possível, conta não possui saldo. " . PHP_EOL . "Cliente: $this->nome" . PHP_EOL;
            } else {
                $this->saldo -= $quantidade;
                echo "Saque realizado com sucesso. novo saldo: $this->saldo. " . PHP_EOL . "Cliente: $this->nome" . PHP_EOL;
            }

    }
    public function depositar(float $quantia): void {
        if ($quantia > 0 ) {
        $this->saldo += $quantia;
        echo "$quantia adicionado na conta. Novo saldo: $this->saldo" . PHP_EOL;
        } else {
        echo "Valor a ser depositado deve ser positivo. " . PHP_EOL;
        }
            
        
    }
    public function transferir($quantia, $contaATransferir) {
        if ($this->saldo < $quantia) {
            echo "Saldo Indisponível. " . PHP_EOL;
        } else {
            $this->saldo -= $quantia;
            $contaATransferir->depositar($quantia);
        }
    }
}