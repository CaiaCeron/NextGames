<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Classe que contem a estrutura da tabela que faz o rlacionamento entre as tabelas enderecos e fornecedores que será criada através das migrations
 * 
 * @author Alexandre Schmidt
 * 
 * @version 0.1
 */
class CreateEnderecoFornecedorsTable extends Migration {

    /**
     * Estrutura da tabela enderecos_fornecedores
     */
    public function up() {
        Schema::create('endereco_fornecedors', function (Blueprint $table) {

            $table->integer('endereco_id')->unsigned();
            $table->foreign('endereco_id')->references('id')->on('enderecos');

            $table->integer('fornecedor_id')->unsigned();
            $table->foreign('fornecedor_id')->references('id')->on('fornecedors');
        });
    }

    /**
     * Função que deleta a tabela
     */
    public function down() {
        Schema::dropIfExists('endereco_fornecedors');
    }

}
