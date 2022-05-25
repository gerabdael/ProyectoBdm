<?php

include "../Classes/dbh.classes.php";
class like extends Dbh{
        protected function like($idnews){
        $idUser= $_SESSION["user_ID"];
            $like = $this->connect()->prepare('call sp_LikesCosas("a",?,?);');
            $like->execute(array($idUser,$idnews));
          
           if($like->execute(array($idUser,$idnews))) {
            header("location: ../Views/News.php=errorstmn"); 
           }

        $likesINFO = $this->connect()->prepare('SELECT ID_LIKES FROM likes WHERE ID_Noticia=? and ID_USER=? and ACTIVE=1;');
        $likesINFO->execute(array($idnews,$idUser));
        $likescount = $likesINFO-> rowCount();
        $_SESSION["likes"]= $likescount;  
        header("location: ../Views/News.php");  
        $_SESSION["likes"]=$likescount;
        }

        protected function dislike($idnews){
            $idUser= $_SESSION["user_ID"];
                $like = $this->connect()->prepare('call sp_LikesCosas("b",?,?);');
                $like->execute(array($idUser,$idnews));
              
               if($like->execute(array($idUser,$idnews))) {
                header("location: ../Views/News.php=errorstmn"); 
               }
    
            $likesINFO = $this->connect()->prepare('SELECT ID_LIKES FROM likes WHERE ID_Noticia=? and ID_USER=? and ACTIVE=1;');
            $likesINFO->execute(array($idnews,$idUser));
            $likescount = $likesINFO-> rowCount();
            $_SESSION["likes"]= $likescount;  
            header("location: ../Views/News.php");  
            $_SESSION["likes"]=$likescount;
            }
       
    }
?>