<!DOCTYPE html>
<html lang="en">
   
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link href="../scripts/css/LogRegs.css" rel="stylesheet">
    <link href="../scripts/css/NavBar.css" rel="stylesheet">

</head>

    <body class="bodyextra">
        
    
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
                <a href="../Views/Login.php" >SIGN-UP</a>
                </ul>
                
            
       
    </nav>

    <div style="width: 50rem; margin-left:23rem; margin-top:1px; padding:3rem;">
    <div class="BoxContent2">
        
        <h3 class="PresentationStuff">Registrarse</h3>
      
            <form action="../Model/register_inc.php" method="post"> 
                <i class="fa fa-align-center" aria-hidden="true" name="form"></i>
                 <div>
                    <label for="InputUser" class="form-label">Usuario</label>
                    <ul>
                    <input type="text" name="user" id="InputUser" class="form-control nameInput" placeholder="Ingresa tu usuario">
                    </ul>
                </div>

                <div>
                    <label for="InputName" class="form-label">Nombre Completo</label>
                    <ul>
                    <input type="text" class="form-control nameInput" name="completeName" id="InputName"  placeholder="Ingresa tu nombre completo">
                    </ul>
                </div>
              
                <div>
                    <label for="InputEmail" class="form-label">Correo Electronico</label>
                    <ul>
                    <input type="email" class="form-control emailInput" name="email" id="InputEmail"  placeholder="Ingresa tu correo electronico">
                    </ul>
                </div>

                <div>
                    <label for="InputPassword" class="form-label" >Password</label>
                    <ul>
                    <input type="password" class="form-control" name="password" id="InputPassword"  placeholder="Ingresa tu contraseña" >
                    </ul>
                </div> 
                <div>
                    <label for="ConfirmInputPassword" class="form-label" >Confirmar Password</label>
                    <ul>
                    <input type="password" class="form-control" name="confirmPassword" id="ConfirmInputPassword" placeholder="Confirma tu contraseña">
                    </ul>
                </div> 
                <div>
                    <label for="InputTel" class="form-label"> Telefono</label>
                    <ul>
                    <input type="text" class="form-control " name="telephone" id="InputTel"  placeholder="Ingresa tu telefono">
                    </ul>
                </div>
              
                <hr>
                <div>
                    <label for="userPhoto" class="form-label">Foto de Perfil:</label><br>
                    <input type="file" name="userPhoto" id="userPhoto" >
                </div>
                <hr>
                 <!--<div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="Check1">
                    <label class="form-check-label" for="Check1">Check me out</label>
                </div> -->
                <a  href="Index.php"> regresar
                            <span class="visually-hidden">(current)</span>
                        </a>

                    
                <input type="submit" name="submit" id="registerbutton" value="Registrar" style= "border-radius: 15px;  color: #fff;
    background-color: #eb2651;;
    border-color: #b42424;  padding: 5px;
    position: relative;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    text-decoration: none;
    text-align: justify;">

                <br>

            </form>
       
  
    </div>
</div>


<?php include('./footer.php')?>