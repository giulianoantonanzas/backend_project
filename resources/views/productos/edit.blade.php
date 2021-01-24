@extends('base')
@section('title') Nuevo Producto @endsection
@section('content')
    <div>
        <h2 class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">Nuevo Producto</h2>

        <form id="editarProducto" action="{{ route('producto.update',$id ) }}" method="POST"
            enctype="multipart/form-data">
            <!-- indagar mas sobre esto. al pareecr, crea un token y encripta la informacion-->
            {{ csrf_field() }}
            <!-- indagar mas sobre esto. al parecer dice que el formulario va a ser para 
                        poder editar -> osea parchear -> osease actualizar una informacion.
                        -->
            {{ method_field('PATCH') }}
            <div class="input-group mb-3">
                <input type="text" id="nombre" name="nombre" placeholder="Nombre" value="{{$nombre}}">
            </div>
            <div class="input-group mb-3">
                <input type="text" id="marca" name="marca" placeholder="Marca" value="{{$marca}}">
            </div>
            <div class="input-group mb-3">
                <input type="text" id="detalle" name="detalle" placeholder="Detalle" value="{{$detalle}}">
            </div>
            <div class="input-group mb-3">
                <input type="number" id="cantidad" name="cantidad" placeholder="Cantidad" value="{{$cantidad}}">
            </div>

            <div class="input-group mb-3">
                <input type="number" step="any" id="precio" name="precio" placeholder="Precio Unitario" value="{{$precio}}">
            </div>
            
            <input type="submit" value="Guardar" >
        </form>
    </div>


@endsection
