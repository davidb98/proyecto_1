
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<form  action="<?= ACTIVITY_CONSULTA_ESTUDENT['url'] ?>" method="POST">
    <h1>Actividades</h1>
<table   class="table table-hover">


    <thead>
    <th>Name</th>
    <th>Actividad</th>
    <th>Usuario</th>
    <th>Asignatura</th>
    <th>Grado</th>
    <th>Descripcion</th>

</thead>
<tbody >
    <?php foreach ($consult as $obj ) { ?>
    <tr>
        <td><?= $obj->name ?></td>
        <td><?= $obj->id_activity ?></td>
        <td><?= $obj->id_user ?></td>
        <td><?= $obj->id_subject ?></td>
        <td><?= $obj->id_grade ?></td>        
        <td><?= $obj->description ?></td>
       
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
                url.ajax.reload();
            }
        });
    });

</script>
    </form>
    </body>
</html>
