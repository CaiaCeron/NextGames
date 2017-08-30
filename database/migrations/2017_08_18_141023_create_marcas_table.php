<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Classe que contem a estrutura da tabela de marcas que será criada através das migrations
 * 
 * @author Alexandre Schmidt
 * 
 * @version 0.1
 */
class CreateMarcasTable extends Migration {

    /**
     * Estrutura da tabela marcas
     */
    public function up() {
        Schema::create('marcas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 45);
            $table->integer('produtos_id')->unsigned();
            $table->foreign('produtos_id')->references('id')->on('produtos');
        });
    }

    /**
     * Função que deleta a tabela
     */
    public function down() {
        Schema::dropIfExists('marcas');
    }

}
