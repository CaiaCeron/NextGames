s<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model {

    public $timespamps = false;
    
    protected $fillable = array('nome', 'cpf', 'email', 'telefone', 'data_nascimento', 'endereco_id');
    

}
