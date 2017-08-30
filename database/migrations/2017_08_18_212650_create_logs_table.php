<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Classe que contem a estrutura da tabela de logs que será criada através das migrations
 * 
 * @author Alexandre Schmidt
 * 
 * @version 0.1
 */
class CreateLogsTable extends Migration
{
    /**
     * Estrutura da tabela logs
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('acao', 45);
            $table->date('data');    
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users'); 
        });
    }

    /**
     * Função que deleta a tabela 
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
