<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../scripts/css/Homepage.css" rel="stylesheet">
    <link href="../scripts/css/LogRegs.css" rel="stylesheet">
    
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
    <title>Register</title>
    </head>      
  


    <body class="bodyextra">

<div class="container"> 
    <div class="BoxContent2">
        <h3 class="PresentationStuff">Registrarse</h3>
        <div class="card-body">
            <form class="form" action="../Model/register_inc.php" method="post"> 
                <i class="fa fa-align-center" aria-hidden="true" name="form"></i>
                 <div class="mb-3 form-group">
                    <label for="InputUser" class="form-label">Usuario</label>
                    <input type="text" class="form-control nameInput" name="user" id="InputUser" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu Usuario" aria-describedby="emailHelp">
                </div>

                <div class="mb-3 form-group">
                    <label for="InputName" class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control nameInput" name="completeName" id="InputName" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu Nombre Completo" aria-describedby="emailHelp">
                </div>
              
                <div class="mb-3 form-group">
                    <label for="InputEmail" class="form-label">Correo Electronico</label>
                    <input type="email" class="form-control emailInput" name="email" id="InputEmail" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu correo" aria-describedby="emailHelp">
                </div>

                <div class="mb-3 form-group">
                    <label for="InputPassword" class="form-label" >Password</label>
                    <input type="password" class="form-control" name="password" id="InputPassword" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu password" >
                </div> 
                <div class="mb-3 form-group">
                    <label for="ConfirmInputPassword" class="form-label" >Confirmar Password</label>
                    <input type="password" class="form-control" name="confirmPassword" id="ConfirmInputPassword" data-bs-toggle="tooltip" data-bs-placement="top" title="Confirma tu password" >
                </div> 
                <div class="mb-3 form-group">
                    <label for="InputTel" class="form-label"> Telefono</label>
                    <input type="text" class="form-control " name="telephone" id="InputTel" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu Telefono" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 form-group">
                    <label for="date">Selecciona tu fecha de nacimiento:</label><div></div>
                    <input type="date" id="start" name="fnac" min="1960-01-01" name="birthdayDate" max="2020-12-31" required autofocus>
                </div>
                <hr>
                 <div class="mb-3 form-group">
                    <label for="userPhoto" class="form-label">Foto de Perfil:</label><br>
                    <input type="file" name="userPhoto" id="userPhoto">
                </div>
                <hr>
        <!--<div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="Check1">
                    <label class="form-check-label" for="Check1">Check me out</label>
                </div> -->
                <a class="btn Custom_btn" href="Index.php"> Regresar
                            <span class="visually-hidden">(current)</span>
                        </a>

                <input type="submit" name="submit" class="btn Custom_btn" id="registerbutton" value="Registrar">

            </form>
        </div>
    </div>
    </div>

<?php include('./footer.php')?>