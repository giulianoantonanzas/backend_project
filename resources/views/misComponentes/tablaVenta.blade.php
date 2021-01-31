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
                <td>{{ $ventas[$i]->nombre . ' ' . $ventas[$i]->apellido }} </td>
                <td>{{ $ventas[$i]->total_pagar }} </td>
                <td><a class="btn btn-primary" href="#">Editar</a></td>
                <td>
                    <form action="{{ route('venta.destroy', $ventas[$i]->id) }}" method="post">
                        {{ csrf_field() }}
                        <!-- aprender mas en espesifico que hace esto -->
                        {{ method_field('DELETE') }}
                        <!-- cambia el tipo de metodo , pasa el de post a delete-->
                        <button type="submit" class="btn btn btn-danger"
                            onclick="return confirm('¿Desea eliminar este registro?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endfor
    </tbody>
</table>
