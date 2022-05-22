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

    protected function insertNews($title,$descripcion,$noticia,$firma,$city,$sub,$country,$fpub,$fileToUpload,$userReporter, $Category ){
        $stmt = $this->connect()->prepare('INSERT INTO noticias(titulo,descripcion,texto,Firma,ciudad,suburbio,country,DiaNoticia,Diaeventos,activo,Image,iduser,new_status,categoaux)VALUES(?,?,?,?,?,?,?,sysdate(),?,1,?,?,"Terminada",?);');
        if (!$stmt-> execute(array($title,$descripcion,$noticia,$firma,$city,$sub,$country,$fpub,$fileToUpload , $userReporter,$Category))) {
            $stmt = null;
            header("location: ../Views/AddNews.php?error=stmtfailed");
             exit();
        }
        $stmt = null;
    }

    protected function updateNews($title,$descripcion,$noticia,$firma,$city,$sub,$country,$fpub,$fileToUpload,$userReporter, $Category  ){
        $stmt = $this->connect()->prepare('UPDATE noticias SET titulo=?,descripcion=?,texto=?,Firma=?,ciudad=?,suburbio=?,country=?,Diaeventos=?,activo=?,Image=?,new_status="Terminada",categoaux)VALUES(?,?,?,?,?,?,?,sysdate(),?,1,?,?,"Terminada",?);');
        if (!$stmt-> execute(array($title,$descripcion,$noticia,$firma,$city,$sub,$country,$fpub,$fileToUpload,$userReporter, $Category ))) {
            $stmt = null;
            header("location: ../Views/AddNews.php?error=stmtfailed");
             exit();
        }
        $stmt = null;
    }
}
?>