<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
<!--<link href="css/diseñoLogin.css" rel="stylesheet" type="text/css"/>-->
        <title>login</title>
    </head>
    <body>
        <div id="mensaje"></div>
        <form action="<?=USER_LOGIN['url'] ?>" method="POST" >
            <h1>Iniciar Sesión</h1>
            <input type="number" placeholder=" Número de documento" id="use_document" name="use_document"/>
            <input type="password" placeholder="&#128272; Clave" id="use_password" name="use_password"/>
            <input type="submit" value="Iniciar Sesión"/>
        </form>
    </body>
</html>