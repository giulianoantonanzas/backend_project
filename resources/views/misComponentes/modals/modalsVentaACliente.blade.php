<style>
    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
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
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

</style>

<!-- The Modal -->
<div id="myModalCliente" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        @include('misComponentes.modals.tablaClienteVenta')
    </div>
</div>

<script>
    // Get the modal
    var modal = document.getElementById("myModalCliente");

    // Get the button that opens the modal
    var btn = document.getElementById("btnBuscarCliente");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    var seleccionarCliente = document.getElementsByClassName("seleccionar-cliente");
    var clientes = document.getElementsByClassName("item-cliente");
    var clienteSeleccionado = document.getElementById("clienteSeleccionado");


    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }


    span.onclick = function() {
        modal.style.display = "none";
    }


    /*IMPORTANTE: AQUI ESTA LA LOGICA EN DODNE CIERRA EL MODAL AL SELECCIONAR EL CLIENTE QUE QUIERO.
     OBVIAMENTE TODO ESTO ESTA RECONTRA RE MIL HARDCODEADO Y ESTA RE MAL ESO, PERO AUN NO SE BIEN
     EN DONDE PUEDO ENRUTAR LOS ESTILOS, LOS SCRIPS Y QUE ME LOS LEA.

     hace que cierre el modal y que fije el cliente seleccionado
     */
    for (let index = 0; index < seleccionarCliente.length; index++) {
        seleccionarCliente[index].onclick = function() {
            modal.style.display = "none";
            clienteSeleccionado.rows[0].cells[0].innerHTML = clientes[index].cells[0].innerHTML;
            clienteSeleccionado.rows[0].cells[1].innerHTML = clientes[index].cells[1].innerHTML;
            clienteSeleccionado.rows[0].cells[2].innerHTML = clientes[index].cells[2].innerHTML;
            clienteSeleccionado.rows[0].cells[3].innerHTML = clientes[index].cells[3].innerHTML;
            clienteSeleccionado.rows[0].cells[4].innerHTML = clientes[index].cells[4].innerHTML;
            clienteSeleccionado.rows[0].cells[5].innerHTML = clientes[index].cells[5].innerHTML;
            clienteSeleccionado.rows[0].cells[6].innerHTML = clientes[index].cells[6].innerHTML;
        };
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

</script>
