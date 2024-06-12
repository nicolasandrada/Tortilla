<?php 
// namespace ---> es para indicar que paquete pertenece. Por lo general se trabaja con el nombre de la carpeta
namespace Utensillos;

// use ---> sirve para indicar que clase usamos
use Alimentos\Papa;

class Cuchillo{

    public function __construct(
        //ATRIBUTOS DENTRO DEL CONSTRUCTOR (los parametros se guardan en los atributos)
        // filo es obligatorio ponerle
        // tamanio y tipo son opcionales
        public $filo,
        public $tamanio = "Grande",
        public $tipo = "De cocina"
    )
    {}

    // espera como parameto el objeto Papa
    public function cortar(Papa $p){
        $p->cortar();
    }
}
