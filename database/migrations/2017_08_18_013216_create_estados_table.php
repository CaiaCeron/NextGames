<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Classe que contem a estrutura da tabela de usuarios que será criada através das migrations
 * 
 * @author Alexandre Schmidt
 * 
 * @version 0.1
 */
class CreateEstadosTable extends Migration
{
    /**
     * Estrutura da tabela estados
     */
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 45);
            $table->char('sigle', 2);
            $table->integer('pais_id')->unsigned();
            $table->foreign('pais_id')->references('id')->on('pais');
        });
    }

    /**
     * Função para deletar a tabela
     */
    public function down()
    {
        Schema::dropIfExists('estados');
    }
}
