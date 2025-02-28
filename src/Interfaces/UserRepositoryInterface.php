<?php

namespace App\Interfaces;

use App\Models\Dto\UserDto;
use App\Models\Entity\UserEntity;
use App\Models\ValueObjects\VOEmail; 

interface UserRepositoryInterface{
    
    function save(UserDto $user): UserEntity;
    function findByEmail(String $email) : ?UserEntity; 

}