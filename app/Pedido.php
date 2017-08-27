<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public $timespamps = false;
    
    protected $fillable = array('valor_total', 'data', 'status', 'forma_pagamento_id', 'cliente_id');
}
