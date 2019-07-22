<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('id_pedido');
            $table->bigIncrements('id_pizza');
            $table->bigIncrements('telefone);
            
              $table->foreign('id_pizza')
                ->references('id')->on('pizzas')
                ->onDelete('cascade');
            
              $table->foreign('telefone')
                ->references('id')->on('cliente')
                ->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
