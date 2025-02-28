<?php

namespace App\Models\Dto; 

use App\Models\ValueObjects\VOUserName; 
use App\Models\ValueObjects\VOEmail; 
use App\Models\ValueObjects\VOPassword; 

class UserDto{

    protected VOUserName $user_name; 
    protected VOEmail $email; 
    protected VOPassword $password; 

    public function __construct(String $user_name, 
        String $email, 
        String $password){
         
        $this->user_name = new VOUserName($user_name); 
        $this->email = new VOEmail($email);
        $this->password = new VOPassword($password);
    
    }

    public function getUserName() : String{
        return $this->user_name->getUserName(); 
    }

    public function getEmail() : String{
        return $this->email->getEmail(); 
    }

    public function getPassword() : String{
        return $this->password->getPassword(); 
    }

}