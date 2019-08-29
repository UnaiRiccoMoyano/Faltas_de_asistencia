<?php

use PHPUnit\Framework\TestCase;
use NewRegistration\RegisterNewUser;

class TestToSendDataFromForm extends TestCase
{
    public function testIfDattaArrivesToDDBB()
    {
        $newUserRegistration = new RegisterNewUser();
        $query = "INSERT INTO user(user_name, user_surname, user_dni, user_mail , user_password) VALUES ('Test', 'User','123','test@test.com', 'test123')";
        
        $result = $newUserRegistration->testNewUserRegistration($query);
    }


}