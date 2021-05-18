<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('variables',function(){//get crea la ruta con el nombre de variables
    $mensaje = 20;
    //funcion nativa de php sirve para analisar el contenido de una variable
    //como el tipo de datos, los datos que contenga y otros
    var_dump($mensaje);
    echo "<hr />";
    $mensaje = "hola 2242753";
    var_dump($mensaje);
} );
Route::get('arreglos', function(){
    //deminimos el areeglo
    $estudiantes = ["LS"=>"Luis",
                    "MA"=>"Maria",
                    "DI"=>"Diana"];
    echo "<pre>";//organiza en forma de lista
    print_r($estudiantes);
    echo "</pre>";
});
Route :: get('paises', function(){
    $paises= ["Colombia" =>[
                "capital" => "bogota",
                "moneda" => "peso",
                "poblacion" => "51M"
    ],
              "Peru" =>[
                  "capital" => "lima",
                  "moneda" => "soles",
                  "poblacion" => "33.19M"

               ],
              "paraguay"=> [
                    "capital" => "Asuncion",
                    "moneda"  => "Guarani",
                    "poblacion" => "7M"
              ],
              "Argentina"=> [
                  "capital" => "Buenos Aires",
                  "moneda" => "Peso argentino",
                  "poblacion" => "42M"
              ]
            ];
        //Llevar el arreglo de paises el primer valor que se ingresa va a ser un apodo y el otro el arreglo
        return view('paises')->with("paises", $paises);


    //recorrer arreglo de paises

});
