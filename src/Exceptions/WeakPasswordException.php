<?php

namespace App\Exceptions;


class WeakPasswordException extends \Exception { 
    
    public function __construct($message = "La contraseña no cumple con los requisitos", $code = 400) {
        parent::__construct($message, $code);
    }

}
