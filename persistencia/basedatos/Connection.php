<?php

namespace persistencia\basedatos;

use PDO;

class Connection {

    public static function connexion(){
        $cnn = new PDO('pgsql:host=localhost;dbname=plana', 'postgres', 'a');
        $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $cnn;
    }
}
