<?php
include_once "Pasajero.php";

class PasajeroVIP extends Pasajero
{
    private $numViajeroFrecuente;
    private $cantMillasPasajero;

    // metodo contructor
    public function __construct($vnombreP, $vnumAsiento, $vnumTicket, $vnumViajeroFrecuente, $vcantMillasPasajero)
    {
        parent::__construct ($vnombreP, $vnumAsiento,$vnumTicket);
        $this -> numViajeroFrecuente = $vnumViajeroFrecuente;
        $this-> cantMillasPasajero = $vcantMillasPasajero;
    }


    // metodo get

    public function getNumViajeroFrecuente(){
        return $this -> numViajeroFrecuente;
    }

    public function getCantMillasPasajero(){
        return $this -> cantMillasPasajero;
    }

    // metodo set
    public function setNumViajeroFrecuente($vnumViajeroFrecuente){
        $this -> numViajeroFrecuente = $vnumViajeroFrecuente;
    }
    public function setCantMillasPasajero($vcantMillasPasajero){
        $this -> cantMillasPasajero = $vcantMillasPasajero;
    }


    // redifinir metodo darPorcentajeIncremento(
        
    public function darPorcentajeIncremento(){
        $porcentaje = 0;
        $cantMillas = $this -> getCantMillasPasajero();
        if ($cantMillas > 300){
            $porcentaje= 135+ 30;
            
        }else{
            $porcentaje = 135;
        }
        return $porcentaje;
    }
}