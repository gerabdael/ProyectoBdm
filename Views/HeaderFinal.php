<!DOCTYPE html>
<html lang="en">
    
<?php
  if(!isset($_SESSION)) 
  { 
      session_start(); 
  } 
    
?> 
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

    <link href="../scripts/css/LogRegs.css" rel="stylesheet">
    <link href="../scripts/css/NavBar.css" rel="stylesheet">
    <link href="../scripts/css/FooterStyles.css" rel="stylesheet">
    <link href="../scripts/css/Homepage.css" rel="stylesheet">
    <link href="../scripts/css/NewsFormat.css" rel="stylesheet">


</head>

<body class="bodyextra">


    
<nav class="NewsNavBar">
                
                <div class="optionsNav">
                <li>
                <a href="Index.php">HOME
                </a>
                </li>
                <?php
                        if(isset($_SESSION["user_email"])){
                    ?>
                <li class="nav-item">
                <a href="Profile.php">PERFIL</a>
                </li>
                <li>
                <?php
                        }
                    ?>
                <?php
                 if(isset($_SESSION["user_email"])){
                $compare=$_SESSION["user_type"];
                        if($compare==2){
                    ?>
                          <a href="AddNews.php">ADD NEWS</a>
                    <?php
                        }
                    }
                    
                    ?> 
                </li>
                <li>
                <?php
                 if(isset($_SESSION["user_email"])){
                $compare=$_SESSION["user_type"];
                        if($compare==1){
                    ?>
                         <a href="RegisterReporter.php">AGREGAR REPORTERO</a>
                    <?php
                        }
                    }
                    
                    ?> 
                </li>

                </div>

                <div class="searchNav">
                <input type="text" placeholder="Teclea Aquí">
                <button type="submit" onclick="window.location='../Views/Search.php'">Search</button>

                </div>


                <div class="LoginStatus">
               
                <?php
                        if(isset($_SESSION["user_email"])){
                    ?>
                    
                        
                        <form action="../Classes/endSession.classes.php" method="post">
                            <ul>
                        <?php echo $_SESSION["user_email"];?>
                        </ul>
                        <input class="nav-item" type="submit" name="submit" value="Salir">
                      
                        </form>
                    <?php
                        }
                        else {
                    ?> 
                    <ul>
                        <a href="../Views/Login.php" >SIGN-UP</a>
                        </ul>
                    <?php
                        }
                    ?>  
                
               

                </div>
       
    </nav>
