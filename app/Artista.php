<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    protected $table ="artist";
    protected $primaryKey= "ArtistId";
    public $timestamps = false;

    public function bailables(){
             //hasmany: parametros
         //1. Modelo a relacionar
         //2. FK del artista(papa) en los discos(hijo)
        return $this -> hasMany('App\Disco','ArtistId');
    }
    public function canciones(){
        //hasManyThrough establece relacion 1 m con una tabla en medio
        //parametro 1 es el modelo de destino
        //parametro 2 esmodelo intermedio
        //parametro 3 forranea de moldeo 1 en el modelo 2
        //parametro 4 foranea del modelo 2 eb el modelo 3
        //parametros 5 primaria del modelo 1
        //parametro 6 primaria del modelo 2
        return $this->hasManyThrough('App\Cancion', 'App\Disco', 'ArtistId'
        ,'AlbumId','ArtistId','AlbumId');
    }

}
