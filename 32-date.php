<?php

date_default_timezone_set("America/Argentina/Buenos_Aires"); // Establece la zona horaria predeterminada para todas las funciones de date

echo date("d"); // -> Hoy es 20 (20/1/2025)

echo date("l")."<br>"; // -> Monday

echo date("d/m/Y"); // -> 20/01/2025 : Fecha en formato Español

$fecha_en = date("l d F Y")."<br>"; 
echo $fecha_en; // -> Monday 20 January 2025: Fecha en formato Ingles

// Date con Hora

$hora_12 = date("h:i:s"); 
$hora_24 = date("H:i a");

echo $hora_12."<br>"; // -> 08:25:14
echo $hora_24; // -> 20:26:pm

$fecha_completa = date("d-m-Y h:i A");
echo $fecha_completa."<br>"; // -> 20-01-2025 08:28 PM

// Pasar fecha a ESP

function fecha_esp_larga () {

    $fecha_dia = date("d");
    $fecha_mes = date("m");
    $fecha_year = date("Y");

    $dia_semana = [
        "Monday" => "Lunes",
        "Tuesday" => "Martes",
        "Wednesday" => "Miercoles",
        "Thursday" => "Jueves",
        "Friday" => "Viernes",
        "Saturday" => "Sabado",
        "Sunday" => "Domingo"
    ];

    $meses = [
        "01" => "Enero",
        "02" => "Febrero",
        "03" => "Marzo",
        "04" => "Abril",
        "05" => "Mayo",
        "06" => "Junio",
        "07" => "Julio",
        "08" => "Agosto",
        "09" => "Septiembre",
        "10" => "Octubre",
        "11" => "Noviembre",
        "12" => "Diciembre"
    ];

    return $dia_semana[date("l")]." ".$fecha_dia." de ".$meses[$fecha_mes]." de ".$fecha_year;
}

function fecha_esp_corta ($fecha="") {

    if($fecha == "") {
        $fecha = date("d-m-Y");
    } else {
        $fecha = date("d-m-Y", strtotime($fecha));
    }

    $fecha = explode("-",$fecha);

    $fecha_dia = $fecha[0];
    $fecha_mes = $fecha[1];
    $fecha_year = $fecha[2];

    $meses = [
        "01" => "Enero",
        "02" => "Febrero",
        "03" => "Marzo",
        "04" => "Abril",
        "05" => "Mayo",
        "06" => "Junio",
        "07" => "Julio",
        "08" => "Agosto",
        "09" => "Septiembre",
        "10" => "Octubre",
        "11" => "Noviembre",
        "12" => "Diciembre"
    ];

    return $fecha_dia." de ".$meses[$fecha_mes]." de ".$fecha_year;
}

echo fecha_esp_larga()."<br>";

echo fecha_esp_corta();

?>