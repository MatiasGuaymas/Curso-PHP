<?php

/* Los operadores de comparacion permite comparar dos expresiones y devolver un valor boolean
1. == (igual)
2. === (identico)
3. != (diferente)
4. <> (diferente)
5. !== (no identico)
6. < (menor que)
7. > (mayor que)
8. <= (menor o igual que)
9. >= (mayor o igual que)
*/




var_dump(1 == "1"); // -> True. No tiene en cuenta el tipo de dato
var_dump(1 === "1"); // -> False. Si tiene en cuenta el tipo de dato
var_dump(1 != "1"); // -> False. No tiene en cuenta el tipo de dato
var_dump(5 <> "7"); // -> True. No tiene en cuenta el tipo de dato
var_dump(1 !== "1"); // -> True. Si tiene en cuenta el tipo de dato
var_dump(7 < 7); // -> False
var_dump(7 <= 7); // -> True
var_dump(8 > 8); // -> False
var_dump(8 >= 8); // -> True

// Puedo comparar variables
$valor = 1;
var_dump($valor == 1); // -> True
?>