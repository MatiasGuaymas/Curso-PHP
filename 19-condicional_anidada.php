<?php

// Consiste en tener condicionales dentro de otros condicionales

/*

Pida a un usuario la edad y el género para que la computadora le indique si ya puede jubilarse.
Tome en cuenta que un hombre se puede jubilar cuando tenga 60 años o más, en cambio,
una mujer mayor se podrá jubilar si tiene más de 54 años.

*/

$edad = 30;
$genero = "F";

if ($genero == "M") {
    if ($edad >= 60) {
        echo "Puede jubilarse hombre";
    } else {
        echo "No puede jubilarse hombre";
    }
} elseif ($genero = "F") {
    if ($edad >= 54) {
        echo "Puede jubilarse mujer";
    } else {
        echo "No puede jubilarse mujer";
    }
} else {
    echo "Polemico";
}

?>