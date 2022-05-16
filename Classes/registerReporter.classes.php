<?php
include "../Classes/dbh.classes.php";
class Register extends Dbh{

    protected function checkUser($email, $user){
        $stmt = $this->connect()->prepare('SELECT email FROM usuario WHERE email = ? OR alias = ?;');
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


    protected function register($completeName,$email,$password,$userPhoto, $user,$telephone){
        $stmt = $this->connect()->prepare('INSERT INTO USUARIO(nombreCompleto,email,contraseña,FotoUser,alias,diaregistro,telefono,activo,tipoU,StatusU,creadopor) VALUES(?,?,?,?,?,sysdate(),?,true,2,"A",117);');
        $hashPwd = password_hash($password,PASSWORD_DEFAULT);
        if (!$stmt-> execute(array($completeName,$email,$hashPwd,$userPhoto,$user,$telephone))) {
            $stmt = null;
            header("location: ../Views/RegisterReporter.php?error=stmtfailed");
             exit();
        }
        $stmt = null;
    }
}
?>