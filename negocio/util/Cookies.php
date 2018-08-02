<?php

namespace negocio\util;

class Cookies {

    public static function validarCookie($nombre) {
        if (isset($_COOKIE[$nombre])) {
            session_start();
            $infoPropietario = json_decode($_COOKIE['propietario'], TRUE);
            $propietario = new \persistencia\vo\PropietarioVO();
            $propietario->setIdPropietario($infoPropietario['id_propietario']);
            $propietario->setFoto($infoPropietario['foto']);
            $propietario->setNombre($infoPropietario['nombre']);
            $propietario->setApellido($infoPropietario['apellido']);
            $_SESSION['propietario'] = $propietario;
            header('location:' . MENU['url']);
            return;
        }
    }

}
