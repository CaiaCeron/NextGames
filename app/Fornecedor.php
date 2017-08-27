<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    public $timestamps = false;
    
    protected $fillable = array('cnpj', 'nome', 'email', 'telefone');
}
