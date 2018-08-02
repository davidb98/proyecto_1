<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Insertar Curso</title>
    </head>
    <body>

        <form method="POST" action="<?= CURSO_GUARDAR['url'] ?>">
            <h1>Registrar curso</h1>
            <div>

                <label for="tip_descripcion">Descripción</label>
                <input type="text" id="tip_descripcion" name="tip_descripcion" required=""/>

            </div>

            <br>
            <button>Guardar</button>
        </form>
    </body>
</html>
