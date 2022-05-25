<?php
session_start();
include "../Controller/likes-contr.classes.php";
        if(isset($_POST["submit_likes"])){
        $idnews= $_SESSION["ID_Noticia"];
        $news= new likeContr($idnews);
        $news->likesfills();
        }
        if(isset($_POST["submit_dislikes"])){
            $idnews= $_SESSION["ID_Noticia"];
            $news= new likeContr($idnews);
            $news->dislikesfills();
            }

?>