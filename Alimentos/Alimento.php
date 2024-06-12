<?php
// namespace ---> es para indicar que paquete pertenece. Por lo general se trabaja con el nombre de la carpeta
namespace Alimentos;

//clase padre de Papa, Huevo y cualquier otro alimento que se pueda cocinar
class Alimento {

    //Atributo privado que lo van a heredar los hijos
    protected $estado;

    //Metodo que heredan los hijos
    public function cocinar(){
        //Cambia el texto "crudo" por "cocinado"
        $this->estado = str_replace("Cruda","Cocinado",$this->estado);
    }
}