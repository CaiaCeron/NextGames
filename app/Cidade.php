<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    public $timestsamps = false;
    
    protected $fillable = array('nome', 'estado_id');
}
