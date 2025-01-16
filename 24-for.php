<?php

/* For se utiliza cuando tenemos bien determinada la cantidad de repeticiones a realizar. Se debe incluir en la 
propia instruccion una variable de control, la cual se incrementa o decrementa de forma automatica

for (var ; Condicion; incre / decre) {
    Codigo a ejecutar
}

Sintaxis alternativa

for (var ; Condicion; incre / decre) :
    Codigo a ejecutar
endfor;

*/

/*

1) Diseñe un programa que imprima los números del 1 hasta el 20.

2) Diseñe un programa que imprima la tabla de multiplicar de un número dado, desde el factor 1 hasta el factor 12.

*/

// 1)

for ($i = 1; $i <= 20; $i++) {
    echo $i."<br>";
}

$num = 5;

for ($i = 1; $i <= 12; $i++) {
    echo $num. " X ".$i." = ".$i * $num."<br>";
}

?>