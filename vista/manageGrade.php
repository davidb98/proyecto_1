<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Registrar Curso</button>
<form method="POST" action="<?= GRADE_SAVE['url'] ?>" enctype="multipart/form-data">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Registrar Curso</h4>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group">
                            <label for="gra_grade" class="control-label">Curso</label>
                            <input type="text" class="form-control" id="gra_grade" name="gra_grade">
                            <label for="gra_grade_year" class="control-label">AÑO</label>
                            <input type="text" class="form-control" id="gra_grade_year" name="gra_grade_year">
                        </div>
                    </div>
                </div>
                 <div id="mensaje" class="alert " >datos registardos</div>
                <div class="modal-footer" id="mensaje" class="alert ">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
                   
                    <button type="submit" class="btn btn-primary" id="btn">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<table class="table table-striped">
    <thead>
    <th>Curso</th>
</thead>
<tbody>
    <?php foreach ($lista as $obj) { ?>
        <tr>
            <td><?= $obj->grade ?></td>
            <td><?= $obj->grade_year ?></td>

            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalBtnVer" data-whatever="@mdo">Modificar</button>
                <div class="modal fade" id="ModalBtnVer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel">Modificar</h4>
                            </div>
                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group">  
                                        <label for="gra_grade" class="control-label">Grade</label>
                                        <input type="text" class="form-control" id="gra_grade" name="gra_grade" >
                                        <label for="gra_grade_year" class="control-label">Grade year</label>
                                        <input type="text" class="form-control" id="gra_grade_year" name="gra_grade_year" >
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Guardar</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
                            </div>
                        </div>
                    </div>
                </div>

            </td>
            <td><button data-url="<?= GRADE_DELETE['url'] ?>" data-id="<?= $obj->id_grade ?>" class="btn btn-success">Eliminar</button></td>
        </tr>
    <?php } ?>
</tbody>
</table>


<script type="text/javascript">
    var mensaje = $('#mensaje');
    $('button.btn.btn-success').on('click', function () {
        var id = $(this).attr('data-id');
        var url = $(this).attr('data-url');

        
        $.ajax({
            url: url,
            type: 'POST',
            data: {'id': id},
            success: function (r) {
                console.log(r);
            }
        });
        $('#btnModificar').on('click', function (e) {
                var nombre = $('#nombre').val();
                var apellido = $('#apellido').val();
                var correo = $('#correo').val();
                var id = $('#id').val();
                $.ajax({
                    'url': 'modificar.php',
                    'type': 'POST',
                    'data': {'id': id, 'nombre': nombre, 'apellido': apellido, 'correo': correo},
                    success: function (respuesta) {
                       
                        mensaje.removeClass('alert-success');
                        mensaje.removeClass('alert-danger');
                        if (respuesta.codigo === 1) {
                            mensaje.addClass('alert-success');
                            
                            $("div#form input[type='text'],div#form input[type='hidden']").val('');
                        } else {
                            mensaje.addClass('alert-danger');
                        }
                        mensaje.show('slow');
                        mensaje.fadeOut(2000);    
                        mensaje.empty().html(respuesta.mensaje);
                        consultar();
                    }
    });


</script>