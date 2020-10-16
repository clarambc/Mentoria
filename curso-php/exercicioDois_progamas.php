<?php

$contador = 20;
if($contador == 10) {
    echo "Esse número é igual a 10";
}else{
    echo "esse número não é igual a 10\n";
    }
$a = 10;
$b = 20;
if ($a == 10 && $b == 10){
    echo "a e b é igual a 10\n";
}
if ($a == 10 || $b == 10){
    echo "a ou b é igual a 10\n";
}

$numero = 5;
for ($contador = 1; $contador <= 10; $contador ++) {
    $numeroSaida = $numero * $contador;
    echo "$numeroSaida" . PHP_EOL;
}



