<?php 

/* Similiar a una serie de sentencias IF en la misma expresion. La comparacion es una comprobacion de igualdad debil (==)
Se busca comparar la misma variable o expresion con muchos valores diferentes.

switch (variable) {
    case valor1: 
        Codigo a ejecutar
    break;

    case valor2: 
        Codigo a ejecutar
    break;

    default:
        Codigo a ejecutar
}

*/

$fruta = "Frutilla";

switch($fruta) {
    case "Frutilla":
        echo "Es Frutilla ";
    break;
    case "Pera":
        echo "Es Pera ";
    break;
    default: // Si no se cumple ninguna de las anteriores condiciones, este es el caso por defecto
        echo "No es Frutilla ni Pera ";
}

/*

Se desea diseñar un programa que escriba los nombre de los días de la semana en función
del valor de una variable DIA.

*/

$dia = 1;

switch ($dia) {
    case 1:
        echo "Lunes";
    break;

    case 2:
        echo "Martes";
    break;

    case 3:
        echo "Miércoles";
    break;

    case 4:
        echo "Jueves";
    break;

    case 5:
        echo "Viernes";
    break;

    case 6:
        echo "Sábado";
    break;

    case 7:
        echo "Domingo";
    break;

    default:
        echo "Dia incorrecto";
}

?>