<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
        <title>Insertar Estudiante</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <form method="POST" action="<?= GUARADAR_DOCENTE['url'] ?>" onsubmit="return validarRegistro()">
<div class="container">
   <h1>Registrar Docente</h1>
  <form class="form-inline">
    <div class="form-group">
       <label for="use_name">Nombre</label>
       <input type="text" id="use_name" class="form-control" name="use_name" />
    </div>
    <div class="form-group">
       <label for="use_surname">Apellido</label>
       <input type="text" id="use_surname" class="form-control" name="use_surname" required=""/>
    </div>
    <div class="form-group">
       <label for="use_phone_number">Teléfono</label>
       <input type="text" id="use_phone_number"  class="form-control" name="use_phone_number" required=""/>
    </div>
    <div class="form-group">
       <label for="use_address">Direccion</label>
       <input type="text"  class="form-control" id="use_address" name="use_address" required=""/>
    </div>
    <div class="form-group">
       <label for="use_id">Número documento</label>
       <input type="text"  class="form-control" id="use_id" name="use_id" pattern="(?=.\d)(?=.*[a-z])(?=.*[A-Z]).{10,}" required=""/>
    </div>
      <div class="form-group">
      <label for="use_document_type">Tipo De documento</label>
      <select class="form-control input-lg" id="use_document_type" list="use_document_type" name="use_document_type" required="">
        <option>seleccionar</option>
        <option>Cc</option>
        <option>Cex</option>
        <option>Pt</option>
      </select>
    </div>
    <div class="form-group">
      <label for="use_password">Contraseña</label>
      <input type="number" class="form-control" id="use_password" name="use_password" required=""/>
    </div>
    <div class="form-group">
        <label for="use_birth_date">Fecha de nacimiento</label>
      <input type="date"  class="form-control" id="use_birth_date" name="use_birth_date" required=""/> 
    </div>
    <button type="submit" class="btn btn-default">Guardar</button>
  </form>
</div>
    
</body>
<script src="js/validacionResgistro.js"></script>
</html>

<!DOCTYPE html>

<!--<html>
    <head>
        <meta charset="UTF-8">
        <title>Insertar Estudiante</title>
    </head>
    <body>
        <form method="POST" action="<?= GUARADAR_DOCENTE['url'] ?>">
            <h1>Registrar Docente</h1>
            <div>

                <label for="use_name">Nombre</label>
                <input type="text" id="use_name" name="use_name" />

            </div>

            <div>

                <label for="use_surname">Apellido</label>
                <input type="text" id="use_surname" name="use_surname" required=""/>

            </div>
            <div>

                <label for="use_phone_number">Teléfono</label>
                <input type="text" id="use_phone_number" name="use_phone_number" required=""/>

            </div>
            <div>

                <label for="use_address">Direccion</label>
                <input type="text" id="use_address" name="use_address" required=""/>

            </div>
            <div>

                <label for="use_id">Número documento</label>
                <input type="text" id="use_id" name="use_id" required=""/>

            </div>
            <div>

                <label for="use_document_type">Tipo De documento</label>
                <input   list="use_document_type" name="use_document_type" required=""/>
                <datalist  id="use_document_type" >
                    <option value="CC">
                    <option value="CEX">
                    <option value="PT">
                </datalist>
            </div>

            <div>

                <label for="use_password">Contraseña</label>
                <input type="number" id="use_password" name="use_password" required=""/>

            </div>

            <div>

                <label for="use_birth_date">Fecha de nacimiento</label>
                <input type="date" id="use_birth_date" name="use_birth_date" required=""/>

            </div>
            <button>Guardar</button>
        </form>
    </body>
</html>-->
