<?php
include_once "PasajeroVIP.php";
include_once "PasajeroConNE.php";
include_once "Viaje.php";
include_once "Pasajero.php";

$objPasajeros = [];
$objPasajeros[0] = new PasajeroVIP("ignacio", 4, "11" ,"2000", 1000);
$objPasajeros[1] = new PasajeroConNE("rita", 11, "10", "no", "no", "si");
$objPasajeros[2]  = new Pasajero("silvia", 12, "50");


// clase viaje

$objViaje = new Viaje( 4 , 2000);

for ( $i=0 ; $i < count($objPasajeros); $i++){
    $objViaje  -> venderPasaje($objPasajeros[$i]);
    //print_r ( $objPasajeros[$i]);
    
    echo $i ." ". $objViaje -> getSumaCostoAbonados(). "\n";
    
}
echo "\n\n";
// agregar nuevo pasajero

if($objViaje -> hayPasajeDisponible()){
 $objPasajeros = new PasajeroVIP("daniela", "2", "45","2000", 200 );
 $objViaje -> venderPasaje($objPasajeros);
 echo "Pasajero agregado exitosamente.";
}else{
    echo "No hay lugar en el avion.";
}

print_r($objViaje -> getColPasajeros());