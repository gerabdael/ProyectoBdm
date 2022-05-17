<?php
include "../Controller/news-contr.classes.php";
   
        $idnews= $_POST["idnoticia"];

        $news= new newContr($idnews);
        $news->newsfills();

?>