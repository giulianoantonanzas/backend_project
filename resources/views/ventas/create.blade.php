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
                    </tr>
                    <tr>
                        <th scope="col"><input class="inputClienteSeleccionado" readonly type="text" name="id"></th>
                        <th scope="col"><input class="inputClienteSeleccionado" readonly type="text" name="nombre"></th>
                        <th scope="col"><input class="inputClienteSeleccionado" readonly type="text" name="apellido"></th>
                    </tr>
                </table>
                <a class="btn btn-primary" id="btnBuscarCliente" href="javascript:void(0);">Buscar</a>
            </div>

            <div class="input-group mb-3">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">nombre</th>
                            <th scope="col">marca</th>
                            <th scope="col">detalle</th>
                            <th scope="col">cantidad</th>
                            <th scope="col">precio</th>
                            <th scope="col">precio x cantidad</th>
                        </tr>
                    </thead>
                    <tbody id="productoSeleccionados">

                    </tbody>
                </table>
                <a class="btn btn-primary mb-5" id="btnAniadirAlCarro" href="javascript:void(0);">Agregar al carrito</a>
            </div>



            <div class="input-group mb-3">
                <input type="number" id="iva" name="iva" placeholder="I.V.A.">
            </div>

            <div class="input-group mb-3">
                <input type="number" step="any" id="totalPagar" name="total_pagar" id="totalPagar"
                    placeholder="total a pagar" readonly>
                <a class="btn btn-primary mb" id="calculcarTotal" href="javascript:void(0);">Calcular</a>
            </div>


            @include('misComponentes.modals.modalsVentaProductos')
            @include('misComponentes.modals.modalsVentaACliente')
            <input type="submit" value="Guardar">
        </form>
    </div>



    <script>
        /*SCRIPT PARA CALCULAR EL VALOR TOTAL A PAGAR DE LA VENTA*/

        var calcularbtn = document.getElementById("calculcarTotal");
        var productosSeleccionados = document.getElementById("productoSeleccionados");
        var total = 0;

        calculcarTotal.onclick = function() {
            //productosSeleccionados.rows[0].children[6].innerHTML; opcion 1
            //productosSeleccionados.children[0].cells[6].innerHTML; opcion 2

            for (let index = 0; index < productosSeleccionados.rows.length; index++) {
                total += parseInt(productosSeleccionados.rows[index].cells[6].children[0].value);
            }

            total = total + (total * document.getElementById("iva").value / 100);
            document.getElementById("totalPagar").value = total;
        }

    </script>

@endsection
