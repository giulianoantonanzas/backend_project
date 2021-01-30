<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->bigIncrements("id");

            //foreingkey - digo que una venta tiene una factura, que la enlazo desde fk_factura con el id_factura.
            $table->foreignId('factura_id')->references("id")->on('facturas')
            ->onDelete("cascade")
            ->onUpdate("cascade");

            $table->timestamps();
        });

        /* ESTA ES OTRA FORMA DE ASIGNAR LAS FOREING KEYS
        Schema::table('ventas', function (Blueprint $table) {
            $table->foreignId('factura_id')->references("id")->on('facturas')
                ->onDelete("cascade")
                ->onUpdate("cascade");
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
