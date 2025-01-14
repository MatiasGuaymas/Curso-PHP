<?php

// Estructura condicional simple (IF)
// Se evalua una expresion, si es TRUE PHP ejecutara la sentencia y si se evalua como FALSE la ignorara

/* if (expresion) {
    Codigo a ejecutar
}

Sintaxis alternativa

if (expresion):
    Codigo a ejecutar
endif; */

if (1 > 0) {
    echo "Uno es mayor a 0";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(9 > 8): ?>
        <h1>TRUE</h1>
    <?php endif; ?>
</body>
</html>