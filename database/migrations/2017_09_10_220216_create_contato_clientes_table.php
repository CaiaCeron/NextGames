<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Classe que contem a estrutura da tabela de recebe reclamações dos clientes que será criada através das migrations
 * 
 * @author Alexandre Schmidt
 * 
 * @version 0.1
 */
class CreateContatoClientesTable extends Migration {

    /**
     * Estrutura da tabela contato_cliente
     */
    public function up() {
        Schema::create('contato_clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 80);
            $table->string('mensagem', 500);
            $table->string('tipo', 45);
            
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    /**
     * Função para deletar a tabela
     */
    public function down() {
        Schema::dropIfExists('contato_clientes');
    }

}
