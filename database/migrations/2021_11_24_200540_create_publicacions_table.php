<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 100);
            $table->string('contenido', 500);
            $table->datetime('fecha_creacion');
            $table->string('imagen');
            $table->boolean('estado');
            $table->integer('idComentario')->unsigned();
            $table->foreign('idComentario')->references('id')->on('comentarios');
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
        Schema::dropIfExists('publicacions');
    }
}
