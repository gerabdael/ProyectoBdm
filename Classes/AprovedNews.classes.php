<?php    
include "../Classes/dbh.classes.php";
class Aprovednews extends Dbh{
    protected function aprove($email,$password){
        $stmt = $this->connect()->prepare('SELECT contraseña FROM usuario where email=?;');
        if (!$stmt-> execute(array($email))) {

    }
}

    protected function denied($idhiddendesc,$idhiddentitle,$idhiddenid){
                $stmt = $this->connect()->prepare('INSERT INTO comment-editor-reportero(nombreCompleto,email,contraseña,FotoUser,alias,diaregistro,telefono,activo,tipoU,StatusU,creadopor) VALUES(?,?,?,?,?,sysdate(),?,true,2,"A",117);');
                if (!$stmt-> execute(array($completeName,$email,$hashPwd,$userPhoto,$user,$telephone))) {
                    $stmt = null;
                    header("location: ../Views/RegisterReporter.php?error=stmtfailed");
                     exit();
                }
                $stmt = null;
        }
    }
?>