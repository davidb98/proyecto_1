<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Insertar Estudiante</title>
    </head>
    <body>
        <form method="POST" action="<?= ACTIVITY_SAVE['url']?>" accept-charset="">
            <h1>Registrar Actividad</h1>

            <label>Seleccione un curso</label>
            <select id="" name="act_id_grade" >
                <?php foreach ($listGrade as $value) { ?>
                    <option value="<?= $value->id_grade ?>"><?= $value->grade ?></option>
                <?php } ?>
            </select>
            <div>
                <label>Seleccione una asignatura</label>

                <select id="" name="act_id_subject" >
                    <?php foreach ($listSubject as $val) { ?>
                        <option value="<?= $val->id_subject ?>"><?= $val->name ?></option>
                    <?php } ?>
                </select>

            </div>
            <div>

                <label for="act_name">Nombre</label>
                <input type="text" id="act_name" name="act_name" required=""/>

            </div>

            <div>
                <label for="act_description">Descripcion</label>
                <input type="text" id="act_description" name="act_description" required=""/>

            </div>

            <button>Guardar</button>
        </form>
    </body>
</html>
