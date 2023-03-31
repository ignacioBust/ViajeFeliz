<?php
// creo la clase y sus atributos
class ViajeFeliz{
    private $codigoViaje;
    private $destino;
    private $cantMaxPasajeros;
    private $pasajeros;

    // creo la funcion constructora
    public function __construct($codigoViaje, $destino, $cantMaxPasajeros, $pasajeros){
        $this -> codigoViaje = $codigoViaje;
        $this -> destino = $destino;
        $this -> cantMaxPasajeros = $cantMaxPasajeros;
        $this -> pasajeros = $pasajeros;
    }

    // mODULOS QUE SETAN LOS VALORES DE LOS ATRIBUTO
    public function setCodigoViaje($codigoViaje){
        $this -> codigoViaje = $codigoViaje;
    }
    public function setDestino($destino){
        $this -> destino = $destino;
    }
    public function setCantMaxPasajeros($cantMaxPasajeros){
        $this -> cantMaxPasajeros = $cantMaxPasajeros;
    }
    public function setPasajeros($pasajeros){
        $this -> pasajeros = $pasajeros;
    }

    // modulos que obtienen los valores de los atributos

    public function getCodigoViaje(){
       return $this -> codigoViaje ;
    }
    public function getDestino(){
        return $this -> destino ;
    }
    public function getCanMaxPasajeros(){
        return $this -> cantMaxPasajeros ;
    }
    public function getPasajeros(){
        return $this -> pasajeros ;   
    }

    // creo los array de pasajeros

    // metodos

    public function __toString()
    {
        return $this ->escribirMensajeBienvenida(). "\n\n" . $this->seleccionarOpcion()."\n\n".$this -> opcion();
    }

    // creo el array multidimencional indexado
    public function arrayPasajeros2() {
        $pasajeros = array();

        $pasajero1 = array("Nombre"=>"Ignacio", "Apellido" => "Bustos", "DNI"=>"42912081"); //indice 0
        $pasajero2 = array ("Nombre"=>"Silvia", "Apellido" => "Bustos", "DNI"=> "42912058"); //indice 1
        $pasajero3 = array("Nombre"=>"Rita", "Apellido" => "Caraza", "DNI"=> "42912059"); //indice 2 
        $pasajero4 = array("Nombre"=>"Daniela", "Apellido" => "Bustos", "DNI"=> "42912034"); //indice 3
    }
    //dibuja una division en la pantalla
    public function separador(){
        "\n*************************************************************\n";
    }

    // da un mensaje bienvenida

    public function escribirMensajeBienvenida(){
        echo "************************************************\n";
        echo "*** bienvenido al menu de opciones de Viaje feliz***\n";
        echo "************************************************\n";
    }

      // crea el menu de opciones 
      public function seleccionarOpcion(){
        echo "Menu de opciones\n";
        echo "1) Cargar la informacion del viaje\n";
        echo "2) Modificar los datos de un pasajero\n";
        echo "3) Ver los datos de un pasajero\n";
        echo "4) Salir(s/n)\n";
        echo " Ingrese la opcion deseada: ";
        $opcion = trim(fgets(STDIN));
        return $opcion;
            
      }

      // cargar la informacion del viaje
      public function arrayPasajeros(){
        $pasajeros = array(array("Nombre" => "Ignacio", "Apellido" => "Bustos", "DNI" => "42912081"), //INDICE 0
        array ("Nombre" => "Silvia", "Apellido" => "Bustos", "DNI" => "42912058"), //INDICE 1
        array ("Nombre" => "Rita", "Apellido" =>"Caraza", "DNI" => "42912059"), //INDICE 2 
        array ("Nombre" => "Daniela", "Apellido" => "Bustos", "DNI" => "42912034"), //INDICE 3 
      );
//Imprimir el array usando print_r()
return print_r($pasajeros);
      }

    // inicializacion de variables
    public function opcion(){
        do {
            $opcion = $this->seleccionarOpcion();
            switch ($opcion){ // la funcion switch reemplaza la condicion if-elseif, no compara, si no que tiene una opcion para cada caso,
                // en caso de no tener  oincidencia para el valor ingresado, el apartado "default" determinar que hacer
                case 1 :
                    // 1) carga la informacion del viaje
                    //array pasajeros
                    $pasajeros = array(array( "Nombre"=>"Ignacio", "Apellido"=>"Bustos", "DNI"=> "42912081"),//indice 0
                    array("Nombre"=>"Silvia", "Apellido"=>"Bustos", "DNI"=>"42912058"),//indice 1
                    array ("Nombre"=>"Rita", "Apellido"=>"Caraza", "DNI"=>"42912059"),//indice 2
                    array ("Nombre"=>"Daniela", "Apellido"=>"Bustos", "DNI"=>"42912034")//indice 3
                );
                print_r($pasajeros);
                break;
                case 2:
                    // 2) Modificar los datos de un pasajeroo
                    //Array de pasajeros
                    $pasajeros = array (array("Nombre" =>"Ignacio ", "Apellido"=>"Bustos","DNI"=>"42912081"), //indice 0
                    array ("Nombre"=>"Silvina", "Apeliido"=>"Bustos", "DNI"=>"42912058 "), //indice 1
                    array ("Nombre"=>"Rita", "Apellido"=>"Caraza", "DNI"=>"42912059 "), //indie 2
                    array ("Nombre"=> "Daniela", "Apellido "=>"Bustos", "DNI"=>"42912034"), //indice 3
                );
                // Indicar el DNI del pasajero que quieres cambiar
                echo "Ingrese el DNI a buscar: ";
                $dniEncontrar = trim (fgets(STDIN));

                // RECORRER EL ARRAY PARA BUSCAR EL PASAJERO
                foreach ($pasajeros as $key =>$pasajero){
                    if ($pasajero ["DNI"] == $dniEncontrar){
                        // si se encuentra el pasajero, modificar su nombre, apellido y DNI
                        echo "Ingrese el nuevo Nombre: ";
                        $nuevoNombre = trim(fgets(STDIN));
                        $pasajero[$key]["Nombre"] =$nuevoNombre;
                        echo "\n";

                        echo "Ingrese el nuevo Apellido: ";
                        $nuevoApellido = trim(fgets(STDIN));
                        $pasajero[$key]["Apellido"] = $nuevoApellido;
                        echo"\n";

                        echo "Ingrese el nuevo DNI: ";
                        $nuevoDNI = trim(fgets(STDIN));
                        $pasajeros[$key]["DNI"] = $nuevoDNI;
                        echo"\n";
                        
                        break; // Salir del ciclo foreach una vez que se ha encontrado el pasajero
                    }
                }
                // imprimir el array actualizado
                print_r ($pasajeros);
                break;
                case 3 :
                    // 5 )Ver losdatos de un pasajero.
                    // Recorrer el array para buscar al pasajero conociendo su DNI

                    //array de pasajeros
                    $pasajeros= array(array("Nombre"=>"Ignacio", "Apellido"=>"Bustos", "DNI"=> "42912081"), //indice 0 
                    array("Nombre"=>"Silvia", "Apellido"=>"Bustos", "DNI"=>"42912058"), //indice 1
                    array ("Nombre"=>"Rita", "Apellido"=>"Caraza", "DNI"=>"42912059"), // indice 2
                    array ("Nombre"=>"Daniela", "Apellido"=>"Bustos", "DNI"=>"42912034"), //indice 3
                );
                //Busco a un pasajero por su DNI
                echo"Ingrese el DNI que desea buscar:";
                $dniEncontrar = trim (fgets(STDIN));
                foreach ($pasajeros as $pasajero){
                    if($pasajero ["DNI"] == $dniEncontrar){
                        // si se encuentra el pasajero, acceder a sus datos usando su indce en el array
                 echo "El pasajero buscado es: \n";
                echo "Nombre: " . $pasajero["Nombre"] . "\n";
                echo "Apellido: " . $pasajero["Apellido"] . "\n";
                echo "DNI: " . $pasajero["DNI"] . "\n";
                break; // Salir del ciclo foreach una vez que se ha encontrado el pasajero
            }
            else{
                echo "El DNI ingresado no pertenece a ningun pasajero.\n";
                     }
                    }
                    break;
                    case 4:
                        // Salir
                        echo "gracias por viajar con nosotros. \n";
                        echo "Saliendo...";
                        break;
                        default:
                        //caso general para cuando no se ingresa ninguna de la opciones del menu.
                        echo "Error, Ingrese una opcion correcta: \n";
                        break;
                }
                
              
        }
        while ($opcion!=4);
    }
    


}