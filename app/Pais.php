<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model {

    public $timestamps = false;

    protected $fillable = array('nome');
}
