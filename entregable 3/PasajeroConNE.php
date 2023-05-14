<?php
include_once "Pasajero.php";

class PasajeroConNE extends Pasajero{
    private $sillaDeRueda;//string
    private $asisParaEmbarque; // atributo para asistemcia para embarque o desembarque. STRIGN
    private $comidaEspecial; // atributo  comida para personas con alergia o restriccion alimenticia. String

    // metodo constructor 
    public function __construct($vnombreP , $vnumAsiento, $vnumTicket, $vsillaDeRueda, $vasisParaEmbarque, $vcomidaEspecial)
    {

        parent:: __construct ($vnombreP,$vnumAsiento,$vnumTicket);
        $this -> sillaDeRueda = $vsillaDeRueda;
        $this -> asisParaEmbarque = $vasisParaEmbarque;
        $this -> comidaEspecial = $vcomidaEspecial;
    }

    //metodo get

    public function getSillaDeRueda(){
        return $this-> sillaDeRueda;
    }
    public function getAsisParaEmbarque(){
        return $this-> asisParaEmbarque;
    }
    public function getComidaEspecial(){
        return $this -> comidaEspecial;
    }

    // metodo set

    public function setSillaDeRueda($vsillaDeRueda){
        $this -> sillaDeRueda = $vsillaDeRueda;
    }
    public function setAsisParaEmbarque($vasisParaEmbarque){
        $this -> asisParaEmbarque = $vasisParaEmbarque;
    }
    public function setComidaEspecial ($vcomidaEspecial){
        $this-> comidaEspecial = $vcomidaEspecial;
    }

    // metedo string 
    public function __toString()
    {
        $cadena= parent:: __toString();
        $cadena.= "\nSilla de Rueda: " .$this -> getSillaDeRueda() . "\nAsistencia para embarque o desembarque: " .$this->getAsisParaEmbarque(). "\nComida especial: " .$this -> getComidaEspecial();
    }

    // redifinicion de metodo darPorcentajeIncremento()
    public function darPorcentajeIncremento()
    {
       
        $_sillaDeRueda = $this -> getSillaDeRueda();
        $_asisParaEmbarque = $this -> getAsisParaEmbarque();
        $_comidaEspecial = $this -> getComidaEspecial();
        $porcentaje = 0;
        if($_sillaDeRueda == "si" && $_asisParaEmbarque == "si" && $_comidaEspecial == "si"){ 
            
            $porcentaje = 130;
            
    }elseif( $_sillaDeRueda == "si" || $_asisParaEmbarque == "Si" || $_comidaEspecial == "si"){
        
        $porcentaje = 115;
        
    }
    return $porcentaje;
}
}