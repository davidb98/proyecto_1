<?php 

namespace persistencia\dao;

use PDO;
use persistencia\generico\GenericDAO;

class GradeDAO extends GenericDAO {
     public function __construct($cnn) {
        parent::__construct($cnn, 'grade');
    }
    
    public function consult() {

        $sql = 'Select * from grade ';
        $sentence = $this->cnn->prepare($sql);
        $sentence->execute();
        $result = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

}
