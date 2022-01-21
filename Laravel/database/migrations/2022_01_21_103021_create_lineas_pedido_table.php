<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineasPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineas_pedido', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("cantidad");
            $table->double("precio");
            $table->bigInteger("id_pedido");
            $table->string("id_producto");
            $table->foreign("id_producto")->references("id")->on("producto");
            $table->foreign("id_pedido")->references("id")->on("pedidos");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lineas_pedido');
    }
}
