<?php
include ("viajeFeliz.php");

// creo el objet viaje
$objViaje = new ViajeFeliz(345, "Oslo", 4, "pasajeros");

//invoco los metodos
echo $objViaje->escribirMensajeBienvenida();

$objViaje->opcion();