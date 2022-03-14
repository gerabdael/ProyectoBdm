<?php
include "../Controller/dbh.classes.php";
class Register extends Dbh{

    protected function checkUser($email, $user){
        $stmt = $this->connect()->prepare('SELECT EMAIL FROM USUARIO WHERE email = ? OR alias = ?;');
        if (!$stmt-> execute(array($email,$user))) {
            $stmt = null;
            header("location: ../Views/Register.php?error=stmtfailed");
            exit();
        }
        $check;
        if($stmt->rowCount()>0)
        {
            $check=false;
        }else{
            $check=true;
        }
        return $check;
    }

    protected function register($completeName,$email,$password, $user,$telephone){
        $stmt = $this->connect()->prepare('INSERT INTO USUARIO(nombreCompleto,email,contraseña,alias,diaregistro,telefono,activo,tipoU,StatusU,creadopor) values(?,?,?,?,sysdate(),?,1,2,A,117)');
        $hashPwd = password_hash($password,PASSWORD_DEFAULT);
        if (!$stmt-> execute(array($completeName,$email,$hashPwd,$user,$telephone))) {
            $stmt = null;
            header("location: ../Views/Register.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }
}
?>