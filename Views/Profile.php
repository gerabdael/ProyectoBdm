<?php include('./header2.php')?>  


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
    
                                <hr>  
                                <a  class="btn btn-outline-info btn-lg" type="button" href="VerMisPreguntas.html">Ver tus noticias</a>
                                <hr>  
                                <a  class="btn btn-outline-info btn-lg" type="button" href="VerMisPreguntas.html">Noticias no publicadas</a>
                                <hr>  
                                <a  class="btn btn-outline-info btn-lg" type="button" href="VerLikes.php">Ver Favoritos
                                <span class="visually-hidden">(current)</span>
                                </a>
                                <hr>  
                                <button id="CerrarSesionBut" class="btn btn-outline-warning" type="button">Cerrar Sesion</button>
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
                        <h1 class="m-3 pt-3">Datos</h1>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 ">
                                    <h5>Nombre Completo</h5>
                                </div>
                                <div class="col-md-9 ">
                                        <h3> Test </h3>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3 ">
                                    <h5>Email</h5>
                                </div>
                                <div class="col-md-9">
                                    <h3> Test </h3>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3 ">
                                    <h5>Username</h5>
                                </div>
                                <div class="col-md-9">
                                    <h3> Test </h3>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3 ">
                                    <h5>Contraseña</h5>
                                </div>
                                <div class="col-md-9 ">
                                    <h3> Test </h3>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3 ">
                                    <h5>Fecha de nacimiento</h5>
                                </div>
                                <div class="col-md-9 ">
                                    <h3> Test </h3>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <form class="form-group" id="EditarInfo" enctype="multipart/form-data">
                        <div class="card mb-3 content">
                            <h1 class="m-3">Modificar Usuario</h1>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 ">
                                        <h5>Username</h5>
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        <input type="text" name="usuario" class="form-control" placeholder="Nuevo username" >
                                    </div>
                                    <br>
                                    <hr>
                                    <div class="col-md-3 ">
                                        <h5>Contraseña</h5>
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        <input type="password" name="password" class="form-control" placeholder="Nueva contraseña" >
                                    </div>
                                    <hr>
                                    <div class="col-md-3 ">
                                        <h5>Email</h5>
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        <input type="Email" name="Email" class="form-control" placeholder="Nuevo email" >
                                    </div>
                                    <hr>
                                    <div class="col-md-3 ">
                                        <h5>Nombres(s)</h5>
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        <input type="Nombre" name="Nombre" class="form-control" placeholder=" Nombre(s)" >
                                    </div>
                                    <hr>
                                    <div class="col-md-3 ">
                                        <h5>Apellido(s)</h5>
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        <input type="Apellido" name="Apellido" class="form-control" placeholder="Apellido(s)" >
                                    </div>
    
                                    <div class="col-md-3 ">
                                        <h5>Fecha de Nacimiento</h5>
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        <input type="date" id="start" name="fnac" min="1960-01-01" max="2021-12-31">
                                    </div>
    
                                    <div class="col-md-3 ">
                                        <h5>Foto</h5>
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        <input type="file" name="foto" class="form-control"  >
                                    </div>
                                    <p> </div> </p>
                                 
                                    <button class="btn btn-outline-info btn-lg" type="submit">Editar / Modificar</button>      
    
    
    
                                    <div class="col-md-3">
    
    
    
                                    </div>
                                </div>
                            </div>
                    </form>
    
                </div>


            </div>
        </div>
    </div>