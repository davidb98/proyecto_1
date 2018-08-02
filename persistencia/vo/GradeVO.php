<?php

namespace persistencia\vo;

use persistencia\generico\IGenericVO;

class GradeVO implements IGenericVO {

    private $id_grade;
    private $grade_year;
    private $grade;

    function getId_grade() {
        return $this->id_grade;
    }

    function getGrade_year() {
        return $this->grade_year;
    }

    function getGrade() {
        return $this->grade;
    }

    function setId_grade($id_grade) {
        $this->id_grade = $id_grade;
    }

    function setGrade_year($grade_year) {
        $this->grade_year = $grade_year;
    }

    function setGrade($grade) {
        $this->grade = $grade;
    }

    
    
    public function getAttributes() {
        $attributes = array();
        $attributes['id_grade'] = $this->id_grade;
        $attributes['grade_year'] = $this->grade_year;
        $attributes['grade'] = $this->grade;
        return $attributes;
    }

    public function convert($info) {
        $attributes = array_keys(get_object_vars($this));
        foreach ($attributes as $nombreAtributos) {
            if (isset($info['gra_' . $nombreAtributos])) {
                $this->$nombreAtributos = $info['gra_' . $nombreAtributos];
            }
        }
    }

}
