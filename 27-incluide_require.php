<?php

/* Include y Require: ambas funciones sirven para añadir a otros ficheros a nuestros scripts en PHP.

include: inserta en nuestro script un codigo procedente de otro archivo, si no existe dicho archivo o si contiene
algun tipo de error nos mostrara un "warning" por pantalla y el script seguira ejecutandose.

require: hace la misma operacion que include, pero en caso de no existir el archivo o error en el mismo mostrara un 
"fatal error" y el script no se sigue ejecutando. 

include("ruta_archivo.php");  ----- require("ruta_archivo.php");
include ruta_archivo.php; ----- require "ruta_archivo.php");

include_once("ruta_archivo.php"); ----- require_once("ruta_archivo.php");
include_once ruta_archivo.php; ----- require_once "ruta_archivo.php"; */

// require "XD.php"; -> Da fatal error y todo el codigo siguiente no se ejecuta

include("24-for.php");
// include "24-for.php";
include "XD.php"; // -> Da warning

require("24-for.php");

require_once "24-for.php";
// require_once "24-for.php"; -> PHP identifica que ya se requirio el codigo y no lo va a ejecutar 

// Lo mismo aplica para include_once

?>