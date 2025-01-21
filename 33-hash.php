<?php

/* Es un algoritmo matematico que transforma cualquier bloque arbitrario de datos en 
una nueva serie de caracteres con una longitud fija. Independientemente de la longitud de
los datos de entrada, el valor hash de salida tendra siempre la misma longitud */

$clave = "HolaMundo123";

// MD5 / SHA1: forma vieja de hashear

echo md5($clave)."<br>"; // -> 5b6b89a334ac2d95be7e053566d81466

// hash( metodo para hashear , string/password) -> Soporta distintos metodos para hashear

/* echo hash("md5", $clave)."<br>"; // -> 5b6b89a334ac2d95be7e053566d81466

foreach(hash_algos() as $alg) { // hash_algos() -> devuelve el array de algoritmos de hashing que soporta la funcion de hash
    echo $alg. " - ".hash($alg, $clave)."<br>";
} */

// password_hash ( clave , algoritmo para procesar la clave con hashing)

echo password_hash($clave, PASSWORD_DEFAULT)."<br>"; // Manera mas recomendable de Hash : Genera una password diferente cada vez que se ejecuta

echo password_hash($clave, PASSWORD_BCRYPT)."<br>"; // Produce un hash estandar compatible con crypt() -> Siempre sera un String de 60 caracteres

// password_verify ( clave , hash generado): Comprueba que la password coincida con un hash

$contra = "XD";
$clave_procesada = password_hash($contra, PASSWORD_BCRYPT, ["costo"=>11]);

if (password_verify($contra, $clave_procesada)) {
    echo "Las claves coinciden";
} else {
    echo "Las claves no coinciden";
}

?>