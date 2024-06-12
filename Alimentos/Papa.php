<?php 
// namespace ---> es para indicar que paquete pertenece. Por lo general se trabaja con el nombre de la carpeta
namespace Alimentos;

//clase Papa que hereda de Alimento
class Papa extends Alimento{

    //ATRIBUTOS
    //public--> se puede modificar el valor o acceder desde cualquier lado 
    public $peso;
    public $tamanio;
    //private--> solo se puede accerder desde el objeto
    private $forma;

    //COSTRUCTOR 
    //(parametros) --> valores que tenemos que pasar
    // P es obligatoria y T es opcional 
    public function __construct($p , $t = "Grande")
    {
        //this -->referencia hacia si mismo
        $this->peso = $p;
        $this->tamanio = $t;
        $this->forma = "Ovalada";
        $this->estado = "Cruda";
    }

    //METODOS
    public function cortar(){
        $this->estado .= " Cortado";
    }
}

