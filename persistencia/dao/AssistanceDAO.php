<?php

//namespace persistencia\dao;
//
//use persistencia\generico\GenericDAO;
//use persistencia\vo\AssistanceVO;
//
//class AssistanceDAO implements GenericDAO {
//    
//    public function __construct($cnn) {
//        parent::__construct($cnn, 'assistance');
//    }
//    
//        public function consult() {
//        $sql = 'Select * from assistance ';
//        $sentence = $this->cnn->prepare($sql);
//        $sentence->execute();
//        $result = $sentence->fetchAll(PDO::FETCH_OBJ);
//        return $result;
//    }
//}
