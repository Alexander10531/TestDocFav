<?php

namespace App\Controller;

use App\Utils\UserUtils; 
use App\Repositories\UserRepository;
use App\Exceptions\UserAlreadyExistsException;
use App\Events\RegisteredEvents\UserRegisteredEvent;
use App\Events\Listeners\SendEmailListener; 
use App\Events\Dispatcher\EventDispatcher; 

class UserController{

    private UserUtils $userUtils; 
    private UserRepository $userRepository; 
    private EventDispatcher $eventDispatcher;

    public function __construct(UserRepository $userRepository){
        
        $this->userRepository = $userRepository;  
        $this->userUtils = new UserUtils(); 
        $this->eventDispatcher = new EventDispatcher(); 
        $this->eventDispatcher->addListener(UserRegisteredEvent::class, [new SendEmailListener(), 'handle']);

    }

    function registerUser() : void {

        header('Content-Type: application/json');
        $userRequest = $this->userUtils->convertUser2Class();
        $userExist = $this->userRepository->findByEmail($userRequest->getEmail());  

        if($userExist){
            throw new UserAlreadyExistsException(); 
        }

        $userSave = $this->userRepository->save($userRequest);
        
        $event = new UserRegisteredEvent($userSave);
        $this->eventDispatcher->dispatch($event);

        echo json_encode([
            'id' => $userSave->getIdUser(),
            'username' => $userSave->getUserName(),
            'email' => $userSave->getEmail(), 
            'created_at' => $userSave->getCreatedAt()
        ]);


    }

}