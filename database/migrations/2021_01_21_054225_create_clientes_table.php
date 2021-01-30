<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("nombre");
            $table->string("apellido");
            $table->char("genero");
            $table->date("fecha_nacimiento");
            $table->string("telefono");
            $table->string("ubicacion");
            $table->text('image');//quiero ver si es que puedo setear una imagen.
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
        Schema::dropIfExists('clientes');
    }
}
