<?php    
session_start();
include "../Classes/dbh.classes.php";
class commentChild extends Dbh{
    
        protected function inscommentchild($idComment,$comment,$idUser){
        $comments = $this->connect()->prepare('INSERT INTO comentarios(Comentario,fecha_creacion, lastupdate,lastupdate_by,active) values(?,sysdate(),sysdate(),?,1);');
        if($comments->execute(array($comment,$idUser))){
            header("location: ../Views/Aprovedews.php?error=stmtfailed");
        }

        $commentsearch = $this->connect()->prepare('SELECT ID_COMENTARIO from comentarios  where ID_COMENTARIO>0 order by ID_COMENTARIO desc;');
        $commentsearch->execute(array());
        $idcomm= $commentsearch->fetchAll((PDO::FETCH_ASSOC));

        $commentnews = $this->connect()->prepare('INSERT INTO comentarios_noticia(ID_COMENTARIO,ID_NOTICIA, fecha_creacion,lastupdate,lastupdate_by,active,PARENT_ID)values(?,?,sysdate(),sysdate(),?,1,?);');
       if(! $commentnews->execute(array($idcomm[0]["ID_COMENTARIO"],$_SESSION["ID_Noticia"],$idUser,$idComment))){
        header("location: ../Views/Aprovedews.php?error=stmtfailed");
       }
        
    }

        protected function inscomment($comments,$idUser){
            $comment = $this->connect()->prepare('INSERT INTO COMENTARIOS(Comentario,fecha_creacion,lastupdate,lastupdate_by,active)Values(?,sysdate(),sysdate(),?,1);');
            if(!$comment->execute(array($comments,$idUser))){
                header("location: ../Views/Aprovedews.php?error=stmtfailed");
            }
            
            $commentsearch = $this->connect()->prepare('SELECT ID_COMENTARIO from comentarios where ID_COMENTARIO>0 order by ID_COMENTARIO desc;');
            $commentsearch->execute(array());
            $idcomm= $commentsearch->fetchAll((PDO::FETCH_ASSOC));
    
            $commentnews = $this->connect()->prepare('INSERT INTO comentarios_noticia (ID_COMENTARIO,ID_NOTICIA, fecha_creacion,lastupdate,lastupdate_by,active,PARENT_ID) values(?,?,sysdate(),sysdate(),?,1,null);');
           if( !$commentnews->execute(array($idcomm[0]["ID_COMENTARIO"],$_SESSION["ID_Noticia"],$idUser))){
                header("location: ../Views/Aprovedews.php?error=stmtfailedParent");
           }
            }
    }
?>