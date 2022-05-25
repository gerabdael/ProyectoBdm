<?php    
include "../Classes/dbh.classes.php";
class Login extends Dbh{
    protected function sign_in($email,$password){
        $stmt = $this->connect()->prepare('SELECT contraseña FROM usuario where email=?;');
        if (!$stmt-> execute(array($email))) {
            $stmt = null;
            header("location: ../Views/Login.php?error=stmtfailed");
            exit();
        }
        $check;
        if($stmt->rowCount()==0){
            $stmt = null;
            header("location: ../Views/Login.php?error=userNotFound");
            exit();
        }
        $pswHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($password,$pswHashed[0]["contraseña"]);
        if($checkPwd == false){
            $stmt = null;
            echo "<script type='text/javascript'>
            alert('Faltan Campos');
            window.open('../Views/Login.php?','_self');
            </script>";

           

            exit();    
        }else if($checkPwd==true){
            $user = $this->connect()->prepare('SELECT * from View_OnlyUserInfo where email=?;');
            $user->execute(array($email));
            $userInfo = $user->fetchAll((PDO::FETCH_ASSOC));
            session_start();
            $_SESSION["user_ID"] = $userInfo[0]["ID_user"]; 
            $_SESSION["user_name"] = $userInfo[0]["nombreCompleto"];
            $_SESSION["user_nickname"] = $userInfo[0]["alias"];
            $_SESSION["user_phone"] = $userInfo[0]["telefono"];
            $_SESSION["user_photo"] = $userInfo[0]["FotoUser"];
            $_SESSION["user_type"]=$userInfo[0]["tipoU"];
            $_SESSION["user_status"]=$userInfo[0]["StatusU"];
            $_SESSION["user_email"] = $email;
            $_SESSION["user_password"] = $password;
        }
        $stmt = null;
        }

}
?>