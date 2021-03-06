<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    public $timestamps = false;
    
    protected $fillable = array('cep', 'logradouro', 'numero', 'cidade_id');
    
    public function cidade(){
        return $this->belongsTo('App\Cidade');
    }
    
    public function fornecedor(){
        return $this->belongsToMany('App\Fornecedor');
    } 
}
