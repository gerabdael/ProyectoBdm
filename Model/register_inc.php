<?php
include "../Controller/register-contr.classes.php";
    if(isset($_POST["submit"])){
        $user = $_POST["user"];
        $completeName = $_POST["completeName"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];
        $telephone = $_POST["telephone"];
        $birthdayDate = $_POST["birthdayDate"];
    }
    $register = new RegisterContr($user,$completeName,$email,$password,$confirmPassword,$telephone);
    $register -> registerUser();
    header("location: ../Views/Register.php?error=none");
?>
