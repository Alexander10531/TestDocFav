<?php

namespace App\Exceptions;

class UserAlreadyExistsException extends \Exception { 
    
    public function __construct($message = "Ya existe un correo existente con ese usuario", $code = 400) {
        parent::__construct($message, $code);
    }

}