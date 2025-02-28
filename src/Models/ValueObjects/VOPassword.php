<?php

namespace App\Models\ValueObjects;

use App\Exceptions\WeakPasswordException;

final class VOPassword{
    
    private string $password;
    private String $regexPassword;


    public function __construct(string $password){
        
        $this->regexPassword = '/^(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/';
        $this->password = $password;
        if(!preg_match($this->regexPassword, $password)){
            throw new WeakPasswordException(); 
        }
    
    }

    public function getPassword(){
        return $this->password; 
    }

}