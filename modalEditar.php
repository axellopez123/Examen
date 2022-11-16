<!-- MODAL EDITAR-->
<div class="modal" id="edit<?php echo $data['id'];  ?>" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modificar TODO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="row">
                <form action="update.php" method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $data['nombre']?>" required>
                        <input type="hidden" id="id" name="id" value="<?php echo $data['id']?>"/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Descripción:</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcionModify<?php echo $data['id']?>" value="<?php echo $data["descripcion"]?>">
                        <div id="descriptionHelperModify" class="form-text">La longitud maxima es 23 caracteres.</div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Area</label>
                        <input type="text" class="form-control" id="area" name="area" value="<?php echo $data['area']?>" required>
                    </div>
                    <div class="mb-3">
                            <label for="" class="form-label">Estatus</label>
                            <select class="form-select" id="estatus" name="estatus" aria-label="Floating label select example">
                                <option selected value="1" class="opt">Completados</option>
                                <option value="2" class="opt">Pendientes</option>
                            </select>
                        </div>
                    <button type="submit" id="btnGuardar" class="btn btn-primary edit">Actualizar</button>
                </form>
            </div>
            </div>
            </div>
        </div>
    </div>

    <script>
        
            $("#descripcionModify"+$("#id").val()).on('keydown keyup change',function(){
                console.log($(this).val());
                var len = $(this).val().length;
                if(len > 23){
                    console.log("Cayo");
                    $("#descriptionHelperModify").text("Se permiten 23 caracteres, has ingresado "+ len).css('color', 'red');
                    // $("#descriptionHelperModify").css('color', 'red');
                    $("#btnGuardar").prop('disabled', true);
                }else{
                    $("#descriptionHelperModify").text("La longitud maxima es 23 caracteres. ").css('color', 'black');
                    $("#btnGuardar").prop('disabled', false);
                }
                console.log(len);
            });
        </script>