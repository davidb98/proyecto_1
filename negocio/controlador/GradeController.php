<?php

namespace negocio\controlador;

use negocio\generico\GenericController;
use persistencia\dao\GradeDAO;

class GradeController extends GenericController {

    private $gradeDAO;
    public function __construct(&$cnn) {
        parent::__construct($cnn);
        $this->gradeDAO = new GradeDAO($cnn);
    }
}
