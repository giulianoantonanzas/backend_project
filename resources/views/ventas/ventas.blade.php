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
                            <th scope="row">{{$ventas[$i]->id}}</th>
                            
                           
                        </tr>
                    @endfor
                </tbody>
            </table>

            <p>{{$ventas[0]}}</p>
        </div>
    </main>
@endsection
