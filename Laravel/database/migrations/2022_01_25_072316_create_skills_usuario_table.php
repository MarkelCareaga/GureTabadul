<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills_usuario', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('user_id');
            $table->unsignedbigInteger('skills_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('skills_id')->references('id')->on('skills');
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
        Schema::dropIfExists('skills_usuario');
    }
}
