<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco_fornecedor extends Model {

    public $timestamps = false;
    
    protected $fillable = array('endereco_id', 'fornecedor_id');

    protected $table = 'endereco_fornecedor';
    
    public function endereco(){
        return $this->belongsTo('App\Endereco');
    }
    
    public function fornecedor(){
        return $this->belongsTo('App\Fornecedor');
    }    
    
}
