<?php

namespace NewLogin;

use Connection\Connect;

class LoginNewUser extends Connect
{

    function NewLogin($sql_query)
    {
        $connected = $this->connectDDBB();
        if (isset($sql_query)) {
            $result = $connected->query($sql_query);
            return $result;
        }
    }
}
