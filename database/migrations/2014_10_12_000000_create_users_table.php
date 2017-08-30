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
class CreateUsersTable extends Migration {

    /**
     * Estrutura da tabela users
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 45);
            $table->string('cpf', 45)->unique();
            $table->string('email', 45)->unique();
            $table->string('telefone', 15);
            $table->date('data_nascimento');
            $table->string('senha');
            $table->rememberToken();
        });
    }

    /**
     * Função para deletar a tabela
     */
    public function down() {
        Schema::dropIfExists('users');
    }

}
