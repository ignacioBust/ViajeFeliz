<?php
include_once "PasajeroVIP.php";
include_once "PasajeroConNE.php";
class Viaje{
    //Creo la clase y sus atributos

    private $cantMaxPasajeros;
    private $colPasajeros;
    private $costo;
    private $sumaCostosAbonados;

    //Creo la función constructora
    public function __construct($pcantMaxPasajeros, $pcosto ){
        $this->cantMaxPasajeros = $pcantMaxPasajeros;
        $this -> colPasajeros = [];
        $this -> costo = $pcosto;
        
        
    }


    /***************************************************/
    /* MODULOS QUE SETEAN LOS VALORES DE LOS ATRIBUTOS */
    /***************************************************/

    //Seteal el valor de colPasajeros
    public function setCantMaxPasajeros($cantMaxPasajeros){
        $this->cantMaxPasajeros = $cantMaxPasajeros;
    }

    public function setColPasajeros($colPasajeros){
        $this->colPasajeros = $colPasajeros;
    }
    public function setCosto($pcosto){
        $this ->costo= $pcosto;
    }
    public function setSumaCostosAbonados($psumaCostosAbonados){
        $this -> sumaCostosAbonados = $psumaCostosAbonados;
    }

    /***************************************************/
    /*MODULOS QUE OBTIENEN LOS VALORES DE LOS ATRIBUTOS*/
    /***************************************************/

    //Obtiene el valor de colPasajeros
    public function getCantMaxPasajeros(){
        return $this->cantMaxPasajeros;
    }
    public function getColPasajeros(){
        return $this->colPasajeros;
    }
    public function getCosto(){
        return $this->costo; 
    }
    public function getSumaCostoAbonados(){
        return $this -> sumaCostosAbonados;
    }


    /*************************************************/
    /******************* toString ********************/
    /*************************************************/

 /* public function __toString()
  {
    return "\nCantidad Maxima de pasajeros: " .$this -> getCantMaxPasajeros() . "\n Pasajeros: " .$this -> getColPasajeros() . "\n";
  }*/



    /*************************************************/
    /***************** OTROS MÉTODOS *****************/
    /*************************************************/

   
    //metodo vender pasaje que incorpora un nuevo pasajero a la coleccion  de pasajeros solo si hay  espacio disponible , actualizar los costos abonados y retornar el costo final que debera ser abonado por el pasajero.

    public function venderPasaje($objPasajero){
        $coleccionPasajeros = $this -> getColPasajeros();
        $dineroAbonados = $this -> getSumaCostoAbonados();
        $costoI = $this -> getCosto();
        array_push ( $coleccionPasajeros, $objPasajero);
        $this -> setColPasajeros($coleccionPasajeros);
        $porcentajeAumento = $objPasajero -> darPorcentajeIncremento();
        $costoFinal = ($costoI * $porcentajeAumento)/100;
        $actulizacionDeCostosAbonados= $costoFinal + $dineroAbonados;
        $this -> setSumaCostosAbonados($actulizacionDeCostosAbonados);
        return $costoFinal;
        


    }




    //metodo  hayPasajeDisponible() que retorna  verdadero  si la cantidad  de pasajeros  del viaje es menor  a la cantidad  maxima de pasajeros y falso en caso contrario.

    public function hayPasajeDisponible(){
        $coleccionPasajeros = $this -> getColPasajeros();
        $limite = $this -> getCantMaxPasajeros();
        $cantPasajero = count( $coleccionPasajeros);
        $espacio = false;
        if ($cantPasajero < $limite){
            $espacio = true;
        }else{
            $espacio = false;
        }
        return $espacio;
    }
}
    
