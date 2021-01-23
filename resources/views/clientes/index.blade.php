@extends('base')
@section('title') Clientes @endsection
@section('content')
    <main class="container-fluid">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Clientes : </h1>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">nombre</th>
                        <th scope="col">apellido</th>
                        <th scope="col">genero</th>
                        <th scope="col">fecha de nacimiento</th>
                        <th scope="col">telefono</th>
                        <th scope="col">ubicacion</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- recorro los clientes que me envia el controlador y los muestro en una tabla -->
                    @for ($i = 0; $i < count($clientes); $i++)
                        <tr>
                            <th scope="row">{{ $clientes[$i]->id }}</th>
                            <td>{{ $clientes[$i]->nombre }}</td>
                            <td>{{ $clientes[$i]->apellido }}</td>
                            <td>{{ $clientes[$i]->genero }}</td>
                            <td>{{ $clientes[$i]->fecha_nacimiento }}</td>
                            <td>{{ $clientes[$i]->telefono }}</td>
                            <td>{{ $clientes[$i]->ubicacion }}</td>
                            <td><a class="btn btn-primary" href="{{ route('clientes.edit', $clientes[$i]) }}"
                                    role="button">Editar</a></td>
                            <td>
                                <form action="{{ route('clientes.destroy', $clientes[$i]->id) }}" method="post">
                                    {{ csrf_field() }} <!-- aprender mas en espesifico que hace esto -->
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn btn-danger"
                                        onclick="return confirm('¿Desea eliminar este registro?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary m-2" href={{ route('clientes.create') }}>Agregar</a>
                <a class="btn btn-primary m-2" href="/">Volver</a>
            </div>
        </div>
    </main>
@endsection
