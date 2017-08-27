<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    public $timestsamps = false;
    
    protected $fillable = array('nome', 'sigla', 'pais_id');
}
