<?php

namespace persistencia\dao;

use PDO;
use persistencia\generico\GenericDAO;
use persistencia\vo\UserVO;

class UserDAO extends GenericDAO {

    public function __construct($cnn) {
        parent::__construct($cnn, 'id_user');
    }
    
    public function consultTeacher() {
        $sql = 'Select * from id_user where id_type_user=2';
        $sentence = $this->cnn->prepare($sql);
        $sentence->execute();
        $result = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    public function consultStudent() {
        $sql = 'Select * from id_user where id_type_user=3';
        $sentence = $this->cnn->prepare($sql);
        $sentence->execute();
        $result = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
//autenticar
    public function authenticate($document, $password) {
        $sql = 'select * from id_user where id = :id and password = :password';
        $sentence = $this->cnn->prepare($sql);
        $sentence->bindParam(':id', $document);
        $sentence->bindParam(':password', $password);
        $sentence->execute();
        $result = $sentence->fetchAll();
        if (empty($result)) {
            return;
        }
        $registry = $result[0];
        $user = new UserVO();
        $user->setId_user($registry['id_user']);
        $user->setId_type_user($registry['id_type_user']);
        $user->setName($registry['name']);
        $user->setSurname($registry['surname']);
        $user->setPhone_number($registry['phone_number']);
        $user->setAddress($registry['address']);
        $user->setId($registry['id']);
        $user->setDocument_type($registry['document_type']);
        $user->setPassword($registry['password']);
        $user->setBirth_date($registry['birth_date']);
        return $user;
    }
//consultar Actividad
    public function consultActivity() {
        $sql = 'select ac.id_activity,ac.name as nombreactividad,us.name as nombreusuario, sub.name as nombreasignatura, gra.grade as nombregrado, ac.description from activity as ac
        inner join id_user as us on us.id_user = ac.id_user
        inner join subject as sub on sub.id_subject = ac.id_subject
        inner join grade as gra on gra.id_grade = ac.id_grade';
        $sentence = $this->cnn->prepare($sql);
        $sentence->execute();
        $result = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
//editar Actividad
    public function editarActivity() {
        $sql = 'select ac.id_activity,ac.name as nombreactividad,us.name as nombreusuario, sub.name as nombreasignatura, gra.grade as nombregrado, ac.description from activity as ac
        inner join id_user as us on us.id_user = ac.id_user
        inner join subject as sub on sub.id_subject = ac.id_subject
        inner join grade as gra on gra.id_grade = ac.id_grade 
        where ac.id_activity = :id';
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->bindParam(':id', $id_activity);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }
    //consultar Usuario
    public function consultUsuario(){
        $sql = 'Select * from usuario';
        $sentence = $this->cnn->prepare($sql);
        $sentence->execute();
        $result = $sentence->fetchAll();
        return $result;
    }
    


}
