<?php

namespace persistencia\vo;

use persistencia\generico\IGenericVO;

class SubjectVO implements IGenericVO {

    private $id_subject;
    private $name;

    function getId_subject() {
        return $this->id_subject;
    }

    function getName() {
        return $this->name;
    }

    function setId_subject($id_subject) {
        $this->id_subject = $id_subject;
    }

    function setName($name) {
        $this->name = $name;
    }

    
    public function getAttributes() {
        $attributes = array();
        $attributes['id_subject'] = $this->id_subject;
        $attributes['name'] = $this->name;
        return $attributes;
    }

    public function convert($info) {
        $attributes = array_keys(get_object_vars($this));
        foreach ($attributes as $nombreAtributos) {
            if (isset($info['sub_' . $nombreAtributos])) {
                $this->$nombreAtributos = $info['sub_' . $nombreAtributos];
            }
        }
    }

}
