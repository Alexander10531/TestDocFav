<?php

namespace App\Models\ValueObjects;

use App\Exceptions\InvalidEmailException; 

final class VOEmail{
    
    private string $email;
    private String $regexEmail; 

    public function __construct(string $email){

        $this->email = $email;
        $this->regexEmail = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'; 

        if(!preg_match($this->regexEmail, $email)){
            throw new InvalidEmailException(); 
        }
    
    }

    public function getEmail(){
        return $this->email; 
    }

}