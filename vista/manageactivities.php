<form method="POST" action="<?= ACTIVITY_INDEX['url'] ?>" >
    <button class="btn" id="registerActivityBtn">Agregar Actividad</button>
    
</form>

<table class="table table-striped">


    <thead>
    <th>Actividad</th>
    <th>Usuario</th>
    <th>Asignatura</th>
    <th>Grado</th>
    <th>Descripcion</th>
    <th>Eliminar</th>
    <th>Editar</th>
</thead>
<tbody>
    <?php foreach ($consult as $obj) { ?>
        <tr>
            <td><?= $obj->nombreactividad ?></td>
            <td><?= $obj->nombreusuario ?></td>
            <td><?= $obj->nombreasignatura ?></td>
            <td><?= $obj->nombregrado ?></td>
            <td><?= $obj->description ?></td>
            <td><button id="btnDelete" data-id="<?= $obj->id_activity ?>" data-url="<?= ACTIVITY_DELETE['url']?>" class="btn btn-success">Eliminar</button></td>
            <td><button id="btnDelete" data-id="<?= $obj->id_activity ?>" data-url="<?= ACTIVITY_UPDATE_INDEX['url']?>" class="btn btn-success">Editar</button></td>
        </tr>
    <?php } ?>

</tbody>
</table>
<div id="registerActivity">
    
</div>
<script type="text/javascript">
    
    $('button.btn.btn-success').on('click', function () {
        var id = $(this).attr('data-id');
        var url = $(this).attr('data-url');
        
        $.ajax({
            url: url,
            type: 'POST',
            data: {'id': id},
            success: function (r) {
                url.ajax.reload();
            }
        });
    });

</script>