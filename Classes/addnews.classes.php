<?php
include "../Classes/dbh.classes.php";
class AddNews extends Dbh{

    protected function checkNews($title){
        $stmt = $this->connect()->prepare('SELECT titulo FROM noticias WHERE titulo = ?;');
        if (!$stmt-> execute(array($title))) {
            $stmt = null;
            header("location: ../Views/AddNews.php?error=stmtfailed");
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

    protected function insertNews($title,$descripcion,$noticia,$firma,$city,$sub,$country,$fpub,$Keyword,$fileToUpload,$userReporter, $Category ){
        $stmt = $this->connect()->prepare('INSERT INTO noticias(titulo,descripcion,texto,Firma,ciudad,suburbio,country,DiaNoticia,Diaeventos,activo,KeyWord,Image,iduser,new_status,categoaux)VALUES(?,?,?,?,?,?,?,sysdate(),?,1,?,?,?,"Terminada",?);');
        if (!$stmt-> execute(array($title,$descripcion,$noticia,$firma,$city,$sub,$country,$fpub,$Keyword,$fileToUpload , $userReporter,$Category))) {
            $stmt = null;
            header("location: ../Views/AddNews.php?error=stmtfailed");
             exit();
        }
        $stmt = null;
    }

    protected function updateNews($title,$descripcion,$noticia,$firma,$city,$sub,$country,$fpub,$Keyword,$fileToUpload,$userReporter, $Category  ){
        $stmt = $this->connect()->prepare('UPDATE noticias SET titulo=?,descripcion=?,texto=?,Firma=?,ciudad=?,suburbio=?,country=?,Diaeventos=?,KeyWord=?,Image=?,iduser=?,new_status="Terminada",categoaux=? where ID_Noticia=?;');
        if (!$stmt-> execute(array($title,$descripcion,$noticia,$firma,$city,$sub,$country,$fpub,$Keyword,$fileToUpload,$userReporter, $Category, $_SESSION["ID_NewMod"]))) {
            $stmt = null;
            header("location: ../Views/AddNews.php?error=stmtfailed");
             exit();
        }
        $stmt = null;
    }
}
?>