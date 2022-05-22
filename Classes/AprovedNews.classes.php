<?php 
include "../Classes/dbh.classes.php";
class Aprovednews extends Dbh{

    protected function aprove($idhiddenid,$idhiddendesc,$idhiddentitle,$commentarioAdmin){
        $user =$this->connect()->prepare('SELECT iduser FROM NOTICIAS WHERE ID_NOTICIA = ?');
        $user->execute(array($idhiddenid));
        $userselected = $user->fetchAll((PDO::FETCH_ASSOC));
        $stmt = $this->connect()->prepare('INSERT INTO COMENTAPROVED(ComentarioSet,ID_NoticiaFind,ID_ReporteroAux) VALUES(?,?,?);');
        if (!$stmt-> execute(array($commentarioAdmin,$idhiddenid, $userselected[0]['iduser']))){
            header("location: ../Views/Aprovedews.php?error=stmtfailed");
        }else{
            $approve = $this->connect()->prepare('UPDATE NOTICIAS SET new_status= "Publicada" WHERE ID_Noticia=?');
            $approve-> execute(array($idhiddenid));
            header("location: ../Views/AproveNews.php?error=none");
        }
        $stmt = null;
    }

    protected function denie($idhiddenid,$idhiddendesc,$idhiddentitle,$commentarioAdmin){
        $user =$this->connect()->prepare('SELECT iduser FROM NOTICIAS WHERE ID_NOTICIA = ?');
        $user->execute(array($idhiddenid));
        $userselected = $user->fetchAll((PDO::FETCH_ASSOC));
        $stmt = $this->connect()->prepare('INSERT INTO COMENTAPROVED(ComentarioSet,ID_NoticiaFind,ID_ReporteroAux) VALUES(?,?,?);');
        if (!$stmt-> execute(array($commentarioAdmin,$idhiddenid, $userselected[0]['iduser']))){
            header("location: ../Views/AproveNews.php?error=stmtfailed");
        }else{
            $approve = $this->connect()->prepare('UPDATE NOTICIAS SET new_status= "En redaccion" WHERE ID_Noticia=?');
            $approve-> execute(array($idhiddenid));
            header("location: ../Views/AproveNews.php?error=none");
        }
        $stmt = null;
    }
    protected function modifie($idhiddenid,$idhiddendesc,$idhiddentitle,$commentarioAdmin){
        $user =$this->connect()->prepare('SELECT ID_Noticia,titulo,descripcion,texto,country,suburbio,ciudad,Image,Diaeventos,Firma FROM NOTICIAS WHERE ID_NOTICIA = ?');
        if($user->execute(array($idhiddenid))){
        $newsCaracteristicas = $user->fetchAll((PDO::FETCH_ASSOC));
        session_start();
        $_SESSION["ID_NewMod"] = $newsCaracteristicas[0]["ID_Noticia"]; 
        $_SESSION["tituloMod"]= $newsCaracteristicas[0]["titulo"]; 
        $_SESSION["descripcionMod"]= $newsCaracteristicas[0]["descripcion"]; 
        $_SESSION["countryMod"]= $newsCaracteristicas[0]["country"]; 
        $_SESSION ["suburbioMod"]= $newsCaracteristicas[0]["suburbio"]; 
        $_SESSION["ciudadMod"]= $newsCaracteristicas[0]["ciudad"]; 
        $_SESSION["ImageMod"]= $newsCaracteristicas[0]["Image"]; 
        $_SESSION["DiaeventosMod"]= $newsCaracteristicas[0]["Diaeventos"]; 
        $_SESSION["FirmaMod"]= $newsCaracteristicas[0]["Firma"]; 
        $_SESSION["textoMod"]= $newsCaracteristicas[0]["texto"]; 
        header("location: ../Views/UpdateNews.php?error=none"); 
     }
        // $stmt = $this->connect()->prepare('INSERT INTO COMENTAPROVED(ComentarioSet,ID_NoticiaFind,ID_ReporteroAux) VALUES(?,?,?);');
        // if (!$stmt-> execute(array($commentarioAdmin,$idhiddenid, $userselected[0]['iduser']))){
        //     header("location: ../Views/AproveNews.php?error=stmtfailed");
        // }else{
        //     $approve = $this->connect()->prepare('UPDATE NOTICIAS SET new_status= "En redaccion" WHERE ID_Noticia=?');
        //     $approve-> execute(array($idhiddenid));
        //     header("location: ../Views/AproveNews.php?error=none");
        // }
        // $stmt = null;
    }
    protected function delete($idhiddenid,$idhiddendesc,$idhiddentitle,$commentarioAdmin){
        $stmt = $this->connect()->prepare('UPDATE NOTICIAS SET activo= 0 WHERE ID_Noticia=?');
        if (! $stmt-> execute(array($idhiddenid))){
            header("location: ../Views/AproveNews.php?error=stmtfailed");
        }else{
            header("location: ../Views/AproveNews.php?error=none");
        }
        $stmt = null;
    }
}
?>