<?php

namespace Tests\Models\ValueObjects;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use App\Models\ValueObjects\VOEmail;
use App\Exceptions\InvalidEmailException; 

class VOEmailTest extends TestCase{

    public function testValidEmailCreation(){

        $email = new VOEmail("AlexanderTejeda@example.com");
        $this->assertEquals("AlexanderTejeda@example.com", $email->getEmail());
    
    }

    public function testInvalidEmailCreation(){

        $this->expectException(InvalidEmailException::class);
        $this->expectExceptionMessage("El email proporcionado no es válido");
        new VOEmail("AlexanderTejeda@examplecom");
    
    }

    public function secondTestInvalidEmailCreation(){

        $this->expectException(InvalidEmailException::class);
        $this->expectExceptionMessage("El email proporcionado no es válido");
        new VOEmail("AlexanderTejedaexamplecom");
    
    }


}