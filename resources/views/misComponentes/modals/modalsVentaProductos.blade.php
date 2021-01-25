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

    for (let index = 0; index < seleccionarProductos.length; index++) {
        seleccionarProductos[index].onclick = function() {
            modalProducto.style.display = "none";
            var row = tabla.insertRow(0);
            row.insertCell(0).innerHTML = productos[index].cells[0].innerHTML;
            row.insertCell(1).innerHTML = productos[index].cells[1].innerHTML;
            row.insertCell(2).innerHTML = productos[index].cells[2].innerHTML;
            row.insertCell(3).innerHTML = productos[index].cells[3].innerHTML;
            row.insertCell(4).innerHTML = productos[index].cells[4].innerHTML;
            row.insertCell(5).innerHTML = productos[index].cells[5].innerHTML;
        }
    }

    window.onclick = function(event) {
        if (event.target == modalProducto) {
            modalProducto.style.display = "none";
        }
    }

</script>
