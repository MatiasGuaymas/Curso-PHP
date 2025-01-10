<?php

// PHP soporta tanto arrays escalares (indice numerico), arrays asociativos (indice por clave) y arrays multidimensionales

// Pueden modificarse los valores de los arreglos accediendo a dicha posicion e igualandola a un nuevo valor

/* 1. Arrays escalares: acceden a los elementos utilizando un indice que representa la posicion del valor dentro del array 
(comienza desde el indice 0) */

$estudiantes = array("Carlos", "Juancito", "Pancho", 3, 4); //Puede estar vacio
$nombres = ["Mati", "Juli"];

echo $estudiantes[2];
echo $nombres[1];

/* 2. Arrays asociativos: para acceder a los elementos del array utilizamos la clave asociada con el elemento, donde este toma
un cierto numero de parejas utilizando la sintaxis clave => valor como argumentos */

$tutor = ["nombre"=> "Matias", 
        "apellido" => "Guaymas", 
        "edad" => 20
];

echo $tutor["nombre"];

/* 3. Arrays multidimensionales: sus valores son otros arrays */

$tutor2 = ["nombre"=> "Leonardo", 
        "apellido" => "Luna", 
        "edad" => 20,
        "cursos" => ["PHP", "JS"]
];

$tutor2["cursos"][0] = "Phyton";
$tutor2["pais"] = "Argentina"; //Agrego una nueva posicion en el array con su respectivo valor

echo $tutor2["cursos"][0];
echo $tutor2["pais"];

echo count($estudiantes); //Cuenta la cantidad de elementos de un array
echo count($tutor2, COUNT_RECURSIVE) //Cuenta todos los elementos de un array multidimensional

?>