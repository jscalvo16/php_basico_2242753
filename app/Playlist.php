<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table = "playlist";
    protected $primaryKey = "PlaylistId";
    public $timestamps = false;

    //relacion de n:m de lista de reproduccion y canciones
    //parametros modelo a relacionar
    public function canciones(){
        //beLongsToMany(M:M)
        return $this->belongsToMany('App\Cancion', 'playlisttrack', 'PlaylistId', 'TrackId');


    }

}
