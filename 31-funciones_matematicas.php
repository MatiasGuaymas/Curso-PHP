<?php

echo pow(5, 2); // Potencia: Base, Exponente -> 5^2 = 25

echo sqrt(9); // Raiz cuadrada: Numero -> Raiz Cuadrada (9) = 3

echo rand(1, 100); // Calcula numero random desde el num inferior a numero posterior 

echo pi(); // -> 3.1415...

# En numeros negativos tener en cuenta que las siguientes funciones serian lo contrario

echo floor(4.3)."<br>"; // Redondea las fracciones decimales hacia abajo

echo ceil(4.3)."<br>"; // Redondea las fracciones decimales hacia arriba

echo round(-3.14); // Redondea un float a entero (si el numero >= 0.5, redondea para arriba)

echo round (1.955, 2)."<br>"; // Redondea solo dos decimales

$cantidad = 12732.77;

// number_format(cantidad, decimales, sep_decimal, sep_millar)

# Si solo se le pasa el número, lo redondea e imprime agregando la coma ( , ). 
echo number_format($cantidad) . "<br/>"; # Imprime 12,733

# El segundo parámetro indica la cantidad de decimales que tendrá el número. En caso
# de tener que recortarlo, lo redondea al más cercano
echo number_format($cantidad, 1) . "<br/>"; # Imprime 12,732.8
echo number_format($cantidad, 2) . "<br/>"; # Imprime 12,732.77

# El tercer y cuarto parámetro permiten modificar la forma en la que se muestran los números
# Tercer parámetro: Separador de decimales
# Cuarto parámetro: Separador de millares

echo number_format($cantidad, 1, ",", ".") . "<br/>"; # Imprime 12.732,8
echo number_format($cantidad, 1, ".", ",") . "<br/>"; # Imprime 12,732.8
echo number_format($cantidad, 2, ".", "") . "<br/>"; # Imprime 12732.77

?>