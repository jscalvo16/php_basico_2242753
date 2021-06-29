<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Compra extends Model
{
    protected $table = "invoice";
    protected $primaryKey = "InvoiceId";
    public $timestamps = false;


    //relacion 1:m
    public function compra(){
        return $this->hasMany('App\Compra', 'CustomerId');
    }
}
