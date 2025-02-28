<?php

namespace App\Exceptions;

class InvalidEmailException extends \Exception {
    
    public function __construct($message = "El email proporcionado no es válido", $code = 400) {
        parent::__construct($message, $code);
    }

}