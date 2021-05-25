<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    //
    public function formulario(){

        return view('metabuscador');// motrara la vista del metabuscador
    }
    //realiza la busqueda
    public function buscar_termino(){
        //realizar la busqueda
        $termino = $_POST["termino"];//trae el valor y lo pone en la variable
        $motor = $_POST["motores"];

        //la consulta se realiza de acuerdo al motor elegido
        switch($motor){
            case 1: return redirect()->to("https://www.google.com/search?q=$termino");
                break;
            case 2: return redirect()->to("https://www.bing.com/search?q=$termino");
                break;
            case 3: return redirect()->to("https://espanol.search.yahoo.com/search?p=$termino");
                break;
            case 4: return redirect()->to("https://www.microsoft.com/es-co/search?q=$termino");
                break;
            case 5: return redirect()->to("https://www.youtube.com/results?search_query=$termino");
                break;
            case 6: return redirect()->to("https://www.qwant.com/?l=es&q=$termino");
                    break;
            case 7: return redirect()->to("https://www.amazon.com/s?k=$termino");
                break;
            case 8: return redirect()->to("https://www.business.com/search/?q=$termino");
                break;
            case 9: return redirect()->to("https://gigablast.com/search?c=$termino");
                break;
            case 10: return redirect()->to("https://duckduckgo.com/?q=$termino");
                break;
        }
    }

}
