<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Classe que contem a estrutura da tabela de pedidos que será criada através das migrations
 * 
 * @author Alexandre Schmidt
 * 
 * @version 0.1
 */
class CreatePedidosTable extends Migration {

    /**
     * Estrutura da tabela pedidos
     */
    public function up() {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('valor_total', 9, 2);
            $table->date('data');
            $table->string('status');

            $table->integer('forma_pagamento_id')->unsigned();
            $table->foreign('forma_pagamento_id')->references('id')->on('formas_pagamentos');

            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    /**
     * Função que deleta a tabela 
     */
    public function down() {
        Schema::dropIfExists('pedidos');
    }

}
