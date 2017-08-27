<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model {

    public $timespamps = false;
    
    protected $fillable = array('acao', 'data', 'usuario_id');

}
