<?php

namespace Tests\Models\Entity;

use App\Models\Entity\UserEntity; 
use PHPUnit\Framework\TestCase;

class UserEntityTest extends TestCase{
    
    private $usuario;

    public function testUserEntity(){
        
        $user = new UserEntity("John Doe", "john.doe@example.com", "secretPassword_123");

        $this->assertEquals("John Doe", $user->getUserName());
        $this->assertEquals("john.doe@example.com", $user->getEmail());


    }
    
}