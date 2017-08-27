<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco_fornecedor extends Model {

    public $timestamps = false;
    
    protected $fillable = array('endereco_id', 'fornecedor_id');

}
