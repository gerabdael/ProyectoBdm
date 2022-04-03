<?php    
include "../Controller/dbh.classes.php";
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
            header("location: ../Views/Login.php?error=incorrectPassword");

          

            exit();    
        }else if($checkPwd==true){
            session_start();
            $_SESSION["user_email"]= $email;
        }
        $stmt = null;
        }

}
?>