<?php

namespace persistencia\vo;

use persistencia\generico\IGenericVO;

class TypeOfUserVO implements IGenericVO {

    private $id_type_user;
    private $description;

    function getId_type_user() {
        return $this->id_type_user;
    }

    function getDescription() {
        return $this->description;
    }

    function setId_type_user($id_type_user) {
        $this->id_type_user = $id_type_user;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    public function getAttributes() {
        $attributes = array();
        $attributes['id_type_user'] = $this->id_type_user;
        $attributes['description'] = $this->description;
        return $attributes;
    }

    public function convert($info) {
        $attributes = array_keys(get_object_vars($this));
        foreach ($attributes as $nombreAtributos) {
            if (isset($info['typ_' . $nombreAtributos])) {
                $this->$nombreAtributos = $info['typ_' . $nombreAtributos];
            }
        }
    }

}
