<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Classe que contem a estrutura da tabela de fornecedores que será criada através das migrations
 * 
 * @author Alexandre Schmidt
 * 
 * @version 0.1
 */
class CreateFornecedorsTable extends Migration
{
    /**
     * Estrutura da tabela fornecedores
     */
    public function up()
    {
        Schema::create('fornecedors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cnpj', 20)->unique();
            $table->string('nome', 45);
            $table->string('email', 45)->unique()->nullable(true);
            $table->string('telefone', 15)->nullable(true);
        });
    }

    /**
     * Funçãp para deletar a tabela
     */
    public function down()
    {
        Schema::dropIfExists('fornecedors');
    }
}
