<?php
    include "../Classes/dbh.classes.php";
    class Profile extends Dbh{
        protected function profileUser($email, $user,$name){
            $stmt = $this->connect()->prepare('SELECT (email,usuario,nombreCompleto) FROM usuario WHERE email = ? OR alias = ?;');
            $check;
            if($stmt->rowCount()>0)
            {
                $check=false;
            }else{
                session_start();
                $_SESSION["user_email"] = $email;
                $_SESSION["name"] = $name;
                $_SESSION["user"] = $user   ;
                $check=true;
            }
            return $check;
        }
    }
?>