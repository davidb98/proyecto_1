<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<form  action="<?= ACTIVITY_CONSULTA_ESTUDENT_PROFESOR['url'] ?>" method="POST">
    <h1>Estudiantes</h1>
<table   class="table table-hover">


    <thead>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Teléfono</th>
    <th>Correo</th>
<!--    <th>Curso</th>-->

</thead>
<tbody >
    <?php foreach ($consultStudent as $obj ) { ?>
    <tr>
        <td><?= $obj->name ?></td>
        <td><?= $obj->surname ?></td>
        <td><?= $obj->phone_number ?></td>
        <td><?= $obj->email ?></td>
        <!--<td>//<?= $obj->grade ?></td>-->
       
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
