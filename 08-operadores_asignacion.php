<?php

/* Operadores de asignacion
1. = |-> Asignar
2. += |-> Sumar y asignar
3. -= |-> Restar y asignar
4. *= |-> Multiplicar y asignar
5. /= |-> Dividir y asignar
6. = |-> Concantenar y asignar
*/

$numero = 5; // 1.
$numero+=5; // 2. - Equivalente a $numero = $numero + 5

echo $numero; // -> 10

$numero-=2; // 3. -> 8
$numero*=2; // 4. -> 16
$numero/=2; // 5. -> 8

$str = "Texto prueba: ";
$str.= 10;

echo $str; // -> Texto prueba: 10

?>