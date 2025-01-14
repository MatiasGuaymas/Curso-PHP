<?php

/* Estructura condicional doble (IF - ELSE)
Si una determinada condicion se cumple se ejecuta un codigo, y una sentencia diferente si la condicion no se cumple (usando ELSE) 

if (expresion) {
    Codigo a ejecutar si la expresion es verdadera
} else {
    Codigo a ejecutar si la expresion es falsa
}

Sintaxis alternativa

if (expresion): 
    Codigo a ejecutar si la expresion es verdadera
else:
    Codigo a ejecutar si la expresion es falsa
endif; */

if (1 === "1") {
    echo "Son identicos";
} else {
    echo "No son identicos";
}

?>