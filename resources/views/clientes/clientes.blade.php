@extends('base')
@section('title') clientes @endsection
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
                            <th scope="row">{{$clientes[$i]->id}}</th>
                            <td>{{ $clientes[$i]->nombre }}</td>
                            <td>{{ $clientes[$i]->apellido }}</td>
                            <td>{{ $clientes[$i]->genero }}</td>
                            <td>{{ $clientes[$i]->fecha_nacimiento }}</td>
                            <td>{{ $clientes[$i]->telefono }}</td>
                            <td>{{ $clientes[$i]->ubicacion }}</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </main>
@endsection
