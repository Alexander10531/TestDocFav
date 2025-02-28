<?php

namespace Tests;

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    private $client;

    protected function setUp(): void{
        $this->client = new Client(['base_uri' => 'http://localhost:8080']);
    }

    public function testGetUsers(){


        $response = $this->client->request('POST', '/users', [
            'headers' => ['Content-Type' => 'application/json'],
            'json' => [
                'name' => 'Alexander Tejeda',
                'email' => 'AlexanderTejedaBarahona@gmail2.com',
                'password' => 'Contrasenia_valida123'
            ]
        ]);

        $this->assertEquals(200, $response->getStatusCode());
    
    }
}
