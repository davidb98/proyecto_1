<?php

namespace negocio\controlador;

use negocio\generico\GenericController;
use persistencia\dao\ActivityDAO;

class ActivityController extends GenericController {

    private $activityDAO;

    public function __construct(&$cnn) {
        parent::__construct($cnn);
        $this->activityDAO = new ActivityDAO($cnn);
    }

}
