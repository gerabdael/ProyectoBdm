<?php include('./header.php')?>   
<div class="container"> 
    <div class="card fa fa-align-center border-primary mb-3"  style="margin-top:10rem;">
        <h3 class="card-header">Registrarse</h3>
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
                <a class="btn btn-primary" href="Index.php"> Regresar
                            <span class="visually-hidden">(current)</span>
                        </a>

                <input type="submit" name="submit" class="btn btn-primary" id="registerbutton" value="Registrar">

            </form>
        </div>
    </div>
    </div>

<?php include('./footer.php')?>