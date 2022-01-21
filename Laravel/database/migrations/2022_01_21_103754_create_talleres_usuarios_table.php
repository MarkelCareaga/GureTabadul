<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalleresUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talleres_usuarios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("id_taller");
            $table->string("email_usuario_taller");
            $table->foreign("id_taller")->references("id")->on("talleres");
            $table->foreign("email_usuario_taller")->references("email")->on("users");
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
        Schema::dropIfExists('talleres_usuarios');
    }
}
