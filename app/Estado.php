<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model {

    public $timestamps = false;
    
    protected $fillable = array('nome', 'sigla', 'pais_id');

    public function pais(){
        return $this->belongsTo('App\Pais');
    }
}
