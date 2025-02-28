<?php

namespace App\Models\ValueObjects;

final class VOUserName{
    
    private string $user_name;

    public function __construct(string $user_name){
        $this->user_name = $user_name;
    }

    public function getUsername(){
        return $this->user_name; 
    }

}