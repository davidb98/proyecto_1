<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Agregar Carcacha</button>
<form action="<?= GESTIONAR_CARCACHA_GUARDAR['url'] ?>" method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Registrar Carcacha</h4>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group">
                            <label for="car_titulo" class="control-label">Titulo:</label>
                            <input type="text" class="form-control" id="car_titulo" name="car_titulo">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group">
                            <label for="car_marca" class="control-label">Marca:</label>
                            <input type="text" class="form-control" id="car_marca" name="car_marca">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group">
                            <label for="car_referencia" class="control-label">Referencia:</label>
                            <input type="text" class="form-control" id="car_referencia" name="car_referencia">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group">
                            <label for="car_modelo" class="control-label">Modelo:</label>
                            <input type="text" class="form-control" id="car_modelo" name="car_modelo">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group">
                            <label for="car_descripcion" class="control-label">Descripción:</label>
                            <input type="text" class="form-control" id="car_descripcion" name="car_descripcion">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group">
                            <label for="car_placa" class="control-label">Placa:</label>
                            <input type="text" class="form-control" id="car_placa" name="car_placa">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group">
                            <label for="car_color" class="control-label">Color:</label>
                            <input type="text" class="form-control" id="car_color" name="car_color">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group">
                            <label for="car_numero_pasajeros" class="control-label">Número de puestos:</label>
                            <input type="text" class="form-control" id="car_numero_pasajeros" name="car_numero_pasajeros">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group">
                            <label for="car_foto1" class="control-label">Foto 1:</label>
                            <input type="file" class="form-control" id="car_foto1" name="fot_nombre[]">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group">
                            <label for="car_foto2" class="control-label">Foto 2:</label>
                            <input type="file" class="form-control" id="car_foto2" name="fot_nombre[]">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group">
                            <label for="car_foto3" class="control-label">Foto 3:</label>
                            <input type="file" class="form-control" id="car_foto3" name="fot_nombre[]">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group">
                            <label for="car_foto4" class="control-label">Foto 4:</label>
                            <input type="file" class="form-control" id="car_foto4" name="fot_nombre[]">
                        </div>
                    </div>    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</form>



<table class="table table-striped">

    <thead>
    <th>Placa</th>
    <th>Titulo</th>
    <th>Marca</th>
    <th>Referencia</th>
    <th>Modelo</th>
    <th>Editar</th>
    <th>Vendido</th>
</thead>
<tbody>
    <?php foreach ($lista as $obj) { ?>
        <tr>
            <td><?= $obj->nombreusuario ?></td>
            <td><?= $obj->titulo ?></td>
            <td><?= $obj->marca ?></td>
            <td><?= $obj->referencia ?></td>
            <td><?= $obj->modelo ?></td>








            <td><button data-url="<?= GESTIONAR_CARCACHA_ELIMINAR['url'] ?>" data-id="<?= $obj->id_carro ?>" class="btn btn-success">Vendido</button></td>
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
