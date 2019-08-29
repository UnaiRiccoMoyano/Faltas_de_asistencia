<?php

include "../../vendor/autoload.php";

use Connection\Connect;
use NewLogin\LoginNewUser;



class Login_user extends LoginNewUser {

    private $dni;
    private $password;


    function newLog(){
        $dni = $_POST["dni"];
        $password = $_POST["password"];
    
        $query = "SELECT * FROM user WHERE user_dni='$dni' AND user_password='$password'";
        $resultado = $this->NewLogin($query);
        foreach ($resultado as $user) {
            echo $user["user_name"];
        }   
    
    }


}

if(isset($_POST["dni"]) && isset($_POST["password"])){
    $newUser = new Login_user();
    $newUser->newLog(); 
}