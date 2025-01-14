<?php

/* ++ Incremento
-- Decremento
*/

$numero = 10;

echo $numero++; // -> 10 : Post Incremento - Realizo la accion y despues incremento
echo ++$numero; // -> 12 : Pre Incremento - Primero incremento y luego realizo la accion

echo $numero--; // -> 12 : Post Decremento - Realizo la accion y despues decremento
echo --$numero; // -> 10 : Pre Decremento - Primero decremento y luego realizo la accion

$resultado = ++$numero; // Si fuese al reves $resultado valdria 10, ya que primero asigna y luego incrementa la variable numero

echo $resultado; // -> 11

?>