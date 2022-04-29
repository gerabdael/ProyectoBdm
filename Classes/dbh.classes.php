<?php
class Dbh{
    protected function connect(){
        try {
            $server="localhost";
            $username="root";
            $password="root";
            $database="noticiero_web";

            $conn= new PDO("mysql:host=$server;dbname=$database;",$username,$password);
            return $conn;
        } catch (PDOException $error) {
            //throw $th;
            die("Connection Failed" . $error->getMessage());
        }
    }
}  
?>