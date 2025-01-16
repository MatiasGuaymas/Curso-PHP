<?php

/* Proporciona un modo sencillo de iterar sobre arrays. Solo funciona sobre esta estructura de datos y emitira un error al intentar 
usarlo con una variable de un tipo diferente de datos o una variable no incializada.

foreach ($array as $valor) {
    $valor tendra en cada iteracion un valor del array
}

foreach ($array as $clave => $valor) {
    $clave tendra en cada iteracion una clave del array

    $valor tendra en cada iteracion un valor del array
}

*/

$laptop = ["Acer Nitro 5", "Windows 11", "AMD Ryzen 5 4600H", "SSD 256 GB", "RAM 24GB"];

$frutas = [
    "Frutilla" => 100,
    "Pera" => 30,
    "Sandria" => 10,
    "Melocoton" => 15 
];

foreach($laptop as $comp) {
    echo $comp."<br>";
}

foreach ($frutas as $clave => $valor) {
    echo $clave. " - ".$valor."<br>";
}

$productos = [
    ["codigo" => "A0001", "descripcion" => "Mouse"],
    ["codigo" => "A0002", "descripcion" => "Teclado"],
    ["codigo" => "A0003", "descripcion" => "Monitor"],
    ["codigo" => "A0004", "descripcion" => "Impresora"]
];

foreach($productos as $prod) {
    // echo $prod."<br>";  -> Da warning: Array to string conversion
    echo $prod["codigo"]." - ".$prod["descripcion"]."<br>"; 
}

?>