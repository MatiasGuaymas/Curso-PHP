<?php

/* Funciones (Propias): conjunto de instrucciones a la que podemos recurrir siempre que queramos. Pueden recibir parametros y 
realizar todo tipo de tareas. Un nombre de funcion valido comienza con una letra o guion bajo.

function nombre_funcion($parametros) {
    Codigo de la funcion
}

*/

function saludo() {
    return "Hola desde funcion <br>"; // -> Devuelvo la cadena de texto
}

$saludoAux = saludo(); // -> "Hola desde funcion"

echo $saludoAux;

saludo(); // -> No imprime nada, ya que la funcion retorna una cadena

function saludoParametros($nombre) {
    return "Hola, mi nombre es: $nombre <br>";
}

# Maneras de pasar parametros en Funciones

echo saludoParametros("Matias"); // -> Hola, mi nombre es: Matias

$aux = "NPC";

echo saludoParametros($aux); // -> Hola, mi nombre es: NPC

echo saludoParametros($nombre = "Carlos"); // -> Hola, mi nombre es: Carlos

function promedio_alumno ($nota_1, $nota_2, $nota_3) {
    return ($nota_1 + $nota_2 + $nota_3) / 3;
}

echo promedio_alumno(7, 9, 6); // -> 7,3333

?>