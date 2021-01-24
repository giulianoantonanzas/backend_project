@extends('base')
@section('title') Crear Cliente @endsection
@section('content')
    <div>
        <h2 class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">Nuevo Cliente</h2>
        <form id="crearCliente" action="{{route('cliente.store')}}" method="post" enctype="multipart/form-data">
            <!-- indagar mas sobre esto. al pareecr, crea un token y encripta la informacion-->
            {{ csrf_field() }}
            <div class="input-group mb-3">
                <input type="text" id="nombre" name="nombre" placeholder="Nombre">
            </div>
            <div class="input-group mb-3">
                <input type="text" id="apellido" name="apellido" placeholder="Apellido">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" id="femenino" name="genero" value="f">
                <label class="form-check-label" for="femenino">Femenino</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="masculino" name="genero" value="m">
                <label class="form-check-label" for="masculino">Masculino</label>
            </div>

            <div class="input-group mb-3">
                <input type="date" id="fechaNacimiento" name="fecha nacimiento">
                <label for="fechaNacimiento"> Fecha de nacimiento</label>
            </div>

            <div class="input-group mb-3">
                <input type="text" id="telefono" name="telefono" placeholder="Telefono">
            </div>
            <div class="input-group mb-3">
                <input type="text" id="ubicacion" name="ubicacion" placeholder="Ubicacion">
            </div>
            <input type="submit" value="Guardar" >
        </form>
    </div>


@endsection
