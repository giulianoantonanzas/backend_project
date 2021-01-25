@extends('base')
@section('title') Crear Venta @endsection

@section('content')
    <div>
        <h2 class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">Nuevo Venta</h2>
        <form id="crearVenta" action="{{ route('venta.store') }}" method="post" enctype="multipart/form-data">
            <!-- indagar mas sobre esto. al pareecr, crea un token y encripta la informacion-->
            {{ csrf_field() }}


            <div class="input-group mb-3">
                <input type="date" name="fecha_facturacion">
                <label for="fechaFacturacion"> Fecha de Facturacion</label>
            </div>

            <div class="input-group mb-3">
                <input type="text" name="tipo" placeholder="Tipo de factura">
            </div>

            <div class="input-group mb-3">
                <table class="table table-hover" id="clienteSeleccionado">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">nombre</th>
                        <th scope="col">apellido</th>
                        <th scope="col">genero</th>
                        <th scope="col">fecha de nacimiento</th>
                        <th scope="col">telefono</th>
                        <th scope="col">ubicacion</th>
                    </tr>
                </table>
                <a class="btn btn-primary" id="btnBuscarCliente" href="javascript:void(0);">Buscar</a>
            </div>
            <a class="btn btn-primary mb-5" id="btnAniadirAlCarro" href="javascript:void(0);">Agregar al carrito</a>
            <div class="input-group mb-3">
                <input type="number" name="iva" placeholder="I.V.A.">
            </div>


            <div class="input-group mb-3">
                <input type="number" step="any" name="total_pagar" placeholder="total a pagar" readonly>
                <a class="btn btn-primary mb" href="#">Calcular</a>
            </div>



            
            @include('misComponentes.modals.modalsVentaProductos')
            @include('misComponentes.modals.modalsVentaACliente')

            <input type="submit" value="Guardar">
        </form>
    </div>

@endsection
