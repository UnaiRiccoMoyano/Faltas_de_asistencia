<?php

namespace Connections;

class Connect
{
    public $con;
    private $hostName = "localhost";
    private $userName = "ninjaCoders";
    private $password = "qwerty123";
    private $database = "asistanceDB";


    function connectDDBB()
    {
        $con = mysqli_connect($this->hostName, $this->userName, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        return $con;
    }
    function estoyConectado(){
        $connectado = $this->connectDDBB();
        
        if ($connectado) {
            return "Estoy conectado";
        }
    }
}
$t = new Connect();
$t->estoyConectado();
