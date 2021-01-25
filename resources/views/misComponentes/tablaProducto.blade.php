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
        <!-- recorro los productos que me envia el controlador y los muestro en una tabla -->
        @for ($i = 0; $i < count($productos); $i++)
            <tr>
                <th scope="row">{{ $productos[$i]->id }}</th>
                <td>{{ $productos[$i]->nombre }}</td>
                <td>{{ $productos[$i]->marca }}</td>
                <td>{{ $productos[$i]->detalle }}</td>
                <td>{{ $productos[$i]->cantidad }}</td>
                <td>{{ $productos[$i]->precio }}</td>
                <td><a class="btn btn-primary" href="{{ route('producto.edit', $productos[$i]) }}">Editar</a>
                </td>
                <td>
                    <form action="{{ route('producto.destroy', $productos[$i]->id) }}" method="post">
                        {{ csrf_field() }} <!-- aprender mas en espesifico que hace esto -->
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn btn-danger"
                            onclick="return confirm('¿Desea eliminar este registro?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endfor
    </tbody>
</table>