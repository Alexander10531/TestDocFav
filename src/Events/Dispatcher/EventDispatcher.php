<?php

namespace App\Events\Dispatcher;

class EventDispatcher{
    
    private array $listeners = [];

    public function addListener(string $eventClass, callable $listener): void{
        $this->listeners[$eventClass][] = $listener;
    }

    public function dispatch(object $event): void
    {
        $eventClass = get_class($event);
        if (!empty($this->listeners[$eventClass])) {
            foreach ($this->listeners[$eventClass] as $listener) {
                $listener($event);
            }
        }
    }
}
