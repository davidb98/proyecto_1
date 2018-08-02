<?php

namespace persistencia\vo;

use persistencia\generico\IGenericVO;

class UserVO implements IGenericVO {

    private $id_user;

    /**
     *
     * @var TypeOfUserVO
     */
    private $id_type_user;
    private $name;
    private $surname;
    private $phone_number;
    private $address;
    private $id;
    private $document_type;
    private $password;
    private $birth_date;
    private $active_y_n;

    function getId_user() {
        return $this->id_user;
    }

    function getId_type_user() {
        return $this->id_type_user;
    }

    function getName() {
        return $this->name;
    }

    function getSurname() {
        return $this->surname;
    }

    function getPhone_number() {
        return $this->phone_number;
    }

    function getAddress() {
        return $this->address;
    }

    function getId() {
        return $this->id;
    }

    function getDocument_type() {
        return $this->document_type;
    }

    function getPassword() {
        return $this->password;
    }

    function getBirth_date() {
        return $this->birth_date;
    }

    function getActive_y_n() {
        return $this->active_y_n;
    }

    function setId_user($id_user) {
        $this->id_user = $id_user;
    }

    function setId_type_user( $id_type_user) {
        $this->id_type_user = $id_type_user;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setSurname($surname) {
        $this->surname = $surname;
    }

    function setPhone_number($phone_number) {
        $this->phone_number = $phone_number;
    }

    function setAddress($address) {
        $this->address = $address;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDocument_type($document_type) {
        $this->document_type = $document_type;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setBirth_date($birth_date) {
        $this->birth_date = $birth_date;
    }

    function setActive_y_n($active_y_n) {
        $this->active_y_n = $active_y_n;
    }

    public function getAttributes() {
        $attributes = array();
        $attributes['id_user'] = $this->id_user;
        $attributes['id_type_user'] = $this->id_type_user;
        $attributes['name'] = $this->name;
        $attributes['surname'] = $this->surname;
        $attributes['phone_number'] = $this->phone_number;
        $attributes['address'] = $this->address;
        $attributes['id'] = $this->id;
        $attributes['document_type'] = $this->document_type;
        $attributes['password'] = $this->password;
        $attributes['birth_date'] = $this->birth_date;
        $attributes['active_y_n'] = $this->active_y_n;
        return $attributes;
    }

    public function convert($info) {
        $attributes = array_keys(get_object_vars($this));
        foreach ($attributes as $nombreAtributos) {
            if (isset($info['use_' . $nombreAtributos])) {
                $this->$nombreAtributos = $info['use_' . $nombreAtributos];
            }
        }
    }

}
