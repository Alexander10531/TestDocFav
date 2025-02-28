<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class LogService
{
    private static ?Logger $logger = null;

    public static function getLogger(): Logger
    {
        if (self::$logger === null) {
            self::$logger = new Logger('app'); 
            $logFile = __DIR__ . '/../../logs/app.log';

            $streamHandler = new StreamHandler($logFile, Logger::DEBUG);
            self::$logger->pushHandler($streamHandler);
        }
        return self::$logger;
    }
}
