<?php
include "../Controller/news-contr.classes.php";
    header("location: ../Views/News.php");
        $idnews= $_POST["idnoticia"];

        $news= new newContr($idnews);
        $news->newsfills();

?>