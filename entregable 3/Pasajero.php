<?php

class Pasajero {
    private $nombreP;
    private $numAsiento;
    private $numTicket;
        

    // metodo contructor
    public function __construct($vnombreP, $vnumAsientos, $vnumTicket)
    {
        $this -> nombreP = $vnombreP;
        $this -> numAsiento = $vnumAsientos;
        $this -> numTicket = $vnumTicket;

    }

    // metodo get

    public function getNombreP(){
        return $this -> nombreP;
    }

    public function getNumAsiento(){
        return $this -> numAsiento;
    }

    public function getNumTicket(){
        return $this -> numTicket;
    }

    // Metodo set

    public function setNombreP($vnombreP){
        $this-> nombreP = $vnombreP;
    }

    public function setNumAsiento($vnumAsientos){
        $this ->numAsiento = $vnumAsientos;
    }

    public function setNumTicket($vnumTicket){
        $this -> numTicket = $vnumTicket;
    }


    public function __toString()
    {
        return "Nombre Pasajero: ".$this ->getNombreP() . "\nNumero de Asiento: ".$this -> getNumAsiento() . 
        "\nNumero de Ticket: " .$this -> getNumTicket();
    }


    // metodo darPorcentajeIncremento()
    public function darPorcentajeIncremento(){
        
        $porcentaje = 110;
        return $porcentaje;
    }
}