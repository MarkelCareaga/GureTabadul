<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagenProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_imagen_producto', function (Blueprint $table) {
            $table->id();
            $table->string("ruta");
            $table->bigInteger("id_producto");
            $table->foreign("id_producto")->references("id")->on("producto");
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
        Schema::dropIfExists('_imagen_producto');
    }
}
