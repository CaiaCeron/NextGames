<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Classe que contem a estrutura da tabela de produtos que será criada através das migrations
 * 
 * @author Alexandre Schmidt
 * 
 * @version 0.1
 */
class CreateProdutosTable extends Migration{
    /**
     * Estrutura da tabela produtos
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao', 45);
            $table->integer('quantidade');
            $table->decimal('valor_unit', 9,2);
            $table->char('destaque', 1);
            $table->string('modelo', 45);
            $table->integer('quantidade_minima')->nullable(true);
            $table->date('data_entrada');
            $table->boolean("status");
        });
    }

    /**
     * Função que deleta a tabela
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
