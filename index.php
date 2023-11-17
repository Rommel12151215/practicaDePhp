<?php

class Persona {
    // Propiedades
    public $nombre;
    public $edad;
 
    // Método constructor
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
 
    // Método para obtener la edad
    public function obtenerEdad() {
        return $this->edad;
    }
 }

 
 $persona = new Persona("Juan", 30);


 echo $persona->nombre; // Imprime: Juan
 echo $persona->obtenerEdad(); // Imprime: 30

?>

