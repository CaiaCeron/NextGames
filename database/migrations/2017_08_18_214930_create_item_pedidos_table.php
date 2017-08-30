<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Classe que contem a estrutura da tabela de itens de cada pedido(carrinho de compras) que será criada através das migrations
 * 
 * @author Alexandre Schmidt
 * 
 * @version 0.1
 */
class CreateItemPedidosTable extends Migration {

    /**
     * Estrutura da tabela item_pedidos
     */
    public function up() {
        Schema::create('item_pedidos', function (Blueprint $table) {
            
            $table->integer('quantidade');
            $table->integer('pedido_id')->unsigned();
            $table->foreign('pedido_id')->references('id')->on('pedidos');

            $table->integer('produto_id')->unsigned();
            $table->foreign('produto_id')->references('id')->on('produtos');
        });
    }

    /**
     * Função que deleta a tabela
     */
    public function down() {
        Schema::dropIfExists('item_pedidos');
    }

}
