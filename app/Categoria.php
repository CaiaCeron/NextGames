<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timespamps = false;
    
    protected $fillable = array('tipo', 'produto_id');
}
