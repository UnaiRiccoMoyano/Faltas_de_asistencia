<?php

use PHPUnit\Framework\TestCase;
use Connection\Connect;

class CheckDDBBConnection extends TestCase
{
    public function testEstoyConectado()
    {
        $connect = new Connect();        
        $mensajeEsperado = "Estoy conectado";
        $connected = $connect->estoyConectado();
        $this->assertEquals($mensajeEsperado, $connected);
    }


}