<?php
include "../Classes/dbh.classes.php";
class news extends Dbh{
        protected function newsfill($idnews){
        $news = $this->connect()->prepare('SELECT * FROM view_categoriacolor WHERE ID_Noticia=?;');
        $news->execute(array($idnews));
        $newsCaracteristicas = $news->fetchAll((PDO::FETCH_ASSOC));
        session_start();
        $_SESSION["titulo"] = $newsCaracteristicas[0]["ID_Noticia"]; 
        $_SESSION["titulo"]= $newsCaracteristicas[0]["titulo"]; 
        $_SESSION["descripcion"]= $newsCaracteristicas[0]["descripcion"]; 
        $_SESSION["country"]= $newsCaracteristicas[0]["country"]; 
        $_SESSION ["suburbio"]= $newsCaracteristicas[0]["suburbio"]; 
        $_SESSION["ciudad"]= $newsCaracteristicas[0]["ciudad"]; 
        $_SESSION["Image"]= $newsCaracteristicas[0]["Image"]; 
        $_SESSION["Diaeventos"]= $newsCaracteristicas[0]["Diaeventos"]; 
        $_SESSION["Firma"]= $newsCaracteristicas[0]["Firma"]; 
        $_SESSION["likes"]= $newsCaracteristicas[0]["likes"]; 
        $_SESSION["texto"]= $newsCaracteristicas[0]["texto"];
        $_SESSION["Color"]= $newsCaracteristicas[0]["Color"]; 
        }
        
    }
    ?>