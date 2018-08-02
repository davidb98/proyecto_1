<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<form  action="<?= ACTIVITY_CONSULTA_PROFESOR['url'] ?>" method="POST">
    <h1>Docentes</h1>
<table   class="table table-hover">


    <thead>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Teléfono</th>

</thead>
<tbody >
    <?php foreach ($consultTeacher as $obj ) { ?>
    <tr>
        <td><?= $obj->name ?></td>
        <td><?= $obj->surname ?></td>
        <td><?= $obj->phone_number ?></td>
       
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