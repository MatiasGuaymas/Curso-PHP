<?php

// Break: permite salir prematuramente de un bucle

$contador = 1;

while ($contador <= 20) {
    echo $contador."<br>";
    if($contador == 10) {
        break;
    }
    $contador++;
}

$pc = ["1A", "2B", "3C"];

foreach ($pc as $comp) {
    echo $comp."<br>";
    if($comp == "2B") {
        break;
    }
}

// Continue: pasa a la siguiente iteracion de un bucle, y omitir todo el codigo despues de la palabra continue.

foreach ($pc as $comp) {
    if($comp == "2B") {
        continue;
    }
    echo $comp."<br>";
}

for ($i = 1; $i<= 5; $i++) {
    if ($i == 3) {
        continue;
    }
    echo $i."<br>";
}

?>