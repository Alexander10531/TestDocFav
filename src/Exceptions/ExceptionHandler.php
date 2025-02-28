<?php

namespace App\Exceptions;

class ExceptionHandler {

    public static function handleException(\Throwable $exception): void {

        header('Content-Type: application/json');
        $statusCode = $exception instanceof \InvalidArgumentException ? 400 : 500;
        http_response_code($statusCode);
        echo json_encode([
            'error' => true,
            'message' => $exception->getMessage(),
            'code' => $exception->getCode()
        ]);

        exit;
    }
}
