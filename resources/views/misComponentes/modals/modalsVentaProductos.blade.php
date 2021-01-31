<style>
    /* The Modal (background) */
    .modal-producto {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
        z-index: 3;
    }

    /* Modal Content */
    .modal-content-producto {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    /* The Close Button */
    .close-producto {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close-producto:hover,
    .close-producto:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

</style>


<!-- The Modal -->
<div id="myModalProducto" class="modal-producto">
    <!-- Modal content -->
    <div class="modal-content-producto">
        <span class="close-producto">&times;</span>
        @include('misComponentes.modals.tablaProductoVenta')
    </div>
</div>


<script>
    /*SCRIPT PARA GESTION DEL MODAL (ABRIR , CERRARLO Y PONER LA INFO EN LA TABLA*/

    var modalProducto = document.getElementById("myModalProducto");

    var btnProducto = document.getElementById("btnAniadirAlCarro");

    var spanProducto = document.getElementsByClassName("close-producto")[0];

    var seleccionarProductos = document.getElementsByClassName('seleccionar-producto');
    var productos = document.getElementsByClassName('item-producto');
    var tabla = document.getElementById("productoSeleccionados");


    btnProducto.onclick = function() {
        modalProducto.style.display = "block";
    }
    spanProducto.onclick = function() {
        modalProducto.style.display = "none";
    }


    /* logica los botones de seleccionar (al momento de seleccionar producto) asigna los valores a los inputs y cierra el modals */
    for (let index = 0; index < seleccionarProductos.length; index++) {
        seleccionarProductos[index].onclick = function() {
            modalProducto.style.display = "none";

            var id = document.createElement('input');
            id.type = "number";
            id.name = "idProducto" + index;
            id.value = productos[index].cells[0].innerHTML;

            var nombre = document.createElement('input');
            nombre.type = "text";
            nombre.name = "nombreProducto" + index;
            nombre.value = productos[index].cells[1].innerHTML;
            var marca = document.createElement('input');
            marca.type = "text";
            marca.name = "marcaProducto" + index;
            marca.value = productos[index].cells[2].innerHTML;

            var detalle = document.createElement('input');
            detalle.type = "text";
            detalle.name = "detalleProducto" + index;
            detalle.value = productos[index].cells[3].innerHTML;

            var cantidadDeseada = document.createElement('input');
            cantidadDeseada.type = "number";
            cantidadDeseada.name = "cantidad_deseadaProducto" + index;
            cantidadDeseada.value = productos[index].cells[5].children[0].value;

            var precio = document.createElement('input');
            precio.type = "number";
            precio.name = "precioProducto" + index;
            precio.step = "any";
            precio.value = productos[index].cells[6].innerHTML;

            var precioTotal = document.createElement('input');
            precioTotal.type = "number";
            precioTotal.name = "precio_totalProducto" + index;
            precioTotal.step = "any";
            precioTotal.value = (productos[index].cells[6].innerHTML * productos[index].cells[5].children[0].value);



            var row = tabla.insertRow();
            row.insertCell(0).appendChild(id)
            row.insertCell(1).appendChild(nombre)
            row.insertCell(2).appendChild(marca)
            row.insertCell(3).appendChild(detalle)
            row.insertCell(4).appendChild(cantidadDeseada)
            row.insertCell(5).appendChild(precio)
            row.insertCell(6).appendChild(precioTotal)
        }
    }

    window.onclick = function(event) {
        if (event.target == modalProducto) {
            modalProducto.style.display = "none";
        }
    }

</script>
