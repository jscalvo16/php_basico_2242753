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
                "poneda" => "peso",
                "poblacion" => 51
    ],
              "Peru" =>[
                  "capital" => "lima",
                  "moneda" => "soles",
                  "poblacion" => 33.19

               ],
              "paraguay"=> [
                    "capital" => "Asuncion",
                    "moneda"  => "Guarani",
                    "poblacion" => 7
              ]
            ];


    //recorrer arreglo de paises
    foreach($paises as $nombre => $pais){
    echo "<h1>$nombre </h1>";
    echo "<pre>";
    print_r($pais["capital"]);
    echo "</pre>";
    echo "<hr />";
    }
});
