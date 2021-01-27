<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">nombre</th>
            <th scope="col">marca</th>
            <th scope="col">detalle</th>
            <th scope="col">cantidad existente</th>
            <th scope="col">cantidad deseada</th>
            <th scope="col">precio</th>
        </tr>
    </thead>
    <tbody>
        <!-- recorro los productos que me envia el controlador y los muestro en una tabla -->
        @for ($i = 0; $i < count($productos); $i++)
            <tr class="item-producto">
                <th scope="row">{{ $productos[$i]->id }}</th>
                <td>{{ $productos[$i]->nombre }}</td>
                <td>{{ $productos[$i]->marca }}</td>
                <td>{{ $productos[$i]->detalle }}</td>
                <td>{{ $productos[$i]->cantidad }}</td>
                <td><input type="number"></td>
                <td>{{ $productos[$i]->precio }}</td>
                <td>
                    <a class="btn btn-primary seleccionar-producto" href="javascript:void();">Seleccionar</a>
                </td>
            </tr>
        @endfor
    </tbody>
</table>
