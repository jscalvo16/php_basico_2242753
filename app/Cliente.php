<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "customer";
    protected $primaryKey = "CustomerId";
    public $timestamps = false;
 //relacion 1:m
    public function compras(){
        return $this->hasMany('App\Compra', 'CustomerId');
    }
}
