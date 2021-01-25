@extends('base')

@section('title') Clientes @endsection
@section('content')
    <main class="container-fluid">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Clientes : </h1>
            @include('misComponentes.tablaCliente')
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary m-2" href={{ route('cliente.create') }}>Agregar</a>
                <a class="btn btn-primary m-2" href="/">Volver</a>
            </div>
        </div>
    </main>
@endsection
