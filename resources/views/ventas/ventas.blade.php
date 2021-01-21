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
                        <th scope="col">nombre</th>
                        <th scope="col">apellido</th>
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
                            <td>{{ $ventas[$i]->nombre }} </td>
                            <td>{{ $ventas[$i]->apellido }} </td>
                            <td>{{ $ventas[$i]->total_pagar }} </td>
                        </tr>
                    @endfor
                </tbody>
            </table>

            
        </div>
    </main>
@endsection
