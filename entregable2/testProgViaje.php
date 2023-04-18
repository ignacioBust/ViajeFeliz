<?php
//Indico que archivos incluyo
include_once ("Pasajeros.php");
include_once ("ResponsableV.php");
include_once("Viaje.php");

//Creo mis objetos pasajero 2, responsable2 y viaje2
$objPasajero2 = new Pasajeros(3);
$objResponsable2 = new ResponsabelV("234343", "051-4", "Daniela ", "Bustos");
$objViaje2 = new Viaje(1234, "Brasil", "54", $objPasajero2, $objResponsable2);


// Cargo mi colección de pasajeros
$colPasa[0] = ["nombre" => "ignacio", "apellido" => "Bustos", "dni" => "42912081", "telefono" => "2984569218"];
$colPasa[1] = ["nombre" => "silvia", "apellido" => "Bustos", "dni" => "444", "telefono" => "5632342342"];


//Ahora le digo a mi objeto que esa es su colección de pasajeros
$objPasajero2->setColPasajeros($colPasa);


//Mis datos iniciales
echo $objViaje2;


//Cambio los datos de un pasajero
$ind = $objPasajero2->modificarPasajero("Rita", "Caraza", "344", "+541159604394", "111");
if ($ind >= 0){
   echo "Se modifico el pasajero\n".$objPasajero2->mostrarDatosPasajeros()."\n";
}else{
   echo "No se encontraron datos que coincidan con ese pasajero";
}


//Agregar pasajero ---> Debe Sumar un pasajero al array, verificar que la cantidad máxima de pasajeros no sobrepase la cant de pasajeros, y ahí hacer un array_push
$objPasajero2->agregarPasajero("cesar", "Bustos", "232", "1134434324");
echo "Agregue pasajero ".$objPasajero2;