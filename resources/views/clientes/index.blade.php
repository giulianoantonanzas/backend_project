@extends('base')
@section('title') Clientes @endsection
@section('content')
    <main class="container-fluid">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Clientes : </h1>


            <form class="d-flex" action="{{ route('cliente.search') }}" method="POST">
                {{ csrf_field() }}
                <div class="input-group mb-3">
                    <input class="form-control me-2" name="search" type="search" placeholder="Buscar">
                    <span class="input-group-btn">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </span>
                </div>
            </form>

            @if (count($clientes) >= 1)
                @include('misComponentes.tablaCliente')
            @endif

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary m-2" href={{ route('cliente.create') }}>Agregar</a>
                <a class="btn btn-primary m-2" href="/">Volver</a>
            </div>
        </div>
    </main>
@endsection
