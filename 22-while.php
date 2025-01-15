<?php

/* Estructura repetitiva (Ciclos - Bucles - Loops): Reiteran una o un grupo de instrucciones "n" veces y dependen
de una variable de control del ciclo llamada contador.

Bucle while, bucle for, bucle do-while y bucle foreach */

/* WHILE: ejecuta una porcion de programa mientras se cumpla (sea verdadera) una cierta condicion. Sale del ciclo cuando deja
de cumplirse la condicion

while (condicion) {
    Codigo a ejecutar
}

while (condicion) {
    Codigo a ejecutar
endwhile;

*/

/*

1) Diseñe un programa que imprima los números del 1 hasta el 20.

2) Diseñe un programa que imprima la tabla de multiplicar de un número dado, desde el factor 1 hasta el factor 12. (Incremento y decremento).

*/

// 1)

$contador = 0;

while ($contador < 20) {
    echo ++$contador."<br>";
}

// 2)

$c = 0;
$num = 5;

while ($c <= 12) {
    echo $num * ++$c. "<br>";
}

$c2 = 12;

while ($c2 >= 1) {
    echo $num." X ".$c2. " = ".$num * $c2. "<br>";
    $c2--;
}

?>