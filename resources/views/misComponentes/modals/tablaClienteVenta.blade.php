<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">nombre</th>
            <th scope="col">apellido</th>
            <th scope="col">genero</th>
            <th scope="col">fecha de nacimiento</th>
            <th scope="col">telefono</th>
            <th scope="col">ubicacion</th>
        </tr>
    </thead>
    <tbody>
        <!-- recorro los clientes que me envia el controlador y los muestro en una tabla -->
        @for ($i = 0; $i < count($clientes); $i++)
            <tr class="item-cliente">
                <th  scope="row">{{ $clientes[$i]->id }}</th>
                <td>{{ $clientes[$i]->nombre }}</td>
                <td>{{ $clientes[$i]->apellido }}</td>
                <td>{{ $clientes[$i]->genero }}</td>
                <td>{{ $clientes[$i]->fecha_nacimiento }}</td>
                <td>{{ $clientes[$i]->telefono }}</td>
                <td>{{ $clientes[$i]->ubicacion }}</td>
                <td>
                    <a class="btn btn-primary seleccionar-cliente" href="javascript:void();">Seleccionar</a>
                </td>
            </tr>
        @endfor
    </tbody>
</table>
