<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('email')->unique();
            $table->string('password', 50);
            $table->boolean('estado');
            $table->integer('idRol')->unsigned();
            $table->integer('idPublicacion')->unsigned();
            $table->foreign('idRol')->references('id')->on('rols');
            $table->foreign('idPublicacion')->references('id')->on('publicacion');
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
        Schema::dropIfExists('usuarios');
    }
}
