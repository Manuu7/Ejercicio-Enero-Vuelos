<?php
include_once 'arraysdb.php';
include_once 'Funciones.php';
$selector=$_POST["operando"];

compañia ($arraycompañia, $selector);
mediaPasajeros ($arrayPasajeros, $selector);
ultimosDestinos ($arrayDestino, $selector);
Fabricante ($arrayFabricante, $selector);
?>