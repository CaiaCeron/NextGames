<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Classe que contem a estrutura da tabela de enderecos que será criada através das migrations
 * 
 * @author Alexandre Schmidt
 * 
 * @version 0.1
 */
class CreateEnderecosTable extends Migration {

    /**
     * Estrutura da tabela enderecos
     */
    public function up() {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cep', 45);
            $table->string('logradouro', 45);
            $table->string('numero', 5);
            $table->integer('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('id')->on('cidades');
            $table->integer('fornecedor_id')->unsigned();
            $table->foreign('fornecedor_id')->references('id')->on('fornecedors');
        });
    }

    /**
     * Função que deleta a tabela
     */
    public function down() {
        Schema::dropIfExists('enderecos');
    }

}
