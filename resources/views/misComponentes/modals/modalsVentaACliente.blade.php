<style>
    .modal-cliente {
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

    .modal-content-cliente {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    /* The Close Button */
    .close-cliente {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close-cliente:hover,
    .close-cliente:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

</style>

<!-- The Modal -->
<div id="myModalCliente" class="modal-cliente">
    <!-- Modal content -->
    <div class="modal-content-cliente">
        <span class="close-cliente">&times;</span>
        @include('misComponentes.modals.tablaClienteVenta')
    </div>
</div>

<script>
    /*SCRIPT PARA GESTION DEL MODAL (ABRIR , CERRARLO Y PONER LA INFO EN LA TABLA*/

    var modalCliente = document.getElementById("myModalCliente");
    var btnCliente = document.getElementById("btnBuscarCliente");
    var spanCliente = document.getElementsByClassName("close-cliente")[0];

    var seleccionarCliente = document.getElementsByClassName("seleccionar-cliente");
    var clientes = document.getElementsByClassName("item-cliente");
    var clienteSeleccionado = document.getElementsByClassName("inputClienteSeleccionado");

    btnCliente.onclick = function() {
        modalCliente.style.display = "block";
    }

    spanCliente.onclick = function() {
        modalCliente.style.display = "none";
    }


    /*IMPORTANTE: AQUI ESTA LA LOGICA EN DODNE CIERRA EL MODAL AL SELECCIONAR EL CLIENTE QUE QUIERO.
     OBVIAMENTE TODO ESTO ESTA RECONTRA RE MIL HARDCODEADO Y ESTA RE MAL ESO, PERO AUN NO SE BIEN
     EN DONDE PUEDO ENRUTAR LOS ESTILOS, LOS SCRIPS Y QUE ME LOS LEA.

     hace que cierre el modal y que fije el cliente seleccionado
     */



    for (let index = 0; index < seleccionarCliente.length; index++) {
        seleccionarCliente[index].onclick = function() {
            modalCliente.style.display = "none";
            clienteSeleccionado[0].value = clientes[index].cells[0].innerHTML;
            clienteSeleccionado[1].value = clientes[index].cells[1].innerHTML;
            clienteSeleccionado[2].value = clientes[index].cells[2].innerHTML;
        };
    }



    /*
        function setClienteData(numeroCliente) {
            numeroCliente=numeroCliente-1;
            return [clientes[numeroCliente].cells[0].innerHTML,
                clientes[numeroCliente].cells[1].innerHTML,
                clientes[numeroCliente].cells[2].innerHTML,
                clientes[numeroCliente].cells[3].innerHTML,
                clientes[numeroCliente].cells[4].innerHTML,
                clientes[numeroCliente].cells[5].innerHTML,
                clientes[numeroCliente].cells[6].innerHTML
            ];

        }
    */
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modalCliente) {
            modalCliente.style.display = "none";
        }
    }

</script>
