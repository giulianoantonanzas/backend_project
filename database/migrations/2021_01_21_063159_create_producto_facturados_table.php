<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoFacturadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_facturados', function (Blueprint $table) {
            $table->unsignedBigInteger("id_producto_faturado")->autoIncrement();
            $table->integer("cantidad");
            $table->foreign("fk_detalle_factura")->references("id_detalle_factura")->on("detalle_facturas");
            $table->foreign("fk_producto")->references("id_producto")->on("productos");
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
        Schema::dropIfExists('producto_facturados');
    }
}
