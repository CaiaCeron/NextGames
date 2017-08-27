<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {

    public $timespamps = false;
    
    protected $fillable = array('descricao', 'quantidade', 'valor_unit', 'destaque', 'modelo', 'quantidade_minima', 'data_entrada', 'status');

}
