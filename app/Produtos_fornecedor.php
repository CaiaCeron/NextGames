<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos_fornecedor extends Model
{
    public $timespamps = false;
    
    protected $fillable = array('produto_id', 'fornecedor_id');
    
}
