<?php



include "../../vendor/autoload.php";

use NewRegistration\RegisterNewUser;



class Register_user extends RegisterNewUser {

    private $name;
    private $surname;
    private $dni;
    private $email;
    private $password;


    function sendRegisterUser(){
        $name = $_POST["name"];
        $surname = $_POST["surname"];
         $dni = $_POST["dni"];
        $email = $_POST["email"];
        $password = $_POST["password"];
    
        $query = "INSERT INTO user(user_name, user_surname, user_dni, user_mail , user_password) VALUES ('$name', '$surname','$dni','$email', '$password')";
        $newConnect = $this->NewRegister($query);

    
    }

    

}


if(isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["dni"]) && isset($_POST["email"]) && isset($_POST["password"])){
    $newUser = new Register_user();
    $newUser->sendRegisterUser(); 
}