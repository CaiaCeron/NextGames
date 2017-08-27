<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model {

    public $timespamps = false;
    
    protected $fillable = array('data', 'pedido_id');

}
