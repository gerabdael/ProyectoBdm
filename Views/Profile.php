<?php 
    session_start();
    $userID= $_SESSION["user_ID"];
    include('./HeaderFinal.php')?>  

<script>
$(document).ready(function(){

leer();

});

function leer(){
$("#VerNombre").val(localStorage.getItem("nombre"));
}

</script>

    <div class="container">
        <div class="main">
            <!-- 
                    Parte de la izquierda
                -->
            <div class="topbar">
                <div class="row justify-content-center">
                    <a class="card-body" href="Index.php"> Home
                    <span class="visually-hidden">(current)</span>
                    </a>
                </div>
            </div>

            <div class="row">
                <!-- 
                    Parte de la izquierda
                -->
                <div class="col-md-4 mt-1">
                    <div class="card text-center sidebar">
                        <div class="card-body">
                            <img id="fotoUsuario" width="50%" > 
    
                            <div class="mt-3">
                                <h1 class="m-3 pt-3">Perfil</h1>
                                <?php
                                    if(isset($_SESSION["user_photo"] )){
                                        $image=$_SESSION["user_photo"];
                                    }
                                ?>
                                <img width="200" height="300" src="<?php echo $image;?>">
                                <hr>

                                <form action="../Model/updatePhoto-inc.php" class="fa fa-align-center" method="POST" enctype="multipart/form-data">
                                    <input type="file" value="Cambiar Foto" name="rPhoto" >
                                    <br>
                                    <input class="btn btn-outline-info btn-lg" type="submit" name="submit" value="Cambiar Foto">
                                </form>

                                <hr>
                                <a  class="btn btn-outline-info btn-lg" type="button" href="VerMisPreguntas.html">Ver tus noticias</a>
                                <hr>  
                                <a  class="btn btn-outline-info btn-lg" type="button" href="AproveNewsUser.php">Noticias no publicadas</a>
                                <hr>  
                                <a  class="btn btn-outline-info btn-lg" type="button" href="VerLikes.php">Ver Favoritos
                                <span class="visually-hidden">(current)</span>
                                </a>
                                <hr>
                                <form action="../Classes/endSession.classes.php" method="post">  
                                <input id="CerrarSesionBut" class="btn btn-outline-warning" type="submit" name="submit" value="Cerrar Sesion"/>
                                </form>
                                <hr> 
                                <button id="BorrarUser" class="btn btn-outline-danger" type="button">Suspender Cuenta</button>
                             
                          
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 
                    Parte de la Derecha
                -->
                <div class="col-md-8 mt-1">
                    <div class="card mb-3 content">
                        <h1 class="m-3 pt-3">Datos </h1>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 ">
                                    <h5>Nombre Completo</h5>
                                </div>
                                <div class="col-md-9 ">
                                <input type="text" id="VerNombre" name="name" style="color:red;" value="<?php echo $userID;?>" > </input><br>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3 ">
                                    <h5>Email</h5>
                                </div>
                                <div class="col-md-9">
                                    <h3>  <?php echo $_SESSION["user_email"];?> </h3>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3 ">
                                    <h5>Username</h5>
                                </div>
                                <div class="col-md-9">
                                    <h3> <?php echo $_SESSION["user_nickname"];?> </h3>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3 ">
                                    <h5>Contraseña</h5>
                                </div>
                                <div class="col-md-9 ">
                                    <h3> <?php echo$_SESSION["user_password"];?></h3>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
    
                    <form class="form-group" id="EditarInfo" action="../Model/updateUser_inc.php" method="post" enctype="multipart/form-data">
                        <div class="card mb-3 content">
                            <h1 class="m-3">Modificar Usuario</h1>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 ">
                                        <h5>Username</h5>
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        <input type="text" name="user" class="form-control" placeholder="Nuevo username" value="<?php echo $_SESSION["user_nickname"];?>">
                                    </div>
                                    <br>
                                    <hr>
                                    <div class="col-md-3 ">
                                        <h5>Contraseña</h5>
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        <input type="password" name="password" class="form-control" placeholder="Nueva contraseña" value="<?php echo$_SESSION["user_password"];?>">
                                    </div>
                                    <hr>
                                    <div class="col-md-3 ">
                                        <h5>Email</h5>
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        <input type="Email" name="email" class="form-control" placeholder="Nuevo email" value="<?php echo $_SESSION["user_email"];?> " >
                                    </div>
                                    <hr>
                                    <div class="col-md-3 ">
                                        <h5>Nombre</h5>
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        <input type="text" name="completeName" class="form-control" placeholder=" Nombre" value="<?php echo $_SESSION["user_name"];?>">
                                    </div>
                                    <hr>
                                    <div class="col-md-3 ">
                                        <h5>Telefono</h5>
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        <input type="text" name="telephone" class="form-control" placeholder="Telefono" value="<?php echo $_SESSION["user_phone"];?>" >
                                    </div>
                                    <!-- <hr>
                                    <div class="col-md-3 ">
                                        <h5>Foto</h5>
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        <input type="file" name="foto" class="form-control" value="" >
                                    </div> -->
                                    <p> </div> </p>
                                 
                                    <input class="btn btn-outline-info btn-lg" type="submit" name="submit" value="Editar / Modificar">
                                    <div class="col-md-3">
    
    
    
                                    </div>
                                </div>
                            </div>
                    </form>
    
                </div>


            </div>
        </div>
    </div>