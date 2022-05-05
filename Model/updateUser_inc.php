<?php
session_start();
include "../Controller/updateUser-contr.classes.php";
    if(isset($_POST["submit"])){
        $user = $_POST["user"];
        $completeName = $_POST["completeName"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        // $confirmPassword = $_POST["confirmPassword"];
        $telephone = $_POST["telephone"];
        // $userPhoto = $_FILES["rPhoto"]["name"];
        $userID=$_SESSION["user_ID"];

        // if(!empty($userPhoto)){
        //     $fileName = basename($_FILES["rPhoto"]["name"]);
        //     $imageType= strtolower(pathinfo($fileName,PATHINFO_EXTENSION));
        //     $allowedTypes = array('png','jpg','gif');

        //     if(in_array($imageType,$allowedTypes)){
        //         $imageName = $_FILES["rPhoto"]["tmp_name"];
        //         $base64Image= base64_encode(file_get_contents($imageName));
        //         $userPhoto = 'data:image/'.$imageType.';base64,'.$base64Image;
        //     }else{
        //         header("location ../Views/Profile.php?error=no_valid_extension");
        //     }

        // }
    }
    $updateUser = new UpdateContr($user,$completeName,$email,$password,$telephone,$userID);
    $updateUser -> updateUser();
    header("location: ../Views/Profile.php?error=none");
?>