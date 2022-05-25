<?php
include "../Controller/commentchild-contr.classes.php";
    if(isset($_POST["commentchild"])){
        $idcomment = $_POST["idcomment"];
        $comment = $_POST["comment-text"];   
        $idUser = $_SESSION["user_ID"];
        $commentChild = new commentChildContr($idcomment,$comment,$idUser);
        $commentChild -> insertcommchild();
        header("location: ../Views/News.php?error=none");
    }

    if(isset($_POST["comment"])){
        $idcomment = $_POST["idcomment"];
        if($idcomment==null){
            $idcomment=0;
        }
        $comment = $_POST["comment-text"]; 
        $idUser = $_SESSION["user_ID"];  
        $commentChild = new commentChildContr($idcomment,$comment,$idUser);
        $commentChild -> insertcomm();
        header("location: ../Views/News.php?error=none");
    }

?>
 