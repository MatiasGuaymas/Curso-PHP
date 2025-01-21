<?php

// <form action="index.php" method="POST"> -> Mandaremos los datos a index.php

# GET: Más usado para la búsqueda, muestra la información en el enlace (URL). Separados los datos por &. Usado en MVC y APIs
# POST: Más usado para la actualización, oculta la información y es más seguro

$nombre = $_POST["nombre"];
$materia = $_POST["asignatura"];
$fruta = $_POST["frutas"];

/* $nombre = $_GET["nombre"];
$materia = $_GET["asignatura"];
$fruta = $_GET["frutas"]; */

echo $nombre." - ".$materia." - ".$fruta;


?>