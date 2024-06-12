<?php
// Definicion de las clase a implementar
use Alimentos\Papa;
use Utensillos\Cuchillo;
use Utensillos\Sarten;

//Funcion AUTOLOAD ---> se encarga de cargar los archivos necesarios para las clases delcaradas 
spl_autoload_register( function($clase){
    //verifica si el archivo de la clase existe
    if ( file_exists( str_replace('\\', '/', $clase). '.php'))
        //require_once ---> trae el archivo una sola vez
        require_once str_replace('\\', '/', $clase). '.php';
});

//instancia de clase---> creamos los objetos de la clase PAPA
$papa1 = new Papa(300);
$papa2 = new Papa(500, "Grandototota");

/**
 * Mostramos el estado inicial de la papa
 */

echo "<pre>";
print_r($papa1);
print_r($papa2);
echo "</pre>";
echo "<hr>";

/**
 * Modificamos la propiedad publica de una de las papas
 */
$papa1->peso = 400;

echo "<pre>";
print_r($papa1);
print_r($papa2);
echo "</pre>";
echo "<hr>";

/**
 * Modificamos la propiedad privada atravez del metodo
 */
$cuchillo1 = new Cuchillo('100%');
$cuchillo1->cortar($papa2);

echo "<pre>";
print_r($papa1);
print_r($papa2);
echo "</pre>";
echo "<hr>";

/**
 * Implementamos el metodo estatico de la clase Sarten 
 * (como es estatico no es necesario crear un objeto)
*/
Sarten::cocinar($papa1);

echo "<pre>";
print_r($papa1);
print_r($papa2);
echo "</pre>";
echo "<hr>";
