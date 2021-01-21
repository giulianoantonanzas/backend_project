@extends('base')
@section('title') Productos @endsection
@section('content')
    <main class="container-fluid">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Productos : </h1>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">nombre</th>
                        <th scope="col">marca</th>
                        <th scope="col">detalle</th>
                        <th scope="col">cantidad</th>
                        <th scope="col">precio</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- recorro los clientes que me envia el controlador y los muestro en una tabla -->
                    @for ($i = 0; $i < count($productos); $i++)
                        <tr>
                            <th scope="row">{{ $productos[$i]->id }}</th>
                            <td>{{ $productos[$i]->nombre }}</td>
                            <td>{{ $productos[$i]->marca }}</td>
                            <td>{{ $productos[$i]->detalle }}</td>
                            <td>{{ $productos[$i]->cantidad }}</td>
                            <td>{{ $productos[$i]->precio }}</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </main>
@endsection
