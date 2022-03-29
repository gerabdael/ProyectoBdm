<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../scripts/css/Homepage.css" rel="stylesheet">
    <link href="../scripts/css/LogRegs.css" rel="stylesheet">
    
    <!-- <link rel="Stylesheet" href="/scripts/css/bootstrap.css"/> -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-primary" style="font-size: 2rem;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="Index.php">NEWS NEWS</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                        <a class="nav-link active" href="Index.php">Home
                            <span class="visually-hidden">(current)</span>
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" href="Profile.php">Perfil</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" href="AddNews.php">Agregar Noticia</a>
                        </li>

                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <a href="../Views/Login.php" type="button" class="btn btn-success btn-lg" style="margin-left: 1rem;" >Sign Up</a>
                    </div>
                </div>
            </nav>
        </header>
    <title>Login</title>
    </head>      
    <body class="bodyextra">

        
            

            <div class="BoxContent">
                <form class="form" action="../Model/login_inc.php" method="post"> <i class="fa fa-align-center" aria-hidden="true" id="loginForm"></i>
                    <?php
                        if(isset($_SESSION["user_email"])){
                    ?>
                        <h3 class="card-header"><?php echo $_SESSION["user-email"]?></h3> 
                    <?php
                        }
                        else {
                    ?> 
                        <h3 class="PresentationStuff">LOGIN </h3>
                    <?php
                        }
                    ?>  
                    <div class="mb-3 form-group">
                        <label for="InputEmail" class="Label_Setup">Correo Electronico</label>
                        <input type="email" name="email" class="form-control emailInput" id="email" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu correo registrado" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="InputPassword" class="Label_Setup" >Password</label>
                        <input type="password" name="password" class="form-control" id="password" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu password registrado" >
                    </div>
                    <button type="submit" name="submit" id="submit" class="btn Custom_btn">Login</button>
                    <a href="./Register.php" class="btn Custom_btn">Registrarse</a>
                </form>
            </div>
      
<?php include('./footer.php')?>
