<?php

namespace persistencia\dao;

use PDO;
use persistencia\generico\GenericDAO;
use persistencia\vo\ActivityVO;


class ActivityDAO extends GenericDAO {

    public function __construct($cnn) {
        parent::__construct($cnn, 'activity');
    }
    
    public function consult() {

        $sql = 'Select * from activity ';
        $sentence = $this->cnn->prepare($sql);
        $sentence->execute();
        $result = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    
}
