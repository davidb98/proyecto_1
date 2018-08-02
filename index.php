<?php

//$mainPath = "/plana/index.php";
require_once './autoload.php';
require_once './path.php';
if (!isset($_SERVER['PATH_INFO'])) {
    
    
    
    include_once './vista/login.php';
    return;
}

use persistencia\basedatos\Connection;


$cnn = Connection::connexion();
$url = $mainPath . $_SERVER['PATH_INFO'];

foreach (get_defined_constants() as $constant) {
    if (!is_array($constant)) {
        continue;
    }
    if ($url == $constant['url']) {
        $class1 = '\\negocio\\controlador\\' . $constant['controlador'];
        $obj = new $class1($cnn);
        $method = $constant['metodo'];
        $obj->$method();
        break;
    }
}
















//switch ($url) {
//    case USUARIO_AUTENTICAR['url']:
//        $controlador = new PropietarioControlador();
//        $controlador ->metodo();
//        break;
//}


//require_once './autoload.php';
//if (!isset($_SERVER['PATH_INFO'])) {
//    return;
//}
//
//use persistencia\basedatos\Conexion;
//
//$cnn = Conexion::conectar();
//$url = $_SERVER['PATH_INFO'];
//
//switch ($url) {
//    case "/usuario/autenticar":
//        echo 'OLEEE';
//        break;
//}





//use persistencia\dao\PropietarioDAO;
//use persistencia\vo\PropietarioVO;
//
//$propietario = new PropietarioVO;
//$propietario->setIdPropietario(1);
//$propietario->setNombre('Diego');
//$propietario->setApellido('Rey');
//$propietario->setCorreo('leoreyb');
//$propietario->setClave('123');
//$propietarioDAO = new PropietarioDAO($cnn);
//$resultado = $propietarioDAO->eliminar(1);
//print_r($resultado);
