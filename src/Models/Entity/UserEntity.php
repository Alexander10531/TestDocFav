<?php

namespace App\Models\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "user")]
class UserEntity{

    public function __construct(
        String $name_user, 
        String $email, 
        String $password){
            
            $this->name_user = $name_user; 
            $this->email = $email; 
            $this->password = $password; 
            $this->created_At = new DateTime();

    }


    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id_user;

    #[ORM\Column(type: "string", length: 100)]
    private String $name_user;

    #[ORM\Column(type: "string", length: 100)]
    private $email;

    #[ORM\Column(type: "string", length: 100)]
    private $password;

    #[ORM\Column(type: "date", length: 100)]
    private $created_At;

    public function getIdUser() : int{
        return $this->id_user; 
    }

    public function getUserName() : String{
        return $this->name_user; 
    }
    
    public function getEmail() : String{ 
        return $this->email; 
    }

    public function getCreatedAt(){
        return $this->created_At; 
    }

}