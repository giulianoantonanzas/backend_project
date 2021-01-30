<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('detalle_factura_id');

            $table->string("tipo");
            $table->date("fecha_facturacion");

            $table->foreign("cliente_id")->references('id')->on('clientes');
            $table->foreign("detalle_factura_id")->references('id')->on('detalle_facturas')
            ->onDelete("cascade")
            ->onUpdate("cascade");

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
        Schema::dropIfExists('facturas');
    }
}
