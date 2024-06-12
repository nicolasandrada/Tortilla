<?php
// namespace ---> es para indicar que paquete pertenece. Por lo general se trabaja con el nombre de la carpeta
namespace Utensillos;

// use ---> sirve para indicar que clase usamos
use Alimentos\Alimento;

class Sarten{
    // STATIC (o estaticos) son accesibles por todos los objetos al mismo "elemento".
    // El parametro como se espera alimento puede ser cualquier objeto de la misma clase o los heredados
    public static function cocinar(Alimento $al){
        $al->cocinar();
    }
}
