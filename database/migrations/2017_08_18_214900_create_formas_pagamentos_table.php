<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Classe que contem a estrutura da tabela de formas de pagamneto que será criada através das migrations
 * 
 * @author Alexandre Schmidt
 * 
 * @version 0.1
 */
class CreateFormasPagamentosTable extends Migration {

    /**
     * Estrutura da tabela formas_pagamentos
     */
    public function up() {
        Schema::create('formas_pagamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('forma', 45);
        });
    }

    /**
     * Função que deleta a tabela
     */
    public function down() {
        Schema::dropIfExists('formas_pagamentos');
    }

}
