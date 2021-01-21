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
            $table->unsignedBigInteger("id_venta")->autoIncrement();
            //foreingkey - digo que una venta tiene una factura, que la enlazo desde fk_factura con el id_factura.
            $table->foreignId('fk_factura')->references("id_facutra")->on('facturas'); 
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
        Schema::dropIfExists('ventas');
    }
}
