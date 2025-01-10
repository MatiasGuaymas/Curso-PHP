<?php

// Siguen las mismas reglas que cualquier variable de PHP. Las constantes no cambian su valor (se declaran en mayusculas por convencion)

// Sintaxis vieja:
define("NOMBRE", "Matias");
//define("NOMBRE", 10); -> Da error, las constantes NO cambian su valor
echo NOMBRE;

// Sintaxis actual:
const DNI = 111;
echo DNI;

// Puedo definir arreglos a una constante 

?>