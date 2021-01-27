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
            $table->bigIncrements("id");
            $table->unsignedBigInteger('detalle_factura_id');//creo la columna que sera transformada en fk
            $table->unsignedBigInteger('producto_id');//creo la columna que sera transformada en fk

            $table->integer("cantidad");
            $table->float('precio_total');

            $table->foreign("detalle_factura_id")->references("id")->on("detalle_facturas")//transformo la columna en una fk
            ->onDelete("cascade")
            ->onUpdate("cascade");
            
            $table->foreign("producto_id")->references("id")->on("productos");
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
