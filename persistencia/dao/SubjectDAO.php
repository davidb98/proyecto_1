<?php

namespace persistencia\dao;

use PDO;
use persistencia\generico\GenericDAO;

class SubjectDAO extends GenericDAO{
     public function __construct(&$cnn) {
        parent::__construct($cnn, 'subject');
    }
    
    
    public function consult() {

        $sql = 'Select * from subject';
        $sentence = $this->cnn->prepare($sql);
        $sentence->execute();
        $result = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

}
