            <!-- MODAL NUEVO-->
            <div class="modal" id="new" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Agregar TODO</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <div class="modal-body">
                <div class="row">
                    <form action="insert.php" method="POST">
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Descripción:</label>
                            <input type="text" class="form-control" name="descripcion" id="descripcion">
                            <div id="descriptionHelper" class="form-text">La longitud maxima es 23 caracteres.</div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Area</label>
                            <input type="text" class="form-control" id="area" name="area" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Estatus</label>
                            <select class="form-select" id="estatus" name="estatus" aria-label="Floating label select example">
                                <option selected value="1" class="opt">Completados</option>
                                <option value="2" class="opt">Pendientes</option>
                            </select>
                        </div>
                        <button type="submit" id="btnGuardar" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
                </div>
                </div>
            </div>
        </div>

        <script>
            $("#descripcion").on('keydown keyup change',function(){
                var len = $(this).val().length;
                if(len > 23){
                    $("#descriptionHelper").text("Se permiten 23 caracteres, has ingresado "+ len).css('color', 'red');
                    // $("#descriptionHelper").css('color', 'red');
                    $("#btnGuardar").prop('disabled', true);
                }else{
                    $("#descriptionHelper").text("La longitud maxima es 23 caracteres. ").css('color', 'black');
                    $("#btnGuardar").prop('disabled', false);
                }
                console.log(len);
            });
        </script>