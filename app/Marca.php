<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    public $timespamps = false;
    
    protected $fillable = array('nome', 'produto_id');
}
