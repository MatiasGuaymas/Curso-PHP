<?php

# Funciones para formatear Strings a mayusculas y minisculas

$cadena_texto = "hola Mundo";

echo strtolower($cadena_texto); // Pasa el string a todo minusculas -> "hola mundo"

echo strtoupper($cadena_texto); // Pasa el string a todo mayusculas -> "HOLA MUNDO"

$cadena_texto = ucfirst($cadena_texto); // La primera letra es pasada a mayuscula 

echo $cadena_texto; // -> "Hola Mundo"

// ucwords(variable) -> Las primeras letras de cada palabra son pasadas a mayuscula

# Funciones para contar caracteres y palabras de un String

$cadena = "hola mati";

$longitud = strlen($cadena); // Cuenta la cantidad de caracteres de un String

echo $longitud."<br>"; // -> 9: Cuenta los espacios

$palabras = str_word_count($cadena); // Cuenta la cantidad de palabras de un String

echo $cadena." tiene ".$palabras." palabras <br>";

echo "<br>";

# Como convertir un String en Array

$fecha_1 = "2021/11/29";
$fecha_2 = "2021-11-30";
$numeros = "Uno Dos Tres Cuatro Cinco Seis Siete";

// explode(delimitador, string, limitador) Limitador es opcional

$array_fecha = explode("/", $fecha_1);
echo $array_fecha[0]." ".$array_fecha[1]." ".$array_fecha[2]."<br>"; // -> 2021 11 29

$array_fecha1 = explode("-", $fecha_2);
echo $array_fecha1[0]." ".$array_fecha1[1]." ".$array_fecha1[2]."<br>"; // -> 2021 11 30

$array_numeros = explode(" ", $numeros, 2);
// $array_numeros = explode(" ", $numeros, -1); -> Dejo todos los valores en el arreglo menos el ultimo
echo $array_numeros[0]; // -> Uno
// echo $array_numeros[2]; -> Da warning, solo tengo dos valores en el arreglo: Uno, Dos

?>