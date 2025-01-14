<?php

/*

1) Hacer un programa que calcule el total a pagar por la compra de camisas. Si se compran
tres camisas o más se aplica un descuento del 20% sobre el total de la compra, y si son menos de
tres camisas, un descuento del 10%.

*/

$cantCamisas = 3;
$precioCamisa = 100;

$precioCompra = $cantCamisas * $precioCamisa;

// $cantCamisas >= 3 ? $precioCompra -= $precioCompra * 0.2 : $precioCompra -= $precioCompra * 0.1;

$precioCompra -= $cantCamisas >= 3 ? $precioCompra * 0.2 : $precioCompra * 0.1;

echo "Precio de la compra: $precioCompra";

?>