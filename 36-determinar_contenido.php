<?php

$numero = null; // -> Si no se le asigna valor, es nula, y salta un Warning

// is_null: Verificar si una variable es nula

if(is_null($numero)) { 
    echo "Es nula";
} else {
    echo "No es nula";
}

// Unset: destruye la variable únicamente en el contexto del resto de una función

$numeroAux = 2;
unset($numeroAux);
if (is_null($numeroAux)) {
    echo "La variable es nula";
}

echo "<br>";

// empty: determina si una variable esta vacia. Los siguientes valores son consideradores vacios: "" - 0 - 0.0 - "0" - null - false - array() 

$vacio = "";

echo empty($vacio); // -> Devuelve true (1)

// isset: determina si una variable esta definida y no es null

$definida = "888";

if(isset($definida)) {
    echo "La variable esta definida";
} else {
    echo "La variable NO esta definida y es null";
}

?>