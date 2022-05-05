<?php
    if(isset($_POST["submit"])){
        session_start();
        session_destroy();
        header("location: ../Views/Login.php?error=none");
        exit();
    }
?>