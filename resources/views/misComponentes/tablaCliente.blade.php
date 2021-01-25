
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
        <!-- GENERARE UNA PREGUNTA PARA SABER SI ES QUE ESTA MOSTRANDO LA TABLA DESDE CLIENTE.INDEX 
            O DESDE LA CREACION DE UNA VENTA (o cualquier otra ventana-->

        <!-- recorro los clientes que me envia el controlador y los muestro en una tabla -->
        @for ($i = 0; $i < count($clientes); $i++)
            <tr>
                <th scope="row">{{ $clientes[$i]->id }}</th>
                <td>{{ $clientes[$i]->nombre }}</td>
                <td>{{ $clientes[$i]->apellido }}</td>
                <td>{{ $clientes[$i]->genero }}</td>
                <td>{{ $clientes[$i]->fecha_nacimiento }}</td>
                <td>{{ $clientes[$i]->telefono }}</td>
                <td>{{ $clientes[$i]->ubicacion }}</td>
                <td><a class="btn btn-primary" href="{{ route('cliente.edit', $clientes[$i]) }}">Editar</a></td>
                <td>
                    <form action="{{ route('cliente.destroy', $clientes[$i]->id) }}" method="post">
                        {{ csrf_field() }} <!-- aprender mas en espesifico que hace esto -->
                        {{ method_field('DELETE') }} <!-- cambia el tipo de metodo , pasa el de post a delete-->
                        <button type="submit" class="btn btn btn-danger"
                            onclick="return confirm('¿Desea eliminar este registro?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endfor
    </tbody>
</table>
