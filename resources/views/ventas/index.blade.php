@extends('base')
@section('title') Ventas @endsection
@section('content')
    <main class="container-fluid">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Ventas : </h1>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">id factura</th>
                        <th scope="col">fecha de facturacion</th>
                        <th scope="col">cliente</th>
                        <th scope="col">total a pagar</th>
                    </tr>
                </thead>
                
                <tbody>
                    <!-- recorro los clientes que me envia el controlador y los muestro en una tabla -->
                    @for ($i = 0; $i < count($ventas); $i++)
                        <tr>
                            <th scope="row">{{ $ventas[$i]->id }}</th>
                            <td>{{ $ventas[$i]->factura_id }}</td>
                            <td>{{ $ventas[$i]->fecha_facturacion }}</td>
                            <!-- con el '.' concateno los strings-->
                            <td>{{$ventas[$i]->nombre." ".$ventas[$i]->apellido}} </td>
                            <td>{{ $ventas[$i]->total_pagar }} </td>
                            <td><a class="btn btn-primary" href="#">Editar</a></td>
                            <td><a class="btn btn-primary" href="#">Eliminar</a></td>
                        </tr>
                    @endfor
                </tbody>
            </table>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary m-2" href="{{route('venta.create')}}">Agregar</a>
                <a class="btn btn-primary m-2" href="/">Volver</a>
            </div>
        </div>
    </main>
@endsection
