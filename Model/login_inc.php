<?php
include "../Controller/login-contr.classes.php";
    if(isset($_POST["submit"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
    }
    $login = new LoginContr($email,$password);
    $login -> loginUser();
    header("location: ../Views/Login.php?error=none");
?>
