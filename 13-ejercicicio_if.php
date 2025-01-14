<?php

/* 1) Realizar un programa en donde se pide la edad del usuario; si es mayor de edad debe
aparecer un mensaje indicándolo.

2) En un almacén se hace un 20% de descuento a los clientes cuya compra supere los $100
¿Cuál será la cantidad que pagará una persona por su compra? */


// 1)

$edad = 20;

if ($edad >= 18) {
    echo "La edad del usuario pertenece a un mayor de edad ";
}

// 2)

$precioCompra = 120;

if ($precioCompra > 100) {
    $precioCompra -= $precioCompra*0.2;
}

echo "El total de la compra es de: $precioCompra";

?>