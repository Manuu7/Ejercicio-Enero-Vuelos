<?php
include_once 'arraysdb.php';


#Función Compañias
function compañia ($arraycompañia, $selector){
    foreach ($arraycompañia as $compañia){
        $compa=$compañia["Compañia"];
        $vuelo=$compañia["Vuelo"];
        if ($vuelo == $selector){
            echo $compa. "<br>";
        }
    }
}

#Función Media de pasajeros
function mediaPasajeros ($arrayPasajeros, $selector){
    $numero=0;
    $contador=0;
    foreach ($arrayPasajeros as $pasajeros) {
        $vuelo=$pasajeros['Vuelo'];
        $pasajero=$pasajeros['Pasajeros'];

        if ($vuelo==$selector){
        $numero=$numero+$pasajero;
        $contador++;
        }
    }

echo "La media de pasajeros es: " .$numero/$contador. "<br>";
}

#Función  Ultimos destinos
function ultimosDestinos ($arrayDestino,$selector){
    echo "Ultimos destinos: ";
    foreach ($arrayDestino as $udestinos) {
           $destino=$udestinos["Destino"];
           $vuelo=$udestinos["Vuelo"];
           if ($vuelo==$selector) {
              echo  $destino." , ";
            }
    }
    echo "<br>";
    }

#Función Fabricantes
function Fabricante ($arrayFabricante, $selector){
    foreach ($arrayFabricante as $fabrica){
        $fabrican=$fabrica["Fabricante"];
        $vuelo=$fabrica["Vuelo"];
        if ($vuelo==$selector){
            echo "El fabricante es: ". $fabrican;
        }
    }
}
#Función Minutos Totales

?>