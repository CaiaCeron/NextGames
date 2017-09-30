<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model {

    public $timestamps = false;
    
    protected $fillable = array('cnpj', 'nome', 'email', 'telefone');
    
    protected $table = 'fornecedores';
    
    public function endereco(){
        return $this->belongsToMany('App\Endereco');
    }

}
