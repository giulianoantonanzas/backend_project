
<!-- The Modal -->
<div id="myModalProducto" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        @include('misComponentes.modals.tablaProductoVenta')
    </div>
</div>


<script>
    // Get the modal
    var modal = document.getElementById("myModalProducto");

    // Get the button that opens the modal
    var btn = document.getElementById("btnAniadirAlCarro");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[1];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

</script>
