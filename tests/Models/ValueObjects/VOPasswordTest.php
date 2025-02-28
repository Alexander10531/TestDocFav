<?php

namespace Tests\Models\ValueObjects;

use PHPUnit\Framework\TestCase;
use App\Models\ValueObjects\VOPassword;
use App\Exceptions\WeakPasswordException;


class VOPasswordTest extends TestCase{

    public function testValidEmailCreation(){

        $email = new VOPassword("Contrasenia_valida123");
        $this->assertEquals("Contrasenia_valida123", $email->getPassword());
    
    }        

    public function testInvalidPasswordCreation(){

        $this->expectException(WeakPasswordException::class);
        $this->expectExceptionMessage("La contraseña no cumple con los requisitos");
        new VOPassword("contrasenia_novalida123");
    
    }

}