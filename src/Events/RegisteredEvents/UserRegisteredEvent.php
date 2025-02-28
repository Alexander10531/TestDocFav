<?php

namespace App\Events\RegisteredEvents;

use App\Models\Entity\UserEntity; 

class UserRegisteredEvent{
    
    private UserEntity $user;
    
    public function __construct(UserEntity $user){
        $this->user = $user;
    }

    public function getUser(): UserEntity{
        return $this->user;
    }

}
