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
            $table->unsignedbigInteger("taller_id");
            $table->unsignedbigInteger("user_id");
            $table->foreign("taller_id")->references("id")->on("talleres");
            $table->foreign("user_id")->references("id")->on("users");
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
