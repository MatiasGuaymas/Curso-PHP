<?php

/* elseif, es una combinacion de if y else. Extiende una sentencia if (en el caso de que sea falsa), sin embargo, esa 
expresion alternativa solo se ejecutara si la expresion condicional elseif se evalua como true 

if ($a > $b) {
    echo "a > b";
} elseif ($a === $b) {
    echo "a = b";
} else {
    echo "a < b";
}

Lo mismo aplica para la sintaxis alternativa ("elseif" va todo junto) */

/* 1) Se desea diseñar un programa que escriba los nombres de los días de la semana
en función del valor de una variable DIA.

2) En una fábrica de computadoras se planea ofrecer a los clientes un descuentos que
dependerá del número de computadores que compre. Si las computadoras son menos de cinco se les dará
un 10% de descuento sobre el total de la compra. Si el número de computadoras es mayor o igual
a cinco pero menos de diez, se le otorga un 20% de descuento. Finalmente, si son 10 o más
se les da un 40% de descuento. El precio de cada computadora es de $700.

*/

// 1)

$dia = 1;

if ($dia == 1) {
    echo "Lunes";
} elseif ($dia == 2) {
    echo "Martes";
} elseif ($dia == 3) {
    echo "Miercoles";
} elseif ($dia == 4) {
    echo "Jueves";
} elseif ($dia == 5) {
    echo "Viernes";
} elseif ($dia == 6) {
    echo "Sabado";
} elseif ($dia == 7) {
    echo "Domingo";
} else {
    echo "Dia invalido";
}

// 2)

$cantComputadoras = 10;
$precioComputadora = 700;
$precioTotal = $cantComputadoras * $precioComputadora;

if ($cantComputadoras < 5) {
    $precioTotal -= $precioTotal * 0.1;
} elseif ($cantComputadoras < 10) {
    $precioTotal -= $precioTotal * 0.2;
} else {
    $precioTotal -= $precioTotal * 0.4;
}

echo " Precio compra: $precioTotal";

?>