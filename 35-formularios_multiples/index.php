<?php

// var_dump($_POST["asignatura"]); -> Array

$materias = $_POST["asignatura"];

foreach($materias as $elem) {
    echo $elem." - "; // -> Imprime cada elemento selecccionado en el formulario
}

echo "<br>";

$frutas = $_POST["frutas"];

foreach($frutas as $fruta) {
    echo $fruta." - ";
}

?>