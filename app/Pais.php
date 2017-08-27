<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model {

    public $timestsamps = false;

    protected $fillable = array('nome');
}
