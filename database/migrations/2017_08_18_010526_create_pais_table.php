<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Classe que contem a estrutura da tabela de paises que será criada através das migrations
 * 
 * @author Alexandre Schmidt
 * 
 * @version 0.1
 */
class CreatePaisTable extends Migration {

    /**
     * Estrutura da tabela pais
     */
    public function up() {
        Schema::create('pais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 45);
        });
    }

    /**
     * Função para deletar a tabela
     */
    public function down() {
        Schema::dropIfExists('pais');
    }

}
