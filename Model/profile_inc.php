<?php
include "../Controller/profile-contr.classes.php";
        $email = $_POST["email"];
        $user = $_POST["user"];
        $name = $_POST["name"];
    $login = new LoginContr($email,$password);
    $login -> loginUser();
    header("location: ../Views/Login.php?error=none");
?>