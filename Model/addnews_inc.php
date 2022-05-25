<?php
include "../Controller/addnews-contr.classes.php";
session_start();
    if(isset($_POST["submit"])){
        $title = $_POST["title"];
       
        $descripcion = $_POST["descripcion"];
        $noticia = $_POST["noticia"];
        $firma = $_POST["firma"];
        $city = $_POST["city"];
        $sub = $_POST["sub"]; 
        $Keyword= $_POST["keyword"];
        $country = $_POST["country"];
        $fpub= $_POST["fpub"];
       
        $fileToUpload = $_FILES["fileToUpload"]["name"];
        $userReporter=  $_SESSION["user_ID"]; 
        $Category = $_POST["category"];

        if(!empty($fileToUpload)){
            $fileName = basename($_FILES["fileToUpload"]["name"]);
            $imageType= strtolower(pathinfo($fileName,PATHINFO_EXTENSION));
            $allowedTypes = array('png','jpg','gif');

            if(in_array($imageType,$allowedTypes)){
                $imageName = $_FILES["fileToUpload"]["tmp_name"];
                $base64Image= base64_encode(file_get_contents($imageName));
                $fileToUpload = 'data:image/'.$imageType.';base64,'.$base64Image;
            }else{
                header("location ../Views/AddNews.php?error=no_valid_extension");
            }

        } 
    $addnews = new AddNewsContr($title,$descripcion,$noticia,$firma,$city,$sub,$country, $fpub,$Keyword,$fileToUpload,$userReporter, $Category );
    $addnews -> addNews();
    header("location: ../Views/AddNews.php?error=none");
    }

    if(isset($_POST["submit_update"])){
        $title = $_POST["title"];
        $descripcion = $_POST["descripcion"];
        $noticia = $_POST["noticia"];
        $firma = $_POST["firma"];
        $city = $_POST["city"];
        $sub = $_POST["sub"];
        $Keyword= $_POST["keyword"];
        $country = $_POST["country"];
        $fpub= $_POST["fpub"];
        $fileToUpload = $_FILES["fileToUpload"]["name"];
        $userReporter=  $_SESSION["user_ID"]; 
        $Category = $_POST["category"];

        if(!empty($fileToUpload)){
            $fileName = basename($_FILES["fileToUpload"]["name"]);
            $imageType= strtolower(pathinfo($fileName,PATHINFO_EXTENSION));
            $allowedTypes = array('png','jpg','gif');

            if(in_array($imageType,$allowedTypes)){
                $imageName = $_FILES["fileToUpload"]["tmp_name"];
                $base64Image= base64_encode(file_get_contents($imageName));
                $fileToUpload = 'data:image/'.$imageType.';base64,'.$base64Image;
            }else{
                header("location ../Views/AddNews.php?error=no_valid_extension");
            }

        } 
    $addnews = new AddNewsContr($title,$descripcion,$noticia,$firma,$city,$sub,$country, $fpub,$Keyword,$fileToUpload,$userReporter, $Category );
    $addnews -> updatedNews();
    header("location: ../Views/AddNews.php?error=none");
    }
   
?>