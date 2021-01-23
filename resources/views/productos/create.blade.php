@extends('base')
@section('title') Nuevo Producto @endsection
@section('content')
    <div>
        <h2 class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">Nuevo Producto</h2>

        <form id="createProducto" action={{route('productos.store')}} method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="input-group mb-3">
                <input type="text" id="nombre" name="nombre" placeholder="Nombre">
            </div>
            <div class="input-group mb-3">
                <input type="text" id="marca" name="marca" placeholder="Marca">
            </div>
            <div class="input-group mb-3">
                <input type="text" id="detalle" name="detalle" placeholder="Detalle">
            </div>
            <div class="input-group mb-3">
                <input type="number" id="cantidad" name="cantidad" placeholder="Cantidad">
            </div>

            <div class="input-group mb-3">
                <input type="number" id="precio" name="precio" placeholder="Precio Unitario">
            </div>

            
            <input type="submit" value="Guardar" >
        </form>
    </div>


@endsection
