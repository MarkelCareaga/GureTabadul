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
            $table->unsignedbigInteger("id_pedido");
            $table->unsignedbigInteger("id_producto");
            $table->foreign("id_producto")->references("id")->on("productos");
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
