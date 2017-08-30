<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Classe que contem a estrutura da tabela de clientes que será criada através das migrations
 * 
 * @author Alexandre Schmidt
 * 
 * @version 0.1
 */
class CreateClientesTable extends Migration {

    /**
     * Estrutura d tabela clientes
     */
    public function up() {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 45);
            $table->string('cpf', 45)->unique();
            $table->string('email', 45)->unique();
            $table->string('telefone', 45);
            $table->string('senha', 45);
            $table->date('data_nacimento');
            $table->integer('endereco_id')->unsigned();
            $table->foreign('endereco_id')->references('id')->on('enderecos');
        });
    }

    /**
     * Função que deleta a tabela
     */
    public function down() {
        Schema::dropIfExists('clientes');
    }

}
