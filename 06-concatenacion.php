<?php

$nombre = "Matias";
$pais = "Argentina";

// Puedo concatenar N variables -> Lo hago usando ( . )

echo $nombre.$pais; // -> MatiasArgentina

$resultado = $nombre.$pais;

echo $resultado; // Imprime lo mismo que el anterior echo

// Interpolacion: disponible en textos o String que tienen comillas dobles (NO simples). Se pueden usar llaves para encerrar las variables

echo "Mi nombre es: {$nombre} y mi pais de origen es: ".$pais; // -> Mi nombre es: Matias y mi pais de origen es: Argentina

?>