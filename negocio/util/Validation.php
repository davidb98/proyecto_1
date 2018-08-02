<?php

namespace negocio\util;

use negocio\excepcion\PlanAException;

class Validation {

    public static function required($value, $message) {
        if (empty($value)) {
            throw new PlanAException($message);
        }
    }

    

}
