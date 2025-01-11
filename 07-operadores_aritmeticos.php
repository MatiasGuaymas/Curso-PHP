<?php

/* Jerarquia de operadores (de mayor a menor):
1. ()
2. ** -> Potencia
3. *, / -> Multiplicacion y division
4. +, - -> Suma y resta
5. % -> Modulo
En caso de mismo nivel de prioridad, dentro de una expresion se evaluan de izquierda a derecha
*/

$numero_1 = 2;
$numero_2 = 5;

echo $numero_1 + $numero_2 + 3; // -> 10

$res = $numero_1 + $numero_2 + 3; 
echo $res; // Imprime lo mismo que el anterior echo

echo $numero_2 - $numero_2; // -> 0

echo $numero_1 * 5; // -> 10
 
echo $numero_1 / 3; // -> 0.67

echo $numero_1 ** 3; // -> 8

echo $numero_1 % 2; // -> 0

$jerarquia = 7-4+($numero_1*$numero_2)/$numero_2;

echo $jerarquia;

?>