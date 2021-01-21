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
            $table->unsignedBigInteger("id_factura")->autoIncrement();
            $table->text("tipo");
            $table->date("fecha_facturacion");
            $table->foreign("fk_cliente")->references('id_cliente')->on('clientes');
            $table->foreign("fk_detalle_factura")->references('id_detalle_factura')->on('detalle_facturas');
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
