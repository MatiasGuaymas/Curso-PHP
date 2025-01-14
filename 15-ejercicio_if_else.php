<?php

/*

1) Calcular el total que una persona debe pagar en una gomería. El precio de cada llanta es de $800
si se compran menos de 5 llantas, y de $700 si se compran 5 o más.

2) Determinar si un alumno aprueba o reprueba un curso, sabiendo que aprobará si su promedio de tres
calificaciones es mayor o igual a 7. Reprueba en caso contrario.

*/

// 1)

$precioTotal = 0;
$cantLlantas = 5;

if ($cantLlantas < 5) {
    $precioTotal = $cantLlantas * 800;
} else {
    $precioTotal = $cantLlantas * 700;
}

echo "El precio total de las llantas es: $precioTotal ";

// 2) Se supone que deberia tener una estructura donde almaceno las notas, pero para este ejercicio no se espera que la usemos por ende:

$cantNotas = 3;
$nota1 = 5;
$nota2 = 7;
$nota3 = 9;

$prom = ($nota1 + $nota2 + $nota3) / $cantNotas;

if ($prom >= 7) {
    echo "El alumno aprobo el curso con nota: $prom";
} else {
    echo "El alumno reprobo el curso con nota: $prom";
}

?>