<?php

namespace App\Events\Listeners;

use App\Events\RegisteredEvents\UserRegisteredEvent;

class SendEmailListener{
    
    public function handle(UserRegisteredEvent $event): void{
        
        $user = $event->getUser();
        $email = $user->getEmail();
        error_log("[INFO] Se ha enviado el correo a " . $email);
    }
}
