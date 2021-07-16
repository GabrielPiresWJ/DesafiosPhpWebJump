<?php
require_once 'Id.php';
require_once 'Titular.php';
require_once 'Conta.php';

$cliente = new Conta(new Titular("Jonas"), new Id("AB"));
$cliente->depositar(1000);
