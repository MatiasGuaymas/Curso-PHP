<?php

/* De forma similiar a una sentencia switch, una expresion match tiene una expresion de sujeto que se compara con multiples alternativas.
A diferencia de switch, la comparacion es una comprobacion de identidad (===) y no igualdad debil (==). 

match (variable) {
    $variable => Codigo a ejecutar

    default => Codigo a ejecutar
};

*/

$a = 9;
$x = 10;
$y = 9;
$z = 7;

$resultado = match($a) {
    $x, $y => "Valor igual a X o Y",
    7 => "Valor igual a Z",
    default => "Ningun valor matchea"
}; // Es fundamental el ;

echo $resultado;

$edad = 18;

$resultadoEdad = match (true) {
    $edad >= 60 => "Sos de la tercera edad",
    $edad >= 30 => "Sos adulto",
    $edad >= 18 => "Sos adulto joven",
    default => "Sos un nene"
};

echo $resultadoEdad; // -> Sos adulto joven

?>