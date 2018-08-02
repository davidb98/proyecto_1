<?php

namespace negocio\util;

class Archivo {

    public static function moverArchivo($foto) {
        if (isset($_FILES[$foto])) {
            $ext = str_replace('image/', '', $foto['type']);
            $nombreFinal = round(microtime(true) * 1000) . '_' . rand(0, 1000) . '.' . $ext;
            $ruta = CARPETA_PRINCIPAL . '/archivos/' . $nombreFinal;
            move_uploaded_file($foto['tmp_name'], $ruta);
            return $nombreFinal;
        }
    }

}
