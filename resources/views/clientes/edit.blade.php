@extends('base')
@section('title') Nuevo Cliente @endsection
@section('content')
    <div>
        <h2 class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">Nuevo Cliente</h2>

        <form id="editarCliente" action="{{ route('clientes.update', $id) }}" method="POST"
            enctype="multipart/form-data">
            <!-- indagar mas sobre esto. al pareecr, crea un token y encripta la informacion-->
            {{ csrf_field() }}
            <!-- indagar mas sobre esto. al parecer dice que el formulario va a ser para 
                        poder editar -> osea parchear -> osease actualizar una informacion.
                        -->
            {{ method_field('PATCH') }}
            <div class="input-group mb-3">
                <input type="text" id="nombre" name="nombre" placeholder="Nombre" value="{{ $nombre }}">
            </div>
            <div class="input-group mb-3">
                <input type="text" id="apellido" name="apellido" placeholder="Apellido" value="{{ $apellido }}">
            </div>

            <!-- si genero es f (osea femenino , mostrara la el circulito "checkeado" en femenino-->
            @if ($genero == 'f')
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="femenino" name="genero" value="f" checked>
                    <label class="form-check-label" for="femenino">Femenino</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="masculino" name="genero" value="m">
                    <label class="form-check-label" for="masculino">Masculino</label>
                </div>
            @else <!-- en todo caso ,sera masculino y lo maracara con el circulo-->
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="femenino" name="genero" value="f" checked>
                    <label class="form-check-label" for="femenino">Femenino</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="masculino" name="genero" value="m" checked>
                    <label class="form-check-label" for="masculino">Masculino</label>
                </div>
            @endif


            <div class="input-group mb-3">
                <input type="date" id="fechaNacimiento" name="fecha nacimiento" value={{ $fecha_nacimiento }}>
                <label for="fechaNacimiento"> Fecha de nacimiento</label>
            </div>

            <div class="input-group mb-3">
                <input type="text" id="telefono" name="telefono" placeholder="Telefono" value="{{$telefono}}">
            </div>
            <div class="input-group mb-3">
                <input type="text" id="ubicacion" name="ubicacion" placeholder="Ubicacion" value="{{$ubicacion}}">
            </div>
            <input type="submit" value="Guardar">
        </form>
    </div>
@endsection
