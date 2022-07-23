<?php

// making connection

// returns the connection
class connection{
    public static function GetMysqlConnection(){
        $conn = new mysqli("localhost","root","","mycontacts");
        if ($conn->connect_error)
            echo $conn->error;
        else
            return $conn;
    }
}
?>