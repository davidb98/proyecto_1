<?php

namespace persistencia\vo;

use persistencia\generico\IGenericVO;

class ActivityVO implements IGenericVO {

    private $id_activity;

    /**
     *
     * @var UserVO
     */
    private $id_user;

    /**
     *
     * @var SubjectVO
     */
    private $id_subject;

    /**
     *
     * @var GradeVO
     */
    private $id_grade;
    private $description;
    private $name;

    function getId_activity() {
        return $this->id_activity;
    }

    function getId_user() {
        return $this->id_user;
    }

    function getId_subject() {
        return $this->id_subject;
    }

    function getId_grade() {
        return $this->id_grade;
    }

    function getDescription() {
        return $this->description;
    }

    function getName() {
        return $this->name;
    }

    function setId_activity($id_activity) {
        $this->id_activity = $id_activity;
    }

    function setId_user($id_user) {
        $this->id_user = $id_user;
    }

    function setId_subject(SubjectVO $id_subject) {
        $this->id_subject = $id_subject;
    }

    function setId_grade(GradeVO $id_grade) {
        $this->id_grade = $id_grade;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setName($name) {
        $this->name = $name;
    }

    
    public function getAttributes() {
        $attributes = array();
        $attributes['id_activity'] = $this->id_activity;
        $attributes['id_user'] =  $this->id_user;
        $attributes['id_subject'] =  $this->id_subject;
        $attributes['id_grade'] =  $this->id_grade;
        $attributes['name'] = $this->name;
        $attributes['description'] = $this->description;
        return $attributes;
    }

    public function convert($info) {
        $attributes = array_keys(get_object_vars($this));
        foreach ($attributes as $nombreAtributos) {
            if (isset($info['act_' . $nombreAtributos])) {
                $this->$nombreAtributos = $info['act_' . $nombreAtributos];
            }
        }
    }

}
