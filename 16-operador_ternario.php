<?php

/* El operador ternario se compone de tres partes: el operator, y dos resultados
Sintaxis: <operator> ? <true value> : <false value> 
No puedo utilizar echo dentro del op. ternario
*/

("1" === 1) ? $total = 5*5 : $total = 10 * 5;
echo $total; // -> 50
?>