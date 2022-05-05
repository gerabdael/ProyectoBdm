<?php
include "../Classes/dbh.classes.php";
class UpdatePhoto extends Dbh{

    protected function updatePhoto($userPhoto,$userID){
        $stmt = $this->connect()->prepare('UPDATE usuario SET FotoUser=? where ID_user= ?;');
        if (!$stmt-> execute(array($userPhoto,$userID))) {
            $stmt = null;
            header("location: ../Views/Profile.php?error=updatefailed");
             exit();
        }            
        $user = $this->connect()->prepare('SELECT * FROM usuario where ID_user=?;');
        if(!$user->execute(array($userID))){
            $stmt = null;
            header("location: ../Views/Profile.php?error=stmntfailed");
            exit();
        }else{
        $userInfo = $user->fetchAll((PDO::FETCH_ASSOC));
        session_start();
        $_SESSION["user_ID"] = $userInfo[0]["ID_user"]; 
        $_SESSION["user_name"] = $userInfo[0]["nombreCompleto"];
        $_SESSION["user_nickname"] = $userInfo[0]["alias"];
        $_SESSION["user_phone"] = $userInfo[0]["telefono"];
        $_SESSION["user_photo"] = $userInfo[0]["FotoUser"];
        $_SESSION["user_email"] = $userInfo[0]["email"];
        $_SESSION["user_password"] = $userInfo[0]["constraseña"];
        $stmt = null;
        $user=null;
        }
    }
}
?>