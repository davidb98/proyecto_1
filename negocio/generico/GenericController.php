<?php

namespace negocio\generico;

abstract class GenericController {

    /**
     *
     * @var PDO
     */
    protected $cnn;

    public function __construct(&$cnn) {
        $this->cnn = $cnn;
 
        session_start();
    }

    protected function validateSession() {
        
        if (!isset($_SESSION['user']) || is_null($_SESSION['user'])) {
            session_destroy();
            header('Location:' . MAIN_PATH);
        }
//      if ($_SESSION['propietario']['rol'] != $rol) {
//            session_destroy();
//            header('Location' . RUTA_PRINCIPAL);
//        }
    }

    protected function sesionRol($id_type_user) {
        if ($id_type_user != 1) {
            session_destroy();
            header('Location:' . MAIN_PATH);
        }
    }
}
