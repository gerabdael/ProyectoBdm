<?php
include "../Classes/dbh.classes.php";
class Update extends Dbh{

    // protected function checkUser($email, $user){
    //     $stmt = $this->connect()->prepare('SELECT email FROM usuario WHERE email = ? OR alias = ?;');
    //     if (!$stmt-> execute(array($email,$user))) {
    //         $stmt = null;
    //         header("location: ../Views/Profile.php?error=stmtfailed");
    //         exit();
    //     }
    //     $check;
    //     if($stmt->rowCount()>0)
    //     {
    //         $check=false;
    //     }else{
    //         $check=true;
    //     }
    //     return $check;
    // }
    // protected function chkpswrd($password){
    //     $result;
    //     $regx="/^\S*(?=.[a-z])(?=.[A-Z])(?=.[0-9])(?=.[@$!%?&#!_-])[a-zA-Z0-9@$!%?&#!_-]{8,}$/";
    //     $match = preg_match($regx,$password);
    //     if($match==0){
    //         $result=false;
    //     }else{
    //         $result=true;
    //     }
    //     return $result;
    // }


    protected function update($completeName,$email,$password, $user,$telephone,$userID){
        $stmt = $this->connect()->prepare('UPDATE usuario SET nombreCompleto=?,email=?,contraseña=?,alias=?,telefono=?,lastupdatebydate=sysdate() where ID_user= ?;');
        $hashPwd = password_hash($password,PASSWORD_DEFAULT);
        if (!$stmt-> execute(array($completeName,$email,$hashPwd,$user,$telephone,$userID))) {
            $stmt = null;
            header("location: ../Views/Profile.php?error=updatefailed");
             exit();
        }            
        $user = $this->connect()->prepare('SELECT ID_user,nombreCompleto,alias,FotoUser,telefono FROM usuario where email=?;');
        $user->execute(array($email));
        $userInfo = $user->fetchAll((PDO::FETCH_ASSOC));
        session_start();
        $_SESSION["user_ID"] = $userInfo[0]["ID_user"]; 
        $_SESSION["user_name"] = $userInfo[0]["nombreCompleto"];
        $_SESSION["user_nickname"] = $userInfo[0]["alias"];
        $_SESSION["user_phone"] = $userInfo[0]["telefono"];
        $_SESSION["user_photo"] = $userInfo[0]["FotoUser"];
        $_SESSION["user_email"] = $email;
        $_SESSION["user_password"] = $password;
        $stmt = null;
    }
}
?>