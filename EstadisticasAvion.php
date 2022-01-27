<?php

include_once 'arraysdb.php';
include_once 'Funciones.php';
$selector=$_POST["operando"];

Destinos ($arrayDestino,$selector);
Fabricante ($arrayFabricante, $selector);
minutosVuelo ($arrayDuracion, $selector);
mediaHoras ($arrayDuracion, $selector);
mediaPasajeros ($arrayPasajeros, $selector);
pasajerosTotales($arrayPasajeros,$selector);
?>