<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Registrar Asignatura</button>
<form method="POST" action="<?= SUBJECT_SAVE['url'] ?>" enctype="multipart/form-data">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Registrar Asignatura</h4>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group">
                            <label for="sub_name" class="control-label">Asignatura</label>
                            <input type="text" class="form-control" id="sub_name" name="sub_name">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<table class="table table-striped">
    <thead>
    <th>Asignatura</th>
</thead>
<tbody>
    <?php foreach ($lista as $obj) { ?>
        <tr>
            <td><?= $obj->name ?></td>

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
                                        <label for="gra_grade" class="control-label">Nombre Asignatura</label>
                                        <input type="text" class="form-control" id="gra_grade" name="gra_grade" >
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
            <td><button data-url="<?= SUBJECT_DELETE['url'] ?>" data-id="<?= $obj->id_subject ?>" class="btn btn-success">Eliminar</button></td>
        </tr>
    <?php } ?>
</tbody>
</table>


<script type="text/javascript">
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
    });


</script>