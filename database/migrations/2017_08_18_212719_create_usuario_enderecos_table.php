<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Classe que contem a estrutura da tabela de relacionamento entre a tabela usuario e endereco que será criada através das migrations
 * 
 * @author Alexandre Schmidt
 * 
 * @version 0.1
 */
class CreateUsuarioEnderecosTable extends Migration {

    /**
     * Estrutura da tabela usuario_enderecos
     */
    public function up() {
        Schema::create('usuario_enderecos', function (Blueprint $table) {
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users');

            $table->integer('endereco_id')->unsigned();
            $table->foreign('endereco_id')->references('id')->on('enderecos');
        });
    }

    /**
     * Função que deleta a tabela
     */
    public function down() {
        Schema::dropIfExists('usuario_enderecos');
    }

}
