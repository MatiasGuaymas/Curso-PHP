<?php

$texto = "Argentina";

// Asignacion por valor
$var1 = $texto;

// Asignacion por referencia
$var2 = &$texto; // Como copio la referencia, si hago algun cambio en la variable texto, var2 se ve influenciada y cambia

echo $var1; // -> "Argentina"
echo $var2; // -> "Argentina"

$texto = "XD";

echo $var1; // -> "Argentina"
echo $var2; // -> "XD"

?>