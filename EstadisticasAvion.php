<?php

include_once 'arraysdb.php';
include_once 'Funciones.php';
$selector=$_POST["operando"];

Fabricante ($arrayFabricante, $selector);
minutosVuelo ($arrayDuracion, $selector);
mediaPasajeros ($arrayPasajeros, $selector);
mediaHoras ($arrayDuracion, $selector);
pasajerosTotales($arrayPasajeros,$selector);
?>