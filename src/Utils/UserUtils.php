<?php

namespace App\Utils; 

use App\Models\Entity\UserEntity;
use App\Models\Dto\UserDto; 

class UserUtils{

    public function convertUser2Class() : UserDto{
        
        $data = json_decode(file_get_contents("php://input"), true);
        return new UserDto($data['user_name'], $data['email'], $data['password']); 
        
    }

}