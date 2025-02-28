<?php

namespace App\Repositories;
namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\Dto\UserDto;
use App\Models\Entity\UserEntity;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use App\Models\ValueObjects\VOEmail; 

class UserRepository extends EntityRepository implements UserRepositoryInterface{  

    private $entityManager; 

    public function __construct(EntityManagerInterface $entityManager){
        
        $this->entityManager = $entityManager; 
        parent::__construct($entityManager, $entityManager->getClassMetadata(UserEntity::class));
    }

    public function save(UserDto $user): UserEntity{
        
        $user = new UserEntity($user->getUserName(),$user->getEmail(), $user->getPassword());
        $this->entityManager->persist($user);
        $this->entityManager->flush(); 
        return $user; 

    }

    function findByEmail(String $email) : ?UserEntity{
    
        $user = $this->createQueryBuilder('u')
        ->andWhere('u.email = :email')
        ->setParameter('email', $email)
        ->getQuery()
        ->getOneOrNullResult();
        return $user; 

    } 


}