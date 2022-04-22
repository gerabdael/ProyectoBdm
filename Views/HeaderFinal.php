<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
?> 
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link href="../scripts/css/LogRegs.css" rel="stylesheet">
    <link href="../scripts/css/NavBar.css" rel="stylesheet">
    <link href="../scripts/css/FooterStyles.css" rel="stylesheet">
    <link href="../scripts/css/Homepage.css" rel="stylesheet">

</head>


<nav class="NewsNavBar">
                
                <li>
                <a href="Index.php">HOME
                </a>
                </li>
                <li class="nav-item">
                <a href="Profile.php">PERFIL</a>
                </li>
                <li>
                <a href="AddNews.php">ADD NEWS</a>
                </li>

                <input type="text" placeholder="Search">
                <button type="submit">Search</button>

                <ul class=newslogin>
                <?php
                        if(isset($_SESSION["user_email"])){
                    ?>
                        <?php echo $_SESSION["user_email"];?>
                        <button type="button">Exit</button>
                    <?php
                        }
                        else {
                    ?> 
                        <a href="../Views/Login.php" >SIGN-UP</a>
                    <?php
                        }
                    ?>  
                
                </ul>
                
            
       
    </nav>

    <body class="bodyextra">
