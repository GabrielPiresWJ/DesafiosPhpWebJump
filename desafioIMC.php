<?php

$peso = 66;
$altura = 1.72;

$imc = $peso / ($altura ** 2);

echo "O seu IMC é de: $imc" . PHP_EOL;

if ($imc >= 18 && $imc <= 25) {
    echo "Você está saudável :)" . PHP_EOL;
} else {
    echo "Você não está saudável :(". PHP_EOL;
}

