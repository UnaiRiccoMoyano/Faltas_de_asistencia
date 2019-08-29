<?php

namespace NewRegistration;

use Connection\Connect;

class RegisterNewUser extends Connect
{

    function NewRegister($sql_query)
    {

        $connected = $this->connectDDBB();
        

        if (isset($sql_query)) {
            $result = $connected->query($sql_query);
            if($result){
                header("Location: ../view/Login/login.php");
                exit;
            }
        }
    }


    function testNewUserRegistration($query){
        $this->NewRegister($query);
    }
}
