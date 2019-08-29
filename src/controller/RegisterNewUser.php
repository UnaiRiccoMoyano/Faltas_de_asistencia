<?php

namespace NewRegistration;

class RegisterNewUser {
    
    function NewRegister($sql_query){

        $personasMuertas = [];
        $connect = new Connect();
        $connected = $connect->connectDDBB();//extender de conexion

        if (isset($sql_query)) {
            $result = $connected->query($sql_query);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $this->user_id = $row['user_id'];
                    $this->name = $row['name'];
                    $this->status = $row['status'];
                    array_push($personasMuertas, array("user_id" => $this->user_id, "name" => $this->name, "status" => $this->status));
                }

                return $personasMuertas;
            }
        }
    }

}