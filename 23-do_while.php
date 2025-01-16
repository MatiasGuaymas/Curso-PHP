<?php

/* Do-while es muy similar a la estructura while, excepto que la expresion verdadera es verificada al final de cada iteracion
en lugar de al principio 

do {

} while (condicion);

*/

/*

1) Diseñe un programa que imprima los números del 1 hasta el 20.

2) Diseñe un programa que imprima la tabla de multiplicar de un número dado, desde el factor 1 hasta el factor 12. (Incremento y decremento).

*/

// 1)

$contador = 1;

do {
    echo $contador++."<br>";
} while ($contador <= 20);

// 2)

$contador = 1;
$num = 5;
do {
    echo $num * $contador++."<br>";
} while ($contador <= 20);

?>