<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    public $timestamps = false;
    
    protected $fillable = array('cep', 'logradouro', 'numero', 'cidade_id');
}
