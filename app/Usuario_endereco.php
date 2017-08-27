<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario_endereco extends Model
{
    public $timespamps = false;
    
    protected $fillable = array('usuario_id', 'endereco_id');
}
