<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item_pedido extends Model
{
    public $timespamps = false;
    
    protected $fillable = array('produto_id', 'pedido_id', 'quantidade');
    
}
